<?php

namespace Naugrim\WortmannSoapApi\Client\Contracts;

interface ApiResponseContract
{
    public function entry(): array;
}
