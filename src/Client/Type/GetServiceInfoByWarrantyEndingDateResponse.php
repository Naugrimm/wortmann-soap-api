<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetServiceInfoByWarrantyEndingDateResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse
     */
    private $GetServiceInfoByWarrantyEndingDateResult;

    /**
     * Constructor
     *
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoByWarrantyEndingDateResult
     */
    public function __construct($GetServiceInfoByWarrantyEndingDateResult)
    {
        $this->GetServiceInfoByWarrantyEndingDateResult = $GetServiceInfoByWarrantyEndingDateResult;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse
     */
    public function getGetServiceInfoByWarrantyEndingDateResult()
    {
        return $this->GetServiceInfoByWarrantyEndingDateResult;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoByWarrantyEndingDateResult
     * @return GetServiceInfoByWarrantyEndingDateResponse
     */
    public function withGetServiceInfoByWarrantyEndingDateResult($GetServiceInfoByWarrantyEndingDateResult)
    {
        $new = clone $this;
        $new->GetServiceInfoByWarrantyEndingDateResult = $GetServiceInfoByWarrantyEndingDateResult;

        return $new;
    }


}

