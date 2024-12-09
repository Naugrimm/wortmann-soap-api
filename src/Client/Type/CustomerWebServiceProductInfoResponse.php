<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class CustomerWebServiceProductInfoResponse
{
    /**
     * @var bool
     */
    private bool $Success;

    /**
     * @var null | string
     */
    private ?string $ErrorMesssage = null;

    /**
     * @var null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfProductInfoPackage
     */
    private ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfProductInfoPackage $ProductInfoPackages = null;

    /**
     * @return bool
     */
    public function getSuccess() : bool
    {
        return $this->Success;
    }

    /**
     * @param bool $Success
     * @return static
     */
    public function withSuccess(bool $Success) : static
    {
        $new = clone $this;
        $new->Success = $Success;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getErrorMesssage() : ?string
    {
        return $this->ErrorMesssage;
    }

    /**
     * @param null | string $ErrorMesssage
     * @return static
     */
    public function withErrorMesssage(?string $ErrorMesssage) : static
    {
        $new = clone $this;
        $new->ErrorMesssage = $ErrorMesssage;

        return $new;
    }

    /**
     * @return null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfProductInfoPackage
     */
    public function getProductInfoPackages() : ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfProductInfoPackage
    {
        return $this->ProductInfoPackages;
    }

    /**
     * @param null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfProductInfoPackage $ProductInfoPackages
     * @return static
     */
    public function withProductInfoPackages(?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfProductInfoPackage $ProductInfoPackages) : static
    {
        $new = clone $this;
        $new->ProductInfoPackages = $ProductInfoPackages;

        return $new;
    }
}

