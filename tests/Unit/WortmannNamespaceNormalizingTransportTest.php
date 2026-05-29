<?php

namespace Naugrim\WortmannSoapApi\Tests\Unit;

use Naugrim\WortmannSoapApi\Soap\WortmannNamespaceNormalizingTransport;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Soap\Engine\HttpBinding\SoapRequest;
use Soap\Engine\HttpBinding\SoapResponse;
use Soap\Engine\Transport;

#[CoversClass(WortmannNamespaceNormalizingTransport::class)]
final class WortmannNamespaceNormalizingTransportTest extends TestCase
{
    #[Test]
    public function itDenormalizesTheSoapActionBeforeSendingTheRequest(): void
    {
        $capturedRequest = null;
        $transport = new WortmannNamespaceNormalizingTransport(
            new class ($capturedRequest) implements Transport {
                public function __construct(
                    private ?SoapRequest &$capturedRequest,
                ) {
                }

                public function request(SoapRequest $request): SoapResponse
                {
                    $this->capturedRequest = $request;

                    return new SoapResponse('<response xmlns="Wortmann.CustomerWebService"/>');
                }
            },
        );

        $transport->request(new SoapRequest(
            '<request xmlns="urn:Wortmann.CustomerWebService"/>',
            'https://example.test/service.asmx',
            'urn:Wortmann.CustomerWebService/GetServiceInfoBySerialNo',
            SOAP_1_1,
            false,
        ));

        self::assertInstanceOf(SoapRequest::class, $capturedRequest);
        self::assertSame('<request xmlns="Wortmann.CustomerWebService"/>', $capturedRequest->getRequest());
        self::assertSame('Wortmann.CustomerWebService/GetServiceInfoBySerialNo', $capturedRequest->getAction());
    }
}
