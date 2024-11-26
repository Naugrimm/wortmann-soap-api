<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfSysInfoLanguage
{
    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\SysInfoLanguage
     */
    private \Naugrim\WortmannSoapApi\Client\Type\SysInfoLanguage $SysInfoLanguage;

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\SysInfoLanguage
     */
    public function getSysInfoLanguage(): \Naugrim\WortmannSoapApi\Client\Type\SysInfoLanguage
    {
        return $this->SysInfoLanguage;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\SysInfoLanguage $SysInfoLanguage
     * @return static
     */
    public function withSysInfoLanguage(\Naugrim\WortmannSoapApi\Client\Type\SysInfoLanguage $SysInfoLanguage): static
    {
        $new = clone $this;
        $new->SysInfoLanguage = $SysInfoLanguage;

        return $new;
    }
}
