<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class SysInfoLink
{
    /**
     * @var int
     */
    private int $Id;

    /**
     * @var null | string
     */
    private ?string $NavID = null;

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
    private ?string $URL = null;

    /**
     * @var bool
     */
    private bool $RegisteredDownload;

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
     * @return null | string
     */
    public function getNavID() : ?string
    {
        return $this->NavID;
    }

    /**
     * @param null | string $NavID
     * @return static
     */
    public function withNavID(?string $NavID) : static
    {
        $new = clone $this;
        $new->NavID = $NavID;

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
    public function getURL() : ?string
    {
        return $this->URL;
    }

    /**
     * @param null | string $URL
     * @return static
     */
    public function withURL(?string $URL) : static
    {
        $new = clone $this;
        $new->URL = $URL;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRegisteredDownload() : bool
    {
        return $this->RegisteredDownload;
    }

    /**
     * @param bool $RegisteredDownload
     * @return static
     */
    public function withRegisteredDownload(bool $RegisteredDownload) : static
    {
        $new = clone $this;
        $new->RegisteredDownload = $RegisteredDownload;

        return $new;
    }
}

