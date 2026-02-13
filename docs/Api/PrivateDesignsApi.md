# Aurigma\AssetStorage\PrivateDesignsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**privateDesignsAddPreview()**](PrivateDesignsApi.md#privateDesignsAddPreview) | **PUT** /api/storage/v1/private-designs/{id}/preview | Creates a preview entity for specified source entity. |
| [**privateDesignsBatchCopy()**](PrivateDesignsApi.md#privateDesignsBatchCopy) | **POST** /api/storage/v1/private-designs/batch-copy | Copies the specified entities and folders to another folder. |
| [**privateDesignsBatchDelete()**](PrivateDesignsApi.md#privateDesignsBatchDelete) | **POST** /api/storage/v1/private-designs/batch-delete | Deletes the specified entities and folders. |
| [**privateDesignsBatchUpdateCustomFields()**](PrivateDesignsApi.md#privateDesignsBatchUpdateCustomFields) | **POST** /api/storage/v1/private-designs/batch-update-custom-fields | Updates custom fields values for the specified entities. |
| [**privateDesignsBatchUpdateOwner()**](PrivateDesignsApi.md#privateDesignsBatchUpdateOwner) | **POST** /api/storage/v1/private-designs/batch-update-owner | Updates owner for the specified entities and folders. |
| [**privateDesignsBatchUpdateParentFolder()**](PrivateDesignsApi.md#privateDesignsBatchUpdateParentFolder) | **POST** /api/storage/v1/private-designs/batch-update-parent-folder | Updates parent folder for the specified entities and folders. |
| [**privateDesignsCopy()**](PrivateDesignsApi.md#privateDesignsCopy) | **POST** /api/storage/v1/private-designs/{id} | Copies the specified entity. |
| [**privateDesignsCreate()**](PrivateDesignsApi.md#privateDesignsCreate) | **POST** /api/storage/v1/private-designs | Creates a new entity. |
| [**privateDesignsCreateFolder()**](PrivateDesignsApi.md#privateDesignsCreateFolder) | **POST** /api/storage/v1/private-designs/folders | Creates a new folder. |
| [**privateDesignsDelete()**](PrivateDesignsApi.md#privateDesignsDelete) | **DELETE** /api/storage/v1/private-designs/{id} | Deletes the specified entity. |
| [**privateDesignsDeleteFolder()**](PrivateDesignsApi.md#privateDesignsDeleteFolder) | **DELETE** /api/storage/v1/private-designs/folders/by-path | Deletes the specified folder and its content by folder path. |
| [**privateDesignsDeleteFolderById()**](PrivateDesignsApi.md#privateDesignsDeleteFolderById) | **DELETE** /api/storage/v1/private-designs/folders/{id} | Deletes the specified folder and its content by folder identifier. |
| [**privateDesignsGet()**](PrivateDesignsApi.md#privateDesignsGet) | **GET** /api/storage/v1/private-designs/{id} | Returns an entity by ID. |
| [**privateDesignsGetAll()**](PrivateDesignsApi.md#privateDesignsGetAll) | **GET** /api/storage/v1/private-designs | Returns all entities relevant to specified query parameters. |
| [**privateDesignsGetAllFolders()**](PrivateDesignsApi.md#privateDesignsGetAllFolders) | **GET** /api/storage/v1/private-designs/folders/all | Returns all folders. |
| [**privateDesignsGetFile()**](PrivateDesignsApi.md#privateDesignsGetFile) | **GET** /api/storage/v1/private-designs/{id}/file | Returns an entity file from file storage. |
| [**privateDesignsGetFileStorageInfo()**](PrivateDesignsApi.md#privateDesignsGetFileStorageInfo) | **GET** /api/storage/v1/private-designs/file-storage-info | Returns information about the use of file storage. |
| [**privateDesignsGetFolderContent()**](PrivateDesignsApi.md#privateDesignsGetFolderContent) | **GET** /api/storage/v1/private-designs/folders/content/by-path | Returns a folder and its content by folder path. |
| [**privateDesignsGetFolderContentById()**](PrivateDesignsApi.md#privateDesignsGetFolderContentById) | **GET** /api/storage/v1/private-designs/folders/content | Returns a folder and its content by folder id. |
| [**privateDesignsGetFolderInfo()**](PrivateDesignsApi.md#privateDesignsGetFolderInfo) | **GET** /api/storage/v1/private-designs/folders/{id} | Returns a folder by ID. |
| [**privateDesignsGetRetentionPolicy()**](PrivateDesignsApi.md#privateDesignsGetRetentionPolicy) | **GET** /api/storage/v1/private-designs/{id}/retention-policy | Returns an entity retention policy by entity identifier. |
| [**privateDesignsSetRetentionPolicy()**](PrivateDesignsApi.md#privateDesignsSetRetentionPolicy) | **POST** /api/storage/v1/private-designs/{id}/retention-policy | Updates an entity retention policy by entity identifier. |
| [**privateDesignsUpdate()**](PrivateDesignsApi.md#privateDesignsUpdate) | **PUT** /api/storage/v1/private-designs/{id} | Updates the specified entity. |
| [**privateDesignsUpdateFolder()**](PrivateDesignsApi.md#privateDesignsUpdateFolder) | **PUT** /api/storage/v1/private-designs/folders/{id} | Updates the specified folder. |


## `privateDesignsAddPreview()`

```php
privateDesignsAddPreview($id, $name, $namespace, $width, $height, $tenant_id, $owner_id, $format, $file, $is_custom): \Aurigma\AssetStorage\Model\DesignDto
```

Creates a preview entity for specified source entity.

If a preview entity with specified namespace and name already exists it will be overwritten.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source entity identifier.
$name = 'name_example'; // string | Preview name.
$namespace = 'namespace_example'; // string | Preview namespace.
$width = 56; // int | Preview image width.
$height = 56; // int | Preview image height.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$format = 'format_example'; // string | Preview image format, e.g. Jpeg, Png, Bmp.
$file = "/path/to/file.txt"; // \SplFileObject | Preview file content.
$is_custom = True; // bool | Indicates if the preview is custom.  Custom previews preserved even if source is changed.

try {
    $result = $apiInstance->privateDesignsAddPreview($id, $name, $namespace, $width, $height, $tenant_id, $owner_id, $format, $file, $is_custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsAddPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Source entity identifier. | |
| **name** | **string**| Preview name. | |
| **namespace** | **string**| Preview namespace. | |
| **width** | **int**| Preview image width. | |
| **height** | **int**| Preview image height. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **format** | **string**| Preview image format, e.g. Jpeg, Png, Bmp. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| Preview file content. | [optional] |
| **is_custom** | **bool**| Indicates if the preview is custom.  Custom previews preserved even if source is changed. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsBatchCopy()`

```php
privateDesignsBatchCopy($tenant_id, $owner_id, $batch_copy_input)
```

Copies the specified entities and folders to another folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$batch_copy_input = new \Aurigma\AssetStorage\Model\BatchCopyInput(); // \Aurigma\AssetStorage\Model\BatchCopyInput | Operation parameters.

try {
    $apiInstance->privateDesignsBatchCopy($tenant_id, $owner_id, $batch_copy_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsBatchCopy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **batch_copy_input** | [**\Aurigma\AssetStorage\Model\BatchCopyInput**](../Model/BatchCopyInput.md)| Operation parameters. | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsBatchDelete()`

```php
privateDesignsBatchDelete($tenant_id, $owner_id, $batch_delete_input)
```

Deletes the specified entities and folders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$batch_delete_input = new \Aurigma\AssetStorage\Model\BatchDeleteInput(); // \Aurigma\AssetStorage\Model\BatchDeleteInput | Operation parameters.

try {
    $apiInstance->privateDesignsBatchDelete($tenant_id, $owner_id, $batch_delete_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsBatchDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **batch_delete_input** | [**\Aurigma\AssetStorage\Model\BatchDeleteInput**](../Model/BatchDeleteInput.md)| Operation parameters. | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsBatchUpdateCustomFields()`

```php
privateDesignsBatchUpdateCustomFields($tenant_id, $owner_id, $batch_update_custom_fields_input)
```

Updates custom fields values for the specified entities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$batch_update_custom_fields_input = new \Aurigma\AssetStorage\Model\BatchUpdateCustomFieldsInput(); // \Aurigma\AssetStorage\Model\BatchUpdateCustomFieldsInput | Operation parameters.

try {
    $apiInstance->privateDesignsBatchUpdateCustomFields($tenant_id, $owner_id, $batch_update_custom_fields_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsBatchUpdateCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **batch_update_custom_fields_input** | [**\Aurigma\AssetStorage\Model\BatchUpdateCustomFieldsInput**](../Model/BatchUpdateCustomFieldsInput.md)| Operation parameters. | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsBatchUpdateOwner()`

```php
privateDesignsBatchUpdateOwner($old_owner_id, $tenant_id, $owner_id, $batch_update_owner_input)
```

Updates owner for the specified entities and folders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$old_owner_id = 'old_owner_id_example'; // string | Source private storage owner identifier.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | New private storage owner identifier.
$batch_update_owner_input = new \Aurigma\AssetStorage\Model\BatchUpdateOwnerInput(); // \Aurigma\AssetStorage\Model\BatchUpdateOwnerInput | Operation parameters.

try {
    $apiInstance->privateDesignsBatchUpdateOwner($old_owner_id, $tenant_id, $owner_id, $batch_update_owner_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsBatchUpdateOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **old_owner_id** | **string**| Source private storage owner identifier. | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| New private storage owner identifier. | [optional] |
| **batch_update_owner_input** | [**\Aurigma\AssetStorage\Model\BatchUpdateOwnerInput**](../Model/BatchUpdateOwnerInput.md)| Operation parameters. | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsBatchUpdateParentFolder()`

```php
privateDesignsBatchUpdateParentFolder($tenant_id, $owner_id, $batch_update_parent_folder_input)
```

Updates parent folder for the specified entities and folders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$batch_update_parent_folder_input = new \Aurigma\AssetStorage\Model\BatchUpdateParentFolderInput(); // \Aurigma\AssetStorage\Model\BatchUpdateParentFolderInput | Operation parameters.

try {
    $apiInstance->privateDesignsBatchUpdateParentFolder($tenant_id, $owner_id, $batch_update_parent_folder_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsBatchUpdateParentFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **batch_update_parent_folder_input** | [**\Aurigma\AssetStorage\Model\BatchUpdateParentFolderInput**](../Model/BatchUpdateParentFolderInput.md)| Operation parameters. | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsCopy()`

```php
privateDesignsCopy($id, $path, $name, $strategy, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\DesignDto
```

Copies the specified entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Source entity identifier.
$path = 'path_example'; // string | Desired path.
$name = 'name_example'; // string | Desired name.
$strategy = new \Aurigma\AssetStorage\Model\\Aurigma\AssetStorage\Model\ConflictResolvingStrategy(); // \Aurigma\AssetStorage\Model\ConflictResolvingStrategy | Conflict resolving strategy.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateDesignsCopy($id, $path, $name, $strategy, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsCopy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Source entity identifier. | |
| **path** | **string**| Desired path. | [optional] |
| **name** | **string**| Desired name. | [optional] |
| **strategy** | [**\Aurigma\AssetStorage\Model\ConflictResolvingStrategy**](../Model/.md)| Conflict resolving strategy. | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsCreate()`

```php
privateDesignsCreate($file, $path, $name, $tenant_id, $owner_id, $id, $metadata_fonts, $metadata_surfaces, $metadata_print_areas, $metadata_has_data_schema, $metadata_data_schema_id, $metadata_data_schema_name, $metadata_has_toggle_set, $metadata_toggle_set_id, $metadata_toggle_set_name, $metadata_has_palettes, $metadata_palettes, $has_problems, $custom_fields): \Aurigma\AssetStorage\Model\DesignDto
```

Creates a new entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | File content.
$path = 'path_example'; // string | Parent folder full path.
$name = 'name_example'; // string | Entity name.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$id = 'id_example'; // string | Desired unique design identifier for a new design.
$metadata_fonts = array(new \Aurigma\AssetStorage\Model\\Aurigma\AssetStorage\Model\DesignFontMetadata()); // \Aurigma\AssetStorage\Model\DesignFontMetadata[]
$metadata_surfaces = array(new \Aurigma\AssetStorage\Model\\Aurigma\AssetStorage\Model\DesignSurfaceMetadata()); // \Aurigma\AssetStorage\Model\DesignSurfaceMetadata[]
$metadata_print_areas = array(new \Aurigma\AssetStorage\Model\\Aurigma\AssetStorage\Model\DesignPrintAreaMetadata()); // \Aurigma\AssetStorage\Model\DesignPrintAreaMetadata[]
$metadata_has_data_schema = True; // bool
$metadata_data_schema_id = 'metadata_data_schema_id_example'; // string
$metadata_data_schema_name = 'metadata_data_schema_name_example'; // string
$metadata_has_toggle_set = True; // bool
$metadata_toggle_set_id = 'metadata_toggle_set_id_example'; // string
$metadata_toggle_set_name = 'metadata_toggle_set_name_example'; // string
$metadata_has_palettes = True; // bool
$metadata_palettes = array(new \Aurigma\AssetStorage\Model\\Aurigma\AssetStorage\Model\DesignPaletteMetadata()); // \Aurigma\AssetStorage\Model\DesignPaletteMetadata[]
$has_problems = True; // bool | Indicates whether design has any problems preventing normal processing, e.g. missing font etc.
$custom_fields = NULL; // array<string,mixed> | Entity custom attributes.

try {
    $result = $apiInstance->privateDesignsCreate($file, $path, $name, $tenant_id, $owner_id, $id, $metadata_fonts, $metadata_surfaces, $metadata_print_areas, $metadata_has_data_schema, $metadata_data_schema_id, $metadata_data_schema_name, $metadata_has_toggle_set, $metadata_toggle_set_id, $metadata_toggle_set_name, $metadata_has_palettes, $metadata_palettes, $has_problems, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| File content. | |
| **path** | **string**| Parent folder full path. | |
| **name** | **string**| Entity name. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **id** | **string**| Desired unique design identifier for a new design. | [optional] |
| **metadata_fonts** | [**\Aurigma\AssetStorage\Model\DesignFontMetadata[]**](../Model/\Aurigma\AssetStorage\Model\DesignFontMetadata.md)|  | [optional] |
| **metadata_surfaces** | [**\Aurigma\AssetStorage\Model\DesignSurfaceMetadata[]**](../Model/\Aurigma\AssetStorage\Model\DesignSurfaceMetadata.md)|  | [optional] |
| **metadata_print_areas** | [**\Aurigma\AssetStorage\Model\DesignPrintAreaMetadata[]**](../Model/\Aurigma\AssetStorage\Model\DesignPrintAreaMetadata.md)|  | [optional] |
| **metadata_has_data_schema** | **bool**|  | [optional] |
| **metadata_data_schema_id** | **string**|  | [optional] |
| **metadata_data_schema_name** | **string**|  | [optional] |
| **metadata_has_toggle_set** | **bool**|  | [optional] |
| **metadata_toggle_set_id** | **string**|  | [optional] |
| **metadata_toggle_set_name** | **string**|  | [optional] |
| **metadata_has_palettes** | **bool**|  | [optional] |
| **metadata_palettes** | [**\Aurigma\AssetStorage\Model\DesignPaletteMetadata[]**](../Model/\Aurigma\AssetStorage\Model\DesignPaletteMetadata.md)|  | [optional] |
| **has_problems** | **bool**| Indicates whether design has any problems preventing normal processing, e.g. missing font etc. | [optional] |
| **custom_fields** | [**array<string,mixed>**](../Model/array.md)| Entity custom attributes. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsCreateFolder()`

```php
privateDesignsCreateFolder($tenant_id, $owner_id, $create_folder_dto): \Aurigma\AssetStorage\Model\FolderDto
```

Creates a new folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$create_folder_dto = new \Aurigma\AssetStorage\Model\CreateFolderDto(); // \Aurigma\AssetStorage\Model\CreateFolderDto | Create operation parameters.

try {
    $result = $apiInstance->privateDesignsCreateFolder($tenant_id, $owner_id, $create_folder_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsCreateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **create_folder_dto** | [**\Aurigma\AssetStorage\Model\CreateFolderDto**](../Model/CreateFolderDto.md)| Create operation parameters. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\FolderDto**](../Model/FolderDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsDelete()`

```php
privateDesignsDelete($id, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\DesignDto
```

Deletes the specified entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateDesignsDelete($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsDeleteFolder()`

```php
privateDesignsDeleteFolder($full_path, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\FolderDto
```

Deletes the specified folder and its content by folder path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$full_path = 'full_path_example'; // string | Folder full path.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateDesignsDeleteFolder($full_path, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsDeleteFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **full_path** | **string**| Folder full path. | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\FolderDto**](../Model/FolderDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsDeleteFolderById()`

```php
privateDesignsDeleteFolderById($id, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\FolderDto
```

Deletes the specified folder and its content by folder identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Folder identifier.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateDesignsDeleteFolderById($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsDeleteFolderById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Folder identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\FolderDto**](../Model/FolderDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsGet()`

```php
privateDesignsGet($id, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\DesignDto
```

Returns an entity by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateDesignsGet($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsGetAll()`

```php
privateDesignsGetAll($retention_policy, $data_schema_id, $toggle_set_id, $palette_id, $palette_uid, $font_post_script_name, $path, $include_subfolders, $skip, $take, $sorting, $search, $custom_fields, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\PagedOfDesignDto
```

Returns all entities relevant to specified query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retention_policy = new \Aurigma\AssetStorage\Model\\Aurigma\AssetStorage\Model\RetentionPolicy(); // \Aurigma\AssetStorage\Model\RetentionPolicy
$data_schema_id = 'data_schema_id_example'; // string | Associated data schema identifier filter.
$toggle_set_id = 'toggle_set_id_example'; // string | Associated toggle set identifier filter.
$palette_id = 'palette_id_example'; // string | Associated palette identifier filter.
$palette_uid = 'palette_uid_example'; // string | Associated palette UID filter.
$font_post_script_name = 'font_post_script_name_example'; // string | Design font postscript name filter.
$path = 'path_example'; // string | Folder path filter parameter.
$include_subfolders = True; // bool | If set to 'true', query result will contain list of all entities in desired folder and subfolders.
$skip = 56; // int | Defines page start offset from beginning of sorted result list.
$take = 56; // int | Defines page length (how much consequent items of sorted result list should be taken).
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\".
$search = 'search_example'; // string | Search string for partial match.
$custom_fields = 'custom_fields_example'; // string | Custom attributes dictionary filter. For example: `{\"public\":\"true\",\"name\":\"my item\"}`.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateDesignsGetAll($retention_policy, $data_schema_id, $toggle_set_id, $palette_id, $palette_uid, $font_post_script_name, $path, $include_subfolders, $skip, $take, $sorting, $search, $custom_fields, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retention_policy** | [**\Aurigma\AssetStorage\Model\RetentionPolicy**](../Model/.md)|  | [optional] |
| **data_schema_id** | **string**| Associated data schema identifier filter. | [optional] |
| **toggle_set_id** | **string**| Associated toggle set identifier filter. | [optional] |
| **palette_id** | **string**| Associated palette identifier filter. | [optional] |
| **palette_uid** | **string**| Associated palette UID filter. | [optional] |
| **font_post_script_name** | **string**| Design font postscript name filter. | [optional] |
| **path** | **string**| Folder path filter parameter. | [optional] |
| **include_subfolders** | **bool**| If set to &#39;true&#39;, query result will contain list of all entities in desired folder and subfolders. | [optional] |
| **skip** | **int**| Defines page start offset from beginning of sorted result list. | [optional] |
| **take** | **int**| Defines page length (how much consequent items of sorted result list should be taken). | [optional] |
| **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot;. | [optional] |
| **search** | **string**| Search string for partial match. | [optional] |
| **custom_fields** | **string**| Custom attributes dictionary filter. For example: &#x60;{\&quot;public\&quot;:\&quot;true\&quot;,\&quot;name\&quot;:\&quot;my item\&quot;}&#x60;. | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\PagedOfDesignDto**](../Model/PagedOfDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsGetAllFolders()`

```php
privateDesignsGetAllFolders($tenant_id, $owner_id): \Aurigma\AssetStorage\Model\FolderDto[]
```

Returns all folders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateDesignsGetAllFolders($tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsGetAllFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\FolderDto[]**](../Model/FolderDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsGetFile()`

```php
privateDesignsGetFile($id, $attachment, $tenant_id, $owner_id): \SplFileObject
```

Returns an entity file from file storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$attachment = True; // bool | Indicates if file should be provided as an attachment with proper filename supplied (default value is 'false').
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateDesignsGetFile($id, $attachment, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsGetFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **attachment** | **bool**| Indicates if file should be provided as an attachment with proper filename supplied (default value is &#39;false&#39;). | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsGetFileStorageInfo()`

```php
privateDesignsGetFileStorageInfo($tenant_id, $owner_id): \Aurigma\AssetStorage\Model\FileStorageInfoDto
```

Returns information about the use of file storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateDesignsGetFileStorageInfo($tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsGetFileStorageInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\FileStorageInfoDto**](../Model/FileStorageInfoDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsGetFolderContent()`

```php
privateDesignsGetFolderContent($full_path, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\FolderContentOfDesignDto
```

Returns a folder and its content by folder path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$full_path = 'full_path_example'; // string | Full folder path, if not set then root folder path is used.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateDesignsGetFolderContent($full_path, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsGetFolderContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **full_path** | **string**| Full folder path, if not set then root folder path is used. | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\FolderContentOfDesignDto**](../Model/FolderContentOfDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsGetFolderContentById()`

```php
privateDesignsGetFolderContentById($id, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\FolderContentOfDesignDto
```

Returns a folder and its content by folder id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Folder identifier.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateDesignsGetFolderContentById($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsGetFolderContentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Folder identifier. | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\FolderContentOfDesignDto**](../Model/FolderContentOfDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsGetFolderInfo()`

```php
privateDesignsGetFolderInfo($id, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\FolderDto
```

Returns a folder by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Folder identifier.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateDesignsGetFolderInfo($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsGetFolderInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Folder identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\FolderDto**](../Model/FolderDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsGetRetentionPolicy()`

```php
privateDesignsGetRetentionPolicy($id, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\RetentionPolicy
```

Returns an entity retention policy by entity identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateDesignsGetRetentionPolicy($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsGetRetentionPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\RetentionPolicy**](../Model/RetentionPolicy.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsSetRetentionPolicy()`

```php
privateDesignsSetRetentionPolicy($id, $policy, $tenant_id, $owner_id)
```

Updates an entity retention policy by entity identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$policy = new \Aurigma\AssetStorage\Model\\Aurigma\AssetStorage\Model\RetentionPolicy(); // \Aurigma\AssetStorage\Model\RetentionPolicy | New entity retention policy.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $apiInstance->privateDesignsSetRetentionPolicy($id, $policy, $tenant_id, $owner_id);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsSetRetentionPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **policy** | [**\Aurigma\AssetStorage\Model\RetentionPolicy**](../Model/.md)| New entity retention policy. | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsUpdate()`

```php
privateDesignsUpdate($id, $tenant_id, $owner_id, $metadata_fonts, $metadata_surfaces, $metadata_print_areas, $metadata_has_data_schema, $metadata_data_schema_id, $metadata_data_schema_name, $metadata_has_toggle_set, $metadata_toggle_set_id, $metadata_toggle_set_name, $metadata_has_palettes, $metadata_palettes, $has_problems, $file, $path, $name, $custom_fields): \Aurigma\AssetStorage\Model\DesignDto
```

Updates the specified entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$metadata_fonts = array(new \Aurigma\AssetStorage\Model\\Aurigma\AssetStorage\Model\DesignFontMetadata()); // \Aurigma\AssetStorage\Model\DesignFontMetadata[]
$metadata_surfaces = array(new \Aurigma\AssetStorage\Model\\Aurigma\AssetStorage\Model\DesignSurfaceMetadata()); // \Aurigma\AssetStorage\Model\DesignSurfaceMetadata[]
$metadata_print_areas = array(new \Aurigma\AssetStorage\Model\\Aurigma\AssetStorage\Model\DesignPrintAreaMetadata()); // \Aurigma\AssetStorage\Model\DesignPrintAreaMetadata[]
$metadata_has_data_schema = True; // bool
$metadata_data_schema_id = 'metadata_data_schema_id_example'; // string
$metadata_data_schema_name = 'metadata_data_schema_name_example'; // string
$metadata_has_toggle_set = True; // bool
$metadata_toggle_set_id = 'metadata_toggle_set_id_example'; // string
$metadata_toggle_set_name = 'metadata_toggle_set_name_example'; // string
$metadata_has_palettes = True; // bool
$metadata_palettes = array(new \Aurigma\AssetStorage\Model\\Aurigma\AssetStorage\Model\DesignPaletteMetadata()); // \Aurigma\AssetStorage\Model\DesignPaletteMetadata[]
$has_problems = True; // bool | Indicates whether design has any problems preventing normal processing, e.g. missing font etc.
$file = "/path/to/file.txt"; // \SplFileObject | File content.
$path = 'path_example'; // string | Parent folder full path.
$name = 'name_example'; // string | Entity name.
$custom_fields = NULL; // array<string,mixed> | Entity custom attributes.

try {
    $result = $apiInstance->privateDesignsUpdate($id, $tenant_id, $owner_id, $metadata_fonts, $metadata_surfaces, $metadata_print_areas, $metadata_has_data_schema, $metadata_data_schema_id, $metadata_data_schema_name, $metadata_has_toggle_set, $metadata_toggle_set_id, $metadata_toggle_set_name, $metadata_has_palettes, $metadata_palettes, $has_problems, $file, $path, $name, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **metadata_fonts** | [**\Aurigma\AssetStorage\Model\DesignFontMetadata[]**](../Model/\Aurigma\AssetStorage\Model\DesignFontMetadata.md)|  | [optional] |
| **metadata_surfaces** | [**\Aurigma\AssetStorage\Model\DesignSurfaceMetadata[]**](../Model/\Aurigma\AssetStorage\Model\DesignSurfaceMetadata.md)|  | [optional] |
| **metadata_print_areas** | [**\Aurigma\AssetStorage\Model\DesignPrintAreaMetadata[]**](../Model/\Aurigma\AssetStorage\Model\DesignPrintAreaMetadata.md)|  | [optional] |
| **metadata_has_data_schema** | **bool**|  | [optional] |
| **metadata_data_schema_id** | **string**|  | [optional] |
| **metadata_data_schema_name** | **string**|  | [optional] |
| **metadata_has_toggle_set** | **bool**|  | [optional] |
| **metadata_toggle_set_id** | **string**|  | [optional] |
| **metadata_toggle_set_name** | **string**|  | [optional] |
| **metadata_has_palettes** | **bool**|  | [optional] |
| **metadata_palettes** | [**\Aurigma\AssetStorage\Model\DesignPaletteMetadata[]**](../Model/\Aurigma\AssetStorage\Model\DesignPaletteMetadata.md)|  | [optional] |
| **has_problems** | **bool**| Indicates whether design has any problems preventing normal processing, e.g. missing font etc. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| File content. | [optional] |
| **path** | **string**| Parent folder full path. | [optional] |
| **name** | **string**| Entity name. | [optional] |
| **custom_fields** | [**array<string,mixed>**](../Model/array.md)| Entity custom attributes. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\DesignDto**](../Model/DesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateDesignsUpdateFolder()`

```php
privateDesignsUpdateFolder($id, $tenant_id, $owner_id, $update_folder_dto): \Aurigma\AssetStorage\Model\FolderDto
```

Updates the specified folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Code
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\AssetStorage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\AssetStorage\Api\PrivateDesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Folder identifier.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$update_folder_dto = new \Aurigma\AssetStorage\Model\UpdateFolderDto(); // \Aurigma\AssetStorage\Model\UpdateFolderDto | Operation parameters.

try {
    $result = $apiInstance->privateDesignsUpdateFolder($id, $tenant_id, $owner_id, $update_folder_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateDesignsApi->privateDesignsUpdateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Folder identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **update_folder_dto** | [**\Aurigma\AssetStorage\Model\UpdateFolderDto**](../Model/UpdateFolderDto.md)| Operation parameters. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\FolderDto**](../Model/FolderDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
