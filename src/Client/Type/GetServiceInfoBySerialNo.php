<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetServiceInfoBySerialNo implements RequestInterface
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
    private $SerialNo;

    /**
     * Constructor
     *
     * @var string $Username
     * @var string $PasswordHash
     * @var string $SerialNo
     */
    public function __construct($Username, $PasswordHash, $SerialNo)
    {
        $this->Username = $Username;
        $this->PasswordHash = $PasswordHash;
        $this->SerialNo = $SerialNo;
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
     * @return GetServiceInfoBySerialNo
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
     * @return GetServiceInfoBySerialNo
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
    public function getSerialNo()
    {
        return $this->SerialNo;
    }

    /**
     * @param string $SerialNo
     * @return GetServiceInfoBySerialNo
     */
    public function withSerialNo($SerialNo)
    {
        $new = clone $this;
        $new->SerialNo = $SerialNo;

        return $new;
    }
}
