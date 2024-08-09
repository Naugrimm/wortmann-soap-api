<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class SysInfoDocument
{
    /**
     * @var int
     */
    private int $Id;

    /**
     * @var string
     */
    private string $NavID;

    /**
     * @var int
     */
    private int $ParentId;

    /**
     * @var string
     */
    private string $OldId;

    /**
     * @var string
     */
    private string $Description;

    /**
     * @var int
     */
    private int $Type;

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoOperatingSystem
     */
    private \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoOperatingSystem $OperatingSystems;

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLanguage
     */
    private \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLanguage $Languages;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DocumentDate;

    /**
     * @var string
     */
    private string $Version;

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoSubversion
     */
    private \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoSubversion $Subversions;

    /**
     * @var string
     */
    private string $MatchCode;

    /**
     * @var int
     */
    private int $Release;

    /**
     * @var bool
     */
    private bool $RegisteredDownload;

    /**
     * @var bool
     */
    private bool $FindOnlyViaSerialNo;

    /**
     * @var string
     */
    private string $LongDescription;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $MinDate;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $MaxDate;

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLink
     */
    private \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLink $Links;

    /**
     * @var string
     */
    private string $FaultText;

    /**
     * @var string
     */
    private string $SolutionText;

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
     * @return string
     */
    public function getNavID() : string
    {
        return $this->NavID;
    }

    /**
     * @param string $NavID
     * @return static
     */
    public function withNavID(string $NavID) : static
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
     * @return string
     */
    public function getOldId() : string
    {
        return $this->OldId;
    }

    /**
     * @param string $OldId
     * @return static
     */
    public function withOldId(string $OldId) : static
    {
        $new = clone $this;
        $new->OldId = $OldId;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return static
     */
    public function withDescription(string $Description) : static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

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
     * @return \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoOperatingSystem
     */
    public function getOperatingSystems() : \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoOperatingSystem
    {
        return $this->OperatingSystems;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoOperatingSystem $OperatingSystems
     * @return static
     */
    public function withOperatingSystems(\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoOperatingSystem $OperatingSystems) : static
    {
        $new = clone $this;
        $new->OperatingSystems = $OperatingSystems;

        return $new;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLanguage
     */
    public function getLanguages() : \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLanguage
    {
        return $this->Languages;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLanguage $Languages
     * @return static
     */
    public function withLanguages(\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLanguage $Languages) : static
    {
        $new = clone $this;
        $new->Languages = $Languages;

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
     * @return string
     */
    public function getVersion() : string
    {
        return $this->Version;
    }

    /**
     * @param string $Version
     * @return static
     */
    public function withVersion(string $Version) : static
    {
        $new = clone $this;
        $new->Version = $Version;

        return $new;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoSubversion
     */
    public function getSubversions() : \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoSubversion
    {
        return $this->Subversions;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoSubversion $Subversions
     * @return static
     */
    public function withSubversions(\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoSubversion $Subversions) : static
    {
        $new = clone $this;
        $new->Subversions = $Subversions;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatchCode() : string
    {
        return $this->MatchCode;
    }

    /**
     * @param string $MatchCode
     * @return static
     */
    public function withMatchCode(string $MatchCode) : static
    {
        $new = clone $this;
        $new->MatchCode = $MatchCode;

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

    /**
     * @return bool
     */
    public function getFindOnlyViaSerialNo() : bool
    {
        return $this->FindOnlyViaSerialNo;
    }

    /**
     * @param bool $FindOnlyViaSerialNo
     * @return static
     */
    public function withFindOnlyViaSerialNo(bool $FindOnlyViaSerialNo) : static
    {
        $new = clone $this;
        $new->FindOnlyViaSerialNo = $FindOnlyViaSerialNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getLongDescription() : string
    {
        return $this->LongDescription;
    }

    /**
     * @param string $LongDescription
     * @return static
     */
    public function withLongDescription(string $LongDescription) : static
    {
        $new = clone $this;
        $new->LongDescription = $LongDescription;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getMinDate() : \DateTimeInterface
    {
        return $this->MinDate;
    }

    /**
     * @param \DateTimeInterface $MinDate
     * @return static
     */
    public function withMinDate(\DateTimeInterface $MinDate) : static
    {
        $new = clone $this;
        $new->MinDate = $MinDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getMaxDate() : \DateTimeInterface
    {
        return $this->MaxDate;
    }

    /**
     * @param \DateTimeInterface $MaxDate
     * @return static
     */
    public function withMaxDate(\DateTimeInterface $MaxDate) : static
    {
        $new = clone $this;
        $new->MaxDate = $MaxDate;

        return $new;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLink
     */
    public function getLinks() : \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLink
    {
        return $this->Links;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLink $Links
     * @return static
     */
    public function withLinks(\Naugrim\WortmannSoapApi\Client\Type\ArrayOfSysInfoLink $Links) : static
    {
        $new = clone $this;
        $new->Links = $Links;

        return $new;
    }

    /**
     * @return string
     */
    public function getFaultText() : string
    {
        return $this->FaultText;
    }

    /**
     * @param string $FaultText
     * @return static
     */
    public function withFaultText(string $FaultText) : static
    {
        $new = clone $this;
        $new->FaultText = $FaultText;

        return $new;
    }

    /**
     * @return string
     */
    public function getSolutionText() : string
    {
        return $this->SolutionText;
    }

    /**
     * @param string $SolutionText
     * @return static
     */
    public function withSolutionText(string $SolutionText) : static
    {
        $new = clone $this;
        $new->SolutionText = $SolutionText;

        return $new;
    }
}

