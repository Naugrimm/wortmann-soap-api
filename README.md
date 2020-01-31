# Wortmann SOAP API client

[Semantic Versioning](https://semver.org) and [git-flow](https://github.com/petervanderdoes/gitflow-avh) are used. 
Please create pull-requests against the `develop`-branch.


## Installation

```
composer require naugrim/wortmann-soap-api
```

### Laravel

The package gets auto-discovered. Set `WORTMANN_SOAP_API_USERNAME` and `WORTMANN_SOAP_API_PASSWORD` in your `.env`.

*Optional*: Publish the config files with:

```
php artisan vendor:publish --provider='Naugrim\WortmannSoapApi\Provider\WortmannSoapApiProv'
```

## Usage

### Laravel

An instance of the API client can be injected into your Controller (for example):

```php
<?php

use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIds;
use Naugrim\WortmannSoapApi\Contracts\WortmannSoapApi;

class MyController {

    /**
     * @var WortmannSoapApi
     */
    protected $client;

    /**
     * @param WortmannSoapApi $client
     */
    public function __construct(WortmannSoapApi $client)
    {
        $this->client = $client;
    }

    public function getStockInformation(array $productIds)
    {
        $response = $this->client->request(
            GetStockAndPriceInformationByProductIds::class,
            [6466010, 6466011]
        );
        
        // do something with the response
        dump($response->entry());
    }
}
```

### Standalone

See `demo/index.php`.