<?php

namespace Naugrim\WortmannSoapApi\Bridge;

use DateTimeInterface;
use InvalidArgumentException;
use Naugrim\WortmannSoapApi\Bridge\Client\Type\GetServiceInfoBySerialNo as GetServiceInfoBySerialNoFactory;
use Naugrim\WortmannSoapApi\Bridge\Client\Type\GetServiceInfoByWarrantyEndingDate as GetServiceInfoByWarrantyEndingDateFactory;
use Naugrim\WortmannSoapApi\Bridge\Client\Type\GetStockAndPriceInformationByProductId as GetStockAndPriceInformationByProductIdFactory;
use Naugrim\WortmannSoapApi\Bridge\Client\Type\GetStockAndPriceInformationByProductIds as GetStockAndPriceInformationByProductIdsFactory;
use Naugrim\WortmannSoapApi\Bridge\Client\Type\GetStockAndPriceInformationForForeignCustomerByProductIds as GetStockAndPriceInformationForForeignCustomerByProductIdsFactory;
use Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoBySerialNo;
use Naugrim\WortmannSoapApi\Client\Type\GetServiceInfoByWarrantyEndingDate;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductId;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationByProductIds;
use Naugrim\WortmannSoapApi\Client\Type\GetStockAndPriceInformationForForeignCustomerByProductIds;
use Phpro\SoapClient\Type\RequestInterface;

class RequestFactory
{
    /**
     * @param class-string<RequestInterface> $requestCls
     * @param mixed ...$params
     * @return RequestInterface
     */
    public static function create(string $requestCls, ...$params) : RequestInterface
    {
        return match ($requestCls) {
            GetServiceInfoByWarrantyEndingDate::class => GetServiceInfoByWarrantyEndingDateFactory::getInstance(
                self::dateTimeParameter($params, 0),
            ),
            GetStockAndPriceInformationByProductId::class => GetStockAndPriceInformationByProductIdFactory::getInstance(
                self::stringParameter($params, 0),
            ),
            GetStockAndPriceInformationByProductIds::class => GetStockAndPriceInformationByProductIdsFactory::getInstance(
                self::stringListParameter($params, 0),
            ),
            GetStockAndPriceInformationForForeignCustomerByProductIds::class => GetStockAndPriceInformationForForeignCustomerByProductIdsFactory::getInstance(
                self::stringListParameter($params, 0),
                self::stringParameter($params, 1),
            ),
            GetServiceInfoBySerialNo::class => GetServiceInfoBySerialNoFactory::getInstance(
                self::stringParameter($params, 0),
            ),
            default => new $requestCls(...$params),
        };
    }

    /**
     * @param array<int|string, mixed> $params
     */
    private static function stringParameter(array $params, int $index) : string
    {
        $value = $params[$index] ?? null;

        if (! is_string($value)) {
            throw new InvalidArgumentException(sprintf('Request parameter #%d must be a string.', $index + 1));
        }

        return $value;
    }

    /**
     * @param array<int|string, mixed> $params
     */
    private static function dateTimeParameter(array $params, int $index) : DateTimeInterface
    {
        $value = $params[$index] ?? null;

        if (! $value instanceof DateTimeInterface) {
            throw new InvalidArgumentException(sprintf('Request parameter #%d must be a DateTimeInterface.', $index + 1));
        }

        return $value;
    }

    /**
     * @param array<int|string, mixed> $params
     * @return list<string>
     */
    private static function stringListParameter(array $params, int $index) : array
    {
        $value = $params[$index] ?? null;

        if (! is_array($value) || ! array_is_list($value)) {
            throw new InvalidArgumentException(sprintf('Request parameter #%d must be a list of strings.', $index + 1));
        }

        foreach ($value as $item) {
            if (! is_string($item)) {
                throw new InvalidArgumentException(sprintf('Request parameter #%d must be a list of strings.', $index + 1));
            }
        }

        return $value;
    }
}
