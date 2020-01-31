<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Naugrim\WortmannSoapApi\Client\Contracts\ApiResponseContract;
use Phpro\SoapClient\Type\ResultInterface;

class CustomerWebServiceDriverResponse implements ResultInterface, ApiResponseContract
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
    private $Drivers;

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
    public function getDrivers()
    {
        return $this->Drivers;
    }

    public function entry(): array
    {
        return current($this->getDrivers());
    }
}
