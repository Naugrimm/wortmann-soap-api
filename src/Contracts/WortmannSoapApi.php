<?php

namespace Naugrim\WortmannSoapApi\Contracts;

use Phpro\SoapClient\Type\ResultInterface;

interface WortmannSoapApi
{
    /**
     * @param string $requestCls
     * @param mixed ...$params
     * @return ResultInterface
     */
    public function request(string $requestCls, ...$params) : ResultInterface;
}
