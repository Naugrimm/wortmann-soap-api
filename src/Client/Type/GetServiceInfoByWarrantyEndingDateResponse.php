<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetServiceInfoByWarrantyEndingDateResponse implements RequestInterface, ResultInterface
{
    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse
     */
    private \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoByWarrantyEndingDateResult;

    /**
     * Constructor
     *
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoByWarrantyEndingDateResult
     */
    public function __construct(\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoByWarrantyEndingDateResult)
    {
        $this->GetServiceInfoByWarrantyEndingDateResult = $GetServiceInfoByWarrantyEndingDateResult;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse
     */
    public function getGetServiceInfoByWarrantyEndingDateResult(): \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse
    {
        return $this->GetServiceInfoByWarrantyEndingDateResult;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoByWarrantyEndingDateResult
     * @return static
     */
    public function withGetServiceInfoByWarrantyEndingDateResult(\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceServiceInfoResponse $GetServiceInfoByWarrantyEndingDateResult): static
    {
        $new = clone $this;
        $new->GetServiceInfoByWarrantyEndingDateResult = $GetServiceInfoByWarrantyEndingDateResult;

        return $new;
    }
}
