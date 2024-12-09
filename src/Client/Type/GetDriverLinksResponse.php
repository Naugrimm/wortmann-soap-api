<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetDriverLinksResponse implements ResultInterface
{
    /**
     * @var null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse
     */
    private ?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetDriverLinksResult = null;

    /**
     * @return null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse
     */
    public function getGetDriverLinksResult() : ?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse
    {
        return $this->GetDriverLinksResult;
    }

    /**
     * @param null | \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetDriverLinksResult
     * @return static
     */
    public function withGetDriverLinksResult(?\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetDriverLinksResult) : static
    {
        $new = clone $this;
        $new->GetDriverLinksResult = $GetDriverLinksResult;

        return $new;
    }
}

