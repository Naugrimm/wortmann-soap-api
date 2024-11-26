<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfProductInfoPackage
{
    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\ProductInfoPackage
     */
    private \Naugrim\WortmannSoapApi\Client\Type\ProductInfoPackage $ProductInfoPackage;

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\ProductInfoPackage
     */
    public function getProductInfoPackage(): \Naugrim\WortmannSoapApi\Client\Type\ProductInfoPackage
    {
        return $this->ProductInfoPackage;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\ProductInfoPackage $ProductInfoPackage
     * @return static
     */
    public function withProductInfoPackage(\Naugrim\WortmannSoapApi\Client\Type\ProductInfoPackage $ProductInfoPackage): static
    {
        $new = clone $this;
        $new->ProductInfoPackage = $ProductInfoPackage;

        return $new;
    }
}
