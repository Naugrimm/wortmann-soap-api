<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CustomerWebServiceProductInfoResponse implements ResultInterface
{

    /**
     * @var bool
     */
    private $Success;

    /**
     * @var string
     */
    private $ErrorMesssage;

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\ArrayOfProductInfoPackage
     */
    private $ProductInfoPackages;

    /**
     * @return bool
     */
    public function getSuccess()
    {
        return $this->Success;
    }

    /**
     * @param bool $Success
     * @return CustomerWebServiceProductInfoResponse
     */
    public function withSuccess($Success)
    {
        $new = clone $this;
        $new->Success = $Success;

        return $new;
    }

    /**
     * @return string
     */
    public function getErrorMesssage()
    {
        return $this->ErrorMesssage;
    }

    /**
     * @param string $ErrorMesssage
     * @return CustomerWebServiceProductInfoResponse
     */
    public function withErrorMesssage($ErrorMesssage)
    {
        $new = clone $this;
        $new->ErrorMesssage = $ErrorMesssage;

        return $new;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\ArrayOfProductInfoPackage
     */
    public function getProductInfoPackages()
    {
        return $this->ProductInfoPackages;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\ArrayOfProductInfoPackage $ProductInfoPackages
     * @return CustomerWebServiceProductInfoResponse
     */
    public function withProductInfoPackages($ProductInfoPackages)
    {
        $new = clone $this;
        $new->ProductInfoPackages = $ProductInfoPackages;

        return $new;
    }


}

