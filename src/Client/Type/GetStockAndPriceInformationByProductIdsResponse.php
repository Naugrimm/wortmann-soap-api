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

    public function entry(): array
    {
        return $this->getGetStockAndPriceInformationByProductIdsResult()->entry();
    }
}
