<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfSysInfoOperatingSystem
{

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\SysInfoOperatingSystem
     */
    private $SysInfoOperatingSystem;

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\SysInfoOperatingSystem
     */
    public function getSysInfoOperatingSystem()
    {
        return $this->SysInfoOperatingSystem;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\SysInfoOperatingSystem $SysInfoOperatingSystem
     * @return ArrayOfSysInfoOperatingSystem
     */
    public function withSysInfoOperatingSystem($SysInfoOperatingSystem)
    {
        $new = clone $this;
        $new->SysInfoOperatingSystem = $SysInfoOperatingSystem;

        return $new;
    }


}

