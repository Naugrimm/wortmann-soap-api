<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStockAndPriceInformationByProductIdResponse implements ResultInterface
{
    /**
     * @var null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    private ?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdResult = null;

    /**
     * @return null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    public function getGetStockAndPriceInformationByProductIdResult() : ?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
    {
        return $this->GetStockAndPriceInformationByProductIdResult;
    }

    /**
     * @param null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdResult
     * @return static
     */
    public function withGetStockAndPriceInformationByProductIdResult(?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdResult) : static
    {
        $new = clone $this;
        $new->GetStockAndPriceInformationByProductIdResult = $GetStockAndPriceInformationByProductIdResult;

        return $new;
    }
}

