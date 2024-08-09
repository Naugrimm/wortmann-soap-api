<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfComponent
{
    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\Component
     */
    private \Naugrim\WortmannSoapApi\Client\Type\Component $Component;

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\Component
     */
    public function getComponent() : \Naugrim\WortmannSoapApi\Client\Type\Component
    {
        return $this->Component;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\Component $Component
     * @return static
     */
    public function withComponent(\Naugrim\WortmannSoapApi\Client\Type\Component $Component) : static
    {
        $new = clone $this;
        $new->Component = $Component;

        return $new;
    }
}

