<?php
/**
 * PreviewsApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Aurigma\AssetStorage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * AssetStorage API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Aurigma\AssetStorage\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Aurigma\AssetStorage\ApiException;
use Aurigma\AssetStorage\Configuration;
use Aurigma\AssetStorage\HeaderSelector;
use Aurigma\AssetStorage\ObjectSerializer;

/**
 * PreviewsApi Class Doc Comment
 *
 * @category Class
 * @package  Aurigma\AssetStorage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PreviewsApi
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
     * Operation previewsGet
     *
     * Returns preview entity by ID.
     *
     * @param  string $id Entity identifier. (required)
     * @param  int $tenant_id Tenant identifier (optional)
     *
     * @throws \Aurigma\AssetStorage\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aurigma\AssetStorage\Model\PreviewDto|\Aurigma\AssetStorage\Model\ProblemDetails
     */
    public function previewsGet($id, $tenant_id = null)
    {
        list($response) = $this->previewsGetWithHttpInfo($id, $tenant_id);
        return $response;
    }

    /**
     * Operation previewsGetWithHttpInfo
     *
     * Returns preview entity by ID.
     *
     * @param  string $id Entity identifier. (required)
     * @param  int $tenant_id Tenant identifier (optional)
     *
     * @throws \Aurigma\AssetStorage\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aurigma\AssetStorage\Model\PreviewDto|\Aurigma\AssetStorage\Model\ProblemDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function previewsGetWithHttpInfo($id, $tenant_id = null)
    {
        $request = $this->previewsGetRequest($id, $tenant_id);

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
                case 200:
                    if ('\Aurigma\AssetStorage\Model\PreviewDto' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aurigma\AssetStorage\Model\PreviewDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Aurigma\AssetStorage\Model\ProblemDetails' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aurigma\AssetStorage\Model\ProblemDetails', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Aurigma\AssetStorage\Model\PreviewDto';
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
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aurigma\AssetStorage\Model\PreviewDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aurigma\AssetStorage\Model\ProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation previewsGetAsync
     *
     * Returns preview entity by ID.
     *
     * @param  string $id Entity identifier. (required)
     * @param  int $tenant_id Tenant identifier (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function previewsGetAsync($id, $tenant_id = null)
    {
        return $this->previewsGetAsyncWithHttpInfo($id, $tenant_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation previewsGetAsyncWithHttpInfo
     *
     * Returns preview entity by ID.
     *
     * @param  string $id Entity identifier. (required)
     * @param  int $tenant_id Tenant identifier (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function previewsGetAsyncWithHttpInfo($id, $tenant_id = null)
    {
        $returnType = '\Aurigma\AssetStorage\Model\PreviewDto';
        $request = $this->previewsGetRequest($id, $tenant_id);

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
     * Create request for operation 'previewsGet'
     *
     * @param  string $id Entity identifier. (required)
     * @param  int $tenant_id Tenant identifier (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function previewsGetRequest($id, $tenant_id = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling previewsGet'
            );
        }

        $resourcePath = '/api/storage/v1/previews/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($tenant_id !== null) {
            if('form' === 'form' && is_array($tenant_id)) {
                foreach($tenant_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['tenantId'] = $tenant_id;
            }
        }


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        // aurigmafix 6
                        if (gettype($formParamValueItem) === 'object') {
                            if (!($formParamValueItem instanceof StreamInterface 
                            || $formParamValueItem instanceof \Iterator 
                            || method_exists($formParamValueItem, '__toString'))) {
                                $formParamValueItem = json_encode($formParamValueItem);
                            }
                        } 
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
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-Key');
        if ($apiKey !== null) {
            $headers['X-API-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        // aurigmafix 3
        $token = $this->config->getAccessToken();
        if ($token !== null && $token !== '' && !ctype_space($token)) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        // aurigmafix 3
        $token = $this->config->getAccessToken();
        if ($token !== null && $token !== '' && !ctype_space($token)) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        // aurigmafix 3
        $token = $this->config->getAccessToken();
        if ($token !== null && $token !== '' && !ctype_space($token)) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation previewsGetFile
     *
     * Returns a preview entity file from file storage.
     *
     * @param  string $id Preview entity identifier. (required)
     * @param  bool $attachment Indicates if file should be provided as an attachment with proper filename supplied (default value is &#39;false&#39;). (optional)
     * @param  int $tenant_id Tenant identifier (optional)
     *
     * @throws \Aurigma\AssetStorage\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject|\Aurigma\AssetStorage\Model\ProblemDetails
     */
    public function previewsGetFile($id, $attachment = null, $tenant_id = null)
    {
        list($response) = $this->previewsGetFileWithHttpInfo($id, $attachment, $tenant_id);
        return $response;
    }

    /**
     * Operation previewsGetFileWithHttpInfo
     *
     * Returns a preview entity file from file storage.
     *
     * @param  string $id Preview entity identifier. (required)
     * @param  bool $attachment Indicates if file should be provided as an attachment with proper filename supplied (default value is &#39;false&#39;). (optional)
     * @param  int $tenant_id Tenant identifier (optional)
     *
     * @throws \Aurigma\AssetStorage\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject|\Aurigma\AssetStorage\Model\ProblemDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function previewsGetFileWithHttpInfo($id, $attachment = null, $tenant_id = null)
    {
        $request = $this->previewsGetFileRequest($id, $attachment, $tenant_id);

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
                case 200:
                    if ('\SplFileObject' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SplFileObject', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Aurigma\AssetStorage\Model\ProblemDetails' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aurigma\AssetStorage\Model\ProblemDetails', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SplFileObject';
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
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SplFileObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aurigma\AssetStorage\Model\ProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation previewsGetFileAsync
     *
     * Returns a preview entity file from file storage.
     *
     * @param  string $id Preview entity identifier. (required)
     * @param  bool $attachment Indicates if file should be provided as an attachment with proper filename supplied (default value is &#39;false&#39;). (optional)
     * @param  int $tenant_id Tenant identifier (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function previewsGetFileAsync($id, $attachment = null, $tenant_id = null)
    {
        return $this->previewsGetFileAsyncWithHttpInfo($id, $attachment, $tenant_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation previewsGetFileAsyncWithHttpInfo
     *
     * Returns a preview entity file from file storage.
     *
     * @param  string $id Preview entity identifier. (required)
     * @param  bool $attachment Indicates if file should be provided as an attachment with proper filename supplied (default value is &#39;false&#39;). (optional)
     * @param  int $tenant_id Tenant identifier (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function previewsGetFileAsyncWithHttpInfo($id, $attachment = null, $tenant_id = null)
    {
        $returnType = '\SplFileObject';
        $request = $this->previewsGetFileRequest($id, $attachment, $tenant_id);

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
     * Create request for operation 'previewsGetFile'
     *
     * @param  string $id Preview entity identifier. (required)
     * @param  bool $attachment Indicates if file should be provided as an attachment with proper filename supplied (default value is &#39;false&#39;). (optional)
     * @param  int $tenant_id Tenant identifier (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function previewsGetFileRequest($id, $attachment = null, $tenant_id = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling previewsGetFile'
            );
        }

        $resourcePath = '/api/storage/v1/previews/{id}/file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($attachment !== null) {
            if('form' === 'form' && is_array($attachment)) {
                foreach($attachment as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['attachment'] = $attachment;
            }
        }
        // query params
        if ($tenant_id !== null) {
            if('form' === 'form' && is_array($tenant_id)) {
                foreach($tenant_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['tenantId'] = $tenant_id;
            }
        }


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/octet-stream']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/octet-stream'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        // aurigmafix 6
                        if (gettype($formParamValueItem) === 'object') {
                            if (!($formParamValueItem instanceof StreamInterface 
                            || $formParamValueItem instanceof \Iterator 
                            || method_exists($formParamValueItem, '__toString'))) {
                                $formParamValueItem = json_encode($formParamValueItem);
                            }
                        } 
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation previewsGetFileStorageInfo
     *
     * Returns information about storage usage by preview files.
     *
     * @param  int $tenant_id Tenant identifier (optional)
     *
     * @throws \Aurigma\AssetStorage\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aurigma\AssetStorage\Model\FileStorageInfoDto
     */
    public function previewsGetFileStorageInfo($tenant_id = null)
    {
        list($response) = $this->previewsGetFileStorageInfoWithHttpInfo($tenant_id);
        return $response;
    }

    /**
     * Operation previewsGetFileStorageInfoWithHttpInfo
     *
     * Returns information about storage usage by preview files.
     *
     * @param  int $tenant_id Tenant identifier (optional)
     *
     * @throws \Aurigma\AssetStorage\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aurigma\AssetStorage\Model\FileStorageInfoDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function previewsGetFileStorageInfoWithHttpInfo($tenant_id = null)
    {
        $request = $this->previewsGetFileStorageInfoRequest($tenant_id);

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
                case 200:
                    if ('\Aurigma\AssetStorage\Model\FileStorageInfoDto' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aurigma\AssetStorage\Model\FileStorageInfoDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Aurigma\AssetStorage\Model\FileStorageInfoDto';
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
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aurigma\AssetStorage\Model\FileStorageInfoDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation previewsGetFileStorageInfoAsync
     *
     * Returns information about storage usage by preview files.
     *
     * @param  int $tenant_id Tenant identifier (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function previewsGetFileStorageInfoAsync($tenant_id = null)
    {
        return $this->previewsGetFileStorageInfoAsyncWithHttpInfo($tenant_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation previewsGetFileStorageInfoAsyncWithHttpInfo
     *
     * Returns information about storage usage by preview files.
     *
     * @param  int $tenant_id Tenant identifier (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function previewsGetFileStorageInfoAsyncWithHttpInfo($tenant_id = null)
    {
        $returnType = '\Aurigma\AssetStorage\Model\FileStorageInfoDto';
        $request = $this->previewsGetFileStorageInfoRequest($tenant_id);

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
     * Create request for operation 'previewsGetFileStorageInfo'
     *
     * @param  int $tenant_id Tenant identifier (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function previewsGetFileStorageInfoRequest($tenant_id = null)
    {

        $resourcePath = '/api/storage/v1/previews/file-storage-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($tenant_id !== null) {
            if('form' === 'form' && is_array($tenant_id)) {
                foreach($tenant_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['tenantId'] = $tenant_id;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        // aurigmafix 6
                        if (gettype($formParamValueItem) === 'object') {
                            if (!($formParamValueItem instanceof StreamInterface 
                            || $formParamValueItem instanceof \Iterator 
                            || method_exists($formParamValueItem, '__toString'))) {
                                $formParamValueItem = json_encode($formParamValueItem);
                            }
                        } 
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
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-Key');
        if ($apiKey !== null) {
            $headers['X-API-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        // aurigmafix 3
        $token = $this->config->getAccessToken();
        if ($token !== null && $token !== '' && !ctype_space($token)) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        // aurigmafix 3
        $token = $this->config->getAccessToken();
        if ($token !== null && $token !== '' && !ctype_space($token)) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        // aurigmafix 3
        $token = $this->config->getAccessToken();
        if ($token !== null && $token !== '' && !ctype_space($token)) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
            'GET',
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
