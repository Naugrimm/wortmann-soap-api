<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetServiceInfoBySerialNo implements RequestInterface
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
    private ?string $SerialNo = null;

    /**
     * Constructor
     *
     * @param null | string $Username
     * @param null | string $PasswordHash
     * @param null | string $SerialNo
     */
    public function __construct(?string $Username, ?string $PasswordHash, ?string $SerialNo)
    {
        $this->Username = $Username;
        $this->PasswordHash = $PasswordHash;
        $this->SerialNo = $SerialNo;
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
    public function getSerialNo() : ?string
    {
        return $this->SerialNo;
    }

    /**
     * @param null | string $SerialNo
     * @return static
     */
    public function withSerialNo(?string $SerialNo) : static
    {
        $new = clone $this;
        $new->SerialNo = $SerialNo;

        return $new;
    }
}

