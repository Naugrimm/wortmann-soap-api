<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetStockAndPriceInformationByProductIdResponse implements RequestInterface, ResultInterface
{
    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    private \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdResult;

    /**
     * Constructor
     *
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdResult
     */
    public function __construct(\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdResult)
    {
        $this->GetStockAndPriceInformationByProductIdResult = $GetStockAndPriceInformationByProductIdResult;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    public function getGetStockAndPriceInformationByProductIdResult(): \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
    {
        return $this->GetStockAndPriceInformationByProductIdResult;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdResult
     * @return static
     */
    public function withGetStockAndPriceInformationByProductIdResult(\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdResult): static
    {
        $new = clone $this;
        $new->GetStockAndPriceInformationByProductIdResult = $GetStockAndPriceInformationByProductIdResult;

        return $new;
    }
}
