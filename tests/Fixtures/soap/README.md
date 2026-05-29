# SOAP XML fixtures

Place sanitized raw SOAP responses from the Wortmann production API in this directory.

Recommended layout:

```text
tests/Fixtures/soap/
  get-service-info-by-serial-no/
    success.xml
    not-found.xml
  get-stock-and-price-information-by-product-id/
    success.xml
    product-not-found.xml
  get-stock-and-price-information-by-product-ids/
    multiple-products.xml
  get-stock-and-price-information-for-foreign-customer-by-product-ids/
    success.xml  # only for credentials permitted to use this operation
```

Before committing fixtures:

- Remove credentials, customer numbers, personal data, and sensitive commercial terms.
- Replace sensitive values with synthetic, style-preserving fantasy values when shape matters for parser or mapping coverage.
- Keep the original SOAP envelope and namespaces when possible.
- Prefer one representative success fixture and one representative error/empty fixture per API operation.
- Add a short note beside unusual upstream field names, such as `ErrorMesssage`, when a fixture demonstrates them.

The committed fixtures may intentionally contain realistic-looking product IDs,
serial numbers, customer numbers, order numbers, and prices. These are synthetic
values that mimic the format of production responses while avoiding real
customer, credential, and commercial data.

## Generate fixtures with `curl`

These commands call the production SOAP endpoint and write the raw SOAP response
to the expected fixture path.

> **Important:** sanitize the generated XML before committing it. Remove
> credentials, customer numbers, personal data, and sensitive pricing or
> commercial terms.

### Environment variables

Set credentials once before running any fixture command:

```bash
export WORTMANN_SOAP_API_USERNAME="your-username"
export WORTMANN_SOAP_API_PASSWORD_HASH="your-password-hash"
```

The package config key is named `password`, but the SOAP request element is
`PasswordHash`. Use the hashed value expected by the Wortmann API.

Create the fixture directories:

```bash
mkdir -p \
  tests/Fixtures/soap/get-service-info-by-serial-no \
  tests/Fixtures/soap/get-service-info-by-warranty-ending-date \
  tests/Fixtures/soap/get-stock-and-price-information-by-product-id \
  tests/Fixtures/soap/get-stock-and-price-information-by-product-ids \
  tests/Fixtures/soap/get-stock-and-price-information-for-foreign-customer-by-product-ids
```

### `GetStockAndPriceInformationByProductId`

```bash
export WORTMANN_PRODUCT_ID="product-id"

curl --fail-with-body --silent --show-error \
  --request POST "https://www.wortmann.de/api/CustomerWebService.asmx" \
  --header "Content-Type: text/xml; charset=utf-8" \
  --header "SOAPAction: \"Wortmann.CustomerWebService/GetStockAndPriceInformationByProductId\"" \
  --data-binary @- \
  --output "tests/Fixtures/soap/get-stock-and-price-information-by-product-id/success.xml" <<XML
<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <GetStockAndPriceInformationByProductId xmlns="Wortmann.CustomerWebService">
      <Username>${WORTMANN_SOAP_API_USERNAME}</Username>
      <PasswordHash>${WORTMANN_SOAP_API_PASSWORD_HASH}</PasswordHash>
      <ProductId>${WORTMANN_PRODUCT_ID}</ProductId>
    </GetStockAndPriceInformationByProductId>
  </soap:Body>
</soap:Envelope>
XML
```

For an error/empty fixture, repeat with a product ID that should not exist and
write to `product-not-found.xml`.

### `GetStockAndPriceInformationByProductIds`

```bash
export WORTMANN_PRODUCT_ID_1="first-product-id"
export WORTMANN_PRODUCT_ID_2="second-product-id"

curl --fail-with-body --silent --show-error \
  --request POST "https://www.wortmann.de/api/CustomerWebService.asmx" \
  --header "Content-Type: text/xml; charset=utf-8" \
  --header "SOAPAction: \"Wortmann.CustomerWebService/GetStockAndPriceInformationByProductIds\"" \
  --data-binary @- \
  --output "tests/Fixtures/soap/get-stock-and-price-information-by-product-ids/multiple-products.xml" <<XML
<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <GetStockAndPriceInformationByProductIds xmlns="Wortmann.CustomerWebService">
      <Username>${WORTMANN_SOAP_API_USERNAME}</Username>
      <PasswordHash>${WORTMANN_SOAP_API_PASSWORD_HASH}</PasswordHash>
      <ProductIds>
        <string>${WORTMANN_PRODUCT_ID_1}</string>
        <string>${WORTMANN_PRODUCT_ID_2}</string>
      </ProductIds>
    </GetStockAndPriceInformationByProductIds>
  </soap:Body>
</soap:Envelope>
XML
```

### `GetStockAndPriceInformationForForeignCustomerByProductIds`

The current project credentials are not permitted to use this operation. Keep
this command as reference for accounts that have foreign-customer access, but do
not expect it to produce a successful fixture with the current credentials.

```bash
export WORTMANN_PRODUCT_ID_1="first-product-id"
export WORTMANN_PRODUCT_ID_2="second-product-id"
export WORTMANN_FOREIGN_CUSTOMER_NUMBER="foreign-customer-number"

curl --fail-with-body --silent --show-error \
  --request POST "https://www.wortmann.de/api/CustomerWebService.asmx" \
  --header "Content-Type: text/xml; charset=utf-8" \
  --header "SOAPAction: \"Wortmann.CustomerWebService/GetStockAndPriceInformationForForeignCustomerByProductIds\"" \
  --data-binary @- \
  --output "tests/Fixtures/soap/get-stock-and-price-information-for-foreign-customer-by-product-ids/success.xml" <<XML
<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <GetStockAndPriceInformationForForeignCustomerByProductIds xmlns="Wortmann.CustomerWebService">
      <Username>${WORTMANN_SOAP_API_USERNAME}</Username>
      <PasswordHash>${WORTMANN_SOAP_API_PASSWORD_HASH}</PasswordHash>
      <ProductIds>
        <string>${WORTMANN_PRODUCT_ID_1}</string>
        <string>${WORTMANN_PRODUCT_ID_2}</string>
      </ProductIds>
      <ForeignCustomerNumber>${WORTMANN_FOREIGN_CUSTOMER_NUMBER}</ForeignCustomerNumber>
    </GetStockAndPriceInformationForForeignCustomerByProductIds>
  </soap:Body>
</soap:Envelope>
XML
```

### `GetServiceInfoBySerialNo`

```bash
export WORTMANN_SERIAL_NO="serial-number"

curl --fail-with-body --silent --show-error \
  --request POST "https://www.wortmann.de/api/CustomerWebService.asmx" \
  --header "Content-Type: text/xml; charset=utf-8" \
  --header "SOAPAction: \"Wortmann.CustomerWebService/GetServiceInfoBySerialNo\"" \
  --data-binary @- \
  --output "tests/Fixtures/soap/get-service-info-by-serial-no/success.xml" <<XML
<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <GetServiceInfoBySerialNo xmlns="Wortmann.CustomerWebService">
      <Username>${WORTMANN_SOAP_API_USERNAME}</Username>
      <PasswordHash>${WORTMANN_SOAP_API_PASSWORD_HASH}</PasswordHash>
      <SerialNo>${WORTMANN_SERIAL_NO}</SerialNo>
    </GetServiceInfoBySerialNo>
  </soap:Body>
</soap:Envelope>
XML
```

For an error/empty fixture, repeat with a serial number that should not exist and
write to `not-found.xml`.

### `GetServiceInfoByWarrantyEndingDate`

Use an ISO date value (`YYYY-MM-DD`):

```bash
export WORTMANN_WARRANTY_ENDING_DATE="2026-05-28"

curl --fail-with-body --silent --show-error \
  --request POST "https://www.wortmann.de/api/CustomerWebService.asmx" \
  --header "Content-Type: text/xml; charset=utf-8" \
  --header "SOAPAction: \"Wortmann.CustomerWebService/GetServiceInfoByWarrantyEndingDate\"" \
  --data-binary @- \
  --output "tests/Fixtures/soap/get-service-info-by-warranty-ending-date/success.xml" <<XML
<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <GetServiceInfoByWarrantyEndingDate xmlns="Wortmann.CustomerWebService">
      <Username>${WORTMANN_SOAP_API_USERNAME}</Username>
      <PasswordHash>${WORTMANN_SOAP_API_PASSWORD_HASH}</PasswordHash>
      <WarrantyEndingDate>${WORTMANN_WARRANTY_ENDING_DATE}</WarrantyEndingDate>
    </GetServiceInfoByWarrantyEndingDate>
  </soap:Body>
</soap:Envelope>
XML
```

## Troubleshooting

The WSDL declares `targetNamespace="Wortmann.CustomerWebService"` and SOAP 1.1
actions like `Wortmann.CustomerWebService/GetStockAndPriceInformationByProductId`.
If a SOAP action error appears, fetch the WSDL and verify the corresponding
`soap:operation soapAction` value:

```bash
curl --silent --show-error "https://www.wortmann.de/api/CustomerWebService.asmx?WSDL"
```

Keep the raw response body even for SOAP faults. Fault fixtures are useful for
testing error handling as long as they are sanitized before commit.
