# Aurigma\AssetStorage\PrivateResourcesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**privateResourcesBatchCopy()**](PrivateResourcesApi.md#privateResourcesBatchCopy) | **POST** /api/storage/v1/private-resources/batch-copy | Copies the specified entities. |
| [**privateResourcesBatchDelete()**](PrivateResourcesApi.md#privateResourcesBatchDelete) | **POST** /api/storage/v1/private-resources/batch-delete | Deletes the specified entities. |
| [**privateResourcesBatchUpdateCustomFields()**](PrivateResourcesApi.md#privateResourcesBatchUpdateCustomFields) | **POST** /api/storage/v1/private-resources/batch-update-custom-fields | Updates custom fields values for the specified entities. |
| [**privateResourcesBatchUpdateOwner()**](PrivateResourcesApi.md#privateResourcesBatchUpdateOwner) | **POST** /api/storage/v1/private-resources/batch-update-owner | Updates owner for the specified entities. |
| [**privateResourcesCopy()**](PrivateResourcesApi.md#privateResourcesCopy) | **POST** /api/storage/v1/private-resources/{id} | Copies the specified entity. |
| [**privateResourcesCreate()**](PrivateResourcesApi.md#privateResourcesCreate) | **POST** /api/storage/v1/private-resources | Creates a new entity. |
| [**privateResourcesDelete()**](PrivateResourcesApi.md#privateResourcesDelete) | **DELETE** /api/storage/v1/private-resources/{id} | Deletes the specified entity. |
| [**privateResourcesDeleteByNamespace()**](PrivateResourcesApi.md#privateResourcesDeleteByNamespace) | **DELETE** /api/storage/v1/private-resources/namespaces/{namespace} | Deletes all resources that use a specified namespace. |
| [**privateResourcesGet()**](PrivateResourcesApi.md#privateResourcesGet) | **GET** /api/storage/v1/private-resources/{id} | Returns an entity by ID. |
| [**privateResourcesGetAll()**](PrivateResourcesApi.md#privateResourcesGetAll) | **GET** /api/storage/v1/private-resources | Returns all entities relevant to specified query parameters. |
| [**privateResourcesGetFile()**](PrivateResourcesApi.md#privateResourcesGetFile) | **GET** /api/storage/v1/private-resources/{id}/file | Returns an entity file from file storage. |
| [**privateResourcesGetFileStorageInfo()**](PrivateResourcesApi.md#privateResourcesGetFileStorageInfo) | **GET** /api/storage/v1/private-resources/file-storage-info | Returns information about storage usage by private resource files. |
| [**privateResourcesGetRetentionPolicy()**](PrivateResourcesApi.md#privateResourcesGetRetentionPolicy) | **GET** /api/storage/v1/private-resources/{id}/retention-policy | Returns an entity retention policy by entity identifier. |
| [**privateResourcesSetRetentionPolicy()**](PrivateResourcesApi.md#privateResourcesSetRetentionPolicy) | **POST** /api/storage/v1/private-resources/{id}/retention-policy | Updates an entity retention policy by entity identifier. |
| [**privateResourcesUpdate()**](PrivateResourcesApi.md#privateResourcesUpdate) | **PUT** /api/storage/v1/private-resources/{id} | Updates the specified entity. |


## `privateResourcesBatchCopy()`

```php
privateResourcesBatchCopy($tenant_id, $owner_id, $batch_copy_resources_input)
```

Copies the specified entities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$batch_copy_resources_input = new \Aurigma\AssetStorage\Model\BatchCopyResourcesInput(); // \Aurigma\AssetStorage\Model\BatchCopyResourcesInput | Operation parameters.

try {
    $apiInstance->privateResourcesBatchCopy($tenant_id, $owner_id, $batch_copy_resources_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateResourcesApi->privateResourcesBatchCopy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **batch_copy_resources_input** | [**\Aurigma\AssetStorage\Model\BatchCopyResourcesInput**](../Model/BatchCopyResourcesInput.md)| Operation parameters. | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth2-code](../../README.md#oauth2-code), [apiKey](../../README.md#apiKey), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [jwtBearer](../../README.md#jwtBearer), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateResourcesBatchDelete()`

```php
privateResourcesBatchDelete($tenant_id, $owner_id, $batch_delete_resources_input)
```

Deletes the specified entities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$batch_delete_resources_input = new \Aurigma\AssetStorage\Model\BatchDeleteResourcesInput(); // \Aurigma\AssetStorage\Model\BatchDeleteResourcesInput | Operation parameters.

try {
    $apiInstance->privateResourcesBatchDelete($tenant_id, $owner_id, $batch_delete_resources_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateResourcesApi->privateResourcesBatchDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **batch_delete_resources_input** | [**\Aurigma\AssetStorage\Model\BatchDeleteResourcesInput**](../Model/BatchDeleteResourcesInput.md)| Operation parameters. | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth2-code](../../README.md#oauth2-code), [apiKey](../../README.md#apiKey), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [jwtBearer](../../README.md#jwtBearer), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateResourcesBatchUpdateCustomFields()`

```php
privateResourcesBatchUpdateCustomFields($tenant_id, $owner_id, $batch_update_custom_fields_input)
```

Updates custom fields values for the specified entities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$batch_update_custom_fields_input = new \Aurigma\AssetStorage\Model\BatchUpdateCustomFieldsInput(); // \Aurigma\AssetStorage\Model\BatchUpdateCustomFieldsInput | Operation parameters.

try {
    $apiInstance->privateResourcesBatchUpdateCustomFields($tenant_id, $owner_id, $batch_update_custom_fields_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateResourcesApi->privateResourcesBatchUpdateCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **batch_update_custom_fields_input** | [**\Aurigma\AssetStorage\Model\BatchUpdateCustomFieldsInput**](../Model/BatchUpdateCustomFieldsInput.md)| Operation parameters. | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth2-code](../../README.md#oauth2-code), [apiKey](../../README.md#apiKey), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [jwtBearer](../../README.md#jwtBearer), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateResourcesBatchUpdateOwner()`

```php
privateResourcesBatchUpdateOwner($old_owner_id, $tenant_id, $owner_id, $batch_update_resources_owner_input)
```

Updates owner for the specified entities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$old_owner_id = 'old_owner_id_example'; // string | Source private storage owner identifier.
$tenant_id = 56; // int | Tenant identifier.
$owner_id = 'owner_id_example'; // string | New private storage owner identifier.
$batch_update_resources_owner_input = new \Aurigma\AssetStorage\Model\BatchUpdateResourcesOwnerInput(); // \Aurigma\AssetStorage\Model\BatchUpdateResourcesOwnerInput | Operation parameters.

try {
    $apiInstance->privateResourcesBatchUpdateOwner($old_owner_id, $tenant_id, $owner_id, $batch_update_resources_owner_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateResourcesApi->privateResourcesBatchUpdateOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **old_owner_id** | **string**| Source private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **owner_id** | **string**| New private storage owner identifier. | [optional] |
| **batch_update_resources_owner_input** | [**\Aurigma\AssetStorage\Model\BatchUpdateResourcesOwnerInput**](../Model/BatchUpdateResourcesOwnerInput.md)| Operation parameters. | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth2-code](../../README.md#oauth2-code), [apiKey](../../README.md#apiKey), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [jwtBearer](../../README.md#jwtBearer), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateResourcesCopy()`

```php
privateResourcesCopy($id, $name, $namespace, $source_id, $strategy, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\ResourceDto
```

Copies the specified entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source entity identifier.
$name = 'name_example'; // string | Desired name.
$namespace = 'namespace_example'; // string | Desired namespace.
$source_id = 'source_id_example'; // string | Desired source identifier.
$strategy = new \Aurigma\AssetStorage\Model\ConflictResolvingStrategy(); // ConflictResolvingStrategy | Conflict resolving strategy.
$tenant_id = 56; // int | Tenant identifier.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateResourcesCopy($id, $name, $namespace, $source_id, $strategy, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateResourcesApi->privateResourcesCopy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Source entity identifier. | |
| **name** | **string**| Desired name. | [optional] |
| **namespace** | **string**| Desired namespace. | [optional] |
| **source_id** | **string**| Desired source identifier. | [optional] |
| **strategy** | [**ConflictResolvingStrategy**](../Model/.md)| Conflict resolving strategy. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\ResourceDto**](../Model/ResourceDto.md)

### Authorization

[oauth2-code](../../README.md#oauth2-code), [apiKey](../../README.md#apiKey), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [jwtBearer](../../README.md#jwtBearer), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateResourcesCreate()`

```php
privateResourcesCreate($file, $name, $tenant_id, $owner_id, $id, $namespace, $source_id, $type, $format, $anonymous_access, $custom_fields): \Aurigma\AssetStorage\Model\ResourceDto
```

Creates a new entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | File content.
$name = 'name_example'; // string | Entity name.
$tenant_id = 56; // int | Tenant identifier.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$id = 'id_example'; // string | Desired unique identifier for new resource.
$namespace = 'namespace_example'; // string | Resource namespace.
$source_id = 'source_id_example'; // string | Resource source identifier.
$type = 'type_example'; // string | Resource type.
$format = 'format_example'; // string | Resource file format.
$anonymous_access = True; // bool | Resource 'anonymous access' tag. It indicates whether resource can be accessed anonymously.
$custom_fields = NULL; // array<string,mixed> | Entity custom attributes.

try {
    $result = $apiInstance->privateResourcesCreate($file, $name, $tenant_id, $owner_id, $id, $namespace, $source_id, $type, $format, $anonymous_access, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateResourcesApi->privateResourcesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| File content. | |
| **name** | **string**| Entity name. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **id** | **string**| Desired unique identifier for new resource. | [optional] |
| **namespace** | **string**| Resource namespace. | [optional] |
| **source_id** | **string**| Resource source identifier. | [optional] |
| **type** | **string**| Resource type. | [optional] |
| **format** | **string**| Resource file format. | [optional] |
| **anonymous_access** | **bool**| Resource &#39;anonymous access&#39; tag. It indicates whether resource can be accessed anonymously. | [optional] |
| **custom_fields** | [**array<string,mixed>**](../Model/array.md)| Entity custom attributes. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\ResourceDto**](../Model/ResourceDto.md)

### Authorization

[oauth2-code](../../README.md#oauth2-code), [apiKey](../../README.md#apiKey), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [jwtBearer](../../README.md#jwtBearer), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateResourcesDelete()`

```php
privateResourcesDelete($id, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\ResourceDto
```

Deletes the specified entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant identifier.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateResourcesDelete($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateResourcesApi->privateResourcesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\ResourceDto**](../Model/ResourceDto.md)

### Authorization

[oauth2-code](../../README.md#oauth2-code), [apiKey](../../README.md#apiKey), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [jwtBearer](../../README.md#jwtBearer), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateResourcesDeleteByNamespace()`

```php
privateResourcesDeleteByNamespace($namespace2, $namespace, $tenant_id, $owner_id)
```

Deletes all resources that use a specified namespace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace2 = 'namespace_example'; // string
$namespace = 'namespace_example'; // string | Namespace value.
$tenant_id = 56; // int | Tenant identifier.
$owner_id = 'owner_id_example'; // string | Private resources owner identifier.

try {
    $apiInstance->privateResourcesDeleteByNamespace($namespace2, $namespace, $tenant_id, $owner_id);
} catch (Exception $e) {
    echo 'Exception when calling PrivateResourcesApi->privateResourcesDeleteByNamespace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace2** | **string**|  | |
| **namespace** | **string**| Namespace value. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **owner_id** | **string**| Private resources owner identifier. | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth2-code](../../README.md#oauth2-code), [apiKey](../../README.md#apiKey), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [jwtBearer](../../README.md#jwtBearer), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateResourcesGet()`

```php
privateResourcesGet($id, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\ResourceDto
```

Returns an entity by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant identifier.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateResourcesGet($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateResourcesApi->privateResourcesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\ResourceDto**](../Model/ResourceDto.md)

### Authorization

[oauth2-code](../../README.md#oauth2-code), [apiKey](../../README.md#apiKey), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [jwtBearer](../../README.md#jwtBearer), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateResourcesGetAll()`

```php
privateResourcesGetAll($namespace, $source_id, $type, $skip, $take, $sorting, $search, $custom_fields, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\PagedOfResourceDto
```

Returns all entities relevant to specified query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Resource namespace filter.
$source_id = 'source_id_example'; // string | Resource source identifier filter.
$type = 'type_example'; // string | Resource type filter.
$skip = 56; // int | Defines page start offset from beginning of sorted result list.
$take = 56; // int | Defines page length (how much consequent items of sorted result list should be taken).
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\".
$search = 'search_example'; // string | Search string for partial match.
$custom_fields = 'custom_fields_example'; // string | Custom attributes dictionary filter. For example: `{\"public\":\"true\",\"name\":\"my item\"}`.
$tenant_id = 56; // int | Tenant identifier.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateResourcesGetAll($namespace, $source_id, $type, $skip, $take, $sorting, $search, $custom_fields, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateResourcesApi->privateResourcesGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Resource namespace filter. | [optional] |
| **source_id** | **string**| Resource source identifier filter. | [optional] |
| **type** | **string**| Resource type filter. | [optional] |
| **skip** | **int**| Defines page start offset from beginning of sorted result list. | [optional] |
| **take** | **int**| Defines page length (how much consequent items of sorted result list should be taken). | [optional] |
| **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot;. | [optional] |
| **search** | **string**| Search string for partial match. | [optional] |
| **custom_fields** | **string**| Custom attributes dictionary filter. For example: &#x60;{\&quot;public\&quot;:\&quot;true\&quot;,\&quot;name\&quot;:\&quot;my item\&quot;}&#x60;. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\PagedOfResourceDto**](../Model/PagedOfResourceDto.md)

### Authorization

[oauth2-code](../../README.md#oauth2-code), [apiKey](../../README.md#apiKey), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [jwtBearer](../../README.md#jwtBearer), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateResourcesGetFile()`

```php
privateResourcesGetFile($id, $attachment, $tenant_id, $owner_id): \SplFileObject
```

Returns an entity file from file storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$attachment = True; // bool | Indicates if file should be provided as an attachment with proper filename supplied (default value is 'false').
$tenant_id = 56; // int | Tenant identifier.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateResourcesGetFile($id, $attachment, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateResourcesApi->privateResourcesGetFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **attachment** | **bool**| Indicates if file should be provided as an attachment with proper filename supplied (default value is &#39;false&#39;). | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[oauth2-code](../../README.md#oauth2-code), [apiKey](../../README.md#apiKey), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [jwtBearer](../../README.md#jwtBearer), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateResourcesGetFileStorageInfo()`

```php
privateResourcesGetFileStorageInfo($tenant_id, $owner_id): \Aurigma\AssetStorage\Model\FileStorageInfoDto
```

Returns information about storage usage by private resource files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateResourcesGetFileStorageInfo($tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateResourcesApi->privateResourcesGetFileStorageInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\FileStorageInfoDto**](../Model/FileStorageInfoDto.md)

### Authorization

[oauth2-code](../../README.md#oauth2-code), [apiKey](../../README.md#apiKey), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [jwtBearer](../../README.md#jwtBearer), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateResourcesGetRetentionPolicy()`

```php
privateResourcesGetRetentionPolicy($id, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\RetentionPolicy
```

Returns an entity retention policy by entity identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant identifier.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateResourcesGetRetentionPolicy($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateResourcesApi->privateResourcesGetRetentionPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\RetentionPolicy**](../Model/RetentionPolicy.md)

### Authorization

[oauth2-code](../../README.md#oauth2-code), [apiKey](../../README.md#apiKey), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [jwtBearer](../../README.md#jwtBearer), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateResourcesSetRetentionPolicy()`

```php
privateResourcesSetRetentionPolicy($id, $policy, $tenant_id, $owner_id)
```

Updates an entity retention policy by entity identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$policy = new \Aurigma\AssetStorage\Model\RetentionPolicy(); // RetentionPolicy | New entity retention policy.
$tenant_id = 56; // int | Tenant identifier.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $apiInstance->privateResourcesSetRetentionPolicy($id, $policy, $tenant_id, $owner_id);
} catch (Exception $e) {
    echo 'Exception when calling PrivateResourcesApi->privateResourcesSetRetentionPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **policy** | [**RetentionPolicy**](../Model/.md)| New entity retention policy. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth2-code](../../README.md#oauth2-code), [apiKey](../../README.md#apiKey), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [jwtBearer](../../README.md#jwtBearer), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateResourcesUpdate()`

```php
privateResourcesUpdate($id, $tenant_id, $owner_id, $file, $namespace, $source_id, $type, $format, $anonymous_access, $name, $custom_fields): \Aurigma\AssetStorage\Model\ResourceDto
```

Updates the specified entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: apiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: jwtBearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant identifier.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$file = "/path/to/file.txt"; // \SplFileObject | File content.
$namespace = 'namespace_example'; // string | Resource namespace.
$source_id = 'source_id_example'; // string | Resource source identifier.
$type = 'type_example'; // string | Resource type.
$format = 'format_example'; // string | Resource file format.
$anonymous_access = True; // bool | Resource 'anonymous access' tag. It indicates whether resource can be accessed anonymously.
$name = 'name_example'; // string | Entity name.
$custom_fields = NULL; // array<string,mixed> | Entity custom attributes.

try {
    $result = $apiInstance->privateResourcesUpdate($id, $tenant_id, $owner_id, $file, $namespace, $source_id, $type, $format, $anonymous_access, $name, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateResourcesApi->privateResourcesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| File content. | [optional] |
| **namespace** | **string**| Resource namespace. | [optional] |
| **source_id** | **string**| Resource source identifier. | [optional] |
| **type** | **string**| Resource type. | [optional] |
| **format** | **string**| Resource file format. | [optional] |
| **anonymous_access** | **bool**| Resource &#39;anonymous access&#39; tag. It indicates whether resource can be accessed anonymously. | [optional] |
| **name** | **string**| Entity name. | [optional] |
| **custom_fields** | [**array<string,mixed>**](../Model/array.md)| Entity custom attributes. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\ResourceDto**](../Model/ResourceDto.md)

### Authorization

[oauth2-code](../../README.md#oauth2-code), [apiKey](../../README.md#apiKey), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [jwtBearer](../../README.md#jwtBearer), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
