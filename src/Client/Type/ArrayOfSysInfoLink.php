<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfSysInfoLink
{

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\SysInfoLink
     */
    private $SysInfoLink;

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\SysInfoLink
     */
    public function getSysInfoLink()
    {
        return $this->SysInfoLink;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\SysInfoLink $SysInfoLink
     * @return ArrayOfSysInfoLink
     */
    public function withSysInfoLink($SysInfoLink)
    {
        $new = clone $this;
        $new->SysInfoLink = $SysInfoLink;

        return $new;
    }


}

