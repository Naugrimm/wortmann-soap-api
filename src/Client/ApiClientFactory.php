<?php

namespace Naugrim\WortmannSoapApi\Client;

use Naugrim\WortmannSoapApi\Client\ApiClient;
use Naugrim\WortmannSoapApi\Client\ApiClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultSoapEngine;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class ApiClientFactory
{

    public static function factory(string $wsdl) : \Naugrim\WortmannSoapApi\Client\ApiClient
    {
        $engine = DefaultSoapEngine::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(ApiClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new ApiClient($caller);
    }
}
