<?php

namespace Naugrim\WortmannSoapApi\Client;

use Naugrim\WortmannSoapApi\Client\ApiClient;
use Naugrim\WortmannSoapApi\Client\ApiClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class ApiClientFactory
{

    public static function factory(string $wsdl) : \Naugrim\WortmannSoapApi\Client\ApiClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(ApiClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new ApiClient($engine, $eventDispatcher);
    }
}
