<?php

namespace Naugrim\WortmannSoapApi\Client;

use Naugrim\WortmannSoapApi\Client\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;

class ApiClassmap
{

    public static function getCollection() : ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('GetStockAndPriceInformationByProductId', Type\GetStockAndPriceInformationByProductId::class),
            new ClassMap('GetStockAndPriceInformationByProductIdResponse', Type\GetStockAndPriceInformationByProductIdResponse::class),
            new ClassMap('CustomerWebServiceProductInfoResponse', Type\CustomerWebServiceProductInfoResponse::class),
            new ClassMap('ProductInfoPackage', Type\ProductInfoPackage::class),
            new ClassMap('GetStockAndPriceInformationByProductIds', Type\GetStockAndPriceInformationByProductIds::class),
            new ClassMap('GetStockAndPriceInformationByProductIdsResponse', Type\GetStockAndPriceInformationByProductIdsResponse::class),
            new ClassMap('GetStockAndPriceInformationForForeignCustomerByProductIds', Type\GetStockAndPriceInformationForForeignCustomerByProductIds::class),
            new ClassMap('GetStockAndPriceInformationForForeignCustomerByProductIdsResponse', Type\GetStockAndPriceInformationForForeignCustomerByProductIdsResponse::class),
            new ClassMap('GetDriverLinks', Type\GetDriverLinks::class),
            new ClassMap('GetDriverLinksResponse', Type\GetDriverLinksResponse::class),
            new ClassMap('CustomerWebServiceDriverResponse', Type\CustomerWebServiceDriverResponse::class),
            new ClassMap('TreeListEntry', Type\TreeListEntry::class),
            new ClassMap('SysInfoProduct', Type\SysInfoProduct::class),
            new ClassMap('SysInfoDocument', Type\SysInfoDocument::class),
            new ClassMap('SysInfoOperatingSystem', Type\SysInfoOperatingSystem::class),
            new ClassMap('SysInfoLanguage', Type\SysInfoLanguage::class),
            new ClassMap('SysInfoLink', Type\SysInfoLink::class),
            new ClassMap('GetServiceInfoByWarrantyEndingDate', Type\GetServiceInfoByWarrantyEndingDate::class),
            new ClassMap('GetServiceInfoByWarrantyEndingDateResponse', Type\GetServiceInfoByWarrantyEndingDateResponse::class),
            new ClassMap('CustomerWebServiceServiceInfoResponse', Type\CustomerWebServiceServiceInfoResponse::class),
            new ClassMap('ServiceInfo', Type\ServiceInfo::class),
            new ClassMap('Component', Type\Component::class),
            new ClassMap('GetServiceInfoBySerialNo', Type\GetServiceInfoBySerialNo::class),
            new ClassMap('GetServiceInfoBySerialNoResponse', Type\GetServiceInfoBySerialNoResponse::class),
        );
    }
}
