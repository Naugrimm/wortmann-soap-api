<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetServiceInfoBySerialNoResponse implements ResultInterface
{
    /**
     * @var null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse
     */
    private ?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoBySerialNoResult = null;

    /**
     * @return null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse
     */
    public function getGetServiceInfoBySerialNoResult() : ?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse
    {
        return $this->GetServiceInfoBySerialNoResult;
    }

    /**
     * @param null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoBySerialNoResult
     * @return static
     */
    public function withGetServiceInfoBySerialNoResult(?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoBySerialNoResult) : static
    {
        $new = clone $this;
        $new->GetServiceInfoBySerialNoResult = $GetServiceInfoBySerialNoResult;

        return $new;
    }
}

