<?php

namespace Naugrim\WortmannSoapApi\Contracts;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Type\RequestInterface;

interface WortmannSoapApi
{
    /**
     * @param class-string<RequestInterface> $requestCls
     * @param mixed ...$params
     * @return ResultInterface
     */
    public function request(string $requestCls, ...$params) : ResultInterface;
}
