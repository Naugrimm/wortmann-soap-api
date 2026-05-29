<?php

namespace Naugrim\WortmannSoapApi\Tests\Unit;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

final class FakeCaller implements Caller
{
    /**
     * @var list<array{method: string, request: RequestInterface}>
     */
    public array $calls = [];

    public function __construct(
        private readonly ResultInterface $result,
    ) {
    }

    public function __invoke(string $method, RequestInterface $request): ResultInterface
    {
        $this->calls[] = [
            'method' => $method,
            'request' => $request,
        ];

        return $this->result;
    }
}
