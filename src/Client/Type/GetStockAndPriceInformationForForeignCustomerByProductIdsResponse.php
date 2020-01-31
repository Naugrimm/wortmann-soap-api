<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStockAndPriceInformationForForeignCustomerByProductIdsResponse implements ResultInterface
{

    /**
     * @var CustomerWebServiceProductInfoResponse
     */
    private $GetStockAndPriceInformationForForeignCustomerByProductIdsResult;

    /**
     * Constructor
     *
     * @var CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationForForeignCustomerByProductIdsResult
     */
    public function __construct($GetStockAndPriceInformationForForeignCustomerByProductIdsResult)
    {
        $this->GetStockAndPriceInformationForForeignCustomerByProductIdsResult = $GetStockAndPriceInformationForForeignCustomerByProductIdsResult;
    }

    /**
     * @return CustomerWebServiceProductInfoResponse
     */
    public function getGetStockAndPriceInformationForForeignCustomerByProductIdsResult()
    {
        return $this->GetStockAndPriceInformationForForeignCustomerByProductIdsResult;
    }

    /**
     * @param CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationForForeignCustomerByProductIdsResult
     * @return GetStockAndPriceInformationForForeignCustomerByProductIdsResponse
     */
    public function withGetStockAndPriceInformationForForeignCustomerByProductIdsResult($GetStockAndPriceInformationForForeignCustomerByProductIdsResult)
    {
        $new = clone $this;
        $new->GetStockAndPriceInformationForForeignCustomerByProductIdsResult = $GetStockAndPriceInformationForForeignCustomerByProductIdsResult;

        return $new;
    }
}
