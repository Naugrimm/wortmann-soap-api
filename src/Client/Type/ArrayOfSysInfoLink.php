<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfSysInfoLink
{
    /**
     * @var null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\SysInfoLink>
     */
    private ?array $SysInfoLink = null;

    /**
     * @return null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\SysInfoLink>
     */
    public function getSysInfoLink() : ?array
    {
        return $this->SysInfoLink;
    }

    /**
     * @param null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\SysInfoLink> $SysInfoLink
     * @return static
     */
    public function withSysInfoLink(?array $SysInfoLink) : static
    {
        $new = clone $this;
        $new->SysInfoLink = $SysInfoLink;

        return $new;
    }
}

