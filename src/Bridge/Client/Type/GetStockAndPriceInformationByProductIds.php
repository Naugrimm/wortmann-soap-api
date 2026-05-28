<?php

namespace Naugrim\WortmannSoapApi\Bridge\Client\Type;

use Illuminate\Support\Facades\Config;
use Naugrim\WortmannSoapApi\Client\Type\ArrayOfString;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIds as BaseRequest;
use Phpro\SoapClient\Type\RequestInterface;

class GetStockAndPriceInformationByProductIds implements RequestInterface
{
    /**
     * @param list<string> $productIds
     * @return BaseRequest
     */
    public static function getInstance(array $productIds) : BaseRequest
    {
        return new BaseRequest(
            Config::string('wortmann-soap-api.username'),
            Config::string('wortmann-soap-api.password'),
            (new ArrayOfString())->withString($productIds)
        );
    }
}
