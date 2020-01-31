<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

class ServiceInfo
{

    /**
     * @var string
     */
    private $ServiceItemNo;

    /**
     * @var string
     */
    private $ServiceItemDescription;

    /**
     * @var string
     */
    private $ServiceItemDescription2;

    /**
     * @var string
     */
    private $ItemNo;

    /**
     * @var string
     */
    private $ItemDescription;

    /**
     * @var string
     */
    private $CustomerNo;

    /**
     * @var string
     */
    private $SerialNo;

    /**
     * @var string
     */
    private $InvoiceNo;

    /**
     * @var string
     */
    private $InvoicePostingDate;

    /**
     * @var string
     */
    private $ShipmentNo;

    /**
     * @var string
     */
    private $ShipmentPostingDate;

    /**
     * @var string
     */
    private $ExternalDocumentNo;

    /**
     * @var string
     */
    private $Commission;

    /**
     * @var float
     */
    private $InvoiceUnitPrice;

    /**
     * @var string
     */
    private $InvoiceCurrencyCode;

    /**
     * @var string
     */
    private $InvoiceLineCommission;

    /**
     * @var string
     */
    private $WarrantyCode;

    /**
     * @var string
     */
    private $WarrantyDescription;

    /**
     * @var string
     */
    private $WarrantyStartingDate;

    /**
     * @var string
     */
    private $WarrantyEndingDate;

    /**
     * @var array
     */
    private $Components;

    /**
     * @return string
     */
    public function getServiceItemNo()
    {
        return $this->ServiceItemNo;
    }

    /**
     * @param string $ServiceItemNo
     * @return ServiceInfo
     */
    public function withServiceItemNo($ServiceItemNo)
    {
        $new = clone $this;
        $new->ServiceItemNo = $ServiceItemNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getServiceItemDescription()
    {
        return $this->ServiceItemDescription;
    }

    /**
     * @param string $ServiceItemDescription
     * @return ServiceInfo
     */
    public function withServiceItemDescription($ServiceItemDescription)
    {
        $new = clone $this;
        $new->ServiceItemDescription = $ServiceItemDescription;

        return $new;
    }

    /**
     * @return string
     */
    public function getServiceItemDescription2()
    {
        return $this->ServiceItemDescription2;
    }

    /**
     * @param string $ServiceItemDescription2
     * @return ServiceInfo
     */
    public function withServiceItemDescription2($ServiceItemDescription2)
    {
        $new = clone $this;
        $new->ServiceItemDescription2 = $ServiceItemDescription2;

        return $new;
    }

    /**
     * @return string
     */
    public function getItemNo()
    {
        return $this->ItemNo;
    }

    /**
     * @param string $ItemNo
     * @return ServiceInfo
     */
    public function withItemNo($ItemNo)
    {
        $new = clone $this;
        $new->ItemNo = $ItemNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getItemDescription()
    {
        return $this->ItemDescription;
    }

    /**
     * @param string $ItemDescription
     * @return ServiceInfo
     */
    public function withItemDescription($ItemDescription)
    {
        $new = clone $this;
        $new->ItemDescription = $ItemDescription;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomerNo()
    {
        return $this->CustomerNo;
    }

    /**
     * @param string $CustomerNo
     * @return ServiceInfo
     */
    public function withCustomerNo($CustomerNo)
    {
        $new = clone $this;
        $new->CustomerNo = $CustomerNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getSerialNo()
    {
        return $this->SerialNo;
    }

    /**
     * @param string $SerialNo
     * @return ServiceInfo
     */
    public function withSerialNo($SerialNo)
    {
        $new = clone $this;
        $new->SerialNo = $SerialNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getInvoiceNo()
    {
        return $this->InvoiceNo;
    }

    /**
     * @param string $InvoiceNo
     * @return ServiceInfo
     */
    public function withInvoiceNo($InvoiceNo)
    {
        $new = clone $this;
        $new->InvoiceNo = $InvoiceNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getInvoicePostingDate()
    {
        return $this->InvoicePostingDate;
    }

    /**
     * @param string $InvoicePostingDate
     * @return ServiceInfo
     */
    public function withInvoicePostingDate($InvoicePostingDate)
    {
        $new = clone $this;
        $new->InvoicePostingDate = $InvoicePostingDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipmentNo()
    {
        return $this->ShipmentNo;
    }

    /**
     * @param string $ShipmentNo
     * @return ServiceInfo
     */
    public function withShipmentNo($ShipmentNo)
    {
        $new = clone $this;
        $new->ShipmentNo = $ShipmentNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipmentPostingDate()
    {
        return $this->ShipmentPostingDate;
    }

    /**
     * @param string $ShipmentPostingDate
     * @return ServiceInfo
     */
    public function withShipmentPostingDate($ShipmentPostingDate)
    {
        $new = clone $this;
        $new->ShipmentPostingDate = $ShipmentPostingDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getExternalDocumentNo()
    {
        return $this->ExternalDocumentNo;
    }

    /**
     * @param string $ExternalDocumentNo
     * @return ServiceInfo
     */
    public function withExternalDocumentNo($ExternalDocumentNo)
    {
        $new = clone $this;
        $new->ExternalDocumentNo = $ExternalDocumentNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommission()
    {
        return $this->Commission;
    }

    /**
     * @param string $Commission
     * @return ServiceInfo
     */
    public function withCommission($Commission)
    {
        $new = clone $this;
        $new->Commission = $Commission;

        return $new;
    }

    /**
     * @return float
     */
    public function getInvoiceUnitPrice()
    {
        return $this->InvoiceUnitPrice;
    }

    /**
     * @param float $InvoiceUnitPrice
     * @return ServiceInfo
     */
    public function withInvoiceUnitPrice($InvoiceUnitPrice)
    {
        $new = clone $this;
        $new->InvoiceUnitPrice = $InvoiceUnitPrice;

        return $new;
    }

    /**
     * @return string
     */
    public function getInvoiceCurrencyCode()
    {
        return $this->InvoiceCurrencyCode;
    }

    /**
     * @param string $InvoiceCurrencyCode
     * @return ServiceInfo
     */
    public function withInvoiceCurrencyCode($InvoiceCurrencyCode)
    {
        $new = clone $this;
        $new->InvoiceCurrencyCode = $InvoiceCurrencyCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getInvoiceLineCommission()
    {
        return $this->InvoiceLineCommission;
    }

    /**
     * @param string $InvoiceLineCommission
     * @return ServiceInfo
     */
    public function withInvoiceLineCommission($InvoiceLineCommission)
    {
        $new = clone $this;
        $new->InvoiceLineCommission = $InvoiceLineCommission;

        return $new;
    }

    /**
     * @return string
     */
    public function getWarrantyCode()
    {
        return $this->WarrantyCode;
    }

    /**
     * @param string $WarrantyCode
     * @return ServiceInfo
     */
    public function withWarrantyCode($WarrantyCode)
    {
        $new = clone $this;
        $new->WarrantyCode = $WarrantyCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getWarrantyDescription()
    {
        return $this->WarrantyDescription;
    }

    /**
     * @param string $WarrantyDescription
     * @return ServiceInfo
     */
    public function withWarrantyDescription($WarrantyDescription)
    {
        $new = clone $this;
        $new->WarrantyDescription = $WarrantyDescription;

        return $new;
    }

    /**
     * @return string
     */
    public function getWarrantyStartingDate()
    {
        return $this->WarrantyStartingDate;
    }

    /**
     * @param string $WarrantyStartingDate
     * @return ServiceInfo
     */
    public function withWarrantyStartingDate($WarrantyStartingDate)
    {
        $new = clone $this;
        $new->WarrantyStartingDate = $WarrantyStartingDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getWarrantyEndingDate()
    {
        return $this->WarrantyEndingDate;
    }

    /**
     * @param string $WarrantyEndingDate
     * @return ServiceInfo
     */
    public function withWarrantyEndingDate($WarrantyEndingDate)
    {
        $new = clone $this;
        $new->WarrantyEndingDate = $WarrantyEndingDate;

        return $new;
    }

    /**
     * @return array
     */
    public function getComponents()
    {
        return $this->Components;
    }

    /**
     * @param array $Components
     * @return ServiceInfo
     */
    public function withComponents($Components)
    {
        $new = clone $this;
        $new->Components = $Components;

        return $new;
    }
}
