<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetServiceInfoBySerialNoResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse
     */
    private $GetServiceInfoBySerialNoResult;

    /**
     * Constructor
     *
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoBySerialNoResult
     */
    public function __construct($GetServiceInfoBySerialNoResult)
    {
        $this->GetServiceInfoBySerialNoResult = $GetServiceInfoBySerialNoResult;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse
     */
    public function getGetServiceInfoBySerialNoResult()
    {
        return $this->GetServiceInfoBySerialNoResult;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoBySerialNoResult
     * @return GetServiceInfoBySerialNoResponse
     */
    public function withGetServiceInfoBySerialNoResult($GetServiceInfoBySerialNoResult)
    {
        $new = clone $this;
        $new->GetServiceInfoBySerialNoResult = $GetServiceInfoBySerialNoResult;

        return $new;
    }


}

