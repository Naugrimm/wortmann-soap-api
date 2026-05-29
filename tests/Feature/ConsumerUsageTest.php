<?php

namespace Naugrim\WortmannSoapApi\Tests\Feature;

use DateTimeImmutable;
use DateTimeInterface;
use Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse;
use Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse;
use Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoBySerialNo;
use Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoBySerialNoResponse;
use Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoByWarrantyEndingDate;
use Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoByWarrantyEndingDateResponse;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductId;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIdResponse;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIds;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIdsResponse;
use Naugrim\WortmannSoapApi\Client\Type\ProductInfoPackage;
use Naugrim\WortmannSoapApi\Client\Type\ServiceInfo;
use Naugrim\WortmannSoapApi\Contracts\WortmannSoapApi;
use Naugrim\WortmannSoapApi\Tests\Fixtures\FixtureBackedWortmannApi;
use PHPUnit\Framework\Attributes\Test;

final class ConsumerUsageTest extends TestCase
{
    #[Test]
    public function aConsumerCanRequestStockAndPriceInformationForOneProduct(): void
    {
        $api = $this->apiBackedBy('soap/get-stock-and-price-information-by-product-id/success.xml');

        $result = $this->request($api, GetStockAndPriceInformationByProductId::class, 'PRODUCT-1');

        self::assertInstanceOf(GetStockAndPriceInformationByProductIdResponse::class, $result);
        $response = $result->getGetStockAndPriceInformationByProductIdResult();
        self::assertInstanceOf(CustomerWebServiceProductInfoResponse::class, $response);
        self::assertTrue($response->getSuccess());

        self::assertProductInfoResponseContainsValidProducts($response, 1);
    }

    #[Test]
    public function aConsumerCanRequestStockAndPriceInformationForMultipleProducts(): void
    {
        $api = $this->apiBackedBy('soap/get-stock-and-price-information-by-product-ids/multiple-products.xml');

        $result = $this->request($api, GetStockAndPriceInformationByProductIds::class, ['PRODUCT-1', 'PRODUCT-2']);

        self::assertInstanceOf(GetStockAndPriceInformationByProductIdsResponse::class, $result);
        $response = $result->getGetStockAndPriceInformationByProductIdsResult();
        self::assertInstanceOf(CustomerWebServiceProductInfoResponse::class, $response);
        self::assertTrue($response->getSuccess());

        self::assertProductInfoResponseContainsValidProducts($response, 2);
    }

    #[Test]
    public function aConsumerCanHandleAProductLookupErrorResponse(): void
    {
        $api = $this->apiBackedBy('soap/get-stock-and-price-information-by-product-id/product-not-found.xml');

        $result = $this->request($api, GetStockAndPriceInformationByProductId::class, 'UNKNOWN-PRODUCT');

        self::assertInstanceOf(GetStockAndPriceInformationByProductIdResponse::class, $result);
        $response = $result->getGetStockAndPriceInformationByProductIdResult();
        self::assertInstanceOf(CustomerWebServiceProductInfoResponse::class, $response);
        self::assertFalse($response->getSuccess());
        self::assertNotSame('', $response->getErrorMesssage());
        self::assertNull($response->getProductInfoPackages());
    }

    #[Test]
    public function aConsumerCanRequestServiceInfoBySerialNumber(): void
    {
        $api = $this->apiBackedBy('soap/get-service-info-by-serial-no/success.xml');

        $result = $this->request($api, GetServiceInfoBySerialNo::class, 'SERIAL-1');

        self::assertInstanceOf(GetServiceInfoBySerialNoResponse::class, $result);
        $response = $result->getGetServiceInfoBySerialNoResult();
        self::assertInstanceOf(CustomerWebServiceServiceInfoResponse::class, $response);
        self::assertTrue($response->getSuccess());

        self::assertServiceInfoResponseContainsValidServiceInfos($response, 1);
    }

    #[Test]
    public function aConsumerCanHandleAServiceInfoLookupErrorResponse(): void
    {
        $api = $this->apiBackedBy('soap/get-service-info-by-serial-no/not-found.xml');

        $result = $this->request($api, GetServiceInfoBySerialNo::class, 'UNKNOWN-SERIAL');

        self::assertInstanceOf(GetServiceInfoBySerialNoResponse::class, $result);
        $response = $result->getGetServiceInfoBySerialNoResult();
        self::assertInstanceOf(CustomerWebServiceServiceInfoResponse::class, $response);
        self::assertFalse($response->getSuccess());
        self::assertNotSame('', $response->getErrorMesssage());
        self::assertNull($response->getServiceInfos()?->getServiceInfo());
    }

    #[Test]
    public function aConsumerCanRequestServiceInfoByWarrantyEndingDate(): void
    {
        $api = $this->apiBackedBy('soap/get-service-info-by-warranty-ending-date/success.xml');

        $result = $this->request($api, GetServiceInfoByWarrantyEndingDate::class, new DateTimeImmutable('2026-05-28'));

        self::assertInstanceOf(GetServiceInfoByWarrantyEndingDateResponse::class, $result);
        $response = $result->getGetServiceInfoByWarrantyEndingDateResult();
        self::assertInstanceOf(CustomerWebServiceServiceInfoResponse::class, $response);
        self::assertTrue($response->getSuccess());

        self::assertServiceInfoResponseContainsValidServiceInfos($response, 3);
    }

    private static function assertProductInfoResponseContainsValidProducts(
        CustomerWebServiceProductInfoResponse $response,
        int $expectedProductCount,
    ): void {
        self::assertNull($response->getErrorMesssage());

        $packages = $response->getProductInfoPackages()?->getProductInfoPackage();
        self::assertIsArray($packages);
        self::assertCount($expectedProductCount, $packages);

        foreach ($packages as $package) {
            self::assertInstanceOf(ProductInfoPackage::class, $package);
            self::assertNonEmptyNullableString($package->getProductId());
            self::assertNonEmptyNullableString($package->getCurrency());
            self::assertNonEmptyNullableString($package->getVatCountry());
            self::assertGreaterThanOrEqual(0, $package->getPriceB2B());
            self::assertGreaterThanOrEqual(0, $package->getPriceB2BDiscounted());
            self::assertGreaterThanOrEqual(0, $package->getPriceB2BDiscountPercent());
            self::assertGreaterThanOrEqual(0, $package->getPriceB2BDiscountAmount());
            self::assertGreaterThanOrEqual(0, $package->getPriceB2CinclVAT());
            self::assertGreaterThanOrEqual(0, $package->getPriceB2CexclVAT());
            self::assertGreaterThanOrEqual(0, $package->getVatRate());
            self::assertGreaterThanOrEqual(0, $package->getStock());
            self::assertGreaterThanOrEqual(0, $package->getStockNextDeliveryAccessVolume());

            if ($package->getStockNextDelivery() !== null) {
                self::assertInstanceOf(DateTimeInterface::class, $package->getStockNextDelivery());
            }
        }
    }

    private static function assertServiceInfoResponseContainsValidServiceInfos(
        CustomerWebServiceServiceInfoResponse $response,
        int $expectedServiceInfoCount,
    ): void {
        self::assertNull($response->getErrorMesssage());

        $serviceInfos = $response->getServiceInfos()?->getServiceInfo();
        self::assertIsArray($serviceInfos);
        self::assertCount($expectedServiceInfoCount, $serviceInfos);

        foreach ($serviceInfos as $serviceInfo) {
            self::assertInstanceOf(ServiceInfo::class, $serviceInfo);
            self::assertNonEmptyNullableString($serviceInfo->getServiceItemNo());
            self::assertNonEmptyNullableString($serviceInfo->getItemNo());
            self::assertNonEmptyNullableString($serviceInfo->getCustomerNo());
            self::assertNonEmptyNullableString($serviceInfo->getSerialNo());
            self::assertNonEmptyNullableString($serviceInfo->getInvoiceNo());
            self::assertNonEmptyNullableString($serviceInfo->getShipmentNo());
            self::assertNullableString($serviceInfo->getWarrantyCode());
            self::assertNonEmptyNullableString($serviceInfo->getWarrantyStartingDate());
            self::assertNonEmptyNullableString($serviceInfo->getWarrantyEndingDate());

            if ($serviceInfo->getInvoiceUnitPrice() !== null) {
                self::assertGreaterThanOrEqual(0, $serviceInfo->getInvoiceUnitPrice());
            }
        }
    }

    private static function assertNonEmptyNullableString(?string $value): void
    {
        self::assertNotNull($value);
        self::assertNotSame('', $value);
    }

    private static function assertNullableString(?string $value): void
    {
        if ($value !== null) {
            self::assertIsString($value);
        }
    }

    private function apiBackedBy(string $fixture): WortmannSoapApi
    {
        $this->app->instance(WortmannSoapApi::class, FixtureBackedWortmannApi::forFixture($fixture));

        return $this->app->make(WortmannSoapApi::class);
    }

    private function request(WortmannSoapApi $api, string $requestClass, mixed ...$params): mixed
    {
        return FixtureBackedWortmannApi::withoutNonAbsoluteNamespaceNotice(
            static fn (): mixed => $api->request($requestClass, ...$params),
        );
    }
}
