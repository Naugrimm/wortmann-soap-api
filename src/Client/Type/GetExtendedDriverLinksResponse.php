<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetExtendedDriverLinksResponse implements RequestInterface, ResultInterface
{
    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse
     */
    private \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetExtendedDriverLinksResult;

    /**
     * Constructor
     *
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetExtendedDriverLinksResult
     */
    public function __construct(\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetExtendedDriverLinksResult)
    {
        $this->GetExtendedDriverLinksResult = $GetExtendedDriverLinksResult;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse
     */
    public function getGetExtendedDriverLinksResult() : \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse
    {
        return $this->GetExtendedDriverLinksResult;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetExtendedDriverLinksResult
     * @return static
     */
    public function withGetExtendedDriverLinksResult(\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetExtendedDriverLinksResult) : static
    {
        $new = clone $this;
        $new->GetExtendedDriverLinksResult = $GetExtendedDriverLinksResult;

        return $new;
    }
}

