<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class SysInfoSubversion
{
    /**
     * @var null | string
     */
    private ?string $Subversion = null;

    /**
     * @var null | string
     */
    private ?string $Description = null;

    /**
     * @return null | string
     */
    public function getSubversion() : ?string
    {
        return $this->Subversion;
    }

    /**
     * @param null | string $Subversion
     * @return static
     */
    public function withSubversion(?string $Subversion) : static
    {
        $new = clone $this;
        $new->Subversion = $Subversion;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescription() : ?string
    {
        return $this->Description;
    }

    /**
     * @param null | string $Description
     * @return static
     */
    public function withDescription(?string $Description) : static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }
}

