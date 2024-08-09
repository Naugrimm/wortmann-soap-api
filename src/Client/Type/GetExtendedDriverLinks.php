<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetExtendedDriverLinks implements RequestInterface
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
    private string $SearchTerm;

    /**
     * Constructor
     *
     * @param string $Username
     * @param string $PasswordHash
     * @param string $SearchTerm
     */
    public function __construct(string $Username, string $PasswordHash, string $SearchTerm)
    {
        $this->Username = $Username;
        $this->PasswordHash = $PasswordHash;
        $this->SearchTerm = $SearchTerm;
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
    public function getSearchTerm() : string
    {
        return $this->SearchTerm;
    }

    /**
     * @param string $SearchTerm
     * @return static
     */
    public function withSearchTerm(string $SearchTerm) : static
    {
        $new = clone $this;
        $new->SearchTerm = $SearchTerm;

        return $new;
    }
}

