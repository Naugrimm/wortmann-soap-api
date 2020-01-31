<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Naugrim\WortmannSoapApi\Client\Contracts\ApiResponseContract;
use Phpro\SoapClient\Type\ResultInterface;

class GetStockAndPriceInformationForForeignCustomerByProductIdsResponse implements ResultInterface, ApiResponseContract
{

    /**
     * @var CustomerWebServiceProductInfoResponse
     */
    private $GetStockAndPriceInformationForForeignCustomerByProductIdsResult;

    /**
     * Constructor
     *
     * @var CustomerWebServiceProductInfoResponse $item
     */
    public function __construct($item)
    {
        $this->GetStockAndPriceInformationForForeignCustomerByProductIdsResult = $item;
    }

    /**
     * @return CustomerWebServiceProductInfoResponse
     */
    public function getGetStockAndPriceInformationForForeignCustomerByProductIdsResult()
    {
        return $this->GetStockAndPriceInformationForForeignCustomerByProductIdsResult;
    }

    /**
     * @param CustomerWebServiceProductInfoResponse $item
     * @return GetStockAndPriceInformationForForeignCustomerByProductIdsResponse
     */
    public function withGetStockAndPriceInformationForForeignCustomerByProductIdsResult($item)
    {
        $new = clone $this;
        $new->GetStockAndPriceInformationForForeignCustomerByProductIdsResult = $item;

        return $new;
    }

    public function entry()
    {
        return $this->getGetStockAndPriceInformationForForeignCustomerByProductIdsResult();
    }
}
