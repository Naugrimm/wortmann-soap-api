<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetStockAndPriceInformationByProductIds implements RequestInterface
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
     * @var \Naugrim\WortmannSoapApi\Client\Type\ArrayOfString
     */
    private $ProductIds;

    /**
     * Constructor
     *
     * @var string $Username
     * @var string $PasswordHash
     * @var \Naugrim\WortmannSoapApi\Client\Type\ArrayOfString $ProductIds
     */
    public function __construct($Username, $PasswordHash, $ProductIds)
    {
        $this->Username = $Username;
        $this->PasswordHash = $PasswordHash;
        $this->ProductIds = $ProductIds;
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
     * @return GetStockAndPriceInformationByProductIds
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
     * @return GetStockAndPriceInformationByProductIds
     */
    public function withPasswordHash($PasswordHash)
    {
        $new = clone $this;
        $new->PasswordHash = $PasswordHash;

        return $new;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\ArrayOfString
     */
    public function getProductIds()
    {
        return $this->ProductIds;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\ArrayOfString $ProductIds
     * @return GetStockAndPriceInformationByProductIds
     */
    public function withProductIds($ProductIds)
    {
        $new = clone $this;
        $new->ProductIds = $ProductIds;

        return $new;
    }


}

