<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfSysInfoOperatingSystem
{
    /**
     * @var null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\SysInfoOperatingSystem>
     */
    private ?array $SysInfoOperatingSystem = null;

    /**
     * @return null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\SysInfoOperatingSystem>
     */
    public function getSysInfoOperatingSystem() : ?array
    {
        return $this->SysInfoOperatingSystem;
    }

    /**
     * @param null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\SysInfoOperatingSystem> $SysInfoOperatingSystem
     * @return static
     */
    public function withSysInfoOperatingSystem(?array $SysInfoOperatingSystem) : static
    {
        $new = clone $this;
        $new->SysInfoOperatingSystem = $SysInfoOperatingSystem;

        return $new;
    }
}

