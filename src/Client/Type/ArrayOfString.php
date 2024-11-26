<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfString
{
    /**
     * @var string
     */
    private string $string;

    /**
     * @return string
     */
    public function getString(): string
    {
        return $this->string;
    }

    /**
     * @param string $string
     * @return static
     */
    public function withString(string $string): static
    {
        $new = clone $this;
        $new->string = $string;

        return $new;
    }
}
