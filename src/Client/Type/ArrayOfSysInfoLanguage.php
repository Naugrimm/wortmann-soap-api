<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfSysInfoLanguage
{
    /**
     * @var null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\SysInfoLanguage>
     */
    private ?array $SysInfoLanguage = null;

    /**
     * @return null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\SysInfoLanguage>
     */
    public function getSysInfoLanguage() : ?array
    {
        return $this->SysInfoLanguage;
    }

    /**
     * @param null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\SysInfoLanguage> $SysInfoLanguage
     * @return static
     */
    public function withSysInfoLanguage(?array $SysInfoLanguage) : static
    {
        $new = clone $this;
        $new->SysInfoLanguage = $SysInfoLanguage;

        return $new;
    }
}

