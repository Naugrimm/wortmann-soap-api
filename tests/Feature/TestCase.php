<?php

namespace Naugrim\WortmannSoapApi\Tests\Feature;

use Naugrim\WortmannSoapApi\Provider\WortmannSoapApiProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * @param \Illuminate\Foundation\Application $app
     * @return list<class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            WortmannSoapApiProvider::class,
        ];
    }
}
