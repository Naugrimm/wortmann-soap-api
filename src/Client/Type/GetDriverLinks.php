<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDriverLinks implements RequestInterface
{

    /**
     * @var string
     */
    private $SearchTerm;

    /**
     * Constructor
     *
     * @var string $SearchTerm
     */
    public function __construct($SearchTerm)
    {
        $this->SearchTerm = $SearchTerm;
    }

    /**
     * @return string
     */
    public function getSearchTerm()
    {
        return $this->SearchTerm;
    }

    /**
     * @param string $SearchTerm
     * @return GetDriverLinks
     */
    public function withSearchTerm($SearchTerm)
    {
        $new = clone $this;
        $new->SearchTerm = $SearchTerm;

        return $new;
    }


}

