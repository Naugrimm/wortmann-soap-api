<?php

namespace Naugrim\WortmannSoapApi\Bridge\Client\Type;

use DateTimeInterface;
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
            config('wortmann-soap-api.username'),
            config('wortmann-soap-api.password'),
            $warrantyEndingDate
        );
    }
}
