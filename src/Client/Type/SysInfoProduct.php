<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class SysInfoProduct
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
    private $ProductId;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoDocument
     */
    private $Documents;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return SysInfoProduct
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
     * @return SysInfoProduct
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
    public function getProductId()
    {
        return $this->ProductId;
    }

    /**
     * @param string $ProductId
     * @return SysInfoProduct
     */
    public function withProductId($ProductId)
    {
        $new = clone $this;
        $new->ProductId = $ProductId;

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
     * @return SysInfoProduct
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoDocument
     */
    public function getDocuments()
    {
        return $this->Documents;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoDocument $Documents
     * @return SysInfoProduct
     */
    public function withDocuments($Documents)
    {
        $new = clone $this;
        $new->Documents = $Documents;

        return $new;
    }


}

