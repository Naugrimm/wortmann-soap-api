<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStockAndPriceInformationByProductIdsResponse implements ResultInterface
{
    /**
     * @var null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    private ?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdsResult = null;

    /**
     * @return null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    public function getGetStockAndPriceInformationByProductIdsResult() : ?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
    {
        return $this->GetStockAndPriceInformationByProductIdsResult;
    }

    /**
     * @param null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdsResult
     * @return static
     */
    public function withGetStockAndPriceInformationByProductIdsResult(?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdsResult) : static
    {
        $new = clone $this;
        $new->GetStockAndPriceInformationByProductIdsResult = $GetStockAndPriceInformationByProductIdsResult;

        return $new;
    }
}

