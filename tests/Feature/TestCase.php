<?php

namespace Naugrim\WortmannSoapApi\Tests\Feature;

use Naugrim\WortmannSoapApi\Provider\WortmannSoapApiProvider;

class TestCase extends \Orchestra\Testbench\TestCase{
	public function getPackageProviders($app): array{
		return [
			WortmannSoapApiProvider::class
		];
	}

}