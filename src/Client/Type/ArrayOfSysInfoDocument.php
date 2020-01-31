<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfSysInfoDocument
{

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\SysInfoDocument
     */
    private $SysInfoDocument;

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\SysInfoDocument
     */
    public function getSysInfoDocument()
    {
        return $this->SysInfoDocument;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\SysInfoDocument $SysInfoDocument
     * @return ArrayOfSysInfoDocument
     */
    public function withSysInfoDocument($SysInfoDocument)
    {
        $new = clone $this;
        $new->SysInfoDocument = $SysInfoDocument;

        return $new;
    }


}

