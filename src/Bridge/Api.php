<?php

namespace Naugrim\WortmannSoapApi\Bridge;

use Illuminate\Support\Str;
use LibXMLError;
use Naugrim\WortmannSoapApi\Bridge\Exceptions\XmlException;
use Naugrim\WortmannSoapApi\Client\ApiClientFactory;
use Naugrim\WortmannSoapApi\Contracts\WortmannSoapApi;
use Phpro\SoapClient\Type\ResultInterface;
use ReflectionClass;
use ReflectionException;

class Api implements WortmannSoapApi
{
    protected $client;

    /**
     * Api constructor.
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->client = ApiClientFactory::factory($config['wsdl']);
    }

    /**
	 * @param string $requestCls
	 * @param mixed ...$params
     * @return ResultInterface
     * @throws ReflectionException
     * @throws XmlException
     */
    public function request(string $requestCls, ...$params) : ResultInterface
    {
        $request = RequestFactory::create($requestCls, ...$params);
        $reflect = new ReflectionClass($requestCls);
        $methodName = Str::camel($reflect->getShortName());

        libxml_use_internal_errors(true);
        $response = $this->client->{$methodName}($request);

        /** @var LibXMLError $error */
        foreach (libxml_get_errors() as $error) {
            if ($error->level != LIBXML_ERR_WARNING) {
                throw new XmlException($error->message, $error->code);
            }
        }

        libxml_clear_errors();
        libxml_use_internal_errors(false);

        return $response;
    }
}
