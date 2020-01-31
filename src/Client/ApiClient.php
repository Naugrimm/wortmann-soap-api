<?php

namespace Naugrim\WortmannSoapApi\Client;

use Naugrim\WortmannSoapApi\Client\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class ApiClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\GetStockAndPriceInformationByProductId $parameters
     * @return ResultInterface|Type\GetStockAndPriceInformationByProductIdResponse
     * @throws SoapException
     */
    public function getStockAndPriceInformationByProductId(\Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductId $parameters) : \Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIdResponse
    {
        return $this->call('GetStockAndPriceInformationByProductId', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetStockAndPriceInformationByProductIds $parameters
     * @return ResultInterface|Type\GetStockAndPriceInformationByProductIdsResponse
     * @throws SoapException
     */
    public function getStockAndPriceInformationByProductIds(\Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIds $parameters) : \Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIdsResponse
    {
        return $this->call('GetStockAndPriceInformationByProductIds', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetStockAndPriceInformationForForeignCustomerByProductIds $parameters
     * @return ResultInterface|Type\GetStockAndPriceInformationForForeignCustomerByProductIdsResponse
     * @throws SoapException
     */
    public function getStockAndPriceInformationForForeignCustomerByProductIds(\Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationForForeignCustomerByProductIds $parameters) : \Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationForForeignCustomerByProductIdsResponse
    {
        return $this->call('GetStockAndPriceInformationForForeignCustomerByProductIds', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetDriverLinks $parameters
     * @return ResultInterface|Type\GetDriverLinksResponse
     * @throws SoapException
     */
    public function getDriverLinks(\Naugrim\WortmannSoapApi\Client\Type\GetDriverLinks $parameters) : \Naugrim\WortmannSoapApi\Client\Type\GetDriverLinksResponse
    {
        return $this->call('GetDriverLinks', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetServiceInfoByWarrantyEndingDate $parameters
     * @return ResultInterface|Type\GetServiceInfoByWarrantyEndingDateResponse
     * @throws SoapException
     */
    public function getServiceInfoByWarrantyEndingDate(\Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoByWarrantyEndingDate $parameters) : \Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoByWarrantyEndingDateResponse
    {
        return $this->call('GetServiceInfoByWarrantyEndingDate', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetServiceInfoBySerialNo $parameters
     * @return ResultInterface|Type\GetServiceInfoBySerialNoResponse
     * @throws SoapException
     */
    public function getServiceInfoBySerialNo(\Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoBySerialNo $parameters) : \Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoBySerialNoResponse
    {
        return $this->call('GetServiceInfoBySerialNo', $parameters);
    }


}

