<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetDriverLinksResponse implements RequestInterface, ResultInterface
{

    /**
     * @var CustomerWebServiceDriverResponse
     */
    private $GetDriverLinksResult;

    /**
     * Constructor
     *
     * @var CustomerWebServiceDriverResponse $GetDriverLinksResult
     */
    public function __construct($GetDriverLinksResult)
    {
        $this->GetDriverLinksResult = $GetDriverLinksResult;
    }

    /**
     * @return CustomerWebServiceDriverResponse
     */
    public function getGetDriverLinksResult()
    {
        return $this->GetDriverLinksResult;
    }

    /**
     * @param CustomerWebServiceDriverResponse $GetDriverLinksResult
     * @return GetDriverLinksResponse
     */
    public function withGetDriverLinksResult($GetDriverLinksResult)
    {
        $new = clone $this;
        $new->GetDriverLinksResult = $GetDriverLinksResult;

        return $new;
    }
}
