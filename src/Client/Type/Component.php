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
    public function getItemNo(): string
    {
        return $this->ItemNo;
    }

    /**
     * @param string $ItemNo
     * @return Component
     */
    public function setItemNo(string $ItemNo): Component
    {
        $this->ItemNo = $ItemNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineNo(): int
    {
        return $this->LineNo;
    }

    /**
     * @param int $LineNo
     * @return Component
     */
    public function setLineNo(int $LineNo): Component
    {
        $this->LineNo = $LineNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return Component
     */
    public function setDescription(string $Description): Component
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerialNo(): string
    {
        return $this->SerialNo;
    }

    /**
     * @param string $SerialNo
     * @return Component
     */
    public function setSerialNo(string $SerialNo): Component
    {
        $this->SerialNo = $SerialNo;
        return $this;
    }
}
