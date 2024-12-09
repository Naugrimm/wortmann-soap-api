<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfTreeListEntry
{
    /**
     * @var null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\TreeListEntry>
     */
    private ?array $TreeListEntry = null;

    /**
     * @return null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\TreeListEntry>
     */
    public function getTreeListEntry() : ?array
    {
        return $this->TreeListEntry;
    }

    /**
     * @param null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\TreeListEntry> $TreeListEntry
     * @return static
     */
    public function withTreeListEntry(?array $TreeListEntry) : static
    {
        $new = clone $this;
        $new->TreeListEntry = $TreeListEntry;

        return $new;
    }
}

