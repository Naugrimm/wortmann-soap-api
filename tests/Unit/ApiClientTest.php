<?php

namespace Naugrim\WortmannSoapApi\Tests\Unit;

use Naugrim\WortmannSoapApi\Client\ApiClient;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductId;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIdResponse;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(ApiClient::class)]
final class ApiClientTest extends TestCase
{
    #[Test]
    public function itDispatchesGeneratedClientCallsToTheExpectedSoapOperation(): void
    {
        $response = new GetStockAndPriceInformationByProductIdResponse();
        $caller = new FakeCaller($response);
        $client = new ApiClient($caller);
        $request = new GetStockAndPriceInformationByProductId('user', 'password', 'PRODUCT-1');

        $result = $client->getStockAndPriceInformationByProductId($request);

        self::assertSame($response, $result);
        self::assertCount(1, $caller->calls);
        self::assertSame('GetStockAndPriceInformationByProductId', $caller->calls[0]['method']);
        self::assertSame($request, $caller->calls[0]['request']);
    }
}
