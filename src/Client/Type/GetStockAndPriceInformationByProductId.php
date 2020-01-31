<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetStockAndPriceInformationByProductId implements RequestInterface
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
     * @var string
     */
    private $ProductId;

    /**
     * Constructor
     *
     * @var string $Username
     * @var string $PasswordHash
     * @var string $ProductId
     */
    public function __construct($Username, $PasswordHash, $ProductId)
    {
        $this->Username = $Username;
        $this->PasswordHash = $PasswordHash;
        $this->ProductId = $ProductId;
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
     * @return GetStockAndPriceInformationByProductId
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
     * @return GetStockAndPriceInformationByProductId
     */
    public function withPasswordHash($PasswordHash)
    {
        $new = clone $this;
        $new->PasswordHash = $PasswordHash;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->ProductId;
    }

    /**
     * @param string $ProductId
     * @return GetStockAndPriceInformationByProductId
     */
    public function withProductId($ProductId)
    {
        $new = clone $this;
        $new->ProductId = $ProductId;

        return $new;
    }
}
