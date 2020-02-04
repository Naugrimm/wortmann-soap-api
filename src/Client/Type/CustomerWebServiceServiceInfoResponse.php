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
     * @return string
     */
    public function getErrorMesssage()
    {
        return $this->ErrorMesssage;
    }

    /**
     * @return array
     */
    public function getServiceInfos()
    {
        return $this->ServiceInfos;
    }

    public function entry(): array
    {
        if (!$this->getServiceInfos()) {
            return [];
        }
        return current($this->getServiceInfos());
    }
}
