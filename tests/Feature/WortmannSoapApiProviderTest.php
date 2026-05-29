<?php

namespace Naugrim\WortmannSoapApi\Tests\Feature;

use InvalidArgumentException;
use Naugrim\WortmannSoapApi\Bridge\Api;
use Naugrim\WortmannSoapApi\Contracts\WortmannSoapApi;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;

#[CoversClass(\Naugrim\WortmannSoapApi\Provider\WortmannSoapApiProvider::class)]
final class WortmannSoapApiProviderTest extends TestCase
{
    #[Test]
    public function itMergesPackageConfiguration(): void
    {
        self::assertSame('test', config('wortmann-soap-api.username'));
        self::assertSame('test', config('wortmann-soap-api.password'));
        self::assertSame(
            'https://www.wortmann.de/api/CustomerWebService.asmx?WSDL',
            config('wortmann-soap-api.wsdl'),
        );
    }

    #[Test]
    public function itRegistersTheApiContractSingleton(): void
    {
        self::assertTrue($this->app->bound(WortmannSoapApi::class));

        $instance = $this->app->make(WortmannSoapApi::class);

        self::assertInstanceOf(Api::class, $instance);
        self::assertSame($instance, $this->app->make(WortmannSoapApi::class));
    }

    #[Test]
    public function itFailsClearlyWhenTheWsdlConfigIsInvalid(): void
    {
        config()->set('wortmann-soap-api.wsdl', null);
        $this->app->forgetInstance(WortmannSoapApi::class);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Configuration value "wortmann-soap-api.wsdl" must be a non-empty string.');

        $this->app->make(WortmannSoapApi::class);
    }
}
