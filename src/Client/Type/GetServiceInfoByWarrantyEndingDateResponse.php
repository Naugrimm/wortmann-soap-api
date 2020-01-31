<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetServiceInfoByWarrantyEndingDateResponse implements ResultInterface
{

    /**
     * @var CustomerWebServiceServiceInfoResponse
     */
    private $GetServiceInfoByWarrantyEndingDateResult;

    /**
     * Constructor
     *
     * @var CustomerWebServiceServiceInfoResponse $GetServiceInfoByWarrantyEndingDateResult
     */
    public function __construct($GetServiceInfoByWarrantyEndingDateResult)
    {
        $this->GetServiceInfoByWarrantyEndingDateResult = $GetServiceInfoByWarrantyEndingDateResult;
    }

    /**
     * @return CustomerWebServiceServiceInfoResponse
     */
    public function getGetServiceInfoByWarrantyEndingDateResult()
    {
        return $this->GetServiceInfoByWarrantyEndingDateResult;
    }

    /**
     * @param CustomerWebServiceServiceInfoResponse $GetServiceInfoByWarrantyEndingDateResult
     * @return GetServiceInfoByWarrantyEndingDateResponse
     */
    public function withGetServiceInfoByWarrantyEndingDateResult($GetServiceInfoByWarrantyEndingDateResult)
    {
        $new = clone $this;
        $new->GetServiceInfoByWarrantyEndingDateResult = $GetServiceInfoByWarrantyEndingDateResult;

        return $new;
    }
}
