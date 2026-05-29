<?php

namespace Naugrim\WortmannSoapApi\Bridge\Client\Type;

use Illuminate\Support\Facades\Config;
use Naugrim\WortmannSoapApi\Client\Type\ArrayOfString;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationForForeignCustomerByProductIds as BaseRequest;
use Phpro\SoapClient\Type\RequestInterface;

class GetStockAndPriceInformationForForeignCustomerByProductIds implements RequestInterface
{
    /**
     * @param list<string> $productIds
     * @param string $foreignCustomerNumber
     * @return BaseRequest
     */
    public static function getInstance(array $productIds, string $foreignCustomerNumber) : BaseRequest
    {
        return new BaseRequest(
            Config::string('wortmann-soap-api.username'),
            Config::string('wortmann-soap-api.password'),
            (new ArrayOfString())->withString($productIds),
            $foreignCustomerNumber
        );
    }
}
