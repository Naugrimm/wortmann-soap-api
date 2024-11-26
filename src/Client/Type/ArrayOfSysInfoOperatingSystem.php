<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfSysInfoOperatingSystem
{
    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\SysInfoOperatingSystem
     */
    private \Naugrim\WortmannSoapApi\Client\Type\SysInfoOperatingSystem $SysInfoOperatingSystem;

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\SysInfoOperatingSystem
     */
    public function getSysInfoOperatingSystem(): \Naugrim\WortmannSoapApi\Client\Type\SysInfoOperatingSystem
    {
        return $this->SysInfoOperatingSystem;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\SysInfoOperatingSystem $SysInfoOperatingSystem
     * @return static
     */
    public function withSysInfoOperatingSystem(\Naugrim\WortmannSoapApi\Client\Type\SysInfoOperatingSystem $SysInfoOperatingSystem): static
    {
        $new = clone $this;
        $new->SysInfoOperatingSystem = $SysInfoOperatingSystem;

        return $new;
    }
}
