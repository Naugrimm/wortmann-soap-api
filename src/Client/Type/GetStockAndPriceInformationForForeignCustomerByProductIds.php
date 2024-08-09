<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetStockAndPriceInformationForForeignCustomerByProductIds implements RequestInterface
{
    /**
     * @var string
     */
    private string $Username;

    /**
     * @var string
     */
    private string $PasswordHash;

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\ArrayOfString
     */
    private \Naugrim\WortmannSoapApi\Client\Type\ArrayOfString $ProductIds;

    /**
     * @var string
     */
    private string $ForeignCustomerNumber;

    /**
     * Constructor
     *
     * @param string $Username
     * @param string $PasswordHash
     * @param \Naugrim\WortmannSoapApi\Client\Type\ArrayOfString $ProductIds
     * @param string $ForeignCustomerNumber
     */
    public function __construct(string $Username, string $PasswordHash, \Naugrim\WortmannSoapApi\Client\Type\ArrayOfString $ProductIds, string $ForeignCustomerNumber)
    {
        $this->Username = $Username;
        $this->PasswordHash = $PasswordHash;
        $this->ProductIds = $ProductIds;
        $this->ForeignCustomerNumber = $ForeignCustomerNumber;
    }

    /**
     * @return string
     */
    public function getUsername() : string
    {
        return $this->Username;
    }

    /**
     * @param string $Username
     * @return static
     */
    public function withUsername(string $Username) : static
    {
        $new = clone $this;
        $new->Username = $Username;

        return $new;
    }

    /**
     * @return string
     */
    public function getPasswordHash() : string
    {
        return $this->PasswordHash;
    }

    /**
     * @param string $PasswordHash
     * @return static
     */
    public function withPasswordHash(string $PasswordHash) : static
    {
        $new = clone $this;
        $new->PasswordHash = $PasswordHash;

        return $new;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\ArrayOfString
     */
    public function getProductIds() : \Naugrim\WortmannSoapApi\Client\Type\ArrayOfString
    {
        return $this->ProductIds;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\ArrayOfString $ProductIds
     * @return static
     */
    public function withProductIds(\Naugrim\WortmannSoapApi\Client\Type\ArrayOfString $ProductIds) : static
    {
        $new = clone $this;
        $new->ProductIds = $ProductIds;

        return $new;
    }

    /**
     * @return string
     */
    public function getForeignCustomerNumber() : string
    {
        return $this->ForeignCustomerNumber;
    }

    /**
     * @param string $ForeignCustomerNumber
     * @return static
     */
    public function withForeignCustomerNumber(string $ForeignCustomerNumber) : static
    {
        $new = clone $this;
        $new->ForeignCustomerNumber = $ForeignCustomerNumber;

        return $new;
    }
}

