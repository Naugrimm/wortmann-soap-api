<?php

namespace Naugrim\WortmannSoapApi\Client;

use Naugrim\WortmannSoapApi\Client\ApiClient;
use Naugrim\WortmannSoapApi\Client\ApiClassmap;
use Naugrim\WortmannSoapApi\Soap\WortmannNamespaceNormalizingTransport;
use Naugrim\WortmannSoapApi\Soap\WortmannNamespaceNormalizingWsdlLoader;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;
use Soap\Encoding\EncoderRegistry;
use Soap\Psr18Transport\Psr18Transport;
use Soap\Wsdl\Loader\FlatteningLoader;
use Soap\Wsdl\Loader\StreamWrapperLoader;

class ApiClientFactory
{
    /**
     * This factory can be used as a starting point to create your own specialized
     * factory. Feel free to modify.
     *
     * @param non-empty-string $wsdl
     */
    public static function factory(string $wsdl): \Naugrim\WortmannSoapApi\Client\ApiClient
    {
        $engine = DefaultEngineFactory::create(
            EngineOptions::defaults($wsdl)
                // Wortmann's production WSDL/responses use the non-absolute namespace
                // "Wortmann.CustomerWebService". veewee/xml treats that libxml warning as
                // fatal, so we normalize it to an internal URN before parsing and convert
                // outgoing requests back to Wortmann's original namespace in the transport.
                // Keep this in mind when regenerating this factory.
                ->withWsdlLoader(new WortmannNamespaceNormalizingWsdlLoader(
                    new FlatteningLoader(new StreamWrapperLoader())
                ))
                ->withTransport(new WortmannNamespaceNormalizingTransport(
                    Psr18Transport::createWithDefaultClient()
                ))
                ->withEncoderRegistry(
                    EncoderRegistry::default()
                        ->addClassMapCollection(ApiClassmap::types())
                        ->addBackedEnumClassMapCollection(ApiClassmap::enums())
                )
                // If you want to enable WSDL caching:
                // ->withCache() 
                // If you want to use Alternate HTTP settings:
                // ->withWsdlLoader()
                // ->withTransport()
                // If you want specific SOAP setting:
                // ->withWsdlParserContext()
                // ->withWsdlServiceSelectionCriteria()
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new ApiClient($caller);
    }
}
