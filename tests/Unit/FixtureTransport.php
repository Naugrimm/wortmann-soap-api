<?php

namespace Naugrim\WortmannSoapApi\Tests\Unit;

use Naugrim\WortmannSoapApi\Tests\Fixtures\FixtureLoader;
use Soap\Engine\HttpBinding\SoapRequest;
use Soap\Engine\HttpBinding\SoapResponse;
use Soap\Engine\Transport;

final class FixtureTransport implements Transport
{
    public function __construct(
        private readonly string $fixture,
    ) {
    }

    public function request(SoapRequest $request): SoapResponse
    {
        return new SoapResponse(FixtureLoader::xmlString($this->fixture));
    }
}
