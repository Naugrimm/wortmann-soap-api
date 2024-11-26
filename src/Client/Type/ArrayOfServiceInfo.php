<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfServiceInfo
{
    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\ServiceInfo
     */
    private \Naugrim\WortmannSoapApi\Client\Type\ServiceInfo $ServiceInfo;

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\ServiceInfo
     */
    public function getServiceInfo(): \Naugrim\WortmannSoapApi\Client\Type\ServiceInfo
    {
        return $this->ServiceInfo;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\ServiceInfo $ServiceInfo
     * @return static
     */
    public function withServiceInfo(\Naugrim\WortmannSoapApi\Client\Type\ServiceInfo $ServiceInfo): static
    {
        $new = clone $this;
        $new->ServiceInfo = $ServiceInfo;

        return $new;
    }
}
