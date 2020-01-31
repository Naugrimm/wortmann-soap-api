<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Naugrim\WortmannSoapApi\Client\Contracts\ApiResponseContract;
use Phpro\SoapClient\Type\ResultInterface;

class GetServiceInfoByWarrantyEndingDateResponse implements ResultInterface, ApiResponseContract
{

    /**
     * @var CustomerWebServiceServiceInfoResponse
     */
    private $GetServiceInfoByWarrantyEndingDateResult;

    /**
     * Constructor
     *
     * @var CustomerWebServiceServiceInfoResponse $item
     */
    public function __construct($item)
    {
        $this->GetServiceInfoByWarrantyEndingDateResult = $item;
    }

    /**
     * @return CustomerWebServiceServiceInfoResponse
     */
    public function getGetServiceInfoByWarrantyEndingDateResult()
    {
        return $this->GetServiceInfoByWarrantyEndingDateResult;
    }

    public function entry(): array
    {
        return $this->getGetServiceInfoByWarrantyEndingDateResult()->entry();
    }
}
