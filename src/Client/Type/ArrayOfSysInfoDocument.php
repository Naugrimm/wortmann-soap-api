<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfSysInfoDocument
{
    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\SysInfoDocument
     */
    private \Naugrim\WortmannSoapApi\Client\Type\SysInfoDocument $SysInfoDocument;

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\SysInfoDocument
     */
    public function getSysInfoDocument() : \Naugrim\WortmannSoapApi\Client\Type\SysInfoDocument
    {
        return $this->SysInfoDocument;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\SysInfoDocument $SysInfoDocument
     * @return static
     */
    public function withSysInfoDocument(\Naugrim\WortmannSoapApi\Client\Type\SysInfoDocument $SysInfoDocument) : static
    {
        $new = clone $this;
        $new->SysInfoDocument = $SysInfoDocument;

        return $new;
    }
}

