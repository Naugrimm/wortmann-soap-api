<?php

namespace Naugrim\WortmannSoapApi\Tests\Fixtures;

use Soap\Engine\HttpBinding\SoapRequest;
use Soap\Engine\HttpBinding\SoapResponse;
use Soap\Engine\Transport;

final class SoapFixtureTransport implements Transport
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
