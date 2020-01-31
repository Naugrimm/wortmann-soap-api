<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class SysInfoDocument
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
    private $OldId;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var int
     */
    private $Type;

    /**
     * @var array
     */
    private $OperatingSystems;

    /**
     * @var array
     */
    private $Languages;

    /**
     * @var \DateTimeInterface
     */
    private $DocumentDate;

    /**
     * @var string
     */
    private $Version;

    /**
     * @var string
     */
    private $MatchCode;

    /**
     * @var int
     */
    private $Release;

    /**
     * @var bool
     */
    private $RegisteredDownload;

    /**
     * @var bool
     */
    private $FindOnlyViaSerialNo;

    /**
     * @var string
     */
    private $LongDescription;

    /**
     * @var \DateTimeInterface
     */
    private $MinDate;

    /**
     * @var \DateTimeInterface
     */
    private $MaxDate;

    /**
     * @var array
     */
    private $Links;

    /**
     * @var string
     */
    private $FaultText;

    /**
     * @var string
     */
    private $SolutionText;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return SysInfoDocument
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
     * @return SysInfoDocument
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
     * @return SysInfoDocument
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
    public function getOldId()
    {
        return $this->OldId;
    }

    /**
     * @param string $OldId
     * @return SysInfoDocument
     */
    public function withOldId($OldId)
    {
        $new = clone $this;
        $new->OldId = $OldId;

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
     * @return SysInfoDocument
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
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param int $Type
     * @return SysInfoDocument
     */
    public function withType($Type)
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }

    /**
     * @return array
     */
    public function getOperatingSystems()
    {
        return $this->OperatingSystems;
    }

    /**
     * @param array $OperatingSystems
     * @return SysInfoDocument
     */
    public function withOperatingSystems($OperatingSystems)
    {
        $new = clone $this;
        $new->OperatingSystems = $OperatingSystems;

        return $new;
    }

    /**
     * @return array
     */
    public function getLanguages()
    {
        return $this->Languages;
    }

    /**
     * @param array $Languages
     * @return SysInfoDocument
     */
    public function withLanguages($Languages)
    {
        $new = clone $this;
        $new->Languages = $Languages;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDocumentDate()
    {
        return $this->DocumentDate;
    }

    /**
     * @param \DateTimeInterface $DocumentDate
     * @return SysInfoDocument
     */
    public function withDocumentDate($DocumentDate)
    {
        $new = clone $this;
        $new->DocumentDate = $DocumentDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param string $Version
     * @return SysInfoDocument
     */
    public function withVersion($Version)
    {
        $new = clone $this;
        $new->Version = $Version;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatchCode()
    {
        return $this->MatchCode;
    }

    /**
     * @param string $MatchCode
     * @return SysInfoDocument
     */
    public function withMatchCode($MatchCode)
    {
        $new = clone $this;
        $new->MatchCode = $MatchCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getRelease()
    {
        return $this->Release;
    }

    /**
     * @param int $Release
     * @return SysInfoDocument
     */
    public function withRelease($Release)
    {
        $new = clone $this;
        $new->Release = $Release;

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
     * @return SysInfoDocument
     */
    public function withRegisteredDownload($RegisteredDownload)
    {
        $new = clone $this;
        $new->RegisteredDownload = $RegisteredDownload;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFindOnlyViaSerialNo()
    {
        return $this->FindOnlyViaSerialNo;
    }

    /**
     * @param bool $FindOnlyViaSerialNo
     * @return SysInfoDocument
     */
    public function withFindOnlyViaSerialNo($FindOnlyViaSerialNo)
    {
        $new = clone $this;
        $new->FindOnlyViaSerialNo = $FindOnlyViaSerialNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getLongDescription()
    {
        return $this->LongDescription;
    }

    /**
     * @param string $LongDescription
     * @return SysInfoDocument
     */
    public function withLongDescription($LongDescription)
    {
        $new = clone $this;
        $new->LongDescription = $LongDescription;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getMinDate()
    {
        return $this->MinDate;
    }

    /**
     * @param \DateTimeInterface $MinDate
     * @return SysInfoDocument
     */
    public function withMinDate($MinDate)
    {
        $new = clone $this;
        $new->MinDate = $MinDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getMaxDate()
    {
        return $this->MaxDate;
    }

    /**
     * @param \DateTimeInterface $MaxDate
     * @return SysInfoDocument
     */
    public function withMaxDate($MaxDate)
    {
        $new = clone $this;
        $new->MaxDate = $MaxDate;

        return $new;
    }

    /**
     * @return array
     */
    public function getLinks()
    {
        return $this->Links;
    }

    /**
     * @param array $Links
     * @return SysInfoDocument
     */
    public function withLinks($Links)
    {
        $new = clone $this;
        $new->Links = $Links;

        return $new;
    }

    /**
     * @return string
     */
    public function getFaultText()
    {
        return $this->FaultText;
    }

    /**
     * @param string $FaultText
     * @return SysInfoDocument
     */
    public function withFaultText($FaultText)
    {
        $new = clone $this;
        $new->FaultText = $FaultText;

        return $new;
    }

    /**
     * @return string
     */
    public function getSolutionText()
    {
        return $this->SolutionText;
    }

    /**
     * @param string $SolutionText
     * @return SysInfoDocument
     */
    public function withSolutionText($SolutionText)
    {
        $new = clone $this;
        $new->SolutionText = $SolutionText;

        return $new;
    }


}

