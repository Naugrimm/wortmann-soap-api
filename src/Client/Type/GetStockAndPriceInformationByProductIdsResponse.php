<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Naugrim\WortmannSoapApi\Client\Contracts\ApiResponseContract;
use Phpro\SoapClient\Type\ResultInterface;

class GetStockAndPriceInformationByProductIdsResponse implements ResultInterface, ApiResponseContract
{

    /**
     * @var CustomerWebServiceProductInfoResponse
     */
    private $GetStockAndPriceInformationByProductIdsResult;

    /**
     * Constructor
     *
     * @var CustomerWebServiceProductInfoResponse $item
     */
    public function __construct($item)
    {
        $this->GetStockAndPriceInformationByProductIdsResult = $item;
    }

    /**
     * @return CustomerWebServiceProductInfoResponse
     */
    public function getGetStockAndPriceInformationByProductIdsResult()
    {
        return $this->GetStockAndPriceInformationByProductIdsResult;
    }

    /**
     * @param CustomerWebServiceProductInfoResponse $item
     * @return GetStockAndPriceInformationByProductIdsResponse
     */
    public function withGetStockAndPriceInformationByProductIdsResult($item)
    {
        $new = clone $this;
        $new->GetStockAndPriceInformationByProductIdsResult = $item;

        return $new;
    }

    public function entry()
    {
        return $this->getGetStockAndPriceInformationByProductIdsResult();
    }
}
