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
     * @param bool $Success
     * @return CustomerWebServiceDriverResponse
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
     * @return CustomerWebServiceDriverResponse
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
    public function getDrivers()
    {
        return $this->Drivers;
    }

    /**
     * @param array $Drivers
     * @return CustomerWebServiceDriverResponse
     */
    public function withDrivers($Drivers)
    {
        $new = clone $this;
        $new->Drivers = $Drivers;

        return $new;
    }

    public function entry()
    {
        return $this->getDrivers();
    }
}
