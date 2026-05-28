<?php

namespace Naugrim\WortmannSoapApi\Tests\Fixtures;

use DOMDocument;
use RuntimeException;

final class FixtureLoader
{
    public static function xmlString(string $relativePath): string
    {
        $path = self::path($relativePath);
        $contents = file_get_contents($path);

        if ($contents === false) {
            throw new RuntimeException(sprintf('Fixture "%s" could not be read.', $relativePath));
        }

        return $contents;
    }

    public static function xmlDocument(string $relativePath): DOMDocument
    {
        $document = new DOMDocument();
        $previous = libxml_use_internal_errors(true);
        $loaded = $document->loadXML(self::xmlString($relativePath));
        $errors = libxml_get_errors();
        libxml_clear_errors();
        libxml_use_internal_errors($previous);

        if (! $loaded) {
            $message = $errors[0]->message ?? 'Unknown XML parse error.';

            throw new RuntimeException(sprintf('Fixture "%s" is not valid XML: %s', $relativePath, trim($message)));
        }

        return $document;
    }

    private static function path(string $relativePath): string
    {
        $path = __DIR__ . '/' . ltrim($relativePath, '/');

        if (! is_file($path)) {
            throw new RuntimeException(sprintf('Fixture "%s" does not exist.', $relativePath));
        }

        return $path;
    }
}
