<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetServiceInfoByWarrantyEndingDateResponse implements ResultInterface
{
    /**
     * @var null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse
     */
    private ?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoByWarrantyEndingDateResult = null;

    /**
     * @return null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse
     */
    public function getGetServiceInfoByWarrantyEndingDateResult() : ?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse
    {
        return $this->GetServiceInfoByWarrantyEndingDateResult;
    }

    /**
     * @param null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoByWarrantyEndingDateResult
     * @return static
     */
    public function withGetServiceInfoByWarrantyEndingDateResult(?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoByWarrantyEndingDateResult) : static
    {
        $new = clone $this;
        $new->GetServiceInfoByWarrantyEndingDateResult = $GetServiceInfoByWarrantyEndingDateResult;

        return $new;
    }
}

