<?php

namespace Naugrim\WortmannSoapApi\Bridge;

use Phpro\SoapClient\Type\RequestInterface;

class RequestFactory
{
    protected static $MAP = [
        \Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoByWarrantyEndingDate::class =>
            \Naugrim\WortmannSoapApi\Bridge\Client\Type\GetServiceInfoByWarrantyEndingDate::class,
        \Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductId::class =>
            \Naugrim\WortmannSoapApi\Bridge\Client\Type\GetStockAndPriceInformationByProductId::class,
        \Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIds::class =>
            \Naugrim\WortmannSoapApi\Bridge\Client\Type\GetStockAndPriceInformationByProductIds::class,
        \Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationForForeignCustomerByProductIds::class =>
            \Naugrim\WortmannSoapApi\Bridge\Client\Type\GetStockAndPriceInformationForForeignCustomerByProductIds::class,
    ];

    /**
     * @param string $requestCls
     * @param mixed ...$params
     * @return RequestInterface
     */
    public static function create(string $requestCls, ...$params) : RequestInterface
    {
        if (isset(self::$MAP[$requestCls])) {
            return forward_static_call([self::$MAP[$requestCls], 'getInstance'], ...$params);
        }

        return new $requestCls($params);
    }
}
