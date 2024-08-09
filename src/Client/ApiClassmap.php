<?php

namespace Naugrim\WortmannSoapApi\Client;

use Naugrim\WortmannSoapApi\Client\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;

class ApiClassmap
{
    public static function getCollection() : \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('GetStockAndPriceInformationByProductId', Type\GetStockAndPriceInformationByProductId::class),
            new ClassMap('GetStockAndPriceInformationByProductIdResponse', Type\GetStockAndPriceInformationByProductIdResponse::class),
            new ClassMap('CustomerWebServiceProductInfoResponse', Type\CustomerWebServiceProductInfoResponse::class),
            new ClassMap('ArrayOfProductInfoPackage', Type\ArrayOfProductInfoPackage::class),
            new ClassMap('ProductInfoPackage', Type\ProductInfoPackage::class),
            new ClassMap('GetStockAndPriceInformationByProductIds', Type\GetStockAndPriceInformationByProductIds::class),
            new ClassMap('ArrayOfString', Type\ArrayOfString::class),
            new ClassMap('GetStockAndPriceInformationByProductIdsResponse', Type\GetStockAndPriceInformationByProductIdsResponse::class),
            new ClassMap('GetStockAndPriceInformationForForeignCustomerByProductIds', Type\GetStockAndPriceInformationForForeignCustomerByProductIds::class),
            new ClassMap('GetStockAndPriceInformationForForeignCustomerByProductIdsResponse', Type\GetStockAndPriceInformationForForeignCustomerByProductIdsResponse::class),
            new ClassMap('GetDriverLinks', Type\GetDriverLinks::class),
            new ClassMap('GetDriverLinksResponse', Type\GetDriverLinksResponse::class),
            new ClassMap('CustomerWebServiceDriverResponse', Type\CustomerWebServiceDriverResponse::class),
            new ClassMap('ArrayOfTreeListEntry', Type\ArrayOfTreeListEntry::class),
            new ClassMap('TreeListEntry', Type\TreeListEntry::class),
            new ClassMap('SysInfoProduct', Type\SysInfoProduct::class),
            new ClassMap('ArrayOfSysInfoDocument', Type\ArrayOfSysInfoDocument::class),
            new ClassMap('SysInfoDocument', Type\SysInfoDocument::class),
            new ClassMap('ArrayOfSysInfoOperatingSystem', Type\ArrayOfSysInfoOperatingSystem::class),
            new ClassMap('SysInfoOperatingSystem', Type\SysInfoOperatingSystem::class),
            new ClassMap('ArrayOfSysInfoLanguage', Type\ArrayOfSysInfoLanguage::class),
            new ClassMap('SysInfoLanguage', Type\SysInfoLanguage::class),
            new ClassMap('ArrayOfSysInfoSubversion', Type\ArrayOfSysInfoSubversion::class),
            new ClassMap('SysInfoSubversion', Type\SysInfoSubversion::class),
            new ClassMap('ArrayOfSysInfoLink', Type\ArrayOfSysInfoLink::class),
            new ClassMap('SysInfoLink', Type\SysInfoLink::class),
            new ClassMap('GetExtendedDriverLinks', Type\GetExtendedDriverLinks::class),
            new ClassMap('GetExtendedDriverLinksResponse', Type\GetExtendedDriverLinksResponse::class),
            new ClassMap('GetServiceInfoByWarrantyEndingDate', Type\GetServiceInfoByWarrantyEndingDate::class),
            new ClassMap('GetServiceInfoByWarrantyEndingDateResponse', Type\GetServiceInfoByWarrantyEndingDateResponse::class),
            new ClassMap('CustomerWebServiceServiceInfoResponse', Type\CustomerWebServiceServiceInfoResponse::class),
            new ClassMap('ArrayOfServiceInfo', Type\ArrayOfServiceInfo::class),
            new ClassMap('ServiceInfo', Type\ServiceInfo::class),
            new ClassMap('ArrayOfComponent', Type\ArrayOfComponent::class),
            new ClassMap('Component', Type\Component::class),
            new ClassMap('GetServiceInfoBySerialNo', Type\GetServiceInfoBySerialNo::class),
            new ClassMap('GetServiceInfoBySerialNoResponse', Type\GetServiceInfoBySerialNoResponse::class),
        );
    }
}

