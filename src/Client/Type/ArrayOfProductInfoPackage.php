<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfProductInfoPackage
{
    /**
     * @var null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\ProductInfoPackage>
     */
    private ?array $ProductInfoPackage = null;

    /**
     * @return null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\ProductInfoPackage>
     */
    public function getProductInfoPackage() : ?array
    {
        return $this->ProductInfoPackage;
    }

    /**
     * @param null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\ProductInfoPackage> $ProductInfoPackage
     * @return static
     */
    public function withProductInfoPackage(?array $ProductInfoPackage) : static
    {
        $new = clone $this;
        $new->ProductInfoPackage = $ProductInfoPackage;

        return $new;
    }
}

