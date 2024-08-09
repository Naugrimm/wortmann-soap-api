<?php

namespace Naugrim\WortmannSoapApi\Tests\Feature\Bridge;

use Mockery;
use Naugrim\WortmannSoapApi\Bridge\Api;
use Naugrim\WortmannSoapApi\Client\ApiClient;
use Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductId;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIdResponse;
use Naugrim\WortmannSoapApi\Tests\Feature\TestCase;
use Phpro\SoapClient\Type\ResultInterface;

final class ApiTest extends TestCase{

	public function testRequestReturningResultInterface(): void{
		config()->set('wortmann-soap-api.username', 'test');
		config()->set('wortmann-soap-api.password', 'test');

		$api = new Api(['wsdl' => config('wortmann-soap-api.wsdl')]);

		$productInfoResponseMock = Mockery::mock(CustomerWebServiceProductInfoResponse::class);
		$productInfoResponseMock->shouldReceive('getSuccess')->andReturnTrue(); // @phpstan-ignore-line

		$productIdResponseMock = Mockery::mock(GetStockAndPriceInformationByProductIdResponse::class);
		$productIdResponseMock->shouldReceive('getGetStockAndPriceInformationByProductIdResult')->andReturn($productInfoResponseMock); // @phpstan-ignore-line

		$clientMock = Mockery::mock(ApiClient::class);
		$clientMock->shouldReceive('getStockAndPriceInformationByProductId')->andReturn($productIdResponseMock); // @phpstan-ignore-line

		$apiClientProperty = new \ReflectionProperty(Api::class, 'client');
		$apiClientProperty->setValue($api, $clientMock);

		try{
			$returnValue = $api->request(GetStockAndPriceInformationByProductId::class, '');
		}catch(\Throwable){
			$this->fail();
		}
		$this->assertNotNull($returnValue);
		$this->assertInstanceOf(ResultInterface::class, $returnValue);
		$this->assertTrue($returnValue->getGetStockAndPriceInformationByProductIdResult()->getSuccess()); // @phpstan-ignore-line
	}
}