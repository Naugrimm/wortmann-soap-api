<?php

namespace Naugrim\WortmannSoapApi\Tests\Unit;

use DOMDocument;
use DOMXPath;
use Naugrim\WortmannSoapApi\Tests\Fixtures\FixtureLoader;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(FixtureLoader::class)]
final class SoapFixtureContractTest extends TestCase
{
    /**
     * @return iterable<string, array{string, string}>
     */
    public static function fixtureResponseCases(): iterable
    {
        yield 'single product success' => [
            'soap/get-stock-and-price-information-by-product-id/success.xml',
            'GetStockAndPriceInformationByProductIdResponse',
        ];

        yield 'single product not found' => [
            'soap/get-stock-and-price-information-by-product-id/product-not-found.xml',
            'GetStockAndPriceInformationByProductIdResponse',
        ];

        yield 'multiple products success' => [
            'soap/get-stock-and-price-information-by-product-ids/multiple-products.xml',
            'GetStockAndPriceInformationByProductIdsResponse',
        ];

        yield 'service info by serial success' => [
            'soap/get-service-info-by-serial-no/success.xml',
            'GetServiceInfoBySerialNoResponse',
        ];

        yield 'service info by serial not found' => [
            'soap/get-service-info-by-serial-no/not-found.xml',
            'GetServiceInfoBySerialNoResponse',
        ];

        yield 'service info by warranty ending date success' => [
            'soap/get-service-info-by-warranty-ending-date/success.xml',
            'GetServiceInfoByWarrantyEndingDateResponse',
        ];
    }

    #[Test]
    #[DataProvider('fixtureResponseCases')]
    public function fixturesContainTheExpectedSoapBodyResponse(string $fixture, string $responseElement): void
    {
        $xpath = self::xpathFor($fixture);

        self::assertSame(
            1,
            self::nodeCount($xpath, '/*[local-name()="Envelope"]/*[local-name()="Body"]/*[local-name()="' . $responseElement . '"]'),
        );
    }

    #[Test]
    public function productSuccessFixtureContainsOneProductPackage(): void
    {
        $xpath = self::xpathFor('soap/get-stock-and-price-information-by-product-id/success.xml');

        self::assertSame('true', self::text($xpath, '//*[local-name()="Success"][1]'));
        self::assertSame(1, self::nodeCount($xpath, '//*[local-name()="ProductInfoPackage"]'));
        self::assertSame(1, self::nodeCount($xpath, '//*[local-name()="ProductInfoPackage"]/*[local-name()="ProductId"]'));
        self::assertSame(1, self::nodeCount($xpath, '//*[local-name()="ProductInfoPackage"]/*[local-name()="Stock"]'));
    }

    #[Test]
    public function productNotFoundFixturePreservesTheUpstreamErrorMessageFieldName(): void
    {
        $xpath = self::xpathFor('soap/get-stock-and-price-information-by-product-id/product-not-found.xml');

        self::assertSame('false', self::text($xpath, '//*[local-name()="Success"][1]'));
        self::assertSame(1, self::nodeCount($xpath, '//*[local-name()="ErrorMesssage"]'));
        self::assertSame(0, self::nodeCount($xpath, '//*[local-name()="ProductInfoPackage"]'));
    }

    #[Test]
    public function multipleProductsFixtureContainsTwoProductPackages(): void
    {
        $xpath = self::xpathFor('soap/get-stock-and-price-information-by-product-ids/multiple-products.xml');

        self::assertSame('true', self::text($xpath, '//*[local-name()="Success"][1]'));
        self::assertSame(2, self::nodeCount($xpath, '//*[local-name()="ProductInfoPackage"]'));
    }

    #[Test]
    public function serialNumberSuccessFixtureContainsOneServiceInfoRecord(): void
    {
        $xpath = self::xpathFor('soap/get-service-info-by-serial-no/success.xml');

        self::assertSame('true', self::text($xpath, '//*[local-name()="Success"][1]'));
        self::assertSame(1, self::nodeCount($xpath, '//*[local-name()="ServiceInfo"]'));
        self::assertSame(1, self::nodeCount($xpath, '//*[local-name()="ServiceInfo"]/*[local-name()="SerialNo"]'));
    }

    #[Test]
    public function serialNumberNotFoundFixturePreservesTheUpstreamErrorMessageFieldName(): void
    {
        $xpath = self::xpathFor('soap/get-service-info-by-serial-no/not-found.xml');

        self::assertSame('false', self::text($xpath, '//*[local-name()="Success"][1]'));
        self::assertSame(1, self::nodeCount($xpath, '//*[local-name()="ErrorMesssage"]'));
        self::assertSame(0, self::nodeCount($xpath, '//*[local-name()="ServiceInfo"]'));
    }

    #[Test]
    public function warrantyEndingDateFixtureContainsThreeServiceInfoRecords(): void
    {
        $xpath = self::xpathFor('soap/get-service-info-by-warranty-ending-date/success.xml');

        self::assertSame('true', self::text($xpath, '//*[local-name()="Success"][1]'));
        self::assertSame(3, self::nodeCount($xpath, '//*[local-name()="ServiceInfo"]'));
    }

    private static function xpathFor(string $fixture): DOMXPath
    {
        return new DOMXPath(FixtureLoader::xmlDocument($fixture));
    }

    private static function text(DOMXPath $xpath, string $query): string
    {
        return (string) $xpath->evaluate('string(' . $query . ')');
    }

    private static function nodeCount(DOMXPath $xpath, string $query): int
    {
        return (int) $xpath->evaluate('count(' . $query . ')');
    }
}
