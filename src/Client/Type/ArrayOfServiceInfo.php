<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfServiceInfo
{

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\ServiceInfo
     */
    private $ServiceInfo;

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\ServiceInfo
     */
    public function getServiceInfo()
    {
        return $this->ServiceInfo;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\ServiceInfo $ServiceInfo
     * @return ArrayOfServiceInfo
     */
    public function withServiceInfo($ServiceInfo)
    {
        $new = clone $this;
        $new->ServiceInfo = $ServiceInfo;

        return $new;
    }


}

