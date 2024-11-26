<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;


return Config::create()
	->setEngine(DefaultEngineFactory::create(
		ExtSoapOptions::defaults('https://www.wortmann.de/api/CustomerWebService.asmx?WSDL', [])
			->disableWsdlCache()
	))
	->setTypeDestination('src/Client/Type')
    ->setTypeNamespace('Naugrim\WortmannSoapApi\Client\Type')
    ->setClientDestination('src/Client')
    ->setClientName('ApiClient')
    ->setClientNamespace('Naugrim\WortmannSoapApi\Client')
    ->setClassMapDestination('src/Client')
    ->setClassMapName('ApiClassmap')
    ->setClassMapNamespace('Naugrim\WortmannSoapApi\Client')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler()))
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler(new Assembler\ConstructorAssemblerOptions())),
            ]),
            '/^Get.*(?!Response)$/i'
        )
    )
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ]),
            '/^.*Response$/i'
        )
    )
;
