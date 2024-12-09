<?php
require_once 'vendor/autoload.php';

\VCR\VCR::configure()
    ->setCassettePath(__DIR__.'/fixtures/vcr')
    ->enableLibraryHooks(['soap', 'curl'])
;
\VCR\VCR::turnOn();
