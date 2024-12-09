<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetExtendedDriverLinksResponse implements ResultInterface
{
    /**
     * @var null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse
     */
    private ?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetExtendedDriverLinksResult = null;

    /**
     * @return null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse
     */
    public function getGetExtendedDriverLinksResult() : ?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse
    {
        return $this->GetExtendedDriverLinksResult;
    }

    /**
     * @param null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetExtendedDriverLinksResult
     * @return static
     */
    public function withGetExtendedDriverLinksResult(?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetExtendedDriverLinksResult) : static
    {
        $new = clone $this;
        $new->GetExtendedDriverLinksResult = $GetExtendedDriverLinksResult;

        return $new;
    }
}

