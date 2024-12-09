<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfComponent
{
    /**
     * @var null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\Component>
     */
    private ?array $Component = null;

    /**
     * @return null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\Component>
     */
    public function getComponent() : ?array
    {
        return $this->Component;
    }

    /**
     * @param null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\Component> $Component
     * @return static
     */
    public function withComponent(?array $Component) : static
    {
        $new = clone $this;
        $new->Component = $Component;

        return $new;
    }
}

