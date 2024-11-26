<?php

namespace Naugrim\WortmannSoapApi\Client;

use Naugrim\WortmannSoapApi\Client\Type\GetDriverLinks;
use Naugrim\WortmannSoapApi\Client\Type\GetDriverLinksResponse;
use Naugrim\WortmannSoapApi\Client\Type\GetExtendedDriverLinks;
use Naugrim\WortmannSoapApi\Client\Type\GetExtendedDriverLinksResponse;
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
use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use function Psl\Type\instance_of;

class ApiClient
{
    /**
     * @var Caller
     */
    private Caller $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface & GetStockAndPriceInformationByProductId $parameters
     * @return ResultInterface & GetStockAndPriceInformationByProductIdResponse
     * @throws SoapException
     */
    public function getStockAndPriceInformationByProductId(GetStockAndPriceInformationByProductId $parameters): GetStockAndPriceInformationByProductIdResponse
    {
        $response = ($this->caller)('GetStockAndPriceInformationByProductId', $parameters);

        instance_of(GetStockAndPriceInformationByProductIdResponse::class)->assert($response);
        instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & GetStockAndPriceInformationByProductIds $parameters
     * @return ResultInterface & GetStockAndPriceInformationByProductIdsResponse
     * @throws SoapException
     */
    public function getStockAndPriceInformationByProductIds(GetStockAndPriceInformationByProductIds $parameters): GetStockAndPriceInformationByProductIdsResponse
    {
        $response = ($this->caller)('GetStockAndPriceInformationByProductIds', $parameters);

        instance_of(GetStockAndPriceInformationByProductIdsResponse::class)->assert($response);
        instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & GetStockAndPriceInformationForForeignCustomerByProductIds $parameters
     * @return ResultInterface & GetStockAndPriceInformationForForeignCustomerByProductIdsResponse
     * @throws SoapException
     */
    public function getStockAndPriceInformationForForeignCustomerByProductIds(GetStockAndPriceInformationForForeignCustomerByProductIds $parameters): GetStockAndPriceInformationForForeignCustomerByProductIdsResponse
    {
        $response = ($this->caller)('GetStockAndPriceInformationForForeignCustomerByProductIds', $parameters);

        instance_of(GetStockAndPriceInformationForForeignCustomerByProductIdsResponse::class)->assert($response);
        instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & GetDriverLinks $parameters
     * @return ResultInterface & GetDriverLinksResponse
     * @throws SoapException
     */
    public function getDriverLinks(GetDriverLinks $parameters): GetDriverLinksResponse
    {
        $response = ($this->caller)('GetDriverLinks', $parameters);

        instance_of(GetDriverLinksResponse::class)->assert($response);
        instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & GetExtendedDriverLinks $parameters
     * @return ResultInterface & GetExtendedDriverLinksResponse
     * @throws SoapException
     */
    public function getExtendedDriverLinks(GetExtendedDriverLinks $parameters): GetExtendedDriverLinksResponse
    {
        $response = ($this->caller)('GetExtendedDriverLinks', $parameters);

        instance_of(GetExtendedDriverLinksResponse::class)->assert($response);
        instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & GetServiceInfoByWarrantyEndingDate $parameters
     * @return ResultInterface & GetServiceInfoByWarrantyEndingDateResponse
     * @throws SoapException
     */
    public function getServiceInfoByWarrantyEndingDate(GetServiceInfoByWarrantyEndingDate $parameters): GetServiceInfoByWarrantyEndingDateResponse
    {
        $response = ($this->caller)('GetServiceInfoByWarrantyEndingDate', $parameters);

        instance_of(GetServiceInfoByWarrantyEndingDateResponse::class)->assert($response);
        instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & GetServiceInfoBySerialNo $parameters
     * @return ResultInterface & GetServiceInfoBySerialNoResponse
     * @throws SoapException
     */
    public function getServiceInfoBySerialNo(GetServiceInfoBySerialNo $parameters): GetServiceInfoBySerialNoResponse
    {
        $response = ($this->caller)('GetServiceInfoBySerialNo', $parameters);

        instance_of(GetServiceInfoBySerialNoResponse::class)->assert($response);
        instance_of(ResultInterface::class)->assert($response);

        return $response;
    }
}
