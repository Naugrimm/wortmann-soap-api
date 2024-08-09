<?php

namespace Naugrim\WortmannSoapApi\Client;

use Phpro\SoapClient\Caller\Caller;
use Naugrim\WortmannSoapApi\Client\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class ApiClient
{
    /**
     * @var Caller
     */
    private Caller $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface & Type\GetStockAndPriceInformationByProductId $parameters
     * @return ResultInterface & Type\GetStockAndPriceInformationByProductIdResponse
     * @throws SoapException
     */
    public function getStockAndPriceInformationByProductId(\Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductId $parameters) : \Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIdResponse
    {
        $response = ($this->caller)('GetStockAndPriceInformationByProductId', $parameters);

        \Psl\Type\instance_of(\Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIdResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetStockAndPriceInformationByProductIds $parameters
     * @return ResultInterface & Type\GetStockAndPriceInformationByProductIdsResponse
     * @throws SoapException
     */
    public function getStockAndPriceInformationByProductIds(\Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIds $parameters) : \Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIdsResponse
    {
        $response = ($this->caller)('GetStockAndPriceInformationByProductIds', $parameters);

        \Psl\Type\instance_of(\Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIdsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetStockAndPriceInformationForForeignCustomerByProductIds $parameters
     * @return ResultInterface & Type\GetStockAndPriceInformationForForeignCustomerByProductIdsResponse
     * @throws SoapException
     */
    public function getStockAndPriceInformationForForeignCustomerByProductIds(\Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationForForeignCustomerByProductIds $parameters) : \Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationForForeignCustomerByProductIdsResponse
    {
        $response = ($this->caller)('GetStockAndPriceInformationForForeignCustomerByProductIds', $parameters);

        \Psl\Type\instance_of(\Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationForForeignCustomerByProductIdsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetDriverLinks $parameters
     * @return ResultInterface & Type\GetDriverLinksResponse
     * @throws SoapException
     */
    public function getDriverLinks(\Naugrim\WortmannSoapApi\Client\Type\GetDriverLinks $parameters) : \Naugrim\WortmannSoapApi\Client\Type\GetDriverLinksResponse
    {
        $response = ($this->caller)('GetDriverLinks', $parameters);

        \Psl\Type\instance_of(\Naugrim\WortmannSoapApi\Client\Type\GetDriverLinksResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetExtendedDriverLinks $parameters
     * @return ResultInterface & Type\GetExtendedDriverLinksResponse
     * @throws SoapException
     */
    public function getExtendedDriverLinks(\Naugrim\WortmannSoapApi\Client\Type\GetExtendedDriverLinks $parameters) : \Naugrim\WortmannSoapApi\Client\Type\GetExtendedDriverLinksResponse
    {
        $response = ($this->caller)('GetExtendedDriverLinks', $parameters);

        \Psl\Type\instance_of(\Naugrim\WortmannSoapApi\Client\Type\GetExtendedDriverLinksResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetServiceInfoByWarrantyEndingDate $parameters
     * @return ResultInterface & Type\GetServiceInfoByWarrantyEndingDateResponse
     * @throws SoapException
     */
    public function getServiceInfoByWarrantyEndingDate(\Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoByWarrantyEndingDate $parameters) : \Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoByWarrantyEndingDateResponse
    {
        $response = ($this->caller)('GetServiceInfoByWarrantyEndingDate', $parameters);

        \Psl\Type\instance_of(\Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoByWarrantyEndingDateResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetServiceInfoBySerialNo $parameters
     * @return ResultInterface & Type\GetServiceInfoBySerialNoResponse
     * @throws SoapException
     */
    public function getServiceInfoBySerialNo(\Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoBySerialNo $parameters) : \Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoBySerialNoResponse
    {
        $response = ($this->caller)('GetServiceInfoBySerialNo', $parameters);

        \Psl\Type\instance_of(\Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoBySerialNoResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

