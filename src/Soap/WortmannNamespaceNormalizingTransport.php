<?php

namespace Naugrim\WortmannSoapApi\Soap;

use Soap\Engine\HttpBinding\SoapRequest;
use Soap\Engine\HttpBinding\SoapResponse;
use Soap\Engine\Transport;

final class WortmannNamespaceNormalizingTransport implements Transport
{
    public function __construct(
        private readonly Transport $inner,
    ) {
    }

    /**
     * Bridges between the valid internal namespace and Wortmann's wire format.
     *
     * Requests are denormalized before sending so the production service receives
     * the namespace it publishes. Responses are normalized before php-soap decodes
     * them so veewee/xml does not reject the non-absolute namespace warning.
     */
    public function request(SoapRequest $request): SoapResponse
    {
        $response = $this->inner->request(
            new SoapRequest(
                WortmannNamespaceNormalizer::denormalize($request->getRequest()),
                $request->getLocation(),
                WortmannNamespaceNormalizer::denormalize($request->getAction()),
                $request->getVersion(),
                $request->getOneWay(),
            ),
        );

        return new SoapResponse(WortmannNamespaceNormalizer::normalize($response->getPayload()));
    }
}
