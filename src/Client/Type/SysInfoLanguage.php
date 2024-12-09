<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class SysInfoLanguage
{
    /**
     * @var int
     */
    private int $Id;

    /**
     * @var int
     */
    private int $ParentId;

    /**
     * @var null | string
     */
    private ?string $Description = null;

    /**
     * @var null | string
     */
    private ?string $Code = null;

    /**
     * @var int
     */
    private int $SortOrder;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return static
     */
    public function withId(int $Id) : static
    {
        $new = clone $this;
        $new->Id = $Id;

        return $new;
    }

    /**
     * @return int
     */
    public function getParentId() : int
    {
        return $this->ParentId;
    }

    /**
     * @param int $ParentId
     * @return static
     */
    public function withParentId(int $ParentId) : static
    {
        $new = clone $this;
        $new->ParentId = $ParentId;

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
    public function getCode() : ?string
    {
        return $this->Code;
    }

    /**
     * @param null | string $Code
     * @return static
     */
    public function withCode(?string $Code) : static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return int
     */
    public function getSortOrder() : int
    {
        return $this->SortOrder;
    }

    /**
     * @param int $SortOrder
     * @return static
     */
    public function withSortOrder(int $SortOrder) : static
    {
        $new = clone $this;
        $new->SortOrder = $SortOrder;

        return $new;
    }
}

