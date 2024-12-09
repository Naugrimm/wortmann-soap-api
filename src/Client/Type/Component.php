<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class Component
{
    /**
     * @var null | string
     */
    private ?string $ItemNo = null;

    /**
     * @var int
     */
    private int $LineNo;

    /**
     * @var null | string
     */
    private ?string $Description = null;

    /**
     * @var null | string
     */
    private ?string $SerialNo = null;

    /**
     * @return null | string
     */
    public function getItemNo() : ?string
    {
        return $this->ItemNo;
    }

    /**
     * @param null | string $ItemNo
     * @return static
     */
    public function withItemNo(?string $ItemNo) : static
    {
        $new = clone $this;
        $new->ItemNo = $ItemNo;

        return $new;
    }

    /**
     * @return int
     */
    public function getLineNo() : int
    {
        return $this->LineNo;
    }

    /**
     * @param int $LineNo
     * @return static
     */
    public function withLineNo(int $LineNo) : static
    {
        $new = clone $this;
        $new->LineNo = $LineNo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescription() : ?string
    {
        return $this->Description;
    }

    /**
     * @param null | string $Description
     * @return static
     */
    public function withDescription(?string $Description) : static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSerialNo() : ?string
    {
        return $this->SerialNo;
    }

    /**
     * @param null | string $SerialNo
     * @return static
     */
    public function withSerialNo(?string $SerialNo) : static
    {
        $new = clone $this;
        $new->SerialNo = $SerialNo;

        return $new;
    }
}

