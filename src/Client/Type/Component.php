<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class Component
{
    /**
     * @var string
     */
    private string $ItemNo;

    /**
     * @var int
     */
    private int $LineNo;

    /**
     * @var string
     */
    private string $Description;

    /**
     * @var string
     */
    private string $SerialNo;

    /**
     * @return string
     */
    public function getItemNo() : string
    {
        return $this->ItemNo;
    }

    /**
     * @param string $ItemNo
     * @return static
     */
    public function withItemNo(string $ItemNo) : static
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
     * @return string
     */
    public function getDescription() : string
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return static
     */
    public function withDescription(string $Description) : static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return string
     */
    public function getSerialNo() : string
    {
        return $this->SerialNo;
    }

    /**
     * @param string $SerialNo
     * @return static
     */
    public function withSerialNo(string $SerialNo) : static
    {
        $new = clone $this;
        $new->SerialNo = $SerialNo;

        return $new;
    }
}

