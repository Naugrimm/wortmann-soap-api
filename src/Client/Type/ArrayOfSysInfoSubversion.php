<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfSysInfoSubversion
{
    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\SysInfoSubversion
     */
    private \Naugrim\WortmannSoapApi\Client\Type\SysInfoSubversion $SysInfoSubversion;

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\SysInfoSubversion
     */
    public function getSysInfoSubversion(): \Naugrim\WortmannSoapApi\Client\Type\SysInfoSubversion
    {
        return $this->SysInfoSubversion;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\SysInfoSubversion $SysInfoSubversion
     * @return static
     */
    public function withSysInfoSubversion(\Naugrim\WortmannSoapApi\Client\Type\SysInfoSubversion $SysInfoSubversion): static
    {
        $new = clone $this;
        $new->SysInfoSubversion = $SysInfoSubversion;

        return $new;
    }
}
