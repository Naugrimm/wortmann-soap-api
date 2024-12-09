<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetStockAndPriceInformationForForeignCustomerByProductIds implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $Username = null;

    /**
     * @var null | string
     */
    private ?string $PasswordHash = null;

    /**
     * @var null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfString
     */
    private ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfString $ProductIds = null;

    /**
     * @var null | string
     */
    private ?string $ForeignCustomerNumber = null;

    /**
     * Constructor
     *
     * @param null | string $Username
     * @param null | string $PasswordHash
     * @param null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfString $ProductIds
     * @param null | string $ForeignCustomerNumber
     */
    public function __construct(?string $Username, ?string $PasswordHash, ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfString $ProductIds, ?string $ForeignCustomerNumber)
    {
        $this->Username = $Username;
        $this->PasswordHash = $PasswordHash;
        $this->ProductIds = $ProductIds;
        $this->ForeignCustomerNumber = $ForeignCustomerNumber;
    }

    /**
     * @return null | string
     */
    public function getUsername() : ?string
    {
        return $this->Username;
    }

    /**
     * @param null | string $Username
     * @return static
     */
    public function withUsername(?string $Username) : static
    {
        $new = clone $this;
        $new->Username = $Username;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPasswordHash() : ?string
    {
        return $this->PasswordHash;
    }

    /**
     * @param null | string $PasswordHash
     * @return static
     */
    public function withPasswordHash(?string $PasswordHash) : static
    {
        $new = clone $this;
        $new->PasswordHash = $PasswordHash;

        return $new;
    }

    /**
     * @return null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfString
     */
    public function getProductIds() : ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfString
    {
        return $this->ProductIds;
    }

    /**
     * @param null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfString $ProductIds
     * @return static
     */
    public function withProductIds(?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfString $ProductIds) : static
    {
        $new = clone $this;
        $new->ProductIds = $ProductIds;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getForeignCustomerNumber() : ?string
    {
        return $this->ForeignCustomerNumber;
    }

    /**
     * @param null | string $ForeignCustomerNumber
     * @return static
     */
    public function withForeignCustomerNumber(?string $ForeignCustomerNumber) : static
    {
        $new = clone $this;
        $new->ForeignCustomerNumber = $ForeignCustomerNumber;

        return $new;
    }
}

