<?php

use Naugrim\WortmannSoapApi\Soap\WortmannNamespaceNormalizingWsdlLoader;
use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Config\ClassMapConfig;
use Phpro\SoapClient\CodeGenerator\Config\ClientConfig;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Config\Destination;
use Phpro\SoapClient\CodeGenerator\Config\TypeNamespaceMap;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Soap\Wsdl\Loader\FlatteningLoader;
use Soap\Wsdl\Loader\StreamWrapperLoader;

return Config::create()
    ->setEngine($engine = DefaultEngineFactory::create(
        EngineOptions::defaults('https://www.wortmann.de/api/CustomerWebService.asmx?WSDL')
            // The Wortmann WSDL publishes the non-absolute namespace
            // "Wortmann.CustomerWebService". Normalize it during generation so
            // phpro/soap-client v4/veewee/xml can parse it and generated classmaps
            // target the internal "urn:Wortmann.CustomerWebService" namespace.
            ->withWsdlLoader(new WortmannNamespaceNormalizingWsdlLoader(
                new FlatteningLoader(new StreamWrapperLoader())
            ))
    ))
    ->setTypeNamespaceMap(
        TypeNamespaceMap::create(new Destination('src/Client/Type', 'Naugrim\WortmannSoapApi\Client\Type'))
    )
    ->setClient(new ClientConfig('ApiClient', new Destination('src/Client', 'Naugrim\WortmannSoapApi\Client')))
    ->setClassMap(new ClassMapConfig('ApiClassmap', new Destination('src/Client', 'Naugrim\WortmannSoapApi\Client')))
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler(
        new Assembler\ImmutableSetterAssemblerOptions()
    )))
    ->addRule(
        new Rules\IsRequestRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler(new Assembler\ConstructorAssemblerOptions())),
            ])
        )
    )
    ->addRule(
        new Rules\IsResultRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ])
        )
    )
    ->addRule(
        new Rules\IsExtendingTypeRule(
            $engine->getMetadata(),
            new Rules\AssembleRule(new Assembler\ExtendingTypeAssembler())
        )
    )
    ->addRule(
        new Rules\IsAbstractTypeRule(
            $engine->getMetadata(),
            new Rules\AssembleRule(new Assembler\AbstractClassAssembler())
        )
    )
;
