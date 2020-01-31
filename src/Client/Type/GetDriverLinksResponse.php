<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetDriverLinksResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse
     */
    private $GetDriverLinksResult;

    /**
     * Constructor
     *
     * @var \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetDriverLinksResult
     */
    public function __construct($GetDriverLinksResult)
    {
        $this->GetDriverLinksResult = $GetDriverLinksResult;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse
     */
    public function getGetDriverLinksResult()
    {
        return $this->GetDriverLinksResult;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\CustomerWebServiceDriverResponse $GetDriverLinksResult
     * @return GetDriverLinksResponse
     */
    public function withGetDriverLinksResult($GetDriverLinksResult)
    {
        $new = clone $this;
        $new->GetDriverLinksResult = $GetDriverLinksResult;

        return $new;
    }


}

