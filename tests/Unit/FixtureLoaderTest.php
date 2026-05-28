<?php

namespace Naugrim\WortmannSoapApi\Tests\Unit;

use DOMDocument;
use Naugrim\WortmannSoapApi\Tests\Fixtures\FixtureLoader;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use RuntimeException;

#[CoversClass(FixtureLoader::class)]
final class FixtureLoaderTest extends TestCase
{
    #[Test]
    public function itLoadsFixtureXmlAsAString(): void
    {
        $xml = FixtureLoader::xmlString('soap/example/minimal-soap-envelope.xml');

        self::assertStringContainsString('<soap:Envelope', $xml);
        self::assertStringContainsString('<Success>true</Success>', $xml);
    }

    #[Test]
    public function itLoadsFixtureXmlAsADomDocument(): void
    {
        $document = FixtureLoader::xmlDocument('soap/example/minimal-soap-envelope.xml');

        self::assertInstanceOf(DOMDocument::class, $document);
        self::assertSame('Envelope', $document->documentElement?->localName);
    }

    #[Test]
    public function itFailsClearlyWhenAFixtureDoesNotExist(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Fixture "soap/missing.xml" does not exist.');

        FixtureLoader::xmlString('soap/missing.xml');
    }

    #[Test]
    public function itFailsClearlyWhenXmlIsInvalid(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Fixture "soap/example/invalid.xml" is not valid XML');

        FixtureLoader::xmlDocument('soap/example/invalid.xml');
    }
}
