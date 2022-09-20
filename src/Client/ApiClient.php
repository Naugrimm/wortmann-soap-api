<?php

namespace Naugrim\WortmannSoapApi\Client;

use Naugrim\WortmannSoapApi\Client\Type;
use Naugrim\WortmannSoapApi\Client\Type\GetDriverLinks;
use Naugrim\WortmannSoapApi\Client\Type\GetDriverLinksResponse;
use Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoBySerialNo;
use Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoBySerialNoResponse;
use Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoByWarrantyEndingDate;
use Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoByWarrantyEndingDateResponse;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductId;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIdResponse;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIds;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIdsResponse;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationForForeignCustomerByProductIds;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationForForeignCustomerByProductIdsResponse;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Caller\Caller;

class ApiClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface|GetStockAndPriceInformationByProductId $parameters
     * @return ResultInterface|GetStockAndPriceInformationByProductIdResponse
     * @throws SoapException
     */
    public function getStockAndPriceInformationByProductId(GetStockAndPriceInformationByProductId $parameters) : GetStockAndPriceInformationByProductIdResponse
    {
        return $this->call('GetStockAndPriceInformationByProductId', $parameters);
    }

    /**
     * @param RequestInterface|GetStockAndPriceInformationByProductIds $parameters
     * @return ResultInterface|GetStockAndPriceInformationByProductIdsResponse
     * @throws SoapException
     */
    public function getStockAndPriceInformationByProductIds(GetStockAndPriceInformationByProductIds $parameters) : GetStockAndPriceInformationByProductIdsResponse
    {
        return $this->call('GetStockAndPriceInformationByProductIds', $parameters);
    }

    /**
     * @param RequestInterface|GetStockAndPriceInformationForForeignCustomerByProductIds $parameters
     * @return ResultInterface|GetStockAndPriceInformationForForeignCustomerByProductIdsResponse
     * @throws SoapException
     */
    public function getStockAndPriceInformationForForeignCustomerByProductIds(GetStockAndPriceInformationForForeignCustomerByProductIds $parameters) : GetStockAndPriceInformationForForeignCustomerByProductIdsResponse
    {
        return $this->call('GetStockAndPriceInformationForForeignCustomerByProductIds', $parameters);
    }

    /**
     * @param RequestInterface|GetDriverLinks $parameters
     * @return ResultInterface|GetDriverLinksResponse
     * @throws SoapException
     */
    public function getDriverLinks(GetDriverLinks $parameters) : GetDriverLinksResponse
    {
        return $this->call('GetDriverLinks', $parameters);
    }

    /**
     * @param RequestInterface|GetServiceInfoByWarrantyEndingDate $parameters
     * @return ResultInterface|GetServiceInfoByWarrantyEndingDateResponse
     * @throws SoapException
     */
    public function getServiceInfoByWarrantyEndingDate(GetServiceInfoByWarrantyEndingDate $parameters) : GetServiceInfoByWarrantyEndingDateResponse
    {
        return $this->call('GetServiceInfoByWarrantyEndingDate', $parameters);
    }

    /**
     * @param RequestInterface|GetServiceInfoBySerialNo $parameters
     * @return ResultInterface|GetServiceInfoBySerialNoResponse
     * @throws SoapException
     */
    public function getServiceInfoBySerialNo(GetServiceInfoBySerialNo $parameters) : GetServiceInfoBySerialNoResponse
    {
        return $this->call('GetServiceInfoBySerialNo', $parameters);
    }
}
