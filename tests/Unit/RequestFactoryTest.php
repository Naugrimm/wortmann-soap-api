<?php

namespace Naugrim\WortmannSoapApi\Tests\Unit;

use DateTimeImmutable;
use Illuminate\Config\Repository;
use Illuminate\Container\Container;
use Illuminate\Support\Facades\Config;
use InvalidArgumentException;
use Naugrim\WortmannSoapApi\Bridge\RequestFactory;
use Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoBySerialNo;
use Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoByWarrantyEndingDate;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductId;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIds;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationForForeignCustomerByProductIds;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(RequestFactory::class)]
final class RequestFactoryTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $container = new Container();
        $container->instance('config', new Repository([
            'wortmann-soap-api' => [
                'username' => 'fixture-user',
                'password' => 'fixture-password',
            ],
        ]));

        Config::setFacadeApplication($container);
    }

    protected function tearDown(): void
    {
        Config::clearResolvedInstances();
        Config::setFacadeApplication(null);

        parent::tearDown();
    }

    #[Test]
    public function itCreatesSerialNumberRequestsWithConfiguredCredentials(): void
    {
        $request = RequestFactory::create(GetServiceInfoBySerialNo::class, 'SERIAL-123');

        self::assertInstanceOf(GetServiceInfoBySerialNo::class, $request);
        self::assertSame('fixture-user', $request->getUsername());
        self::assertSame('fixture-password', $request->getPasswordHash());
        self::assertSame('SERIAL-123', $request->getSerialNo());
    }

    #[Test]
    public function itCreatesWarrantyEndingDateRequests(): void
    {
        $date = new DateTimeImmutable('2026-05-28');

        $request = RequestFactory::create(GetServiceInfoByWarrantyEndingDate::class, $date);

        self::assertInstanceOf(GetServiceInfoByWarrantyEndingDate::class, $request);
        self::assertSame($date, $request->getWarrantyEndingDate());
    }

    #[Test]
    public function itWrapsProductIdListsInArrayOfString(): void
    {
        $request = RequestFactory::create(GetStockAndPriceInformationByProductIds::class, ['A123', 'B456']);

        self::assertInstanceOf(GetStockAndPriceInformationByProductIds::class, $request);
        self::assertSame(['A123', 'B456'], $request->getProductIds()?->getString());
    }

    #[Test]
    public function itCreatesForeignCustomerProductIdListRequests(): void
    {
        $request = RequestFactory::create(
            GetStockAndPriceInformationForForeignCustomerByProductIds::class,
            ['A123', 'B456'],
            'FOREIGN-123',
        );

        self::assertInstanceOf(GetStockAndPriceInformationForForeignCustomerByProductIds::class, $request);
        self::assertSame(['A123', 'B456'], $request->getProductIds()?->getString());
        self::assertSame('FOREIGN-123', $request->getForeignCustomerNumber());
    }

    #[Test]
    public function itRejectsInvalidStringParameters(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Request parameter #1 must be a string.');

        RequestFactory::create(GetStockAndPriceInformationByProductId::class, 123);
    }

    #[Test]
    public function itRejectsNonStringProductIdListItems(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Request parameter #1 must be a list of strings.');

        RequestFactory::create(GetStockAndPriceInformationByProductIds::class, ['A123', 456]);
    }

    #[Test]
    public function itRejectsInvalidForeignCustomerNumbers(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Request parameter #2 must be a string.');

        RequestFactory::create(
            GetStockAndPriceInformationForForeignCustomerByProductIds::class,
            ['A123'],
            123,
        );
    }
}
