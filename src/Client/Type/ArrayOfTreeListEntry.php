<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfTreeListEntry
{
    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\TreeListEntry
     */
    private \Naugrim\WortmannSoapApi\Client\Type\TreeListEntry $TreeListEntry;

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\TreeListEntry
     */
    public function getTreeListEntry(): \Naugrim\WortmannSoapApi\Client\Type\TreeListEntry
    {
        return $this->TreeListEntry;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\TreeListEntry $TreeListEntry
     * @return static
     */
    public function withTreeListEntry(\Naugrim\WortmannSoapApi\Client\Type\TreeListEntry $TreeListEntry): static
    {
        $new = clone $this;
        $new->TreeListEntry = $TreeListEntry;

        return $new;
    }
}
