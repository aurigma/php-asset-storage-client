# Aurigma\AssetStorage\DataSchemasApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataSchemasBatchCopy()**](DataSchemasApi.md#dataSchemasBatchCopy) | **POST** /api/storage/v1/dataSchemas/batchCopy | Copies selected entities and folders to another folder specified by path
[**dataSchemasBatchDelete()**](DataSchemasApi.md#dataSchemasBatchDelete) | **POST** /api/storage/v1/dataSchemas/batchDelete | Deletes selected entities and folders
[**dataSchemasBatchUpdateParentFolder()**](DataSchemasApi.md#dataSchemasBatchUpdateParentFolder) | **POST** /api/storage/v1/dataSchemas/batchUpdateParentFolder | Updates parent folder for selected entities and folders
[**dataSchemasCopy()**](DataSchemasApi.md#dataSchemasCopy) | **POST** /api/storage/v1/dataSchemas/{id} | Copies specified entity
[**dataSchemasCreate()**](DataSchemasApi.md#dataSchemasCreate) | **POST** /api/storage/v1/dataSchemas | Creates new entity
[**dataSchemasCreateCollection()**](DataSchemasApi.md#dataSchemasCreateCollection) | **POST** /api/storage/v1/dataSchemas/collections | Creates new collection
[**dataSchemasCreateFolder()**](DataSchemasApi.md#dataSchemasCreateFolder) | **POST** /api/storage/v1/dataSchemas/folders | Creates new folder
[**dataSchemasDelete()**](DataSchemasApi.md#dataSchemasDelete) | **DELETE** /api/storage/v1/dataSchemas/{id} | Deletes specified entity
[**dataSchemasDeleteCollection()**](DataSchemasApi.md#dataSchemasDeleteCollection) | **DELETE** /api/storage/v1/dataSchemas/collections/{id} | Deletes specified collection
[**dataSchemasDeleteFolder()**](DataSchemasApi.md#dataSchemasDeleteFolder) | **DELETE** /api/storage/v1/dataSchemas/folders | Deletes specified folder
[**dataSchemasGet()**](DataSchemasApi.md#dataSchemasGet) | **GET** /api/storage/v1/dataSchemas/{id} | Gets entity by id
[**dataSchemasGetAll()**](DataSchemasApi.md#dataSchemasGetAll) | **GET** /api/storage/v1/dataSchemas | Gets all entities relevant to specified query parameters
[**dataSchemasGetAllCollections()**](DataSchemasApi.md#dataSchemasGetAllCollections) | **GET** /api/storage/v1/dataSchemas/collections | Gets all collections
[**dataSchemasGetAllFolders()**](DataSchemasApi.md#dataSchemasGetAllFolders) | **GET** /api/storage/v1/dataSchemas/folders/all | Gets all folders
[**dataSchemasGetCollection()**](DataSchemasApi.md#dataSchemasGetCollection) | **GET** /api/storage/v1/dataSchemas/collections/{id} | Gets collection content by collection id
[**dataSchemasGetFile()**](DataSchemasApi.md#dataSchemasGetFile) | **GET** /api/storage/v1/dataSchemas/{id}/file | Gets entity file from file storage
[**dataSchemasGetFolder()**](DataSchemasApi.md#dataSchemasGetFolder) | **GET** /api/storage/v1/dataSchemas/folders | Gets folder content by folder path
[**dataSchemasGetFolderInfo()**](DataSchemasApi.md#dataSchemasGetFolderInfo) | **GET** /api/storage/v1/dataSchemas/folders/{id} | Gets folder by id
[**dataSchemasUpdate()**](DataSchemasApi.md#dataSchemasUpdate) | **PUT** /api/storage/v1/dataSchemas/{id} | Updates specified entity
[**dataSchemasUpdateCollection()**](DataSchemasApi.md#dataSchemasUpdateCollection) | **PUT** /api/storage/v1/dataSchemas/collections/{id} | Updates specified collection
[**dataSchemasUpdateFolder()**](DataSchemasApi.md#dataSchemasUpdateFolder) | **PUT** /api/storage/v1/dataSchemas/folders/{id} | Updates specified folder


## `dataSchemasBatchCopy()`

```php
dataSchemasBatchCopy($tenant_id, $batch_copy_input)
```

Copies selected entities and folders to another folder specified by path

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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$batch_copy_input = new \Aurigma\AssetStorage\Model\BatchCopyInput(); // \Aurigma\AssetStorage\Model\BatchCopyInput | Operation parameters

try {
    $apiInstance->dataSchemasBatchCopy($tenant_id, $batch_copy_input);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasBatchCopy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **batch_copy_input** | [**\Aurigma\AssetStorage\Model\BatchCopyInput**](../Model/BatchCopyInput.md)| Operation parameters | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasBatchDelete()`

```php
dataSchemasBatchDelete($tenant_id, $batch_delete_input)
```

Deletes selected entities and folders

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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$batch_delete_input = new \Aurigma\AssetStorage\Model\BatchDeleteInput(); // \Aurigma\AssetStorage\Model\BatchDeleteInput | Operation parameters

try {
    $apiInstance->dataSchemasBatchDelete($tenant_id, $batch_delete_input);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasBatchDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **batch_delete_input** | [**\Aurigma\AssetStorage\Model\BatchDeleteInput**](../Model/BatchDeleteInput.md)| Operation parameters | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasBatchUpdateParentFolder()`

```php
dataSchemasBatchUpdateParentFolder($tenant_id, $batch_update_parent_folder_input)
```

Updates parent folder for selected entities and folders

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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$batch_update_parent_folder_input = new \Aurigma\AssetStorage\Model\BatchUpdateParentFolderInput(); // \Aurigma\AssetStorage\Model\BatchUpdateParentFolderInput | Operation parameters

try {
    $apiInstance->dataSchemasBatchUpdateParentFolder($tenant_id, $batch_update_parent_folder_input);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasBatchUpdateParentFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **batch_update_parent_folder_input** | [**\Aurigma\AssetStorage\Model\BatchUpdateParentFolderInput**](../Model/BatchUpdateParentFolderInput.md)| Operation parameters | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasCopy()`

```php
dataSchemasCopy($id, $path, $name, $strategy, $tenant_id): \Aurigma\AssetStorage\Model\DataSchemaDto
```

Copies specified entity

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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source entity identifier
$path = 'path_example'; // string | Desired path
$name = 'name_example'; // string | Desired name
$strategy = new \Aurigma\AssetStorage\Model\\Aurigma\AssetStorage\Model\ConflictResolvingStrategy(); // \Aurigma\AssetStorage\Model\ConflictResolvingStrategy | Conflict resolving strategy
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSchemasCopy($id, $path, $name, $strategy, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasCopy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Source entity identifier |
 **path** | **string**| Desired path | [optional]
 **name** | **string**| Desired name | [optional]
 **strategy** | [**\Aurigma\AssetStorage\Model\ConflictResolvingStrategy**](../Model/.md)| Conflict resolving strategy | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\DataSchemaDto**](../Model/DataSchemaDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasCreate()`

```php
dataSchemasCreate($path, $name, $tenant_id, $metadata_fields, $file, $custom_fields): \Aurigma\AssetStorage\Model\DataSchemaDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | Parent folder full path
$name = 'name_example'; // string | Entity name
$tenant_id = 56; // int | Tenant identifier
$metadata_fields = 'metadata_fields_example'; // string | DataSchema fields
$file = "/path/to/file.txt"; // \SplFileObject | Entity file content
$custom_fields = NULL; // mixed

try {
    $result = $apiInstance->dataSchemasCreate($path, $name, $tenant_id, $metadata_fields, $file, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Parent folder full path |
 **name** | **string**| Entity name |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **metadata_fields** | **string**| DataSchema fields | [optional]
 **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| Entity file content | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\DataSchemaDto**](../Model/DataSchemaDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasCreateCollection()`

```php
dataSchemasCreateCollection($tenant_id, $create_collection_dto): \Aurigma\AssetStorage\Model\CollectionDto
```

Creates new collection

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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$create_collection_dto = new \Aurigma\AssetStorage\Model\CreateCollectionDto(); // \Aurigma\AssetStorage\Model\CreateCollectionDto | Create operation parameters

try {
    $result = $apiInstance->dataSchemasCreateCollection($tenant_id, $create_collection_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasCreateCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **create_collection_dto** | [**\Aurigma\AssetStorage\Model\CreateCollectionDto**](../Model/CreateCollectionDto.md)| Create operation parameters | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\CollectionDto**](../Model/CollectionDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasCreateFolder()`

```php
dataSchemasCreateFolder($tenant_id, $create_folder_dto): \Aurigma\AssetStorage\Model\FolderDto
```

Creates new folder

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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$create_folder_dto = new \Aurigma\AssetStorage\Model\CreateFolderDto(); // \Aurigma\AssetStorage\Model\CreateFolderDto | Create operation parameters

try {
    $result = $apiInstance->dataSchemasCreateFolder($tenant_id, $create_folder_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasCreateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **create_folder_dto** | [**\Aurigma\AssetStorage\Model\CreateFolderDto**](../Model/CreateFolderDto.md)| Create operation parameters | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\FolderDto**](../Model/FolderDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasDelete()`

```php
dataSchemasDelete($id, $tenant_id): \Aurigma\AssetStorage\Model\DataSchemaDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity unique identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSchemasDelete($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\DataSchemaDto**](../Model/DataSchemaDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasDeleteCollection()`

```php
dataSchemasDeleteCollection($id, $tenant_id): \Aurigma\AssetStorage\Model\CollectionDto
```

Deletes specified collection

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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Collection unique identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSchemasDeleteCollection($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasDeleteCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Collection unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\CollectionDto**](../Model/CollectionDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasDeleteFolder()`

```php
dataSchemasDeleteFolder($full_path, $tenant_id): \Aurigma\AssetStorage\Model\FolderDto
```

Deletes specified folder

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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$full_path = 'full_path_example'; // string | Folder full path
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSchemasDeleteFolder($full_path, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasDeleteFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **full_path** | **string**| Folder full path | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\FolderDto**](../Model/FolderDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasGet()`

```php
dataSchemasGet($id, $tenant_id): \Aurigma\AssetStorage\Model\DataSchemaDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity unique identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSchemasGet($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\DataSchemaDto**](../Model/DataSchemaDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasGetAll()`

```php
dataSchemasGetAll($path, $include_subfolders, $skip, $take, $sorting, $search, $custom_fields, $tenant_id): \Aurigma\AssetStorage\Model\PagedOfDataSchemaDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | Folder path filter parameter
$include_subfolders = True; // bool | If set to 'true', query result will contain list of all entities in desired folder and subfolders
$skip = 56; // int | Defines page start offset from beginning of sorted result list
$take = 56; // int | Defines page length (how much consequent items of sorted result list should be taken)
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\"
$search = 'search_example'; // string | Search string for partial match
$custom_fields = 'custom_fields_example'; // string | Custom attributes dictionary filter  <example>{\"public\":\"true\",\"name\":\"my item\"}</example>
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSchemasGetAll($path, $include_subfolders, $skip, $take, $sorting, $search, $custom_fields, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path filter parameter | [optional]
 **include_subfolders** | **bool**| If set to &#39;true&#39;, query result will contain list of all entities in desired folder and subfolders | [optional]
 **skip** | **int**| Defines page start offset from beginning of sorted result list | [optional]
 **take** | **int**| Defines page length (how much consequent items of sorted result list should be taken) | [optional]
 **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot; | [optional]
 **search** | **string**| Search string for partial match | [optional]
 **custom_fields** | **string**| Custom attributes dictionary filter  &lt;example&gt;{\&quot;public\&quot;:\&quot;true\&quot;,\&quot;name\&quot;:\&quot;my item\&quot;}&lt;/example&gt; | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\PagedOfDataSchemaDto**](../Model/PagedOfDataSchemaDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasGetAllCollections()`

```php
dataSchemasGetAllCollections($tenant_id): \Aurigma\AssetStorage\Model\CollectionDto[]
```

Gets all collections

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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSchemasGetAllCollections($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasGetAllCollections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\CollectionDto[]**](../Model/CollectionDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasGetAllFolders()`

```php
dataSchemasGetAllFolders($tenant_id): \Aurigma\AssetStorage\Model\FolderDto[]
```

Gets all folders

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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSchemasGetAllFolders($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasGetAllFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\FolderDto[]**](../Model/FolderDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasGetCollection()`

```php
dataSchemasGetCollection($id, $tenant_id): \Aurigma\AssetStorage\Model\CollectionContentOfDataSchemaDto
```

Gets collection content by collection id

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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Collection unique identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSchemasGetCollection($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Collection unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\CollectionContentOfDataSchemaDto**](../Model/CollectionContentOfDataSchemaDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasGetFile()`

```php
dataSchemasGetFile($id, $attachment, $tenant_id): \SplFileObject
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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity unique identifier
$attachment = True; // bool | If set to 'true', file will be provided as an attachment with proper filename supplied (default value is 'false')
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSchemasGetFile($id, $attachment, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasGetFile: ', $e->getMessage(), PHP_EOL;
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

## `dataSchemasGetFolder()`

```php
dataSchemasGetFolder($full_path, $tenant_id): \Aurigma\AssetStorage\Model\FolderContentOfDataSchemaDto
```

Gets folder content by folder path

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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$full_path = 'full_path_example'; // string | Full folder path, if not set then root folder path is used
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSchemasGetFolder($full_path, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasGetFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **full_path** | **string**| Full folder path, if not set then root folder path is used | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\FolderContentOfDataSchemaDto**](../Model/FolderContentOfDataSchemaDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasGetFolderInfo()`

```php
dataSchemasGetFolderInfo($id, $tenant_id): \Aurigma\AssetStorage\Model\FolderDto
```

Gets folder by id

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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Folder unique identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->dataSchemasGetFolderInfo($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasGetFolderInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Folder unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\FolderDto**](../Model/FolderDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasUpdate()`

```php
dataSchemasUpdate($id, $tenant_id, $metadata_fields, $file, $path, $name, $custom_fields): \Aurigma\AssetStorage\Model\DataSchemaDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$metadata_fields = 'metadata_fields_example'; // string | DataSchema fields
$file = "/path/to/file.txt"; // \SplFileObject | Entity file content
$path = 'path_example'; // string | Parent folder full path
$name = 'name_example'; // string | Entity name
$custom_fields = NULL; // mixed

try {
    $result = $apiInstance->dataSchemasUpdate($id, $tenant_id, $metadata_fields, $file, $path, $name, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **metadata_fields** | **string**| DataSchema fields | [optional]
 **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| Entity file content | [optional]
 **path** | **string**| Parent folder full path | [optional]
 **name** | **string**| Entity name | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\DataSchemaDto**](../Model/DataSchemaDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasUpdateCollection()`

```php
dataSchemasUpdateCollection($id, $tenant_id, $update_collection_dto): \Aurigma\AssetStorage\Model\CollectionDto
```

Updates specified collection

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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Collection unique identifier
$tenant_id = 56; // int | Tenant identifier
$update_collection_dto = new \Aurigma\AssetStorage\Model\UpdateCollectionDto(); // \Aurigma\AssetStorage\Model\UpdateCollectionDto | Update operation parameters

try {
    $result = $apiInstance->dataSchemasUpdateCollection($id, $tenant_id, $update_collection_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasUpdateCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Collection unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **update_collection_dto** | [**\Aurigma\AssetStorage\Model\UpdateCollectionDto**](../Model/UpdateCollectionDto.md)| Update operation parameters | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\CollectionDto**](../Model/CollectionDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSchemasUpdateFolder()`

```php
dataSchemasUpdateFolder($id, $tenant_id, $update_folder_dto): \Aurigma\AssetStorage\Model\FolderDto
```

Updates specified folder

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


$apiInstance = new Aurigma\AssetStorage\Api\DataSchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Folder unique identifier
$tenant_id = 56; // int | Tenant identifier
$update_folder_dto = new \Aurigma\AssetStorage\Model\UpdateFolderDto(); // \Aurigma\AssetStorage\Model\UpdateFolderDto | Update operation parameters

try {
    $result = $apiInstance->dataSchemasUpdateFolder($id, $tenant_id, $update_folder_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSchemasApi->dataSchemasUpdateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Folder unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **update_folder_dto** | [**\Aurigma\AssetStorage\Model\UpdateFolderDto**](../Model/UpdateFolderDto.md)| Update operation parameters | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\FolderDto**](../Model/FolderDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)