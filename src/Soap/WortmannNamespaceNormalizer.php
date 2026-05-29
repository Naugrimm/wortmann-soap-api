<?php

namespace Naugrim\WortmannSoapApi\Soap;

final class WortmannNamespaceNormalizer
{
    private const VENDOR_NAMESPACE = 'Wortmann.CustomerWebService';
    private const INTERNAL_NAMESPACE = 'urn:Wortmann.CustomerWebService';

    /**
     * Converts Wortmann's non-absolute production namespace into an absolute URN.
     *
     * The upstream WSDL and SOAP responses use "Wortmann.CustomerWebService",
     * which libxml reports as a namespace warning. phpro/soap-client v4 parses
     * SOAP XML through veewee/xml, which promotes that warning to an exception.
     * We normalize before parsing so the generated v4 classmap can use a valid
     * internal namespace while the transport still speaks Wortmann's original
     * wire format externally.
     */
    public static function normalize(string $xml): string
    {
        return str_replace(self::VENDOR_NAMESPACE, self::INTERNAL_NAMESPACE, $xml);
    }

    /**
     * Converts the internal absolute URN back to Wortmann's original namespace.
     *
     * Outgoing SOAP requests are generated from the normalized WSDL/classmap, but
     * the production service expects its published non-absolute namespace. The
     * normalizing transport calls this before sending requests over the wire.
     */
    public static function denormalize(string $xml): string
    {
        return str_replace(self::INTERNAL_NAMESPACE, self::VENDOR_NAMESPACE, $xml);
    }
}
