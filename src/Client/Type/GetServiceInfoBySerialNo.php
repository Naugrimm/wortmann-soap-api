<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetServiceInfoBySerialNo implements RequestInterface
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
    private string $SerialNo;

    /**
     * Constructor
     *
     * @param string $Username
     * @param string $PasswordHash
     * @param string $SerialNo
     */
    public function __construct(string $Username, string $PasswordHash, string $SerialNo)
    {
        $this->Username = $Username;
        $this->PasswordHash = $PasswordHash;
        $this->SerialNo = $SerialNo;
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
     * @return string
     */
    public function getSerialNo(): string
    {
        return $this->SerialNo;
    }

    /**
     * @param string $SerialNo
     * @return static
     */
    public function withSerialNo(string $SerialNo): static
    {
        $new = clone $this;
        $new->SerialNo = $SerialNo;

        return $new;
    }
}
