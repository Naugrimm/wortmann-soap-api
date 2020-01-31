<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Naugrim\WortmannSoapApi\Client\Contracts\ApiResponseContract;
use Phpro\SoapClient\Type\ResultInterface;

class CustomerWebServiceServiceInfoResponse implements ResultInterface, ApiResponseContract
{

    /**
     * @var bool
     */
    private $Success;

    /**
     * @var string
     */
    private $ErrorMesssage;

    /**
     * @var array
     */
    private $ServiceInfos;

    /**
     * @return bool
     */
    public function getSuccess()
    {
        return $this->Success;
    }

    /**
     * @param bool $Success
     * @return CustomerWebServiceServiceInfoResponse
     */
    public function withSuccess($Success)
    {
        $new = clone $this;
        $new->Success = $Success;

        return $new;
    }

    /**
     * @return string
     */
    public function getErrorMesssage()
    {
        return $this->ErrorMesssage;
    }

    /**
     * @param string $ErrorMesssage
     * @return CustomerWebServiceServiceInfoResponse
     */
    public function withErrorMesssage($ErrorMesssage)
    {
        $new = clone $this;
        $new->ErrorMesssage = $ErrorMesssage;

        return $new;
    }

    /**
     * @return array
     */
    public function getServiceInfos()
    {
        return $this->ServiceInfos;
    }

    /**
     * @param array $ServiceInfos
     * @return CustomerWebServiceServiceInfoResponse
     */
    public function withServiceInfos($ServiceInfos)
    {
        $new = clone $this;
        $new->ServiceInfos = $ServiceInfos;

        return $new;
    }

    public function entry()
    {
        return $this->getServiceInfos();
    }
}
