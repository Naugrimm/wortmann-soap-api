<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class CustomerWebServiceDriverResponse
{
    /**
     * @var bool
     */
    private bool $Success;

    /**
     * @var null | string
     */
    private ?string $ErrorMesssage = null;

    /**
     * @var null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfTreeListEntry
     */
    private ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfTreeListEntry $Drivers = null;

    /**
     * @return bool
     */
    public function getSuccess() : bool
    {
        return $this->Success;
    }

    /**
     * @param bool $Success
     * @return static
     */
    public function withSuccess(bool $Success) : static
    {
        $new = clone $this;
        $new->Success = $Success;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getErrorMesssage() : ?string
    {
        return $this->ErrorMesssage;
    }

    /**
     * @param null | string $ErrorMesssage
     * @return static
     */
    public function withErrorMesssage(?string $ErrorMesssage) : static
    {
        $new = clone $this;
        $new->ErrorMesssage = $ErrorMesssage;

        return $new;
    }

    /**
     * @return null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfTreeListEntry
     */
    public function getDrivers() : ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfTreeListEntry
    {
        return $this->Drivers;
    }

    /**
     * @param null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfTreeListEntry $Drivers
     * @return static
     */
    public function withDrivers(?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfTreeListEntry $Drivers) : static
    {
        $new = clone $this;
        $new->Drivers = $Drivers;

        return $new;
    }
}

