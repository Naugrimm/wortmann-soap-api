<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetServiceInfoByWarrantyEndingDate implements RequestInterface
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
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $WarrantyEndingDate;

    /**
     * Constructor
     *
     * @param string $Username
     * @param string $PasswordHash
     * @param \DateTimeInterface $WarrantyEndingDate
     */
    public function __construct(string $Username, string $PasswordHash, \DateTimeInterface $WarrantyEndingDate)
    {
        $this->Username = $Username;
        $this->PasswordHash = $PasswordHash;
        $this->WarrantyEndingDate = $WarrantyEndingDate;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->Username;
    }

    /**
     * @param string $Username
     * @return static
     */
    public function withUsername(string $Username): static
    {
        $new = clone $this;
        $new->Username = $Username;

        return $new;
    }

    /**
     * @return string
     */
    public function getPasswordHash(): string
    {
        return $this->PasswordHash;
    }

    /**
     * @param string $PasswordHash
     * @return static
     */
    public function withPasswordHash(string $PasswordHash): static
    {
        $new = clone $this;
        $new->PasswordHash = $PasswordHash;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getWarrantyEndingDate(): \DateTimeInterface
    {
        return $this->WarrantyEndingDate;
    }

    /**
     * @param \DateTimeInterface $WarrantyEndingDate
     * @return static
     */
    public function withWarrantyEndingDate(\DateTimeInterface $WarrantyEndingDate): static
    {
        $new = clone $this;
        $new->WarrantyEndingDate = $WarrantyEndingDate;

        return $new;
    }
}
