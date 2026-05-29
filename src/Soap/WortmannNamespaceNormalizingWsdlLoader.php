<?php

namespace Naugrim\WortmannSoapApi\Soap;

use Soap\Wsdl\Loader\WsdlLoader;

final class WortmannNamespaceNormalizingWsdlLoader implements WsdlLoader
{
    public function __construct(
        private readonly WsdlLoader $inner,
    ) {
    }

    /**
     * Loads the Wortmann WSDL and normalizes its namespace before php-soap parses it.
     *
     * This keeps code generation and runtime metadata on the valid internal
     * "urn:Wortmann.CustomerWebService" namespace and prevents veewee/xml from
     * failing on Wortmann's published non-absolute namespace.
     */
    public function __invoke(string $location): string
    {
        return WortmannNamespaceNormalizer::normalize(($this->inner)($location));
    }
}
