<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfComponent
{

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\Component
     */
    private $Component;

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\Component
     */
    public function getComponent()
    {
        return $this->Component;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\Component $Component
     * @return ArrayOfComponent
     */
    public function withComponent($Component)
    {
        $new = clone $this;
        $new->Component = $Component;

        return $new;
    }


}

