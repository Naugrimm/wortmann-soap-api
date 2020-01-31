<?php

use Naugrim\WortmannSoapApi\Client\ApiClientFactory;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIds;

require_once __DIR__.'/../vendor/autoload.php';
require __DIR__.'/.credentials.php';

$client = ApiClientFactory::factory($wsdl = 'https://www.wortmann.de/api/CustomerWebService.asmx?WSDL');

libxml_use_internal_errors(true);

$request = new GetStockAndPriceInformationByProductIds(
    $apiUsername,
    $apiPasswordHash,
    [6466010, 6466011]
);
echo "==>\n";
var_export($request);
echo "\n";

$response = $client->getStockAndPriceInformationByProductIds($request);

/** @var LibXMLError $error */
foreach (libxml_get_errors() as $error) {
    if ($error->level != LIBXML_ERR_WARNING) {
        echo "LibXML error: ".$error->level."\n";
    }
}

echo "<==\n";
var_export($response->entry());
echo "\n";
