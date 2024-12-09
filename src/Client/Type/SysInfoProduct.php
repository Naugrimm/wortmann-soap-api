<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class SysInfoProduct
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
    private ?string $ProductId = null;

    /**
     * @var null | string
     */
    private ?string $Description = null;

    /**
     * @var null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoDocument
     */
    private ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoDocument $Documents = null;

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
    public function getProductId() : ?string
    {
        return $this->ProductId;
    }

    /**
     * @param null | string $ProductId
     * @return static
     */
    public function withProductId(?string $ProductId) : static
    {
        $new = clone $this;
        $new->ProductId = $ProductId;

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
     * @return null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoDocument
     */
    public function getDocuments() : ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoDocument
    {
        return $this->Documents;
    }

    /**
     * @param null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoDocument $Documents
     * @return static
     */
    public function withDocuments(?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoDocument $Documents) : static
    {
        $new = clone $this;
        $new->Documents = $Documents;

        return $new;
    }
}

