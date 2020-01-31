<?php

namespace Naugrim\WortmannSoapApi\Bridge\Client\Type;

use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIds as BaseRequest;
use Phpro\SoapClient\Type\RequestInterface;

class GetStockAndPriceInformationByProductIds implements RequestInterface
{
    /**
     * @param array $productIds
     * @return BaseRequest
     */
    public static function getInstance(array $productIds) : BaseRequest
    {
        return new BaseRequest(
            config('wortmann-soap-api.username'),
            config('wortmann-soap-api.password'),
            $productIds
        );
    }
}
