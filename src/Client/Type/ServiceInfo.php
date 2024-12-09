<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ServiceInfo
{
    /**
     * @var null | string
     */
    private ?string $ServiceItemNo = null;

    /**
     * @var null | string
     */
    private ?string $ServiceItemDescription = null;

    /**
     * @var null | string
     */
    private ?string $ServiceItemDescription2 = null;

    /**
     * @var null | string
     */
    private ?string $ItemNo = null;

    /**
     * @var null | string
     */
    private ?string $ItemDescription = null;

    /**
     * @var null | string
     */
    private ?string $CustomerNo = null;

    /**
     * @var null | string
     */
    private ?string $SerialNo = null;

    /**
     * @var null | string
     */
    private ?string $InvoiceNo = null;

    /**
     * @var null | string
     */
    private ?string $InvoicePostingDate = null;

    /**
     * @var null | string
     */
    private ?string $ShipmentNo = null;

    /**
     * @var null | string
     */
    private ?string $ShipmentPostingDate = null;

    /**
     * @var null | string
     */
    private ?string $ExternalDocumentNo = null;

    /**
     * @var null | string
     */
    private ?string $Commission = null;

    /**
     * @var null | float
     */
    private ?float $InvoiceUnitPrice = null;

    /**
     * @var null | string
     */
    private ?string $InvoiceCurrencyCode = null;

    /**
     * @var null | string
     */
    private ?string $InvoiceLineCommission = null;

    /**
     * @var null | string
     */
    private ?string $WarrantyCode = null;

    /**
     * @var null | string
     */
    private ?string $WarrantyDescription = null;

    /**
     * @var null | string
     */
    private ?string $WarrantyStartingDate = null;

    /**
     * @var null | string
     */
    private ?string $WarrantyEndingDate = null;

    /**
     * @var null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfComponent
     */
    private ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfComponent $Components = null;

    /**
     * @return null | string
     */
    public function getServiceItemNo() : ?string
    {
        return $this->ServiceItemNo;
    }

    /**
     * @param null | string $ServiceItemNo
     * @return static
     */
    public function withServiceItemNo(?string $ServiceItemNo) : static
    {
        $new = clone $this;
        $new->ServiceItemNo = $ServiceItemNo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getServiceItemDescription() : ?string
    {
        return $this->ServiceItemDescription;
    }

    /**
     * @param null | string $ServiceItemDescription
     * @return static
     */
    public function withServiceItemDescription(?string $ServiceItemDescription) : static
    {
        $new = clone $this;
        $new->ServiceItemDescription = $ServiceItemDescription;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getServiceItemDescription2() : ?string
    {
        return $this->ServiceItemDescription2;
    }

    /**
     * @param null | string $ServiceItemDescription2
     * @return static
     */
    public function withServiceItemDescription2(?string $ServiceItemDescription2) : static
    {
        $new = clone $this;
        $new->ServiceItemDescription2 = $ServiceItemDescription2;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getItemNo() : ?string
    {
        return $this->ItemNo;
    }

    /**
     * @param null | string $ItemNo
     * @return static
     */
    public function withItemNo(?string $ItemNo) : static
    {
        $new = clone $this;
        $new->ItemNo = $ItemNo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getItemDescription() : ?string
    {
        return $this->ItemDescription;
    }

    /**
     * @param null | string $ItemDescription
     * @return static
     */
    public function withItemDescription(?string $ItemDescription) : static
    {
        $new = clone $this;
        $new->ItemDescription = $ItemDescription;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCustomerNo() : ?string
    {
        return $this->CustomerNo;
    }

    /**
     * @param null | string $CustomerNo
     * @return static
     */
    public function withCustomerNo(?string $CustomerNo) : static
    {
        $new = clone $this;
        $new->CustomerNo = $CustomerNo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSerialNo() : ?string
    {
        return $this->SerialNo;
    }

    /**
     * @param null | string $SerialNo
     * @return static
     */
    public function withSerialNo(?string $SerialNo) : static
    {
        $new = clone $this;
        $new->SerialNo = $SerialNo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getInvoiceNo() : ?string
    {
        return $this->InvoiceNo;
    }

    /**
     * @param null | string $InvoiceNo
     * @return static
     */
    public function withInvoiceNo(?string $InvoiceNo) : static
    {
        $new = clone $this;
        $new->InvoiceNo = $InvoiceNo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getInvoicePostingDate() : ?string
    {
        return $this->InvoicePostingDate;
    }

    /**
     * @param null | string $InvoicePostingDate
     * @return static
     */
    public function withInvoicePostingDate(?string $InvoicePostingDate) : static
    {
        $new = clone $this;
        $new->InvoicePostingDate = $InvoicePostingDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getShipmentNo() : ?string
    {
        return $this->ShipmentNo;
    }

    /**
     * @param null | string $ShipmentNo
     * @return static
     */
    public function withShipmentNo(?string $ShipmentNo) : static
    {
        $new = clone $this;
        $new->ShipmentNo = $ShipmentNo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getShipmentPostingDate() : ?string
    {
        return $this->ShipmentPostingDate;
    }

    /**
     * @param null | string $ShipmentPostingDate
     * @return static
     */
    public function withShipmentPostingDate(?string $ShipmentPostingDate) : static
    {
        $new = clone $this;
        $new->ShipmentPostingDate = $ShipmentPostingDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getExternalDocumentNo() : ?string
    {
        return $this->ExternalDocumentNo;
    }

    /**
     * @param null | string $ExternalDocumentNo
     * @return static
     */
    public function withExternalDocumentNo(?string $ExternalDocumentNo) : static
    {
        $new = clone $this;
        $new->ExternalDocumentNo = $ExternalDocumentNo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCommission() : ?string
    {
        return $this->Commission;
    }

    /**
     * @param null | string $Commission
     * @return static
     */
    public function withCommission(?string $Commission) : static
    {
        $new = clone $this;
        $new->Commission = $Commission;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getInvoiceUnitPrice() : ?float
    {
        return $this->InvoiceUnitPrice;
    }

    /**
     * @param null | float $InvoiceUnitPrice
     * @return static
     */
    public function withInvoiceUnitPrice(?float $InvoiceUnitPrice) : static
    {
        $new = clone $this;
        $new->InvoiceUnitPrice = $InvoiceUnitPrice;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getInvoiceCurrencyCode() : ?string
    {
        return $this->InvoiceCurrencyCode;
    }

    /**
     * @param null | string $InvoiceCurrencyCode
     * @return static
     */
    public function withInvoiceCurrencyCode(?string $InvoiceCurrencyCode) : static
    {
        $new = clone $this;
        $new->InvoiceCurrencyCode = $InvoiceCurrencyCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getInvoiceLineCommission() : ?string
    {
        return $this->InvoiceLineCommission;
    }

    /**
     * @param null | string $InvoiceLineCommission
     * @return static
     */
    public function withInvoiceLineCommission(?string $InvoiceLineCommission) : static
    {
        $new = clone $this;
        $new->InvoiceLineCommission = $InvoiceLineCommission;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getWarrantyCode() : ?string
    {
        return $this->WarrantyCode;
    }

    /**
     * @param null | string $WarrantyCode
     * @return static
     */
    public function withWarrantyCode(?string $WarrantyCode) : static
    {
        $new = clone $this;
        $new->WarrantyCode = $WarrantyCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getWarrantyDescription() : ?string
    {
        return $this->WarrantyDescription;
    }

    /**
     * @param null | string $WarrantyDescription
     * @return static
     */
    public function withWarrantyDescription(?string $WarrantyDescription) : static
    {
        $new = clone $this;
        $new->WarrantyDescription = $WarrantyDescription;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getWarrantyStartingDate() : ?string
    {
        return $this->WarrantyStartingDate;
    }

    /**
     * @param null | string $WarrantyStartingDate
     * @return static
     */
    public function withWarrantyStartingDate(?string $WarrantyStartingDate) : static
    {
        $new = clone $this;
        $new->WarrantyStartingDate = $WarrantyStartingDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getWarrantyEndingDate() : ?string
    {
        return $this->WarrantyEndingDate;
    }

    /**
     * @param null | string $WarrantyEndingDate
     * @return static
     */
    public function withWarrantyEndingDate(?string $WarrantyEndingDate) : static
    {
        $new = clone $this;
        $new->WarrantyEndingDate = $WarrantyEndingDate;

        return $new;
    }

    /**
     * @return null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfComponent
     */
    public function getComponents() : ?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfComponent
    {
        return $this->Components;
    }

    /**
     * @param null | \Naugrim\WortmannSoapApi\Client\Type\ArrayOfComponent $Components
     * @return static
     */
    public function withComponents(?\Naugrim\WortmannSoapApi\Client\Type\ArrayOfComponent $Components) : static
    {
        $new = clone $this;
        $new->Components = $Components;

        return $new;
    }
}

