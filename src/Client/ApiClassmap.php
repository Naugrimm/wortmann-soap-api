<?php

namespace Naugrim\WortmannSoapApi\Client;

use Naugrim\WortmannSoapApi\Client\Type;
use Soap\Encoding\ClassMap\ClassMapCollection;
use Soap\Encoding\ClassMap\ClassMap;

class ApiClassmap
{
    public static function types(): \Soap\Encoding\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('urn:Wortmann.CustomerWebService', 'CustomerWebServiceProductInfoResponse', Type\CustomerWebServiceProductInfoResponse::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'ArrayOfProductInfoPackage', Type\ArrayOfProductInfoPackage::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'ProductInfoPackage', Type\ProductInfoPackage::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'ArrayOfString', Type\ArrayOfString::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'CustomerWebServiceDriverResponse', Type\CustomerWebServiceDriverResponse::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'ArrayOfTreeListEntry', Type\ArrayOfTreeListEntry::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'TreeListEntry', Type\TreeListEntry::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'SysInfoProduct', Type\SysInfoProduct::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'ArrayOfSysInfoDocument', Type\ArrayOfSysInfoDocument::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'SysInfoDocument', Type\SysInfoDocument::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'ArrayOfSysInfoOperatingSystem', Type\ArrayOfSysInfoOperatingSystem::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'SysInfoOperatingSystem', Type\SysInfoOperatingSystem::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'ArrayOfSysInfoLanguage', Type\ArrayOfSysInfoLanguage::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'SysInfoLanguage', Type\SysInfoLanguage::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'ArrayOfSysInfoSubversion', Type\ArrayOfSysInfoSubversion::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'SysInfoSubversion', Type\SysInfoSubversion::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'ArrayOfSysInfoLink', Type\ArrayOfSysInfoLink::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'SysInfoLink', Type\SysInfoLink::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'CustomerWebServiceServiceInfoResponse', Type\CustomerWebServiceServiceInfoResponse::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'ArrayOfServiceInfo', Type\ArrayOfServiceInfo::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'ServiceInfo', Type\ServiceInfo::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'ArrayOfComponent', Type\ArrayOfComponent::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'Component', Type\Component::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'GetStockAndPriceInformationByProductId', Type\GetStockAndPriceInformationByProductId::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'GetStockAndPriceInformationByProductIdResponse', Type\GetStockAndPriceInformationByProductIdResponse::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'GetStockAndPriceInformationByProductIds', Type\GetStockAndPriceInformationByProductIds::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'GetStockAndPriceInformationByProductIdsResponse', Type\GetStockAndPriceInformationByProductIdsResponse::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'GetStockAndPriceInformationForForeignCustomerByProductIds', Type\GetStockAndPriceInformationForForeignCustomerByProductIds::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'GetStockAndPriceInformationForForeignCustomerByProductIdsResponse', Type\GetStockAndPriceInformationForForeignCustomerByProductIdsResponse::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'GetDriverLinks', Type\GetDriverLinks::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'GetDriverLinksResponse', Type\GetDriverLinksResponse::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'GetExtendedDriverLinks', Type\GetExtendedDriverLinks::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'GetExtendedDriverLinksResponse', Type\GetExtendedDriverLinksResponse::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'GetServiceInfoByWarrantyEndingDate', Type\GetServiceInfoByWarrantyEndingDate::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'GetServiceInfoByWarrantyEndingDateResponse', Type\GetServiceInfoByWarrantyEndingDateResponse::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'GetServiceInfoBySerialNo', Type\GetServiceInfoBySerialNo::class),
            new ClassMap('urn:Wortmann.CustomerWebService', 'GetServiceInfoBySerialNoResponse', Type\GetServiceInfoBySerialNoResponse::class),
        );
    }

    public static function enums(): \Soap\Encoding\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(

        );
    }
}

