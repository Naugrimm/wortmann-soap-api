<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use DateTimeInterface;
use Phpro\SoapClient\Type\RequestInterface;

class GetServiceInfoByWarrantyEndingDate implements RequestInterface
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
     * @var DateTimeInterface
     */
    private $WarrantyEndingDate;

    /**
     * Constructor
     *
     * @var string $Username
     * @var string $PasswordHash
     * @var DateTimeInterface $WarrantyEndingDate
     */
    public function __construct($Username, $PasswordHash, $WarrantyEndingDate)
    {
        $this->Username = $Username;
        $this->PasswordHash = $PasswordHash;
        $this->WarrantyEndingDate = $WarrantyEndingDate;
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
     * @return GetServiceInfoByWarrantyEndingDate
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
     * @return GetServiceInfoByWarrantyEndingDate
     */
    public function withPasswordHash($PasswordHash)
    {
        $new = clone $this;
        $new->PasswordHash = $PasswordHash;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getWarrantyEndingDate()
    {
        return $this->WarrantyEndingDate;
    }

    /**
     * @param DateTimeInterface $WarrantyEndingDate
     * @return GetServiceInfoByWarrantyEndingDate
     */
    public function withWarrantyEndingDate($WarrantyEndingDate)
    {
        $new = clone $this;
        $new->WarrantyEndingDate = $WarrantyEndingDate;

        return $new;
    }
}
