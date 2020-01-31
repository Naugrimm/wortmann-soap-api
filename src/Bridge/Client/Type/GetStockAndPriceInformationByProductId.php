<?php

namespace Naugrim\WortmannSoapApi\Bridge\Client\Type;

use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductId as BaseRequest;
use Phpro\SoapClient\Type\RequestInterface;

class GetStockAndPriceInformationByProductId implements RequestInterface
{
    /**
     * @param string $productId
     * @return BaseRequest
     */
    public static function getInstance(string $productId) : BaseRequest
    {
        return new BaseRequest(
            config('wortmann-soap-api.username'),
            config('wortmann-soap-api.password'),
            $productId
        );
    }
}
