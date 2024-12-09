<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ArrayOfServiceInfo
{
    /**
     * @var null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\ServiceInfo>
     */
    private ?array $ServiceInfo = null;

    /**
     * @return null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\ServiceInfo>
     */
    public function getServiceInfo() : ?array
    {
        return $this->ServiceInfo;
    }

    /**
     * @param null | array<int<0,max>, \Naugrim\WortmannSoapApi\Client\Type\ServiceInfo> $ServiceInfo
     * @return static
     */
    public function withServiceInfo(?array $ServiceInfo) : static
    {
        $new = clone $this;
        $new->ServiceInfo = $ServiceInfo;

        return $new;
    }
}

