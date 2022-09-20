<?php

namespace Naugrim\WortmannSoapApi\Client;

use Naugrim\WortmannSoapApi\Client\ApiClassmap;
use Naugrim\WortmannSoapApi\Client\ApiClient;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class ApiClientFactory
{

    public static function factory(string $wsdl) : \Naugrim\WortmannSoapApi\Client\ApiClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(ApiClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new ApiClient($caller);
    }
}
