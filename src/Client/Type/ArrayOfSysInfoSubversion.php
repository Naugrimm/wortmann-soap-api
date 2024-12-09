<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfSysInfoSubversion
{
    /**
     * @var null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\SysInfoSubversion>
     */
    private ?array $SysInfoSubversion = null;

    /**
     * @return null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\SysInfoSubversion>
     */
    public function getSysInfoSubversion() : ?array
    {
        return $this->SysInfoSubversion;
    }

    /**
     * @param null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\SysInfoSubversion> $SysInfoSubversion
     * @return static
     */
    public function withSysInfoSubversion(?array $SysInfoSubversion) : static
    {
        $new = clone $this;
        $new->SysInfoSubversion = $SysInfoSubversion;

        return $new;
    }
}

