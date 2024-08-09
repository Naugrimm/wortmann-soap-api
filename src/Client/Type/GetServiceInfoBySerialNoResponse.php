<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetServiceInfoBySerialNoResponse implements RequestInterface, ResultInterface
{
    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse
     */
    private \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoBySerialNoResult;

    /**
     * Constructor
     *
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoBySerialNoResult
     */
    public function __construct(\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoBySerialNoResult)
    {
        $this->GetServiceInfoBySerialNoResult = $GetServiceInfoBySerialNoResult;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse
     */
    public function getGetServiceInfoBySerialNoResult() : \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse
    {
        return $this->GetServiceInfoBySerialNoResult;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoBySerialNoResult
     * @return static
     */
    public function withGetServiceInfoBySerialNoResult(\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoBySerialNoResult) : static
    {
        $new = clone $this;
        $new->GetServiceInfoBySerialNoResult = $GetServiceInfoBySerialNoResult;

        return $new;
    }
}

