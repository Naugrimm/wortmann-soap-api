<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class TreeListEntry
{

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
    private $LongDescription;

    /**
     * @return int
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param int $Type
     * @return TreeListEntry
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
     * @return TreeListEntry
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
     * @return TreeListEntry
     */
    public function withLanguages($Languages)
    {
        $new = clone $this;
        $new->Languages = $Languages;

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
     * @return TreeListEntry
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
     * @return TreeListEntry
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
     * @return TreeListEntry
     */
    public function withSolutionText($SolutionText)
    {
        $new = clone $this;
        $new->SolutionText = $SolutionText;

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
     * @return TreeListEntry
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
     * @return TreeListEntry
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
    public function getLongDescription()
    {
        return $this->LongDescription;
    }

    /**
     * @param string $LongDescription
     * @return TreeListEntry
     */
    public function withLongDescription($LongDescription)
    {
        $new = clone $this;
        $new->LongDescription = $LongDescription;

        return $new;
    }


}

