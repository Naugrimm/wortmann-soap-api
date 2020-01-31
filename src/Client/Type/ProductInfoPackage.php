<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use DateTimeInterface;

class ProductInfoPackage
{

    /**
     * @var string
     */
    private $ProductId;

    /**
     * @var float
     */
    private $PriceB2B;

    /**
     * @var float
     */
    private $PriceB2BDiscounted;

    /**
     * @var float
     */
    private $PriceB2BDiscountPercent;

    /**
     * @var float
     */
    private $PriceB2BDiscountAmount;

    /**
     * @var float
     */
    private $PriceB2CinclVAT;

    /**
     * @var float
     */
    private $PriceB2CexclVAT;

    /**
     * @var string
     */
    private $Currency;

    /**
     * @var float
     */
    private $vatRate;

    /**
     * @var string
     */
    private $vatCountry;

    /**
     * @var int
     */
    private $Stock;

    /**
     * @var DateTimeInterface
     */
    private $StockNextDelivery;

    /**
     * @var int
     */
    private $StockNextDeliveryAccessVolume;

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->ProductId;
    }

    /**
     * @param string $ProductId
     * @return ProductInfoPackage
     */
    public function withProductId($ProductId)
    {
        $new = clone $this;
        $new->ProductId = $ProductId;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceB2B()
    {
        return $this->PriceB2B;
    }

    /**
     * @param float $PriceB2B
     * @return ProductInfoPackage
     */
    public function withPriceB2B($PriceB2B)
    {
        $new = clone $this;
        $new->PriceB2B = $PriceB2B;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceB2BDiscounted()
    {
        return $this->PriceB2BDiscounted;
    }

    /**
     * @param float $PriceB2BDiscounted
     * @return ProductInfoPackage
     */
    public function withPriceB2BDiscounted($PriceB2BDiscounted)
    {
        $new = clone $this;
        $new->PriceB2BDiscounted = $PriceB2BDiscounted;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceB2BDiscountPercent()
    {
        return $this->PriceB2BDiscountPercent;
    }

    /**
     * @param float $PriceB2BDiscountPercent
     * @return ProductInfoPackage
     */
    public function withPriceB2BDiscountPercent($PriceB2BDiscountPercent)
    {
        $new = clone $this;
        $new->PriceB2BDiscountPercent = $PriceB2BDiscountPercent;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceB2BDiscountAmount()
    {
        return $this->PriceB2BDiscountAmount;
    }

    /**
     * @param float $PriceB2BDiscountAmount
     * @return ProductInfoPackage
     */
    public function withPriceB2BDiscountAmount($PriceB2BDiscountAmount)
    {
        $new = clone $this;
        $new->PriceB2BDiscountAmount = $PriceB2BDiscountAmount;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceB2CinclVAT()
    {
        return $this->PriceB2CinclVAT;
    }

    /**
     * @param float $PriceB2CinclVAT
     * @return ProductInfoPackage
     */
    public function withPriceB2CinclVAT($PriceB2CinclVAT)
    {
        $new = clone $this;
        $new->PriceB2CinclVAT = $PriceB2CinclVAT;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceB2CexclVAT()
    {
        return $this->PriceB2CexclVAT;
    }

    /**
     * @param float $PriceB2CexclVAT
     * @return ProductInfoPackage
     */
    public function withPriceB2CexclVAT($PriceB2CexclVAT)
    {
        $new = clone $this;
        $new->PriceB2CexclVAT = $PriceB2CexclVAT;

        return $new;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return ProductInfoPackage
     */
    public function withCurrency($Currency)
    {
        $new = clone $this;
        $new->Currency = $Currency;

        return $new;
    }

    /**
     * @return float
     */
    public function getVatRate()
    {
        return $this->vatRate;
    }

    /**
     * @param float $vatRate
     * @return ProductInfoPackage
     */
    public function withVatRate($vatRate)
    {
        $new = clone $this;
        $new->vatRate = $vatRate;

        return $new;
    }

    /**
     * @return string
     */
    public function getVatCountry()
    {
        return $this->vatCountry;
    }

    /**
     * @param string $vatCountry
     * @return ProductInfoPackage
     */
    public function withVatCountry($vatCountry)
    {
        $new = clone $this;
        $new->vatCountry = $vatCountry;

        return $new;
    }

    /**
     * @return int
     */
    public function getStock()
    {
        return $this->Stock;
    }

    /**
     * @param int $Stock
     * @return ProductInfoPackage
     */
    public function withStock($Stock)
    {
        $new = clone $this;
        $new->Stock = $Stock;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getStockNextDelivery()
    {
        return $this->StockNextDelivery;
    }

    /**
     * @param DateTimeInterface $StockNextDelivery
     * @return ProductInfoPackage
     */
    public function withStockNextDelivery($StockNextDelivery)
    {
        $new = clone $this;
        $new->StockNextDelivery = $StockNextDelivery;

        return $new;
    }

    /**
     * @return int
     */
    public function getStockNextDeliveryAccessVolume()
    {
        return $this->StockNextDeliveryAccessVolume;
    }

    /**
     * @param int $StockNextDeliveryAccessVolume
     * @return ProductInfoPackage
     */
    public function withStockNextDeliveryAccessVolume($StockNextDeliveryAccessVolume)
    {
        $new = clone $this;
        $new->StockNextDeliveryAccessVolume = $StockNextDeliveryAccessVolume;

        return $new;
    }
}
