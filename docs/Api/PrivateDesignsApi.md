# Aurigma\AssetStorage\PrivateDesignsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**privateDesignsAddPreview()**](PrivateDesignsApi.md#privateDesignsAddPreview) | **PUT** /api/storage/v1/private-designs/{id}/preview | Creates preview entity for specified source entity
[**privateDesignsBatchCopy()**](PrivateDesignsApi.md#privateDesignsBatchCopy) | **POST** /api/storage/v1/private-designs/batchCopy | Copies selected entities and folders to another folder specified by path
[**privateDesignsBatchDelete()**](PrivateDesignsApi.md#privateDesignsBatchDelete) | **POST** /api/storage/v1/private-designs/batchDelete | Deletes selected entities and folders
[**privateDesignsBatchUpdateOwner()**](PrivateDesignsApi.md#privateDesignsBatchUpdateOwner) | **POST** /api/storage/v1/private-designs/batchUpdateOwner | Updates owner for selected entities and folders
[**privateDesignsBatchUpdateParentFolder()**](PrivateDesignsApi.md#privateDesignsBatchUpdateParentFolder) | **POST** /api/storage/v1/private-designs/batchUpdateParentFolder | Updates parent folder for selected entities and folders
[**privateDesignsCopy()**](PrivateDesignsApi.md#privateDesignsCopy) | **POST** /api/storage/v1/private-designs/{id} | Copies specified entity
[**privateDesignsCreate()**](PrivateDesignsApi.md#privateDesignsCreate) | **POST** /api/storage/v1/private-designs | Creates new entity
[**privateDesignsCreateCollection()**](PrivateDesignsApi.md#privateDesignsCreateCollection) | **POST** /api/storage/v1/private-designs/collections | Creates new collection
[**privateDesignsCreateFolder()**](PrivateDesignsApi.md#privateDesignsCreateFolder) | **POST** /api/storage/v1/private-designs/folders | Creates new folder
[**privateDesignsDelete()**](PrivateDesignsApi.md#privateDesignsDelete) | **DELETE** /api/storage/v1/private-designs/{id} | Deletes specified entity
[**privateDesignsDeleteCollection()**](PrivateDesignsApi.md#privateDesignsDeleteCollection) | **DELETE** /api/storage/v1/private-designs/collections/{id} | Deletes specified collection
[**privateDesignsDeleteFolder()**](PrivateDesignsApi.md#privateDesignsDeleteFolder) | **DELETE** /api/storage/v1/private-designs/folders | Deletes specified folder
[**privateDesignsGet()**](PrivateDesignsApi.md#privateDesignsGet) | **GET** /api/storage/v1/private-designs/{id} | Gets entity by id
[**privateDesignsGetAll()**](PrivateDesignsApi.md#privateDesignsGetAll) | **GET** /api/storage/v1/private-designs | Gets all entities relevant to specified query parameters
[**privateDesignsGetAllCollections()**](PrivateDesignsApi.md#privateDesignsGetAllCollections) | **GET** /api/storage/v1/private-designs/collections | Gets all collections
[**privateDesignsGetAllFolders()**](PrivateDesignsApi.md#privateDesignsGetAllFolders) | **GET** /api/storage/v1/private-designs/folders/all | Gets all folders
[**privateDesignsGetCollection()**](PrivateDesignsApi.md#privateDesignsGetCollection) | **GET** /api/storage/v1/private-designs/collections/{id} | Gets collection content by collection id
[**privateDesignsGetFile()**](PrivateDesignsApi.md#privateDesignsGetFile) | **GET** /api/storage/v1/private-designs/{id}/file | Gets entity file from file storage
[**privateDesignsGetFolder()**](PrivateDesignsApi.md#privateDesignsGetFolder) | **GET** /api/storage/v1/private-designs/folders | Gets folder content by folder path
[**privateDesignsGetFolderInfo()**](PrivateDesignsApi.md#privateDesignsGetFolderInfo) | **GET** /api/storage/v1/private-designs/folders/{id} | Gets folder by id
[**privateDesignsUpdate()**](PrivateDesignsApi.md#privateDesignsUpdate) | **PUT** /api/storage/v1/private-designs/{id} | Updates specified entity
[**privateDesignsUpdateCollection()**](PrivateDesignsApi.md#privateDesignsUpdateCollection) | **PUT** /api/storage/v1/private-designs/collections/{id} | Updates specified collection
[**privateDesignsUpdateFolder()**](PrivateDesignsApi.md#privateDesignsUpdateFolder) | **PUT** /api/storage/v1/private-designs/folders/{id} | Updates specified folder


## `privateDesignsAddPreview()`

```php
privateDesignsAddPreview($id, $name, $namespace, $width, $height, $tenant_id, $user_id, $format, $file): \Aurigma\AssetStorage\Model\DesignDto
```

Creates preview entity for specified source entity

If preview entity with specified namespace and name already exists it will be overwritten

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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source entity unique identifier
$name = 'name_example'; // string | Preview name
$namespace = 'namespace_example'; // string | Preview namespace
$width = 56; // int | Preview image width
$height = 56; // int | Preview image height
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Source entity private storage owner identifier
$format = 'format_example'; // string | Preview image format, e.g. Jpeg, Png, Bmp ...
$file = "/path/to/file.txt"; // \SplFileObject | Preview file content

try {
    $result = $apiInstance->privateDesignsAddPreview($id, $name, $namespace, $width, $height, $tenant_id, $user_id, $format, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsAddPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Source entity unique identifier |
 **name** | **string**| Preview name |
 **namespace** | **string**| Preview namespace |
 **width** | **int**| Preview image width |
 **height** | **int**| Preview image height |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Source entity private storage owner identifier | [optional]
 **format** | **string**| Preview image format, e.g. Jpeg, Png, Bmp ... | [optional]
 **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| Preview file content | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsBatchCopy()`

```php
privateDesignsBatchCopy($tenant_id, $user_id, $batch_copy_input)
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier
$batch_copy_input = new \Aurigma\AssetStorage\Model\BatchCopyInput(); // \Aurigma\AssetStorage\Model\BatchCopyInput | Operation parameters

try {
    $apiInstance->privateDesignsBatchCopy($tenant_id, $user_id, $batch_copy_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsBatchCopy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]
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

## `privateDesignsBatchDelete()`

```php
privateDesignsBatchDelete($tenant_id, $user_id, $batch_delete_input)
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier
$batch_delete_input = new \Aurigma\AssetStorage\Model\BatchDeleteInput(); // \Aurigma\AssetStorage\Model\BatchDeleteInput | Operation parameters

try {
    $apiInstance->privateDesignsBatchDelete($tenant_id, $user_id, $batch_delete_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsBatchDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]
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

## `privateDesignsBatchUpdateOwner()`

```php
privateDesignsBatchUpdateOwner($old_user_id, $tenant_id, $user_id, $batch_update_owner_input)
```

Updates owner for selected entities and folders

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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$old_user_id = 'old_user_id_example'; // string | Source private storage owner identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | New private storage owner identifier
$batch_update_owner_input = new \Aurigma\AssetStorage\Model\BatchUpdateOwnerInput(); // \Aurigma\AssetStorage\Model\BatchUpdateOwnerInput | Operation parameters

try {
    $apiInstance->privateDesignsBatchUpdateOwner($old_user_id, $tenant_id, $user_id, $batch_update_owner_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsBatchUpdateOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **old_user_id** | **string**| Source private storage owner identifier | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| New private storage owner identifier | [optional]
 **batch_update_owner_input** | [**\Aurigma\AssetStorage\Model\BatchUpdateOwnerInput**](../Model/BatchUpdateOwnerInput.md)| Operation parameters | [optional]

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

## `privateDesignsBatchUpdateParentFolder()`

```php
privateDesignsBatchUpdateParentFolder($tenant_id, $user_id, $batch_update_parent_folder_input)
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier
$batch_update_parent_folder_input = new \Aurigma\AssetStorage\Model\BatchUpdateParentFolderInput(); // \Aurigma\AssetStorage\Model\BatchUpdateParentFolderInput | Operation parameters

try {
    $apiInstance->privateDesignsBatchUpdateParentFolder($tenant_id, $user_id, $batch_update_parent_folder_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsBatchUpdateParentFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]
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

## `privateDesignsCopy()`

```php
privateDesignsCopy($id, $path, $name, $strategy, $tenant_id, $user_id): \Aurigma\AssetStorage\Model\DesignDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
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
$user_id = 'user_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignsCopy($id, $path, $name, $strategy, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsCopy: ', $e->getMessage(), PHP_EOL;
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
 **user_id** | **string**| Private storage owner identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsCreate()`

```php
privateDesignsCreate($path, $name, $tenant_id, $user_id, $id, $metadata_fonts, $metadata_surfaces, $metadata_has_data_schema, $metadata_data_schema_id, $metadata_data_schema_name, $has_problems, $file, $custom_fields): \Aurigma\AssetStorage\Model\DesignDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | Parent folder full path
$name = 'name_example'; // string | Entity name
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier
$id = 'id_example'; // string | Desired unique design identifier for new design
$metadata_fonts = new \Aurigma\AssetStorage\Model\DesignFontMetadata(); // \Aurigma\AssetStorage\Model\DesignFontMetadata[] | Design font metadata list
$metadata_surfaces = new \Aurigma\AssetStorage\Model\DesignSurfaceMetadata(); // \Aurigma\AssetStorage\Model\DesignSurfaceMetadata[] | Design surface metadata list
$metadata_has_data_schema = True; // bool | Indicates whether design has data schema
$metadata_data_schema_id = 'metadata_data_schema_id_example'; // string | Design data schema id. Empty string for embedded schema
$metadata_data_schema_name = 'metadata_data_schema_name_example'; // string | Design data schema name
$has_problems = True; // bool | Indicates whether design has any problems preventing normal processing, e.g. missing font etc.
$file = "/path/to/file.txt"; // \SplFileObject | Entity file content
$custom_fields = NULL; // mixed

try {
    $result = $apiInstance->privateDesignsCreate($path, $name, $tenant_id, $user_id, $id, $metadata_fonts, $metadata_surfaces, $metadata_has_data_schema, $metadata_data_schema_id, $metadata_data_schema_name, $has_problems, $file, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Parent folder full path |
 **name** | **string**| Entity name |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]
 **id** | **string**| Desired unique design identifier for new design | [optional]
 **metadata_fonts** | [**\Aurigma\AssetStorage\Model\DesignFontMetadata[]**](../Model/\Aurigma\AssetStorage\Model\DesignFontMetadata.md)| Design font metadata list | [optional]
 **metadata_surfaces** | [**\Aurigma\AssetStorage\Model\DesignSurfaceMetadata[]**](../Model/\Aurigma\AssetStorage\Model\DesignSurfaceMetadata.md)| Design surface metadata list | [optional]
 **metadata_has_data_schema** | **bool**| Indicates whether design has data schema | [optional]
 **metadata_data_schema_id** | **string**| Design data schema id. Empty string for embedded schema | [optional]
 **metadata_data_schema_name** | **string**| Design data schema name | [optional]
 **has_problems** | **bool**| Indicates whether design has any problems preventing normal processing, e.g. missing font etc. | [optional]
 **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| Entity file content | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsCreateCollection()`

```php
privateDesignsCreateCollection($tenant_id, $user_id, $create_collection_dto): \Aurigma\AssetStorage\Model\CollectionDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier
$create_collection_dto = new \Aurigma\AssetStorage\Model\CreateCollectionDto(); // \Aurigma\AssetStorage\Model\CreateCollectionDto | Create operation parameters

try {
    $result = $apiInstance->privateDesignsCreateCollection($tenant_id, $user_id, $create_collection_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsCreateCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]
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

## `privateDesignsCreateFolder()`

```php
privateDesignsCreateFolder($tenant_id, $user_id, $create_folder_dto): \Aurigma\AssetStorage\Model\FolderDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier
$create_folder_dto = new \Aurigma\AssetStorage\Model\CreateFolderDto(); // \Aurigma\AssetStorage\Model\CreateFolderDto | Create operation parameters

try {
    $result = $apiInstance->privateDesignsCreateFolder($tenant_id, $user_id, $create_folder_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsCreateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]
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

## `privateDesignsDelete()`

```php
privateDesignsDelete($id, $tenant_id, $user_id): \Aurigma\AssetStorage\Model\DesignDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignsDelete($id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsDeleteCollection()`

```php
privateDesignsDeleteCollection($id, $tenant_id, $user_id): \Aurigma\AssetStorage\Model\CollectionDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Collection unique identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignsDeleteCollection($id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsDeleteCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Collection unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]

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

## `privateDesignsDeleteFolder()`

```php
privateDesignsDeleteFolder($full_path, $tenant_id, $user_id): \Aurigma\AssetStorage\Model\FolderDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$full_path = 'full_path_example'; // string | Folder full path
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignsDeleteFolder($full_path, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsDeleteFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **full_path** | **string**| Folder full path | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]

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

## `privateDesignsGet()`

```php
privateDesignsGet($id, $tenant_id, $user_id): \Aurigma\AssetStorage\Model\DesignDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignsGet($id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsGetAll()`

```php
privateDesignsGetAll($data_schema_id, $font_post_script_name, $path, $include_subfolders, $skip, $take, $sorting, $search, $custom_fields, $tenant_id, $user_id): \Aurigma\AssetStorage\Model\PagedOfDesignDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_schema_id = 'data_schema_id_example'; // string | Associated data schema identifier filter
$font_post_script_name = 'font_post_script_name_example'; // string | Design font postscript name filter
$path = 'path_example'; // string | Folder path filter parameter
$include_subfolders = True; // bool | If set to 'true', query result will contain list of all entities in desired folder and subfolders
$skip = 56; // int | Defines page start offset from beginning of sorted result list
$take = 56; // int | Defines page length (how much consequent items of sorted result list should be taken)
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\"
$search = 'search_example'; // string | Search string for partial match
$custom_fields = 'custom_fields_example'; // string | Custom attributes dictionary filter  <example>{\"public\":\"true\",\"name\":\"my item\"}</example>
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignsGetAll($data_schema_id, $font_post_script_name, $path, $include_subfolders, $skip, $take, $sorting, $search, $custom_fields, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_schema_id** | **string**| Associated data schema identifier filter | [optional]
 **font_post_script_name** | **string**| Design font postscript name filter | [optional]
 **path** | **string**| Folder path filter parameter | [optional]
 **include_subfolders** | **bool**| If set to &#39;true&#39;, query result will contain list of all entities in desired folder and subfolders | [optional]
 **skip** | **int**| Defines page start offset from beginning of sorted result list | [optional]
 **take** | **int**| Defines page length (how much consequent items of sorted result list should be taken) | [optional]
 **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot; | [optional]
 **search** | **string**| Search string for partial match | [optional]
 **custom_fields** | **string**| Custom attributes dictionary filter  &lt;example&gt;{\&quot;public\&quot;:\&quot;true\&quot;,\&quot;name\&quot;:\&quot;my item\&quot;}&lt;/example&gt; | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\PagedOfDesignDto**](../Model/PagedOfDesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsGetAllCollections()`

```php
privateDesignsGetAllCollections($tenant_id, $user_id): \Aurigma\AssetStorage\Model\CollectionDto[]
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignsGetAllCollections($tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsGetAllCollections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]

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

## `privateDesignsGetAllFolders()`

```php
privateDesignsGetAllFolders($tenant_id, $user_id): \Aurigma\AssetStorage\Model\FolderDto[]
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignsGetAllFolders($tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsGetAllFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]

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

## `privateDesignsGetCollection()`

```php
privateDesignsGetCollection($id, $tenant_id, $user_id): \Aurigma\AssetStorage\Model\CollectionContentOfDesignDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Collection unique identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignsGetCollection($id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Collection unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\CollectionContentOfDesignDto**](../Model/CollectionContentOfDesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsGetFile()`

```php
privateDesignsGetFile($id, $attachment, $tenant_id, $user_id): \SplFileObject
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity unique identifier
$attachment = True; // bool | If set to 'true', file will be provided as an attachment with proper filename supplied (default value is 'false')
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignsGetFile($id, $attachment, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsGetFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Entity unique identifier |
 **attachment** | **bool**| If set to &#39;true&#39;, file will be provided as an attachment with proper filename supplied (default value is &#39;false&#39;) | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]

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

## `privateDesignsGetFolder()`

```php
privateDesignsGetFolder($full_path, $tenant_id, $user_id): \Aurigma\AssetStorage\Model\FolderContentOfDesignDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$full_path = 'full_path_example'; // string | Full folder path, if not set then root folder path is used
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignsGetFolder($full_path, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsGetFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **full_path** | **string**| Full folder path, if not set then root folder path is used | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\FolderContentOfDesignDto**](../Model/FolderContentOfDesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsGetFolderInfo()`

```php
privateDesignsGetFolderInfo($id, $tenant_id, $user_id): \Aurigma\AssetStorage\Model\FolderDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Folder unique identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier

try {
    $result = $apiInstance->privateDesignsGetFolderInfo($id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsGetFolderInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Folder unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]

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

## `privateDesignsUpdate()`

```php
privateDesignsUpdate($id, $tenant_id, $user_id, $metadata_fonts, $metadata_surfaces, $metadata_has_data_schema, $metadata_data_schema_id, $metadata_data_schema_name, $has_problems, $file, $path, $name, $custom_fields): \Aurigma\AssetStorage\Model\DesignDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity unique identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier
$metadata_fonts = new \Aurigma\AssetStorage\Model\DesignFontMetadata(); // \Aurigma\AssetStorage\Model\DesignFontMetadata[] | Design font metadata list
$metadata_surfaces = new \Aurigma\AssetStorage\Model\DesignSurfaceMetadata(); // \Aurigma\AssetStorage\Model\DesignSurfaceMetadata[] | Design surface metadata list
$metadata_has_data_schema = True; // bool | Indicates whether design has data schema
$metadata_data_schema_id = 'metadata_data_schema_id_example'; // string | Design data schema id. Empty string for embedded schema
$metadata_data_schema_name = 'metadata_data_schema_name_example'; // string | Design data schema name
$has_problems = True; // bool | Indicates whether design has any problems preventing normal processing, e.g. missing font etc.
$file = "/path/to/file.txt"; // \SplFileObject | Entity file content
$path = 'path_example'; // string | Parent folder full path
$name = 'name_example'; // string | Entity name
$custom_fields = NULL; // mixed

try {
    $result = $apiInstance->privateDesignsUpdate($id, $tenant_id, $user_id, $metadata_fonts, $metadata_surfaces, $metadata_has_data_schema, $metadata_data_schema_id, $metadata_data_schema_name, $has_problems, $file, $path, $name, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Entity unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]
 **metadata_fonts** | [**\Aurigma\AssetStorage\Model\DesignFontMetadata[]**](../Model/\Aurigma\AssetStorage\Model\DesignFontMetadata.md)| Design font metadata list | [optional]
 **metadata_surfaces** | [**\Aurigma\AssetStorage\Model\DesignSurfaceMetadata[]**](../Model/\Aurigma\AssetStorage\Model\DesignSurfaceMetadata.md)| Design surface metadata list | [optional]
 **metadata_has_data_schema** | **bool**| Indicates whether design has data schema | [optional]
 **metadata_data_schema_id** | **string**| Design data schema id. Empty string for embedded schema | [optional]
 **metadata_data_schema_name** | **string**| Design data schema name | [optional]
 **has_problems** | **bool**| Indicates whether design has any problems preventing normal processing, e.g. missing font etc. | [optional]
 **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| Entity file content | [optional]
 **path** | **string**| Parent folder full path | [optional]
 **name** | **string**| Entity name | [optional]
 **custom_fields** | [**mixed**](../Model/mixed.md)|  | [optional]

### Return type

[**\Aurigma\AssetStorage\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsUpdateCollection()`

```php
privateDesignsUpdateCollection($id, $tenant_id, $user_id, $update_collection_dto): \Aurigma\AssetStorage\Model\CollectionDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Collection unique identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier
$update_collection_dto = new \Aurigma\AssetStorage\Model\UpdateCollectionDto(); // \Aurigma\AssetStorage\Model\UpdateCollectionDto | Update operation parameters

try {
    $result = $apiInstance->privateDesignsUpdateCollection($id, $tenant_id, $user_id, $update_collection_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsUpdateCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Collection unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]
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

## `privateDesignsUpdateFolder()`

```php
privateDesignsUpdateFolder($id, $tenant_id, $user_id, $update_folder_dto): \Aurigma\AssetStorage\Model\FolderDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Folder unique identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Private storage owner identifier
$update_folder_dto = new \Aurigma\AssetStorage\Model\UpdateFolderDto(); // \Aurigma\AssetStorage\Model\UpdateFolderDto | Update operation parameters

try {
    $result = $apiInstance->privateDesignsUpdateFolder($id, $tenant_id, $user_id, $update_folder_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsUpdateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Folder unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Private storage owner identifier | [optional]
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
