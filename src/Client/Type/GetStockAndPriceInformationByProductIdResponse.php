<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Naugrim\WortmannSoapApi\Client\Contracts\ApiResponseContract;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetStockAndPriceInformationByProductIdResponse implements ResultInterface, ApiResponseContract
{

    /**
     * @var CustomerWebServiceProductInfoResponse
     */
    private $GetStockAndPriceInformationByProductIdResult;

    /**
     * Constructor
     *
     * @var CustomerWebServiceProductInfoResponse $item
     */
    public function __construct($item)
    {
        $this->GetStockAndPriceInformationByProductIdResult = $item;
    }

    /**
     * @return CustomerWebServiceProductInfoResponse
     */
    public function getGetStockAndPriceInformationByProductIdResult()
    {
        return $this->GetStockAndPriceInformationByProductIdResult;
    }

    public function entry(): array
    {
        return $this->getGetStockAndPriceInformationByProductIdResult()->entry();
    }
}
