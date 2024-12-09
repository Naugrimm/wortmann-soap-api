<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfSysInfoDocument
{
    /**
     * @var null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\SysInfoDocument>
     */
    private ?array $SysInfoDocument = null;

    /**
     * @return null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\SysInfoDocument>
     */
    public function getSysInfoDocument() : ?array
    {
        return $this->SysInfoDocument;
    }

    /**
     * @param null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\SysInfoDocument> $SysInfoDocument
     * @return static
     */
    public function withSysInfoDocument(?array $SysInfoDocument) : static
    {
        $new = clone $this;
        $new->SysInfoDocument = $SysInfoDocument;

        return $new;
    }
}

