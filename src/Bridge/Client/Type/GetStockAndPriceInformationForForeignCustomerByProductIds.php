<?php

namespace Naugrim\WortmannSoapApi\Bridge\Client\Type;

use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationForForeignCustomerByProductIds as BaseRequest;
use Phpro\SoapClient\Type\RequestInterface;

class GetStockAndPriceInformationForForeignCustomerByProductIds implements RequestInterface
{
    /**
     * @param array $productIds
     * @param string $foreignCustomerNumber
     * @return BaseRequest
     */
    public static function getInstance(array $productIds, string $foreignCustomerNumber) : BaseRequest
    {
        return new BaseRequest(
            config('wortmann-soap-api.username'),
            config('wortmann-soap-api.password'),
            $productIds,
            $foreignCustomerNumber
        );
    }
}
