<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Naugrim\WortmannSoapApi\Client\Contracts\ApiResponseContract;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetServiceInfoBySerialNoResponse implements ResultInterface, ApiResponseContract
{

    /**
     * @var CustomerWebServiceServiceInfoResponse
     */
    private $GetServiceInfoBySerialNoResult;

    /**
     * Constructor
     *
     * @var CustomerWebServiceServiceInfoResponse $item
     */
    public function __construct($item)
    {
        $this->GetServiceInfoBySerialNoResult = $item;
    }

    /**
     * @return CustomerWebServiceServiceInfoResponse
     */
    public function getGetServiceInfoBySerialNoResult()
    {
        return $this->GetServiceInfoBySerialNoResult;
    }

    /**
     * @param CustomerWebServiceServiceInfoResponse $item
     * @return GetServiceInfoBySerialNoResponse
     */
    public function withGetServiceInfoBySerialNoResult($item)
    {
        $new = clone $this;
        $new->GetServiceInfoBySerialNoResult = $item;

        return $new;
    }

    public function entry()
    {
        return $this->getGetServiceInfoBySerialNoResult();
    }
}
