<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class Component
{

    /**
     * @var string
     */
    private $ItemNo;

    /**
     * @var int
     */
    private $LineNo;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $SerialNo;

    /**
     * @return string
     */
    public function getItemNo()
    {
        return $this->ItemNo;
    }

    /**
     * @param string $ItemNo
     * @return Component
     */
    public function withItemNo($ItemNo)
    {
        $new = clone $this;
        $new->ItemNo = $ItemNo;

        return $new;
    }

    /**
     * @return int
     */
    public function getLineNo()
    {
        return $this->LineNo;
    }

    /**
     * @param int $LineNo
     * @return Component
     */
    public function withLineNo($LineNo)
    {
        $new = clone $this;
        $new->LineNo = $LineNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return Component
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return string
     */
    public function getSerialNo()
    {
        return $this->SerialNo;
    }

    /**
     * @param string $SerialNo
     * @return Component
     */
    public function withSerialNo($SerialNo)
    {
        $new = clone $this;
        $new->SerialNo = $SerialNo;

        return $new;
    }
}
