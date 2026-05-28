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
    success.xml
```

Before committing fixtures:

- Remove credentials, customer numbers, personal data, and sensitive commercial terms.
- Keep the original SOAP envelope and namespaces when possible.
- Prefer one representative success fixture and one representative error/empty fixture per API operation.
- Add a short note beside unusual upstream field names, such as `ErrorMesssage`, when a fixture demonstrates them.

Once real fixtures are available, add contract tests that load them through
`Naugrim\WortmannSoapApi\Tests\Fixtures\FixtureLoader` and assert that the
SOAP body maps to the expected generated response DTOs.
