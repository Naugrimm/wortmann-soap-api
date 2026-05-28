<?php

namespace Naugrim\WortmannSoapApi\Bridge\Client\Type;

use DateTimeInterface;
use Illuminate\Support\Facades\Config;
use Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoByWarrantyEndingDate as BaseRequest;
use Phpro\SoapClient\Type\RequestInterface;

class GetServiceInfoByWarrantyEndingDate implements RequestInterface
{
    /**
     * @param DateTimeInterface $warrantyEndingDate
     * @return BaseRequest
     */
    public static function getInstance(DateTimeInterface $warrantyEndingDate) : BaseRequest
    {
        return new BaseRequest(
            Config::string('wortmann-soap-api.username'),
            Config::string('wortmann-soap-api.password'),
            $warrantyEndingDate
        );
    }
}
