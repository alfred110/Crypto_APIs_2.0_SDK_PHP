<?php
/**
 * GeneratingApi
 * PHP version 7.2
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CryptoAPIs
 *
 * Crypto APIs 2.0 is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs 2.0 can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs 2.0 provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: developers@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CryptoAPIs\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use CryptoAPIs\ApiException;
use CryptoAPIs\Configuration;
use CryptoAPIs\HeaderSelector;
use CryptoAPIs\ObjectSerializer;

/**
 * GeneratingApi Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GeneratingApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation generateDepositAddress
     *
     * Generate Deposit Address
     *
     * @param  string $blockchain Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. (required)
     * @param  string $network Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot;, \&quot;rinkeby\&quot; are test networks. (required)
     * @param  string $wallet_id Represents the unique ID of the specific Wallet. (required)
     * @param  string $context In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. (optional)
     * @param  \CryptoAPIs\Model\GenerateDepositAddressRB $generate_deposit_address_rb generate_deposit_address_rb (optional)
     *
     * @throws \CryptoAPIs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CryptoAPIs\Model\GenerateDepositAddressR|\CryptoAPIs\Model\InvalidPagination|\CryptoAPIs\Model\InvalidApiKey|\CryptoAPIs\Model\InsufficientCredits|\CryptoAPIs\Model\WalletAsAServiceDepositAddressesLimitReached|\CryptoAPIs\Model\ResourceNotFound|\CryptoAPIs\Model\InvalidData|\CryptoAPIs\Model\UnsupportedMediaType|\CryptoAPIs\Model\InvalidRequestBodyStructure|\CryptoAPIs\Model\RequestLimitReached|\CryptoAPIs\Model\UnexpectedServerError
     */
    public function generateDepositAddress($blockchain, $network, $wallet_id, $context = null, $generate_deposit_address_rb = null)
    {
        list($response) = $this->generateDepositAddressWithHttpInfo($blockchain, $network, $wallet_id, $context, $generate_deposit_address_rb);
        return $response;
    }

    /**
     * Operation generateDepositAddressWithHttpInfo
     *
     * Generate Deposit Address
     *
     * @param  string $blockchain Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. (required)
     * @param  string $network Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot;, \&quot;rinkeby\&quot; are test networks. (required)
     * @param  string $wallet_id Represents the unique ID of the specific Wallet. (required)
     * @param  string $context In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. (optional)
     * @param  \CryptoAPIs\Model\GenerateDepositAddressRB $generate_deposit_address_rb (optional)
     *
     * @throws \CryptoAPIs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CryptoAPIs\Model\GenerateDepositAddressR|\CryptoAPIs\Model\InvalidPagination|\CryptoAPIs\Model\InvalidApiKey|\CryptoAPIs\Model\InsufficientCredits|\CryptoAPIs\Model\WalletAsAServiceDepositAddressesLimitReached|\CryptoAPIs\Model\ResourceNotFound|\CryptoAPIs\Model\InvalidData|\CryptoAPIs\Model\UnsupportedMediaType|\CryptoAPIs\Model\InvalidRequestBodyStructure|\CryptoAPIs\Model\RequestLimitReached|\CryptoAPIs\Model\UnexpectedServerError, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateDepositAddressWithHttpInfo($blockchain, $network, $wallet_id, $context = null, $generate_deposit_address_rb = null)
    {
        $request = $this->generateDepositAddressRequest($blockchain, $network, $wallet_id, $context, $generate_deposit_address_rb);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 201:
                    if ('\CryptoAPIs\Model\GenerateDepositAddressR' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\GenerateDepositAddressR', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\CryptoAPIs\Model\InvalidPagination' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\InvalidPagination', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\CryptoAPIs\Model\InvalidApiKey' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\InvalidApiKey', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 402:
                    if ('\CryptoAPIs\Model\InsufficientCredits' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\InsufficientCredits', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\CryptoAPIs\Model\WalletAsAServiceDepositAddressesLimitReached' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\WalletAsAServiceDepositAddressesLimitReached', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\CryptoAPIs\Model\ResourceNotFound' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\ResourceNotFound', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('\CryptoAPIs\Model\InvalidData' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\InvalidData', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 415:
                    if ('\CryptoAPIs\Model\UnsupportedMediaType' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\UnsupportedMediaType', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\CryptoAPIs\Model\InvalidRequestBodyStructure' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\InvalidRequestBodyStructure', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\CryptoAPIs\Model\RequestLimitReached' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\RequestLimitReached', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\CryptoAPIs\Model\UnexpectedServerError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\UnexpectedServerError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\CryptoAPIs\Model\GenerateDepositAddressR';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\GenerateDepositAddressR',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\InvalidPagination',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\InvalidApiKey',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\InsufficientCredits',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\WalletAsAServiceDepositAddressesLimitReached',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\ResourceNotFound',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\InvalidData',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\UnsupportedMediaType',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\InvalidRequestBodyStructure',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\RequestLimitReached',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\UnexpectedServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation generateDepositAddressAsync
     *
     * Generate Deposit Address
     *
     * @param  string $blockchain Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. (required)
     * @param  string $network Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot;, \&quot;rinkeby\&quot; are test networks. (required)
     * @param  string $wallet_id Represents the unique ID of the specific Wallet. (required)
     * @param  string $context In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. (optional)
     * @param  \CryptoAPIs\Model\GenerateDepositAddressRB $generate_deposit_address_rb (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateDepositAddressAsync($blockchain, $network, $wallet_id, $context = null, $generate_deposit_address_rb = null)
    {
        return $this->generateDepositAddressAsyncWithHttpInfo($blockchain, $network, $wallet_id, $context, $generate_deposit_address_rb)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateDepositAddressAsyncWithHttpInfo
     *
     * Generate Deposit Address
     *
     * @param  string $blockchain Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. (required)
     * @param  string $network Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot;, \&quot;rinkeby\&quot; are test networks. (required)
     * @param  string $wallet_id Represents the unique ID of the specific Wallet. (required)
     * @param  string $context In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. (optional)
     * @param  \CryptoAPIs\Model\GenerateDepositAddressRB $generate_deposit_address_rb (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateDepositAddressAsyncWithHttpInfo($blockchain, $network, $wallet_id, $context = null, $generate_deposit_address_rb = null)
    {
        $returnType = '\CryptoAPIs\Model\GenerateDepositAddressR';
        $request = $this->generateDepositAddressRequest($blockchain, $network, $wallet_id, $context, $generate_deposit_address_rb);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'generateDepositAddress'
     *
     * @param  string $blockchain Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. (required)
     * @param  string $network Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot;, \&quot;rinkeby\&quot; are test networks. (required)
     * @param  string $wallet_id Represents the unique ID of the specific Wallet. (required)
     * @param  string $context In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. (optional)
     * @param  \CryptoAPIs\Model\GenerateDepositAddressRB $generate_deposit_address_rb (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateDepositAddressRequest($blockchain, $network, $wallet_id, $context = null, $generate_deposit_address_rb = null)
    {
        // verify the required parameter 'blockchain' is set
        if ($blockchain === null || (is_array($blockchain) && count($blockchain) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $blockchain when calling generateDepositAddress'
            );
        }
        // verify the required parameter 'network' is set
        if ($network === null || (is_array($network) && count($network) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $network when calling generateDepositAddress'
            );
        }
        // verify the required parameter 'wallet_id' is set
        if ($wallet_id === null || (is_array($wallet_id) && count($wallet_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $wallet_id when calling generateDepositAddress'
            );
        }

        $resourcePath = '/wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($context !== null) {
            if('form' === 'form' && is_array($context)) {
                foreach($context as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['context'] = $context;
            }
        }


        // path params
        if ($blockchain !== null) {
            $resourcePath = str_replace(
                '{' . 'blockchain' . '}',
                ObjectSerializer::toPathValue($blockchain),
                $resourcePath
            );
        }
        // path params
        if ($network !== null) {
            $resourcePath = str_replace(
                '{' . 'network' . '}',
                ObjectSerializer::toPathValue($network),
                $resourcePath
            );
        }
        // path params
        if ($wallet_id !== null) {
            $resourcePath = str_replace(
                '{' . 'walletId' . '}',
                ObjectSerializer::toPathValue($wallet_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($generate_deposit_address_rb)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($generate_deposit_address_rb));
            } else {
                $httpBody = $generate_deposit_address_rb;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
