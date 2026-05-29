<?php

namespace Naugrim\WortmannSoapApi\Tests\Fixtures;

use Naugrim\WortmannSoapApi\Bridge\Api;
use Naugrim\WortmannSoapApi\Client\ApiClassmap;
use Naugrim\WortmannSoapApi\Client\ApiClient;
use Naugrim\WortmannSoapApi\Contracts\WortmannSoapApi;
use Naugrim\WortmannSoapApi\Soap\WortmannNamespaceNormalizer;
use Naugrim\WortmannSoapApi\Soap\WortmannNamespaceNormalizingTransport;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Soap\Encoding\EncoderRegistry;
use Soap\Wsdl\Loader\WsdlLoader;

final class FixtureBackedWortmannApi
{
    public static function forFixture(string $fixture): WortmannSoapApi
    {
        $engine = DefaultEngineFactory::create(
            EngineOptions::defaults('fixture.wsdl')
                ->withWsdlLoader(self::wsdlLoader())
                ->withTransport(new WortmannNamespaceNormalizingTransport(new SoapFixtureTransport($fixture)))
                ->withEncoderRegistry(
                    EncoderRegistry::default()
                        ->addClassMapCollection(ApiClassmap::types())
                        ->addBackedEnumClassMapCollection(ApiClassmap::enums())
                ),
        );

        return new Api(['wsdl' => 'fixture.wsdl'], new ApiClient(new EngineCaller($engine)));
    }

    private static function wsdlLoader(): WsdlLoader
    {
        return new class(self::wsdl()) implements WsdlLoader {
            public function __construct(
                private readonly string $wsdl,
            ) {
            }

            public function __invoke(string $location): string
            {
                // Test fixtures mirror Wortmann's production non-absolute namespace.
                // Normalize the in-memory WSDL like production so v4 metadata and
                // response decoding use the same internal namespace behavior.
                return WortmannNamespaceNormalizer::normalize($this->wsdl);
            }
        };
    }

    /**
     * @template T
     * @param callable(): T $callback
     * @return T
     */
    public static function withoutNonAbsoluteNamespaceNotice(callable $callback): mixed
    {
        set_error_handler(
            static function (int $severity, string $message): bool {
                return $severity === E_NOTICE
                    && str_contains($message, 'xmlns: URI Wortmann.CustomerWebService is not absolute');
            },
        );

        try {
            return $callback();
        } finally {
            restore_error_handler();
        }
    }

    private static function wsdl(): string
    {
        return <<<'WSDL'
<?xml version="1.0" encoding="utf-8"?>
<wsdl:definitions xmlns:s="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/" xmlns:tns="Wortmann.CustomerWebService" targetNamespace="Wortmann.CustomerWebService" xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/">
  <wsdl:types>
    <s:schema elementFormDefault="qualified" targetNamespace="Wortmann.CustomerWebService">
      <s:element name="GetStockAndPriceInformationByProductId"><s:complexType><s:sequence><s:element minOccurs="0" maxOccurs="1" name="Username" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="PasswordHash" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="ProductId" type="s:string"/></s:sequence></s:complexType></s:element>
      <s:element name="GetStockAndPriceInformationByProductIdResponse"><s:complexType><s:sequence><s:element minOccurs="0" maxOccurs="1" name="GetStockAndPriceInformationByProductIdResult" type="tns:CustomerWebServiceProductInfoResponse"/></s:sequence></s:complexType></s:element>
      <s:element name="GetStockAndPriceInformationByProductIds"><s:complexType><s:sequence><s:element minOccurs="0" maxOccurs="1" name="Username" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="PasswordHash" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="ProductIds" type="tns:ArrayOfString"/></s:sequence></s:complexType></s:element>
      <s:element name="GetStockAndPriceInformationByProductIdsResponse"><s:complexType><s:sequence><s:element minOccurs="0" maxOccurs="1" name="GetStockAndPriceInformationByProductIdsResult" type="tns:CustomerWebServiceProductInfoResponse"/></s:sequence></s:complexType></s:element>
      <s:element name="GetServiceInfoBySerialNo"><s:complexType><s:sequence><s:element minOccurs="0" maxOccurs="1" name="Username" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="PasswordHash" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="SerialNo" type="s:string"/></s:sequence></s:complexType></s:element>
      <s:element name="GetServiceInfoBySerialNoResponse"><s:complexType><s:sequence><s:element minOccurs="0" maxOccurs="1" name="GetServiceInfoBySerialNoResult" type="tns:CustomerWebServiceServiceInfoResponse"/></s:sequence></s:complexType></s:element>
      <s:element name="GetServiceInfoByWarrantyEndingDate"><s:complexType><s:sequence><s:element minOccurs="0" maxOccurs="1" name="Username" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="PasswordHash" type="s:string"/><s:element minOccurs="1" maxOccurs="1" name="WarrantyEndingDate" type="s:dateTime"/></s:sequence></s:complexType></s:element>
      <s:element name="GetServiceInfoByWarrantyEndingDateResponse"><s:complexType><s:sequence><s:element minOccurs="0" maxOccurs="1" name="GetServiceInfoByWarrantyEndingDateResult" type="tns:CustomerWebServiceServiceInfoResponse"/></s:sequence></s:complexType></s:element>
      <s:complexType name="ArrayOfString"><s:sequence><s:element minOccurs="0" maxOccurs="unbounded" name="string" nillable="true" type="s:string"/></s:sequence></s:complexType>
      <s:complexType name="CustomerWebServiceProductInfoResponse"><s:sequence><s:element minOccurs="1" maxOccurs="1" name="Success" type="s:boolean"/><s:element minOccurs="0" maxOccurs="1" name="ErrorMesssage" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="ProductInfoPackages" type="tns:ArrayOfProductInfoPackage"/></s:sequence></s:complexType>
      <s:complexType name="ArrayOfProductInfoPackage"><s:sequence><s:element minOccurs="0" maxOccurs="unbounded" name="ProductInfoPackage" nillable="true" type="tns:ProductInfoPackage"/></s:sequence></s:complexType>
      <s:complexType name="ProductInfoPackage"><s:sequence><s:element minOccurs="0" maxOccurs="1" name="ProductId" type="s:string"/><s:element minOccurs="1" maxOccurs="1" name="PriceB2B" type="s:decimal"/><s:element minOccurs="1" maxOccurs="1" name="PriceB2BDiscounted" type="s:decimal"/><s:element minOccurs="1" maxOccurs="1" name="PriceB2BDiscountPercent" type="s:decimal"/><s:element minOccurs="1" maxOccurs="1" name="PriceB2BDiscountAmount" type="s:decimal"/><s:element minOccurs="1" maxOccurs="1" name="PriceB2CinclVAT" type="s:decimal"/><s:element minOccurs="1" maxOccurs="1" name="PriceB2CexclVAT" type="s:decimal"/><s:element minOccurs="0" maxOccurs="1" name="Currency" type="s:string"/><s:element minOccurs="1" maxOccurs="1" name="vatRate" type="s:decimal"/><s:element minOccurs="0" maxOccurs="1" name="vatCountry" type="s:string"/><s:element minOccurs="1" maxOccurs="1" name="Stock" type="s:int"/><s:element minOccurs="1" maxOccurs="1" name="StockNextDelivery" nillable="true" type="s:dateTime"/><s:element minOccurs="1" maxOccurs="1" name="StockNextDeliveryAccessVolume" type="s:int"/></s:sequence></s:complexType>
      <s:complexType name="CustomerWebServiceServiceInfoResponse"><s:sequence><s:element minOccurs="1" maxOccurs="1" name="Success" type="s:boolean"/><s:element minOccurs="0" maxOccurs="1" name="ErrorMesssage" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="ServiceInfos" type="tns:ArrayOfServiceInfo"/></s:sequence></s:complexType>
      <s:complexType name="ArrayOfServiceInfo"><s:sequence><s:element minOccurs="0" maxOccurs="unbounded" name="ServiceInfo" nillable="true" type="tns:ServiceInfo"/></s:sequence></s:complexType>
      <s:complexType name="ServiceInfo"><s:sequence><s:element minOccurs="0" maxOccurs="1" name="ServiceItemNo" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="ServiceItemDescription" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="ServiceItemDescription2" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="ItemNo" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="ItemDescription" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="CustomerNo" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="SerialNo" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="InvoiceNo" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="InvoicePostingDate" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="ShipmentNo" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="ShipmentPostingDate" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="ExternalDocumentNo" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="Commission" type="s:string"/><s:element minOccurs="1" maxOccurs="1" name="InvoiceUnitPrice" nillable="true" type="s:decimal"/><s:element minOccurs="0" maxOccurs="1" name="InvoiceCurrencyCode" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="InvoiceLineCommission" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="WarrantyCode" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="WarrantyDescription" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="WarrantyStartingDate" type="s:string"/><s:element minOccurs="0" maxOccurs="1" name="WarrantyEndingDate" type="s:string"/></s:sequence></s:complexType>
    </s:schema>
  </wsdl:types>
  <wsdl:message name="GetStockAndPriceInformationByProductIdSoapIn"><wsdl:part name="parameters" element="tns:GetStockAndPriceInformationByProductId"/></wsdl:message>
  <wsdl:message name="GetStockAndPriceInformationByProductIdSoapOut"><wsdl:part name="parameters" element="tns:GetStockAndPriceInformationByProductIdResponse"/></wsdl:message>
  <wsdl:message name="GetStockAndPriceInformationByProductIdsSoapIn"><wsdl:part name="parameters" element="tns:GetStockAndPriceInformationByProductIds"/></wsdl:message>
  <wsdl:message name="GetStockAndPriceInformationByProductIdsSoapOut"><wsdl:part name="parameters" element="tns:GetStockAndPriceInformationByProductIdsResponse"/></wsdl:message>
  <wsdl:message name="GetServiceInfoBySerialNoSoapIn"><wsdl:part name="parameters" element="tns:GetServiceInfoBySerialNo"/></wsdl:message>
  <wsdl:message name="GetServiceInfoBySerialNoSoapOut"><wsdl:part name="parameters" element="tns:GetServiceInfoBySerialNoResponse"/></wsdl:message>
  <wsdl:message name="GetServiceInfoByWarrantyEndingDateSoapIn"><wsdl:part name="parameters" element="tns:GetServiceInfoByWarrantyEndingDate"/></wsdl:message>
  <wsdl:message name="GetServiceInfoByWarrantyEndingDateSoapOut"><wsdl:part name="parameters" element="tns:GetServiceInfoByWarrantyEndingDateResponse"/></wsdl:message>
  <wsdl:portType name="CustomerServiceSoap">
    <wsdl:operation name="GetStockAndPriceInformationByProductId"><wsdl:input message="tns:GetStockAndPriceInformationByProductIdSoapIn"/><wsdl:output message="tns:GetStockAndPriceInformationByProductIdSoapOut"/></wsdl:operation>
    <wsdl:operation name="GetStockAndPriceInformationByProductIds"><wsdl:input message="tns:GetStockAndPriceInformationByProductIdsSoapIn"/><wsdl:output message="tns:GetStockAndPriceInformationByProductIdsSoapOut"/></wsdl:operation>
    <wsdl:operation name="GetServiceInfoBySerialNo"><wsdl:input message="tns:GetServiceInfoBySerialNoSoapIn"/><wsdl:output message="tns:GetServiceInfoBySerialNoSoapOut"/></wsdl:operation>
    <wsdl:operation name="GetServiceInfoByWarrantyEndingDate"><wsdl:input message="tns:GetServiceInfoByWarrantyEndingDateSoapIn"/><wsdl:output message="tns:GetServiceInfoByWarrantyEndingDateSoapOut"/></wsdl:operation>
  </wsdl:portType>
  <wsdl:binding name="CustomerServiceSoap" type="tns:CustomerServiceSoap">
    <soap:binding transport="http://schemas.xmlsoap.org/soap/http"/>
    <wsdl:operation name="GetStockAndPriceInformationByProductId"><soap:operation soapAction="Wortmann.CustomerWebService/GetStockAndPriceInformationByProductId" style="document"/><wsdl:input><soap:body use="literal"/></wsdl:input><wsdl:output><soap:body use="literal"/></wsdl:output></wsdl:operation>
    <wsdl:operation name="GetStockAndPriceInformationByProductIds"><soap:operation soapAction="Wortmann.CustomerWebService/GetStockAndPriceInformationByProductIds" style="document"/><wsdl:input><soap:body use="literal"/></wsdl:input><wsdl:output><soap:body use="literal"/></wsdl:output></wsdl:operation>
    <wsdl:operation name="GetServiceInfoBySerialNo"><soap:operation soapAction="Wortmann.CustomerWebService/GetServiceInfoBySerialNo" style="document"/><wsdl:input><soap:body use="literal"/></wsdl:input><wsdl:output><soap:body use="literal"/></wsdl:output></wsdl:operation>
    <wsdl:operation name="GetServiceInfoByWarrantyEndingDate"><soap:operation soapAction="Wortmann.CustomerWebService/GetServiceInfoByWarrantyEndingDate" style="document"/><wsdl:input><soap:body use="literal"/></wsdl:input><wsdl:output><soap:body use="literal"/></wsdl:output></wsdl:operation>
  </wsdl:binding>
  <wsdl:service name="CustomerService"><wsdl:port name="CustomerServiceSoap" binding="tns:CustomerServiceSoap"><soap:address location="https://www.wortmann.de/api/CustomerWebService.asmx"/></wsdl:port></wsdl:service>
</wsdl:definitions>
WSDL;
    }
}
