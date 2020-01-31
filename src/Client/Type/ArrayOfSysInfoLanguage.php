<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfSysInfoLanguage
{

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\SysInfoLanguage
     */
    private $SysInfoLanguage;

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\SysInfoLanguage
     */
    public function getSysInfoLanguage()
    {
        return $this->SysInfoLanguage;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\SysInfoLanguage $SysInfoLanguage
     * @return ArrayOfSysInfoLanguage
     */
    public function withSysInfoLanguage($SysInfoLanguage)
    {
        $new = clone $this;
        $new->SysInfoLanguage = $SysInfoLanguage;

        return $new;
    }


}

