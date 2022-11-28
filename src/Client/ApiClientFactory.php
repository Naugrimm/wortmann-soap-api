<?php

namespace Naugrim\WortmannSoapApi\Client;

use GuzzleHttp\Client;
use Psr\Http\Client\ClientInterface;
use Soap\Psr18Transport\Psr18Transport;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class ApiClientFactory
{

    public static function factory(string $wsdl, ?ClientInterface $client = null) : ApiClient
    {
        $client ??= new Client();

        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(ApiClassmap::getCollection()),
            Psr18Transport::createForClient($client)
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new ApiClient($caller);
    }
}
