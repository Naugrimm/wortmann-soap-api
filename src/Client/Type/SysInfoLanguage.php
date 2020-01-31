<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class SysInfoLanguage
{

    /**
     * @var int
     */
    private $Id;

    /**
     * @var int
     */
    private $ParentId;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $Code;

    /**
     * @var int
     */
    private $SortOrder;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return SysInfoLanguage
     */
    public function withId($Id)
    {
        $new = clone $this;
        $new->Id = $Id;

        return $new;
    }

    /**
     * @return int
     */
    public function getParentId()
    {
        return $this->ParentId;
    }

    /**
     * @param int $ParentId
     * @return SysInfoLanguage
     */
    public function withParentId($ParentId)
    {
        $new = clone $this;
        $new->ParentId = $ParentId;

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
     * @return SysInfoLanguage
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
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return SysInfoLanguage
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return int
     */
    public function getSortOrder()
    {
        return $this->SortOrder;
    }

    /**
     * @param int $SortOrder
     * @return SysInfoLanguage
     */
    public function withSortOrder($SortOrder)
    {
        $new = clone $this;
        $new->SortOrder = $SortOrder;

        return $new;
    }


}

