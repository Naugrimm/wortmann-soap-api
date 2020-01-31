<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetServiceInfoBySerialNoResponse implements ResultInterface
{

    /**
     * @var CustomerWebServiceServiceInfoResponse
     */
    private $GetServiceInfoBySerialNoResult;

    /**
     * Constructor
     *
     * @var CustomerWebServiceServiceInfoResponse $GetServiceInfoBySerialNoResult
     */
    public function __construct($GetServiceInfoBySerialNoResult)
    {
        $this->GetServiceInfoBySerialNoResult = $GetServiceInfoBySerialNoResult;
    }

    /**
     * @return CustomerWebServiceServiceInfoResponse
     */
    public function getGetServiceInfoBySerialNoResult()
    {
        return $this->GetServiceInfoBySerialNoResult;
    }

    /**
     * @param CustomerWebServiceServiceInfoResponse $GetServiceInfoBySerialNoResult
     * @return GetServiceInfoBySerialNoResponse
     */
    public function withGetServiceInfoBySerialNoResult($GetServiceInfoBySerialNoResult)
    {
        $new = clone $this;
        $new->GetServiceInfoBySerialNoResult = $GetServiceInfoBySerialNoResult;

        return $new;
    }
}
