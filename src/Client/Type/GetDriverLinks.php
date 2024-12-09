<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDriverLinks implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $SearchTerm = null;

    /**
     * Constructor
     *
     * @param null | string $SearchTerm
     */
    public function __construct(?string $SearchTerm)
    {
        $this->SearchTerm = $SearchTerm;
    }

    /**
     * @return null | string
     */
    public function getSearchTerm() : ?string
    {
        return $this->SearchTerm;
    }

    /**
     * @param null | string $SearchTerm
     * @return static
     */
    public function withSearchTerm(?string $SearchTerm) : static
    {
        $new = clone $this;
        $new->SearchTerm = $SearchTerm;

        return $new;
    }
}

