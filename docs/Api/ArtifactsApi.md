# Aurigma\AssetStorage\ArtifactsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**artifactsCreate()**](ArtifactsApi.md#artifactsCreate) | **POST** /api/storage/v1/artifacts | Creates new entity
[**artifactsDelete()**](ArtifactsApi.md#artifactsDelete) | **DELETE** /api/storage/v1/artifacts/{id} | Deletes specified entity
[**artifactsDeleteGroup()**](ArtifactsApi.md#artifactsDeleteGroup) | **DELETE** /api/storage/v1/artifacts/group/{group} | Deletes all entities with specified group
[**artifactsGet()**](ArtifactsApi.md#artifactsGet) | **GET** /api/storage/v1/artifacts/{id} | Gets entity by id
[**artifactsGetAll()**](ArtifactsApi.md#artifactsGetAll) | **GET** /api/storage/v1/artifacts | Gets all entities relevant to specified query parameters
[**artifactsGetFile()**](ArtifactsApi.md#artifactsGetFile) | **GET** /api/storage/v1/artifacts/{id}/file | Gets entity file from file storage
[**artifactsUpdate()**](ArtifactsApi.md#artifactsUpdate) | **PUT** /api/storage/v1/artifacts/{id} | Updates specified entity


## `artifactsCreate()`

```php
artifactsCreate($tenant_id, $file, $description, $group, $alias, $type, $format): \Aurigma\AssetStorage\Model\ArtifactDto
```

Creates new entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\ArtifactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$file = "/path/to/file.txt"; // \SplFileObject | Entity file content
$description = 'description_example'; // string | Artifact description
$group = 'group_example'; // string | Artifact group
$alias = 'alias_example'; // string | Artifact alias (special name within group)
$type = new \Aurigma\AssetStorage\Model\ArtifactType(); // \Aurigma\AssetStorage\Model\ArtifactType
$format = 'format_example'; // string | Artifact file format

try {
    $result = $apiInstance->artifactsCreate($tenant_id, $file, $description, $group, $alias, $type, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactsApi->artifactsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| Entity file content | [optional]
 **description** | **string**| Artifact description | [optional]
 **group** | **string**| Artifact group | [optional]
 **alias** | **string**| Artifact alias (special name within group) | [optional]
 **type** | [**\Aurigma\AssetStorage\Model\ArtifactType**](../Model/ArtifactType.md)|  | [optional]
 **format** | **string**| Artifact file format | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\ArtifactDto**](../Model/ArtifactDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `artifactsDelete()`

```php
artifactsDelete($id, $tenant_id): \Aurigma\AssetStorage\Model\ArtifactDto
```

Deletes specified entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\ArtifactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity unique identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->artifactsDelete($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactsApi->artifactsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\ArtifactDto**](../Model/ArtifactDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `artifactsDeleteGroup()`

```php
artifactsDeleteGroup($group, $tenant_id)
```

Deletes all entities with specified group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\ArtifactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = 'group_example'; // string | Group name
$tenant_id = 56; // int | Tenant identifier

try {
    $apiInstance->artifactsDeleteGroup($group, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactsApi->artifactsDeleteGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| Group name |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `artifactsGet()`

```php
artifactsGet($id, $tenant_id): \Aurigma\AssetStorage\Model\ArtifactDto
```

Gets entity by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\ArtifactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity unique identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->artifactsGet($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactsApi->artifactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\ArtifactDto**](../Model/ArtifactDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `artifactsGetAll()`

```php
artifactsGetAll($group, $alias, $type, $skip, $take, $sorting, $tenant_id): \Aurigma\AssetStorage\Model\PagedOfArtifactDto
```

Gets all entities relevant to specified query parameters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\ArtifactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = 'group_example'; // string | Artifact group filter
$alias = 'alias_example'; // string | Artifact alias(special name within group) filter
$type = new \Aurigma\AssetStorage\Model\\Aurigma\AssetStorage\Model\ArtifactType(); // \Aurigma\AssetStorage\Model\ArtifactType | Artifact type filter
$skip = 56; // int | Defines page start offset from beginning of sorted result list
$take = 56; // int | Defines page length (how much consequent items of sorted result list should be taken)
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\"
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->artifactsGetAll($group, $alias, $type, $skip, $take, $sorting, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactsApi->artifactsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| Artifact group filter | [optional]
 **alias** | **string**| Artifact alias(special name within group) filter | [optional]
 **type** | [**\Aurigma\AssetStorage\Model\ArtifactType**](../Model/.md)| Artifact type filter | [optional]
 **skip** | **int**| Defines page start offset from beginning of sorted result list | [optional]
 **take** | **int**| Defines page length (how much consequent items of sorted result list should be taken) | [optional]
 **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot; | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\PagedOfArtifactDto**](../Model/PagedOfArtifactDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `artifactsGetFile()`

```php
artifactsGetFile($id, $attachment, $tenant_id): \SplFileObject
```

Gets entity file from file storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\ArtifactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity unique identifier
$attachment = True; // bool | If set to 'true', file will be provided as an attachment with proper filename supplied (default value is 'false')
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->artifactsGetFile($id, $attachment, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactsApi->artifactsGetFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Entity unique identifier |
 **attachment** | **bool**| If set to &#39;true&#39;, file will be provided as an attachment with proper filename supplied (default value is &#39;false&#39;) | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `artifactsUpdate()`

```php
artifactsUpdate($id, $tenant_id, $file, $description, $alias, $type, $format): \Aurigma\AssetStorage\Model\ArtifactDto
```

Updates specified entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\ArtifactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$file = "/path/to/file.txt"; // \SplFileObject | Entity file content
$description = 'description_example'; // string | Artifact description
$alias = 'alias_example'; // string | Artifact alias (special name within group)
$type = new \Aurigma\AssetStorage\Model\ArtifactType(); // \Aurigma\AssetStorage\Model\ArtifactType
$format = 'format_example'; // string | Artifact file format

try {
    $result = $apiInstance->artifactsUpdate($id, $tenant_id, $file, $description, $alias, $type, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactsApi->artifactsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| Entity file content | [optional]
 **description** | **string**| Artifact description | [optional]
 **alias** | **string**| Artifact alias (special name within group) | [optional]
 **type** | [**\Aurigma\AssetStorage\Model\ArtifactType**](../Model/ArtifactType.md)|  | [optional]
 **format** | **string**| Artifact file format | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\ArtifactDto**](../Model/ArtifactDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
