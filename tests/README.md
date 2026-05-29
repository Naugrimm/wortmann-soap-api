## Testing Pyramid

The suite is intentionally split by cost and scope:

- `Unit`: fast tests for request creation, dispatch mapping, validation, and fixture helpers. These should avoid Laravel bootstrapping and SOAP engine calls.
- `Integration`: boundary tests that combine package code with infrastructure adapters such as the SOAP engine, classmap, fixture transport, and XML deserialization.
- `Feature`: Laravel/Testbench tests and consumer-level package behavior through the service container.

Prefer adding coverage at the lowest layer that can prove the behavior. Add feature tests only for package wiring or public consumer flows that unit/integration tests cannot catch.

Useful commands:

```bash
composer test
composer test:unit
composer test:integration
composer test:feature
```
