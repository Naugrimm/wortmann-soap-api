<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class SysInfoSubversion
{
    /**
     * @var string
     */
    private string $Subversion;

    /**
     * @var string
     */
    private string $Description;

    /**
     * @return string
     */
    public function getSubversion(): string
    {
        return $this->Subversion;
    }

    /**
     * @param string $Subversion
     * @return static
     */
    public function withSubversion(string $Subversion): static
    {
        $new = clone $this;
        $new->Subversion = $Subversion;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return static
     */
    public function withDescription(string $Description): static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }
}
