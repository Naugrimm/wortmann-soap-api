<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfTreeListEntry
{

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\TreeListEntry
     */
    private $TreeListEntry;

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\TreeListEntry
     */
    public function getTreeListEntry()
    {
        return $this->TreeListEntry;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\TreeListEntry $TreeListEntry
     * @return ArrayOfTreeListEntry
     */
    public function withTreeListEntry($TreeListEntry)
    {
        $new = clone $this;
        $new->TreeListEntry = $TreeListEntry;

        return $new;
    }


}

