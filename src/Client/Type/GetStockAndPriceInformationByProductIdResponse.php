<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetStockAndPriceInformationByProductIdResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    private $GetStockAndPriceInformationByProductIdResult;

    /**
     * Constructor
     *
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdResult
     */
    public function __construct($GetStockAndPriceInformationByProductIdResult)
    {
        $this->GetStockAndPriceInformationByProductIdResult = $GetStockAndPriceInformationByProductIdResult;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    public function getGetStockAndPriceInformationByProductIdResult()
    {
        return $this->GetStockAndPriceInformationByProductIdResult;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdResult
     * @return GetStockAndPriceInformationByProductIdResponse
     */
    public function withGetStockAndPriceInformationByProductIdResult($GetStockAndPriceInformationByProductIdResult)
    {
        $new = clone $this;
        $new->GetStockAndPriceInformationByProductIdResult = $GetStockAndPriceInformationByProductIdResult;

        return $new;
    }


}

