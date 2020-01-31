<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class SysInfoOperatingSystem
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
     * @return SysInfoOperatingSystem
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
     * @return SysInfoOperatingSystem
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
     * @return SysInfoOperatingSystem
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

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
     * @return SysInfoOperatingSystem
     */
    public function withSortOrder($SortOrder)
    {
        $new = clone $this;
        $new->SortOrder = $SortOrder;

        return $new;
    }


}

