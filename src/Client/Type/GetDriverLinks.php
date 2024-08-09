<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDriverLinks implements RequestInterface
{
    /**
     * @var string
     */
    private string $SearchTerm;

    /**
     * Constructor
     *
     * @param string $SearchTerm
     */
    public function __construct(string $SearchTerm)
    {
        $this->SearchTerm = $SearchTerm;
    }

    /**
     * @return string
     */
    public function getSearchTerm() : string
    {
        return $this->SearchTerm;
    }

    /**
     * @param string $SearchTerm
     * @return static
     */
    public function withSearchTerm(string $SearchTerm) : static
    {
        $new = clone $this;
        $new->SearchTerm = $SearchTerm;

        return $new;
    }
}

