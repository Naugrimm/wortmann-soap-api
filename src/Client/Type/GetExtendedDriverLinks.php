<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetExtendedDriverLinks implements RequestInterface
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
    private ?string $SearchTerm = null;

    /**
     * Constructor
     *
     * @param null | string $Username
     * @param null | string $PasswordHash
     * @param null | string $SearchTerm
     */
    public function __construct(?string $Username, ?string $PasswordHash, ?string $SearchTerm)
    {
        $this->Username = $Username;
        $this->PasswordHash = $PasswordHash;
        $this->SearchTerm = $SearchTerm;
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
    public function getSearchTerm() : ?string
    {
        return $this->SearchTerm;
    }

    /**
     * @param null | string $SearchTerm
     * @return static
     */
    public function withSearchTerm(?string $SearchTerm) : static
    {
        $new = clone $this;
        $new->SearchTerm = $SearchTerm;

        return $new;
    }
}

