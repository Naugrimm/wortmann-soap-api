<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetStockAndPriceInformationForForeignCustomerByProductIdsResponse implements RequestInterface, ResultInterface
{
    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    private \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationForForeignCustomerByProductIdsResult;

    /**
     * Constructor
     *
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationForForeignCustomerByProductIdsResult
     */
    public function __construct(\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationForForeignCustomerByProductIdsResult)
    {
        $this->GetStockAndPriceInformationForForeignCustomerByProductIdsResult = $GetStockAndPriceInformationForForeignCustomerByProductIdsResult;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
     */
    public function getGetStockAndPriceInformationForForeignCustomerByProductIdsResult(): \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse
    {
        return $this->GetStockAndPriceInformationForForeignCustomerByProductIdsResult;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationForForeignCustomerByProductIdsResult
     * @return static
     */
    public function withGetStockAndPriceInformationForForeignCustomerByProductIdsResult(\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceProductInfoResponse $GetStockAndPriceInformationForForeignCustomerByProductIdsResult): static
    {
        $new = clone $this;
        $new->GetStockAndPriceInformationForForeignCustomerByProductIdsResult = $GetStockAndPriceInformationForForeignCustomerByProductIdsResult;

        return $new;
    }
}
