<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetServiceInfoByWarrantyEndingDate implements RequestInterface
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
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $WarrantyEndingDate;

    /**
     * Constructor
     *
     * @param null | string $Username
     * @param null | string $PasswordHash
     * @param \DateTimeInterface $WarrantyEndingDate
     */
    public function __construct(?string $Username, ?string $PasswordHash, \DateTimeInterface $WarrantyEndingDate)
    {
        $this->Username = $Username;
        $this->PasswordHash = $PasswordHash;
        $this->WarrantyEndingDate = $WarrantyEndingDate;
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
     * @return \DateTimeInterface
     */
    public function getWarrantyEndingDate() : \DateTimeInterface
    {
        return $this->WarrantyEndingDate;
    }

    /**
     * @param \DateTimeInterface $WarrantyEndingDate
     * @return static
     */
    public function withWarrantyEndingDate(\DateTimeInterface $WarrantyEndingDate) : static
    {
        $new = clone $this;
        $new->WarrantyEndingDate = $WarrantyEndingDate;

        return $new;
    }
}

