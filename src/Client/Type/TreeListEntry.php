<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use \Naugrim\WortmannSoapApi\Client\Type\SysInfoProduct;

class TreeListEntry extends SysInfoProduct
{
    /**
     * @var int
     */
    private int $Type;

    /**
     * @var null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoOperatingSystem
     */
    private ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoOperatingSystem $OperatingSystems = null;

    /**
     * @var null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLanguage
     */
    private ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLanguage $Languages = null;

    /**
     * @var null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLink
     */
    private ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLink $Links = null;

    /**
     * @var null | string
     */
    private ?string $FaultText = null;

    /**
     * @var null | string
     */
    private ?string $SolutionText = null;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DocumentDate;

    /**
     * @var null | string
     */
    private ?string $Version = null;

    /**
     * @var null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoSubversion
     */
    private ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoSubversion $Subversions = null;

    /**
     * @var int
     */
    private int $Release;

    /**
     * @var null | string
     */
    private ?string $LongDescription = null;

    /**
     * @return int
     */
    public function getType() : int
    {
        return $this->Type;
    }

    /**
     * @param int $Type
     * @return static
     */
    public function withType(int $Type) : static
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }

    /**
     * @return null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoOperatingSystem
     */
    public function getOperatingSystems() : ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoOperatingSystem
    {
        return $this->OperatingSystems;
    }

    /**
     * @param null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoOperatingSystem $OperatingSystems
     * @return static
     */
    public function withOperatingSystems(?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoOperatingSystem $OperatingSystems) : static
    {
        $new = clone $this;
        $new->OperatingSystems = $OperatingSystems;

        return $new;
    }

    /**
     * @return null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLanguage
     */
    public function getLanguages() : ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLanguage
    {
        return $this->Languages;
    }

    /**
     * @param null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLanguage $Languages
     * @return static
     */
    public function withLanguages(?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLanguage $Languages) : static
    {
        $new = clone $this;
        $new->Languages = $Languages;

        return $new;
    }

    /**
     * @return null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLink
     */
    public function getLinks() : ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLink
    {
        return $this->Links;
    }

    /**
     * @param null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLink $Links
     * @return static
     */
    public function withLinks(?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLink $Links) : static
    {
        $new = clone $this;
        $new->Links = $Links;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFaultText() : ?string
    {
        return $this->FaultText;
    }

    /**
     * @param null | string $FaultText
     * @return static
     */
    public function withFaultText(?string $FaultText) : static
    {
        $new = clone $this;
        $new->FaultText = $FaultText;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSolutionText() : ?string
    {
        return $this->SolutionText;
    }

    /**
     * @param null | string $SolutionText
     * @return static
     */
    public function withSolutionText(?string $SolutionText) : static
    {
        $new = clone $this;
        $new->SolutionText = $SolutionText;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDocumentDate() : \DateTimeInterface
    {
        return $this->DocumentDate;
    }

    /**
     * @param \DateTimeInterface $DocumentDate
     * @return static
     */
    public function withDocumentDate(\DateTimeInterface $DocumentDate) : static
    {
        $new = clone $this;
        $new->DocumentDate = $DocumentDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getVersion() : ?string
    {
        return $this->Version;
    }

    /**
     * @param null | string $Version
     * @return static
     */
    public function withVersion(?string $Version) : static
    {
        $new = clone $this;
        $new->Version = $Version;

        return $new;
    }

    /**
     * @return null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoSubversion
     */
    public function getSubversions() : ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoSubversion
    {
        return $this->Subversions;
    }

    /**
     * @param null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoSubversion $Subversions
     * @return static
     */
    public function withSubversions(?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoSubversion $Subversions) : static
    {
        $new = clone $this;
        $new->Subversions = $Subversions;

        return $new;
    }

    /**
     * @return int
     */
    public function getRelease() : int
    {
        return $this->Release;
    }

    /**
     * @param int $Release
     * @return static
     */
    public function withRelease(int $Release) : static
    {
        $new = clone $this;
        $new->Release = $Release;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLongDescription() : ?string
    {
        return $this->LongDescription;
    }

    /**
     * @param null | string $LongDescription
     * @return static
     */
    public function withLongDescription(?string $LongDescription) : static
    {
        $new = clone $this;
        $new->LongDescription = $LongDescription;

        return $new;
    }
}

