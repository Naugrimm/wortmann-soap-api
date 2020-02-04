<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Naugrim\WortmannSoapApi\Client\Contracts\ApiResponseContract;
use Phpro\SoapClient\Type\ResultInterface;

class CustomerWebServiceProductInfoResponse implements ResultInterface, ApiResponseContract
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
     * @var array
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
     * @return string
     */
    public function getErrorMesssage()
    {
        return $this->ErrorMesssage;
    }
    /**
     * @return array
     */
    public function getProductInfoPackages()
    {
        return $this->ProductInfoPackages;
    }

    public function entry(): array
    {
        if (!$this->getProductInfoPackages()) {
            return [];
        }
        return current($this->getProductInfoPackages());
    }
}
