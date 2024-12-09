<?php

namespace Naugrim\WortmannSoapApi\Tests\Feature\Bridge;

use Mockery;
use Naugrim\WortmannSoapApi\Bridge\Api;
use Naugrim\WortmannSoapApi\Client\ApiClient;
use Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductId;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIdResponse;
use Naugrim\WortmannSoapApi\Client\Type\ProductInfoPackage;
use Naugrim\WortmannSoapApi\Tests\Feature\TestCase;
use Phpro\SoapClient\Type\ResultInterface;
use VCR\VCR;

final class ApiTest extends TestCase{
    public function testCustomerWebServiceProductInfoResponse() {
        $api = new Api(config('wortmann-soap-api'));

        \VCR\VCR::insertCassette('ProductWithoutStockNextDelivery.yml');

        $response = $api->request(GetStockAndPriceInformationByProductId::class, '1481272');

        $this->assertInstanceOf(GetStockAndPriceInformationByProductIdResponse::class, $response);

        /** @var GetStockAndPriceInformationByProductIdResponse $response */
        $productInfo = $response->getGetStockAndPriceInformationByProductIdResult()->getProductInfoPackages()->getProductInfoPackage();
        $this->assertIsArray($productInfo);
        $this->assertInstanceOf(ProductInfoPackage::class, $productInfo[0]);
    }
}
