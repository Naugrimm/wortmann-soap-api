<?php

namespace Naugrim\WortmannSoapApi\Bridge\Client\Type;

use Illuminate\Support\Facades\Config;
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
            Config::string('wortmann-soap-api.username'),
            Config::string('wortmann-soap-api.password'),
            $productId
        );
    }
}
