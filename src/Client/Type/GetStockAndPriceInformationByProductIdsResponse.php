<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetStockAndPriceInformationByProductIdsResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    private $GetStockAndPriceInformationByProductIdsResult;

    /**
     * Constructor
     *
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdsResult
     */
    public function __construct($GetStockAndPriceInformationByProductIdsResult)
    {
        $this->GetStockAndPriceInformationByProductIdsResult = $GetStockAndPriceInformationByProductIdsResult;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    public function getGetStockAndPriceInformationByProductIdsResult()
    {
        return $this->GetStockAndPriceInformationByProductIdsResult;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdsResult
     * @return GetStockAndPriceInformationByProductIdsResponse
     */
    public function withGetStockAndPriceInformationByProductIdsResult($GetStockAndPriceInformationByProductIdsResult)
    {
        $new = clone $this;
        $new->GetStockAndPriceInformationByProductIdsResult = $GetStockAndPriceInformationByProductIdsResult;

        return $new;
    }


}

