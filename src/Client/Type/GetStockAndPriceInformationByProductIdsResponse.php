<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStockAndPriceInformationByProductIdsResponse implements ResultInterface
{

    /**
     * @var CustomerWebServiceProductInfoResponse
     */
    private $GetStockAndPriceInformationByProductIdsResult;

    /**
     * Constructor
     *
     * @var CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdsResult
     */
    public function __construct($GetStockAndPriceInformationByProductIdsResult)
    {
        $this->GetStockAndPriceInformationByProductIdsResult = $GetStockAndPriceInformationByProductIdsResult;
    }

    /**
     * @return CustomerWebServiceProductInfoResponse
     */
    public function getGetStockAndPriceInformationByProductIdsResult()
    {
        return $this->GetStockAndPriceInformationByProductIdsResult;
    }

    /**
     * @param CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationByProductIdsResult
     * @return GetStockAndPriceInformationByProductIdsResponse
     */
    public function withGetStockAndPriceInformationByProductIdsResult($GetStockAndPriceInformationByProductIdsResult)
    {
        $new = clone $this;
        $new->GetStockAndPriceInformationByProductIdsResult = $GetStockAndPriceInformationByProductIdsResult;

        return $new;
    }
}
