<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ProductInfoPackage
{
    /**
     * @var string
     */
    private string $ProductId;

    /**
     * @var float
     */
    private float $PriceB2B;

    /**
     * @var float
     */
    private float $PriceB2BDiscounted;

    /**
     * @var float
     */
    private float $PriceB2BDiscountPercent;

    /**
     * @var float
     */
    private float $PriceB2BDiscountAmount;

    /**
     * @var float
     */
    private float $PriceB2CinclVAT;

    /**
     * @var float
     */
    private float $PriceB2CexclVAT;

    /**
     * @var string
     */
    private string $Currency;

    /**
     * @var float
     */
    private float $vatRate;

    /**
     * @var string
     */
    private string $vatCountry;

    /**
     * @var int
     */
    private int $Stock;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $StockNextDelivery;

    /**
     * @var int
     */
    private int $StockNextDeliveryAccessVolume;

    /**
     * @return string
     */
    public function getProductId() : string
    {
        return $this->ProductId;
    }

    /**
     * @param string $ProductId
     * @return static
     */
    public function withProductId(string $ProductId) : static
    {
        $new = clone $this;
        $new->ProductId = $ProductId;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceB2B() : float
    {
        return $this->PriceB2B;
    }

    /**
     * @param float $PriceB2B
     * @return static
     */
    public function withPriceB2B(float $PriceB2B) : static
    {
        $new = clone $this;
        $new->PriceB2B = $PriceB2B;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceB2BDiscounted() : float
    {
        return $this->PriceB2BDiscounted;
    }

    /**
     * @param float $PriceB2BDiscounted
     * @return static
     */
    public function withPriceB2BDiscounted(float $PriceB2BDiscounted) : static
    {
        $new = clone $this;
        $new->PriceB2BDiscounted = $PriceB2BDiscounted;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceB2BDiscountPercent() : float
    {
        return $this->PriceB2BDiscountPercent;
    }

    /**
     * @param float $PriceB2BDiscountPercent
     * @return static
     */
    public function withPriceB2BDiscountPercent(float $PriceB2BDiscountPercent) : static
    {
        $new = clone $this;
        $new->PriceB2BDiscountPercent = $PriceB2BDiscountPercent;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceB2BDiscountAmount() : float
    {
        return $this->PriceB2BDiscountAmount;
    }

    /**
     * @param float $PriceB2BDiscountAmount
     * @return static
     */
    public function withPriceB2BDiscountAmount(float $PriceB2BDiscountAmount) : static
    {
        $new = clone $this;
        $new->PriceB2BDiscountAmount = $PriceB2BDiscountAmount;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceB2CinclVAT() : float
    {
        return $this->PriceB2CinclVAT;
    }

    /**
     * @param float $PriceB2CinclVAT
     * @return static
     */
    public function withPriceB2CinclVAT(float $PriceB2CinclVAT) : static
    {
        $new = clone $this;
        $new->PriceB2CinclVAT = $PriceB2CinclVAT;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceB2CexclVAT() : float
    {
        return $this->PriceB2CexclVAT;
    }

    /**
     * @param float $PriceB2CexclVAT
     * @return static
     */
    public function withPriceB2CexclVAT(float $PriceB2CexclVAT) : static
    {
        $new = clone $this;
        $new->PriceB2CexclVAT = $PriceB2CexclVAT;

        return $new;
    }

    /**
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return static
     */
    public function withCurrency(string $Currency) : static
    {
        $new = clone $this;
        $new->Currency = $Currency;

        return $new;
    }

    /**
     * @return float
     */
    public function getVatRate() : float
    {
        return $this->vatRate;
    }

    /**
     * @param float $vatRate
     * @return static
     */
    public function withVatRate(float $vatRate) : static
    {
        $new = clone $this;
        $new->vatRate = $vatRate;

        return $new;
    }

    /**
     * @return string
     */
    public function getVatCountry() : string
    {
        return $this->vatCountry;
    }

    /**
     * @param string $vatCountry
     * @return static
     */
    public function withVatCountry(string $vatCountry) : static
    {
        $new = clone $this;
        $new->vatCountry = $vatCountry;

        return $new;
    }

    /**
     * @return int
     */
    public function getStock() : int
    {
        return $this->Stock;
    }

    /**
     * @param int $Stock
     * @return static
     */
    public function withStock(int $Stock) : static
    {
        $new = clone $this;
        $new->Stock = $Stock;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStockNextDelivery() : \DateTimeInterface
    {
        return $this->StockNextDelivery;
    }

    /**
     * @param \DateTimeInterface $StockNextDelivery
     * @return static
     */
    public function withStockNextDelivery(\DateTimeInterface $StockNextDelivery) : static
    {
        $new = clone $this;
        $new->StockNextDelivery = $StockNextDelivery;

        return $new;
    }

    /**
     * @return int
     */
    public function getStockNextDeliveryAccessVolume() : int
    {
        return $this->StockNextDeliveryAccessVolume;
    }

    /**
     * @param int $StockNextDeliveryAccessVolume
     * @return static
     */
    public function withStockNextDeliveryAccessVolume(int $StockNextDeliveryAccessVolume) : static
    {
        $new = clone $this;
        $new->StockNextDeliveryAccessVolume = $StockNextDeliveryAccessVolume;

        return $new;
    }
}

