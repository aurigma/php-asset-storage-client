# Aurigma\AssetStorage\ResourcesApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**resourcesBatchDelete()**](ResourcesApi.md#resourcesBatchDelete) | **POST** /api/storage/v1/resources/batchDelete | Deletes the selected entities.
[**resourcesBatchUpdateCustomFields()**](ResourcesApi.md#resourcesBatchUpdateCustomFields) | **POST** /api/storage/v1/resources/batchUpdateCustomFields | Updates the custom fields for selected entities.
[**resourcesCreate()**](ResourcesApi.md#resourcesCreate) | **POST** /api/storage/v1/resources | Creates a new entity.
[**resourcesDelete()**](ResourcesApi.md#resourcesDelete) | **DELETE** /api/storage/v1/resources/{id} | Deletes the specified entity.
[**resourcesGet()**](ResourcesApi.md#resourcesGet) | **GET** /api/storage/v1/resources/{id} | Returns an entity by ID.
[**resourcesGetAll()**](ResourcesApi.md#resourcesGetAll) | **GET** /api/storage/v1/resources | Returns all entities relevant to specified query parameters.
[**resourcesGetFile()**](ResourcesApi.md#resourcesGetFile) | **GET** /api/storage/v1/resources/{id}/file | Returns an entity file from file storage.
[**resourcesGetFileStorageInfo()**](ResourcesApi.md#resourcesGetFileStorageInfo) | **GET** /api/storage/v1/resources/file-storage-info | Returns information about storage usage by resource files.
[**resourcesUpdate()**](ResourcesApi.md#resourcesUpdate) | **PUT** /api/storage/v1/resources/{id} | Updates the specified entity.


## `resourcesBatchDelete()`

```php
resourcesBatchDelete($tenant_id, $batch_delete_resources_input)
```

Deletes the selected entities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$batch_delete_resources_input = new \Aurigma\AssetStorage\Model\BatchDeleteResourcesInput(); // \Aurigma\AssetStorage\Model\BatchDeleteResourcesInput | Operation parameters.

try {
    $apiInstance->resourcesBatchDelete($tenant_id, $batch_delete_resources_input);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesBatchDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **batch_delete_resources_input** | [**\Aurigma\AssetStorage\Model\BatchDeleteResourcesInput**](../Model/BatchDeleteResourcesInput.md)| Operation parameters. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resourcesBatchUpdateCustomFields()`

```php
resourcesBatchUpdateCustomFields($tenant_id, $batch_update_custom_fields_input)
```

Updates the custom fields for selected entities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$batch_update_custom_fields_input = new \Aurigma\AssetStorage\Model\BatchUpdateCustomFieldsInput(); // \Aurigma\AssetStorage\Model\BatchUpdateCustomFieldsInput | Operation parameters.

try {
    $apiInstance->resourcesBatchUpdateCustomFields($tenant_id, $batch_update_custom_fields_input);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesBatchUpdateCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **batch_update_custom_fields_input** | [**\Aurigma\AssetStorage\Model\BatchUpdateCustomFieldsInput**](../Model/BatchUpdateCustomFieldsInput.md)| Operation parameters. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resourcesCreate()`

```php
resourcesCreate($name, $tenant_id, $file, $id, $namespace, $source_id, $type, $format, $anonymous_access, $custom_fields): \Aurigma\AssetStorage\Model\ResourceDto
```

Creates a new entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Entity name
$tenant_id = 56; // int | Tenant identifier
$file = "/path/to/file.txt"; // \SplFileObject | Entity file content.
$id = 'id_example'; // string | Desired unique identifier for new resource.
$namespace = 'namespace_example'; // string | Resource namespace.
$source_id = 'source_id_example'; // string | Resource source identifier.
$type = 'type_example'; // string | Resource type.
$format = 'format_example'; // string | Resource file format.
$anonymous_access = True; // bool | Resource 'anonymous access' tag. It indicates whether resource can be accessed anonymously.
$custom_fields = NULL; // mixed

try {
    $result = $apiInstance->resourcesCreate($name, $tenant_id, $file, $id, $namespace, $source_id, $type, $format, $anonymous_access, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Entity name |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| Entity file content. | [optional]
 **id** | **string**| Desired unique identifier for new resource. | [optional]
 **namespace** | **string**| Resource namespace. | [optional]
 **source_id** | **string**| Resource source identifier. | [optional]
 **type** | **string**| Resource type. | [optional]
 **format** | **string**| Resource file format. | [optional]
 **anonymous_access** | **bool**| Resource &#39;anonymous access&#39; tag. It indicates whether resource can be accessed anonymously. | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\ResourceDto**](../Model/ResourceDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resourcesDelete()`

```php
resourcesDelete($id, $tenant_id): \Aurigma\AssetStorage\Model\ResourceDto
```

Deletes the specified entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->resourcesDelete($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Entity identifier. |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\ResourceDto**](../Model/ResourceDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resourcesGet()`

```php
resourcesGet($id, $tenant_id): \Aurigma\AssetStorage\Model\ResourceDto
```

Returns an entity by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->resourcesGet($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Entity identifier. |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\ResourceDto**](../Model/ResourceDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resourcesGetAll()`

```php
resourcesGetAll($namespace, $source_id, $type, $skip, $take, $sorting, $search, $custom_fields, $tenant_id): \Aurigma\AssetStorage\Model\PagedOfResourceDto
```

Returns all entities relevant to specified query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Resource namespace filter
$source_id = 'source_id_example'; // string | Resource source identifier filter
$type = 'type_example'; // string | Resource type filter
$skip = 56; // int | Defines page start offset from beginning of sorted result list
$take = 56; // int | Defines page length (how much consequent items of sorted result list should be taken)
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\"
$search = 'search_example'; // string | Search string for partial match
$custom_fields = 'custom_fields_example'; // string | Custom attributes dictionary filter. For example: `{\"public\":\"true\",\"name\":\"my item\"}`
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->resourcesGetAll($namespace, $source_id, $type, $skip, $take, $sorting, $search, $custom_fields, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| Resource namespace filter | [optional]
 **source_id** | **string**| Resource source identifier filter | [optional]
 **type** | **string**| Resource type filter | [optional]
 **skip** | **int**| Defines page start offset from beginning of sorted result list | [optional]
 **take** | **int**| Defines page length (how much consequent items of sorted result list should be taken) | [optional]
 **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot; | [optional]
 **search** | **string**| Search string for partial match | [optional]
 **custom_fields** | **string**| Custom attributes dictionary filter. For example: &#x60;{\&quot;public\&quot;:\&quot;true\&quot;,\&quot;name\&quot;:\&quot;my item\&quot;}&#x60; | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\PagedOfResourceDto**](../Model/PagedOfResourceDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resourcesGetFile()`

```php
resourcesGetFile($id, $attachment, $tenant_id): \SplFileObject
```

Returns an entity file from file storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$attachment = True; // bool | Indicates if file should be provided as an attachment with proper filename supplied (default value is 'false').
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->resourcesGetFile($id, $attachment, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesGetFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Entity identifier. |
 **attachment** | **bool**| Indicates if file should be provided as an attachment with proper filename supplied (default value is &#39;false&#39;). | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resourcesGetFileStorageInfo()`

```php
resourcesGetFileStorageInfo($tenant_id): \Aurigma\AssetStorage\Model\FileStorageInfoDto
```

Returns information about storage usage by resource files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->resourcesGetFileStorageInfo($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesGetFileStorageInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\FileStorageInfoDto**](../Model/FileStorageInfoDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resourcesUpdate()`

```php
resourcesUpdate($id, $tenant_id, $file, $namespace, $source_id, $type, $format, $anonymous_access, $name, $custom_fields): \Aurigma\AssetStorage\Model\ResourceDto
```

Updates the specified entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant identifier
$file = "/path/to/file.txt"; // \SplFileObject | Entity file content.
$namespace = 'namespace_example'; // string | Resource namespace.
$source_id = 'source_id_example'; // string | Resource source identifier.
$type = 'type_example'; // string | Resource type.
$format = 'format_example'; // string | Resource file format.
$anonymous_access = True; // bool | Resource 'anonymous access' tag. It indicates whether resource can be accessed anonymously.
$name = 'name_example'; // string | Entity name
$custom_fields = NULL; // mixed

try {
    $result = $apiInstance->resourcesUpdate($id, $tenant_id, $file, $namespace, $source_id, $type, $format, $anonymous_access, $name, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Entity identifier. |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| Entity file content. | [optional]
 **namespace** | **string**| Resource namespace. | [optional]
 **source_id** | **string**| Resource source identifier. | [optional]
 **type** | **string**| Resource type. | [optional]
 **format** | **string**| Resource file format. | [optional]
 **anonymous_access** | **bool**| Resource &#39;anonymous access&#39; tag. It indicates whether resource can be accessed anonymously. | [optional]
 **name** | **string**| Entity name | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\ResourceDto**](../Model/ResourceDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwtBearer](../../README.md#jwtBearer), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
