<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfString
{
    /**
     * @var null | array<int<0,max>, string>
     */
    private ?array $string = null;

    /**
     * @return null | array<int<0,max>, string>
     */
    public function getString() : ?array
    {
        return $this->string;
    }

    /**
     * @param null | array<int<0,max>, string> $string
     * @return static
     */
    public function withString(?array $string) : static
    {
        $new = clone $this;
        $new->string = $string;

        return $new;
    }
}

