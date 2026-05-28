<?php

namespace Naugrim\WortmannSoapApi\Tests\Unit;

use Illuminate\Config\Repository;
use Illuminate\Container\Container;
use Illuminate\Support\Facades\Config;
use Naugrim\WortmannSoapApi\Bridge\Api;
use Naugrim\WortmannSoapApi\Client\ApiClient;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductId;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIdResponse;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(Api::class)]
final class ApiTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $container = new Container();
        $container->instance('config', new Repository([
            'wortmann-soap-api' => [
                'username' => 'fixture-user',
                'password' => 'fixture-password',
            ],
        ]));

        Config::setFacadeApplication($container);
    }

    protected function tearDown(): void
    {
        Config::clearResolvedInstances();
        Config::setFacadeApplication(null);

        parent::tearDown();
    }

    #[Test]
    public function itCreatesARequestAndDispatchesItThroughTheInjectedClient(): void
    {
        $response = new GetStockAndPriceInformationByProductIdResponse();
        $caller = new FakeCaller($response);
        $client = new ApiClient($caller);
        $api = new Api(['wsdl' => 'https://example.test/service.wsdl'], $client);

        $result = $api->request(GetStockAndPriceInformationByProductId::class, 'PRODUCT-1');

        self::assertSame($response, $result);
        self::assertCount(1, $caller->calls);
        self::assertSame('GetStockAndPriceInformationByProductId', $caller->calls[0]['method']);
        self::assertInstanceOf(GetStockAndPriceInformationByProductId::class, $caller->calls[0]['request']);
        self::assertSame('fixture-user', $caller->calls[0]['request']->getUsername());
        self::assertSame('fixture-password', $caller->calls[0]['request']->getPasswordHash());
        self::assertSame('PRODUCT-1', $caller->calls[0]['request']->getProductId());
    }
}
