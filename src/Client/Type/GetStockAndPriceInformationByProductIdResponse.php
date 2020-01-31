<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetStockAndPriceInformationByProductIdResponse implements ResultInterface
{

    /**
     * @var CustomerWebServiceProductInfoResponse
     */
    private $GetStockAndPriceInformationByProductIdResult;

    /**
     * Constructor
     *
     * @var CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdResult
     */
    public function __construct($GetStockAndPriceInformationByProductIdResult)
    {
        $this->GetStockAndPriceInformationByProductIdResult = $GetStockAndPriceInformationByProductIdResult;
    }

    /**
     * @return CustomerWebServiceProductInfoResponse
     */
    public function getGetStockAndPriceInformationByProductIdResult()
    {
        return $this->GetStockAndPriceInformationByProductIdResult;
    }

    /**
     * @param CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdResult
     * @return GetStockAndPriceInformationByProductIdResponse
     */
    public function withGetStockAndPriceInformationByProductIdResult($GetStockAndPriceInformationByProductIdResult)
    {
        $new = clone $this;
        $new->GetStockAndPriceInformationByProductIdResult = $GetStockAndPriceInformationByProductIdResult;

        return $new;
    }
}
