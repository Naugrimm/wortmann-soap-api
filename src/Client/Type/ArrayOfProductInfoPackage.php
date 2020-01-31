<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfProductInfoPackage
{

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\ProductInfoPackage
     */
    private $ProductInfoPackage;

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\ProductInfoPackage
     */
    public function getProductInfoPackage()
    {
        return $this->ProductInfoPackage;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\ProductInfoPackage $ProductInfoPackage
     * @return ArrayOfProductInfoPackage
     */
    public function withProductInfoPackage($ProductInfoPackage)
    {
        $new = clone $this;
        $new->ProductInfoPackage = $ProductInfoPackage;

        return $new;
    }


}

