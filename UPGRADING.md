# Upgrading from 1.x to 2.x

This document lists breaking changes introduced in `2.x`

## Requirements

The package now requires PHP `^8.4`.

Projects running PHP 8.2 or 8.3 must upgrade PHP before requiring this version.

Laravel support now starts at Illuminate `^11.0`.

Projects using Laravel 9 or 10 must either stay on `naugrim/wortmann-soap-api` `1.2.x` or upgrade Laravel first. Laravel 11, 12 and 13 are supported by the new constraint.

## SOAP Client Stack

The generated SOAP client was upgraded from `phpro/soap-client` `^3.0` to `^6.0`.

Most consumers that only inject `Naugrim\WortmannSoapApi\Contracts\WortmannSoapApi` and call `request()` do not need to change SOAP client code. Consumers with custom factories, custom transports, or direct classmap usage must update to the new SOAP client APIs.

`Naugrim\WortmannSoapApi\Client\ApiClassmap::getCollection()` has been removed.

Use `ApiClassmap::types()` and `ApiClassmap::enums()` instead:

```php
use Naugrim\WortmannSoapApi\Client\ApiClassmap;
use Soap\Encoding\EncoderRegistry;

$encoderRegistry = EncoderRegistry::default()
    ->addClassMapCollection(ApiClassmap::types())
    ->addBackedEnumClassMapCollection(ApiClassmap::enums());
```

Custom factories should follow the new `ApiClientFactory` structure based on `Phpro\SoapClient\Soap\EngineOptions`, `Soap\Encoding\EncoderRegistry`, and the PSR-18 transport stack.

## API Construction

`Naugrim\WortmannSoapApi\Bridge\Api` no longer accepts an omitted config argument.

Replace direct construction without config:

```php
new Api();
```

with an explicit WSDL config:

```php
new Api([
    'wsdl' => 'https://www.wortmann.de/api/CustomerWebService.asmx?WSDL',
]);
```

Laravel consumers should prefer injecting `Naugrim\WortmannSoapApi\Contracts\WortmannSoapApi` from the service container.

## Laravel Configuration

The Laravel bridge now reads credentials with `Config::string()`.

`wortmann-soap-api.username` and `wortmann-soap-api.password` must be configured as strings. Missing or non-string values now fail locally instead of being passed through to the generated request objects.

Set both environment variables explicitly:

```dotenv
WORTMANN_SOAP_API_USERNAME=your-username
WORTMANN_SOAP_API_PASSWORD=your-password
```

The service provider also validates `wortmann-soap-api.wsdl`. If you override the config, keep `wsdl` as a non-empty string.

## Request Arguments

`Naugrim\WortmannSoapApi\Bridge\RequestFactory` now validates the arguments passed to known request classes before creating generated SOAP requests.

Use strings for product IDs, serial numbers and foreign customer numbers:

```php
$api->request(GetStockAndPriceInformationByProductIds::class, [
    '6466010',
    '6466011',
]);
```

Do not pass integer product IDs:

```php
$api->request(GetStockAndPriceInformationByProductIds::class, [
    6466010,
    6466011,
]);
```

Requests that accept multiple product IDs require a list of strings. Associative arrays and arrays containing non-string values now throw `InvalidArgumentException`.

`GetServiceInfoByWarrantyEndingDate` still requires a `DateTimeInterface` value.

For custom request classes that are not handled by the bridge, `RequestFactory::create()` now forwards variadic arguments to the request constructor:

```php
new $requestClass(...$params);
```

Previously, the fallback passed the full parameter array as one constructor argument. If you relied on that fallback, update the custom request constructor or pass a single array argument intentionally.
