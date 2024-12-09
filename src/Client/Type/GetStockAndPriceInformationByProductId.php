<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetStockAndPriceInformationByProductId implements RequestInterface
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
     * @var null | string
     */
    private ?string $ProductId = null;

    /**
     * Constructor
     *
     * @param null | string $Username
     * @param null | string $PasswordHash
     * @param null | string $ProductId
     */
    public function __construct(?string $Username, ?string $PasswordHash, ?string $ProductId)
    {
        $this->Username = $Username;
        $this->PasswordHash = $PasswordHash;
        $this->ProductId = $ProductId;
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
     * @return null | string
     */
    public function getProductId() : ?string
    {
        return $this->ProductId;
    }

    /**
     * @param null | string $ProductId
     * @return static
     */
    public function withProductId(?string $ProductId) : static
    {
        $new = clone $this;
        $new->ProductId = $ProductId;

        return $new;
    }
}

