<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStockAndPriceInformationForForeignCustomerByProductIdsResponse implements ResultInterface
{
    /**
     * @var null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    private ?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationForForeignCustomerByProductIdsResult = null;

    /**
     * @return null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    public function getGetStockAndPriceInformationForForeignCustomerByProductIdsResult() : ?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
    {
        return $this->GetStockAndPriceInformationForForeignCustomerByProductIdsResult;
    }

    /**
     * @param null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationForForeignCustomerByProductIdsResult
     * @return static
     */
    public function withGetStockAndPriceInformationForForeignCustomerByProductIdsResult(?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationForForeignCustomerByProductIdsResult) : static
    {
        $new = clone $this;
        $new->GetStockAndPriceInformationForForeignCustomerByProductIdsResult = $GetStockAndPriceInformationForForeignCustomerByProductIdsResult;

        return $new;
    }
}

