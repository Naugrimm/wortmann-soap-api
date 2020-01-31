<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class SysInfoLink
{

    /**
     * @var int
     */
    private $Id;

    /**
     * @var string
     */
    private $NavID;

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
    private $URL;

    /**
     * @var bool
     */
    private $RegisteredDownload;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return SysInfoLink
     */
    public function withId($Id)
    {
        $new = clone $this;
        $new->Id = $Id;

        return $new;
    }

    /**
     * @return string
     */
    public function getNavID()
    {
        return $this->NavID;
    }

    /**
     * @param string $NavID
     * @return SysInfoLink
     */
    public function withNavID($NavID)
    {
        $new = clone $this;
        $new->NavID = $NavID;

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
     * @return SysInfoLink
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
     * @return SysInfoLink
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
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * @param string $URL
     * @return SysInfoLink
     */
    public function withURL($URL)
    {
        $new = clone $this;
        $new->URL = $URL;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRegisteredDownload()
    {
        return $this->RegisteredDownload;
    }

    /**
     * @param bool $RegisteredDownload
     * @return SysInfoLink
     */
    public function withRegisteredDownload($RegisteredDownload)
    {
        $new = clone $this;
        $new->RegisteredDownload = $RegisteredDownload;

        return $new;
    }
}
