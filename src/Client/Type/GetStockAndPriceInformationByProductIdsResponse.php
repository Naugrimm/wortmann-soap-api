<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetStockAndPriceInformationByProductIdsResponse implements RequestInterface, ResultInterface
{
    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    private \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdsResult;

    /**
     * Constructor
     *
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdsResult
     */
    public function __construct(\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdsResult)
    {
        $this->GetStockAndPriceInformationByProductIdsResult = $GetStockAndPriceInformationByProductIdsResult;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    public function getGetStockAndPriceInformationByProductIdsResult(): \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
    {
        return $this->GetStockAndPriceInformationByProductIdsResult;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdsResult
     * @return static
     */
    public function withGetStockAndPriceInformationByProductIdsResult(\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdsResult): static
    {
        $new = clone $this;
        $new->GetStockAndPriceInformationByProductIdsResult = $GetStockAndPriceInformationByProductIdsResult;

        return $new;
    }
}
