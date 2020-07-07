<?php

namespace Naugrim\WortmannSoapApi\Bridge\Client\Type;

use Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoBySerialNo as BaseRequest;
use Phpro\SoapClient\Type\RequestInterface;

class GetServiceInfoBySerialNo implements RequestInterface
{
    /**
     * @param string $serialNo
     * @return BaseRequest
     */
    public static function getInstance(string $serialNo) : BaseRequest
    {
        return new BaseRequest(
            config('wortmann-soap-api.username'),
            config('wortmann-soap-api.password'),
            $serialNo
        );
    }
}
