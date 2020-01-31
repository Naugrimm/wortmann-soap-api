<?php

use Naugrim\WortmannSoapApi\Bridge\Api;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIds;

require_once __DIR__.'/../vendor/autoload.php';

/**
 * .credentials.php fakes laravel's "config()" helper.
 * this is not needed when using the package in a laravel application.
 *
 *   function config($key)
 *   {
 *      $config = [
 *          'wortmann-soap-api.username' => 'YOUR_USERNAME',
 *          'wortmann-soap-api.password' => 'YOUR_PASSWORD',
 *          'wortmann-soap-api.wsdl' => 'https://www.wortmann.de/api/CustomerWebService.asmx?WSDL',
 *      ];
 *      return $config[$key];
 *   }
 */
require __DIR__.'/.credentials.php';

$api = new Api(['wsdl' => config('wortmann-soap-api.wsdl')]);

$response = $api->request(
    GetStockAndPriceInformationByProductIds::class,
    [6466010, 6466011]
);

echo "<==\n";
var_export($response->entry());
echo "\n";
die();
