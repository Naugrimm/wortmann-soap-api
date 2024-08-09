<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfSysInfoLink
{
    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\SysInfoLink
     */
    private \Naugrim\WortmannSoapApi\Client\Type\SysInfoLink $SysInfoLink;

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\SysInfoLink
     */
    public function getSysInfoLink() : \Naugrim\WortmannSoapApi\Client\Type\SysInfoLink
    {
        return $this->SysInfoLink;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\SysInfoLink $SysInfoLink
     * @return static
     */
    public function withSysInfoLink(\Naugrim\WortmannSoapApi\Client\Type\SysInfoLink $SysInfoLink) : static
    {
        $new = clone $this;
        $new->SysInfoLink = $SysInfoLink;

        return $new;
    }
}

