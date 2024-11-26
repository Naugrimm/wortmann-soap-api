<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CustomerWebServiceProductInfoResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private bool $Success;

    /**
     * @var string
     */
    private string $ErrorMesssage;

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\ArrayOfProductInfoPackage
     */
    private \Naugrim\WortmannSoapApi\Client\Type\ArrayOfProductInfoPackage $ProductInfoPackages;

    /**
     * @return bool
     */
    public function getSuccess(): bool
    {
        return $this->Success;
    }

    /**
     * @param bool $Success
     * @return static
     */
    public function withSuccess(bool $Success): static
    {
        $new = clone $this;
        $new->Success = $Success;

        return $new;
    }

    /**
     * @return string
     */
    public function getErrorMesssage(): string
    {
        return $this->ErrorMesssage;
    }

    /**
     * @param string $ErrorMesssage
     * @return static
     */
    public function withErrorMesssage(string $ErrorMesssage): static
    {
        $new = clone $this;
        $new->ErrorMesssage = $ErrorMesssage;

        return $new;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\ArrayOfProductInfoPackage
     */
    public function getProductInfoPackages(): \Naugrim\WortmannSoapApi\Client\Type\ArrayOfProductInfoPackage
    {
        return $this->ProductInfoPackages;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\ArrayOfProductInfoPackage $ProductInfoPackages
     * @return static
     */
    public function withProductInfoPackages(\Naugrim\WortmannSoapApi\Client\Type\ArrayOfProductInfoPackage $ProductInfoPackages): static
    {
        $new = clone $this;
        $new->ProductInfoPackages = $ProductInfoPackages;

        return $new;
    }
}
