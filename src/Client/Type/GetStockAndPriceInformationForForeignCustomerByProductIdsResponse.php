<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetStockAndPriceInformationForForeignCustomerByProductIdsResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    private $GetStockAndPriceInformationForForeignCustomerByProductIdsResult;

    /**
     * Constructor
     *
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationForForeignCustomerByProductIdsResult
     */
    public function __construct($GetStockAndPriceInformationForForeignCustomerByProductIdsResult)
    {
        $this->GetStockAndPriceInformationForForeignCustomerByProductIdsResult = $GetStockAndPriceInformationForForeignCustomerByProductIdsResult;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    public function getGetStockAndPriceInformationForForeignCustomerByProductIdsResult()
    {
        return $this->GetStockAndPriceInformationForForeignCustomerByProductIdsResult;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationForForeignCustomerByProductIdsResult
     * @return GetStockAndPriceInformationForForeignCustomerByProductIdsResponse
     */
    public function withGetStockAndPriceInformationForForeignCustomerByProductIdsResult($GetStockAndPriceInformationForForeignCustomerByProductIdsResult)
    {
        $new = clone $this;
        $new->GetStockAndPriceInformationForForeignCustomerByProductIdsResult = $GetStockAndPriceInformationForForeignCustomerByProductIdsResult;

        return $new;
    }


}

