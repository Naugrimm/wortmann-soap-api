<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ServiceInfo
{
    /**
     * @var string
     */
    private string $ServiceItemNo;

    /**
     * @var string
     */
    private string $ServiceItemDescription;

    /**
     * @var string
     */
    private string $ServiceItemDescription2;

    /**
     * @var string
     */
    private string $ItemNo;

    /**
     * @var string
     */
    private string $ItemDescription;

    /**
     * @var string
     */
    private string $CustomerNo;

    /**
     * @var string
     */
    private string $SerialNo;

    /**
     * @var string
     */
    private string $InvoiceNo;

    /**
     * @var string
     */
    private string $InvoicePostingDate;

    /**
     * @var string
     */
    private string $ShipmentNo;

    /**
     * @var string
     */
    private string $ShipmentPostingDate;

    /**
     * @var string
     */
    private string $ExternalDocumentNo;

    /**
     * @var string
     */
    private string $Commission;

    /**
     * @var float
     */
    private float $InvoiceUnitPrice;

    /**
     * @var string
     */
    private string $InvoiceCurrencyCode;

    /**
     * @var string
     */
    private string $InvoiceLineCommission;

    /**
     * @var string
     */
    private string $WarrantyCode;

    /**
     * @var string
     */
    private string $WarrantyDescription;

    /**
     * @var string
     */
    private string $WarrantyStartingDate;

    /**
     * @var string
     */
    private string $WarrantyEndingDate;

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\ArrayOfComponent
     */
    private \Naugrim\WortmannSoapApi\Client\Type\ArrayOfComponent $Components;

    /**
     * @return string
     */
    public function getServiceItemNo() : string
    {
        return $this->ServiceItemNo;
    }

    /**
     * @param string $ServiceItemNo
     * @return static
     */
    public function withServiceItemNo(string $ServiceItemNo) : static
    {
        $new = clone $this;
        $new->ServiceItemNo = $ServiceItemNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getServiceItemDescription() : string
    {
        return $this->ServiceItemDescription;
    }

    /**
     * @param string $ServiceItemDescription
     * @return static
     */
    public function withServiceItemDescription(string $ServiceItemDescription) : static
    {
        $new = clone $this;
        $new->ServiceItemDescription = $ServiceItemDescription;

        return $new;
    }

    /**
     * @return string
     */
    public function getServiceItemDescription2() : string
    {
        return $this->ServiceItemDescription2;
    }

    /**
     * @param string $ServiceItemDescription2
     * @return static
     */
    public function withServiceItemDescription2(string $ServiceItemDescription2) : static
    {
        $new = clone $this;
        $new->ServiceItemDescription2 = $ServiceItemDescription2;

        return $new;
    }

    /**
     * @return string
     */
    public function getItemNo() : string
    {
        return $this->ItemNo;
    }

    /**
     * @param string $ItemNo
     * @return static
     */
    public function withItemNo(string $ItemNo) : static
    {
        $new = clone $this;
        $new->ItemNo = $ItemNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getItemDescription() : string
    {
        return $this->ItemDescription;
    }

    /**
     * @param string $ItemDescription
     * @return static
     */
    public function withItemDescription(string $ItemDescription) : static
    {
        $new = clone $this;
        $new->ItemDescription = $ItemDescription;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomerNo() : string
    {
        return $this->CustomerNo;
    }

    /**
     * @param string $CustomerNo
     * @return static
     */
    public function withCustomerNo(string $CustomerNo) : static
    {
        $new = clone $this;
        $new->CustomerNo = $CustomerNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getSerialNo() : string
    {
        return $this->SerialNo;
    }

    /**
     * @param string $SerialNo
     * @return static
     */
    public function withSerialNo(string $SerialNo) : static
    {
        $new = clone $this;
        $new->SerialNo = $SerialNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getInvoiceNo() : string
    {
        return $this->InvoiceNo;
    }

    /**
     * @param string $InvoiceNo
     * @return static
     */
    public function withInvoiceNo(string $InvoiceNo) : static
    {
        $new = clone $this;
        $new->InvoiceNo = $InvoiceNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getInvoicePostingDate() : string
    {
        return $this->InvoicePostingDate;
    }

    /**
     * @param string $InvoicePostingDate
     * @return static
     */
    public function withInvoicePostingDate(string $InvoicePostingDate) : static
    {
        $new = clone $this;
        $new->InvoicePostingDate = $InvoicePostingDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipmentNo() : string
    {
        return $this->ShipmentNo;
    }

    /**
     * @param string $ShipmentNo
     * @return static
     */
    public function withShipmentNo(string $ShipmentNo) : static
    {
        $new = clone $this;
        $new->ShipmentNo = $ShipmentNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipmentPostingDate() : string
    {
        return $this->ShipmentPostingDate;
    }

    /**
     * @param string $ShipmentPostingDate
     * @return static
     */
    public function withShipmentPostingDate(string $ShipmentPostingDate) : static
    {
        $new = clone $this;
        $new->ShipmentPostingDate = $ShipmentPostingDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getExternalDocumentNo() : string
    {
        return $this->ExternalDocumentNo;
    }

    /**
     * @param string $ExternalDocumentNo
     * @return static
     */
    public function withExternalDocumentNo(string $ExternalDocumentNo) : static
    {
        $new = clone $this;
        $new->ExternalDocumentNo = $ExternalDocumentNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommission() : string
    {
        return $this->Commission;
    }

    /**
     * @param string $Commission
     * @return static
     */
    public function withCommission(string $Commission) : static
    {
        $new = clone $this;
        $new->Commission = $Commission;

        return $new;
    }

    /**
     * @return float
     */
    public function getInvoiceUnitPrice() : float
    {
        return $this->InvoiceUnitPrice;
    }

    /**
     * @param float $InvoiceUnitPrice
     * @return static
     */
    public function withInvoiceUnitPrice(float $InvoiceUnitPrice) : static
    {
        $new = clone $this;
        $new->InvoiceUnitPrice = $InvoiceUnitPrice;

        return $new;
    }

    /**
     * @return string
     */
    public function getInvoiceCurrencyCode() : string
    {
        return $this->InvoiceCurrencyCode;
    }

    /**
     * @param string $InvoiceCurrencyCode
     * @return static
     */
    public function withInvoiceCurrencyCode(string $InvoiceCurrencyCode) : static
    {
        $new = clone $this;
        $new->InvoiceCurrencyCode = $InvoiceCurrencyCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getInvoiceLineCommission() : string
    {
        return $this->InvoiceLineCommission;
    }

    /**
     * @param string $InvoiceLineCommission
     * @return static
     */
    public function withInvoiceLineCommission(string $InvoiceLineCommission) : static
    {
        $new = clone $this;
        $new->InvoiceLineCommission = $InvoiceLineCommission;

        return $new;
    }

    /**
     * @return string
     */
    public function getWarrantyCode() : string
    {
        return $this->WarrantyCode;
    }

    /**
     * @param string $WarrantyCode
     * @return static
     */
    public function withWarrantyCode(string $WarrantyCode) : static
    {
        $new = clone $this;
        $new->WarrantyCode = $WarrantyCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getWarrantyDescription() : string
    {
        return $this->WarrantyDescription;
    }

    /**
     * @param string $WarrantyDescription
     * @return static
     */
    public function withWarrantyDescription(string $WarrantyDescription) : static
    {
        $new = clone $this;
        $new->WarrantyDescription = $WarrantyDescription;

        return $new;
    }

    /**
     * @return string
     */
    public function getWarrantyStartingDate() : string
    {
        return $this->WarrantyStartingDate;
    }

    /**
     * @param string $WarrantyStartingDate
     * @return static
     */
    public function withWarrantyStartingDate(string $WarrantyStartingDate) : static
    {
        $new = clone $this;
        $new->WarrantyStartingDate = $WarrantyStartingDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getWarrantyEndingDate() : string
    {
        return $this->WarrantyEndingDate;
    }

    /**
     * @param string $WarrantyEndingDate
     * @return static
     */
    public function withWarrantyEndingDate(string $WarrantyEndingDate) : static
    {
        $new = clone $this;
        $new->WarrantyEndingDate = $WarrantyEndingDate;

        return $new;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\ArrayOfComponent
     */
    public function getComponents() : \Naugrim\WortmannSoapApi\Client\Type\ArrayOfComponent
    {
        return $this->Components;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\ArrayOfComponent $Components
     * @return static
     */
    public function withComponents(\Naugrim\WortmannSoapApi\Client\Type\ArrayOfComponent $Components) : static
    {
        $new = clone $this;
        $new->Components = $Components;

        return $new;
    }
}

