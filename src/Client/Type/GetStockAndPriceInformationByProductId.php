<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetStockAndPriceInformationByProductId implements RequestInterface
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
     * @var string
     */
    private string $ProductId;

    /**
     * Constructor
     *
     * @param string $Username
     * @param string $PasswordHash
     * @param string $ProductId
     */
    public function __construct(string $Username, string $PasswordHash, string $ProductId)
    {
        $this->Username = $Username;
        $this->PasswordHash = $PasswordHash;
        $this->ProductId = $ProductId;
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
     * @return string
     */
    public function getProductId() : string
    {
        return $this->ProductId;
    }

    /**
     * @param string $ProductId
     * @return static
     */
    public function withProductId(string $ProductId) : static
    {
        $new = clone $this;
        $new->ProductId = $ProductId;

        return $new;
    }
}

