<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetStockAndPriceInformationForForeignCustomerByProductIds implements RequestInterface
{

    /**
     * @var string
     */
    private $Username;

    /**
     * @var string
     */
    private $PasswordHash;

    /**
     * @var array
     */
    private $ProductIds;

    /**
     * @var string
     */
    private $ForeignCustomerNumber;

    /**
     * Constructor
     *
     * @var string $Username
     * @var string $PasswordHash
     * @var array $ProductIds
     * @var string $ForeignCustomerNumber
     */
    public function __construct($Username, $PasswordHash, $ProductIds, $ForeignCustomerNumber)
    {
        $this->Username = $Username;
        $this->PasswordHash = $PasswordHash;
        $this->ProductIds = $ProductIds;
        $this->ForeignCustomerNumber = $ForeignCustomerNumber;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * @param string $Username
     * @return GetStockAndPriceInformationForForeignCustomerByProductIds
     */
    public function withUsername($Username)
    {
        $new = clone $this;
        $new->Username = $Username;

        return $new;
    }

    /**
     * @return string
     */
    public function getPasswordHash()
    {
        return $this->PasswordHash;
    }

    /**
     * @param string $PasswordHash
     * @return GetStockAndPriceInformationForForeignCustomerByProductIds
     */
    public function withPasswordHash($PasswordHash)
    {
        $new = clone $this;
        $new->PasswordHash = $PasswordHash;

        return $new;
    }

    /**
     * @return array
     */
    public function getProductIds()
    {
        return $this->ProductIds;
    }

    /**
     * @param array $ProductIds
     * @return GetStockAndPriceInformationForForeignCustomerByProductIds
     */
    public function withProductIds($ProductIds)
    {
        $new = clone $this;
        $new->ProductIds = $ProductIds;

        return $new;
    }

    /**
     * @return string
     */
    public function getForeignCustomerNumber()
    {
        return $this->ForeignCustomerNumber;
    }

    /**
     * @param string $ForeignCustomerNumber
     * @return GetStockAndPriceInformationForForeignCustomerByProductIds
     */
    public function withForeignCustomerNumber($ForeignCustomerNumber)
    {
        $new = clone $this;
        $new->ForeignCustomerNumber = $ForeignCustomerNumber;

        return $new;
    }
}
