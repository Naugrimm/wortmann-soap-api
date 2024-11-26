<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetDriverLinksResponse implements RequestInterface, ResultInterface
{
    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse
     */
    private \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetDriverLinksResult;

    /**
     * Constructor
     *
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetDriverLinksResult
     */
    public function __construct(\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetDriverLinksResult)
    {
        $this->GetDriverLinksResult = $GetDriverLinksResult;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse
     */
    public function getGetDriverLinksResult(): \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse
    {
        return $this->GetDriverLinksResult;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetDriverLinksResult
     * @return static
     */
    public function withGetDriverLinksResult(\Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetDriverLinksResult): static
    {
        $new = clone $this;
        $new->GetDriverLinksResult = $GetDriverLinksResult;

        return $new;
    }
}
