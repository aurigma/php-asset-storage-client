# Aurigma\AssetStorage\PrivateMockupsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**privateMockupsAddPreview()**](PrivateMockupsApi.md#privateMockupsAddPreview) | **PUT** /api/storage/v1/private-mockups/{id}/preview | Creates a preview entity for specified source entity. |
| [**privateMockupsBatchCopy()**](PrivateMockupsApi.md#privateMockupsBatchCopy) | **POST** /api/storage/v1/private-mockups/batch-copy | Copies the specified entities and folders to another folder. |
| [**privateMockupsBatchDelete()**](PrivateMockupsApi.md#privateMockupsBatchDelete) | **POST** /api/storage/v1/private-mockups/batch-delete | Deletes the specified entities and folders. |
| [**privateMockupsBatchUpdateCustomFields()**](PrivateMockupsApi.md#privateMockupsBatchUpdateCustomFields) | **POST** /api/storage/v1/private-mockups/batch-update-custom-fields | Updates custom fields values for the specified entities. |
| [**privateMockupsBatchUpdateOwner()**](PrivateMockupsApi.md#privateMockupsBatchUpdateOwner) | **POST** /api/storage/v1/private-mockups/batch-update-owner | Updates owner for the specified entities and folders. |
| [**privateMockupsBatchUpdateParentFolder()**](PrivateMockupsApi.md#privateMockupsBatchUpdateParentFolder) | **POST** /api/storage/v1/private-mockups/batch-update-parent-folder | Updates parent folder for the specified entities and folders. |
| [**privateMockupsCopy()**](PrivateMockupsApi.md#privateMockupsCopy) | **POST** /api/storage/v1/private-mockups/{id} | Copies the specified entity. |
| [**privateMockupsCreate()**](PrivateMockupsApi.md#privateMockupsCreate) | **POST** /api/storage/v1/private-mockups | Creates a new entity. |
| [**privateMockupsCreateFolder()**](PrivateMockupsApi.md#privateMockupsCreateFolder) | **POST** /api/storage/v1/private-mockups/folders | Creates a new folder. |
| [**privateMockupsDelete()**](PrivateMockupsApi.md#privateMockupsDelete) | **DELETE** /api/storage/v1/private-mockups/{id} | Deletes the specified entity. |
| [**privateMockupsDeleteFolder()**](PrivateMockupsApi.md#privateMockupsDeleteFolder) | **DELETE** /api/storage/v1/private-mockups/folders/content-by-path | Deletes the specified folder and its content by folder path. |
| [**privateMockupsDeleteFolderById()**](PrivateMockupsApi.md#privateMockupsDeleteFolderById) | **DELETE** /api/storage/v1/private-mockups/folders/{id} | Deletes the specified folder and its content by folder identifier. |
| [**privateMockupsGet()**](PrivateMockupsApi.md#privateMockupsGet) | **GET** /api/storage/v1/private-mockups/{id} | Returns an entity by ID. |
| [**privateMockupsGetAll()**](PrivateMockupsApi.md#privateMockupsGetAll) | **GET** /api/storage/v1/private-mockups | Returns all entities relevant to specified query parameters. |
| [**privateMockupsGetAllFolders()**](PrivateMockupsApi.md#privateMockupsGetAllFolders) | **GET** /api/storage/v1/private-mockups/folders/all | Returns all folders. |
| [**privateMockupsGetFile()**](PrivateMockupsApi.md#privateMockupsGetFile) | **GET** /api/storage/v1/private-mockups/{id}/file | Returns an entity file from file storage. |
| [**privateMockupsGetFileStorageInfo()**](PrivateMockupsApi.md#privateMockupsGetFileStorageInfo) | **GET** /api/storage/v1/private-mockups/file-storage-info | Returns information about the use of file storage. |
| [**privateMockupsGetFolder()**](PrivateMockupsApi.md#privateMockupsGetFolder) | **GET** /api/storage/v1/private-mockups/folders/content-by-path | Returns a folder and its content by folder path. |
| [**privateMockupsGetFolderInfo()**](PrivateMockupsApi.md#privateMockupsGetFolderInfo) | **GET** /api/storage/v1/private-mockups/folders/{id} | Returns a folder by ID. |
| [**privateMockupsGetRetentionPolicy()**](PrivateMockupsApi.md#privateMockupsGetRetentionPolicy) | **GET** /api/storage/v1/private-mockups/{id}/retention-policy | Returns an entity retention policy by entity identifier. |
| [**privateMockupsSetRetentionPolicy()**](PrivateMockupsApi.md#privateMockupsSetRetentionPolicy) | **POST** /api/storage/v1/private-mockups/{id}/retention-policy | Updates an entity retention policy by entity identifier. |
| [**privateMockupsUpdate()**](PrivateMockupsApi.md#privateMockupsUpdate) | **PUT** /api/storage/v1/private-mockups/{id} | Updates the specified entity. |
| [**privateMockupsUpdateFolder()**](PrivateMockupsApi.md#privateMockupsUpdateFolder) | **PUT** /api/storage/v1/private-mockups/folders/{id} | Updates the specified folder. |


## `privateMockupsAddPreview()`

```php
privateMockupsAddPreview($id, $name, $namespace, $width, $height, $tenant_id, $owner_id, $format, $file, $is_custom): \Aurigma\AssetStorage\Model\MockupDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
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
    $result = $apiInstance->privateMockupsAddPreview($id, $name, $namespace, $width, $height, $tenant_id, $owner_id, $format, $file, $is_custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsAddPreview: ', $e->getMessage(), PHP_EOL;
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
| **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| Preview file content. | [optional] |
| **is_custom** | **bool**| Indicates if the preview is custom.  Custom previews preserved even if source is changed. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\MockupDto**](../Model/MockupDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateMockupsBatchCopy()`

```php
privateMockupsBatchCopy($tenant_id, $owner_id, $batch_copy_input)
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$batch_copy_input = new \Aurigma\AssetStorage\Model\BatchCopyInput(); // \Aurigma\AssetStorage\Model\BatchCopyInput | Operation parameters.

try {
    $apiInstance->privateMockupsBatchCopy($tenant_id, $owner_id, $batch_copy_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsBatchCopy: ', $e->getMessage(), PHP_EOL;
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

## `privateMockupsBatchDelete()`

```php
privateMockupsBatchDelete($tenant_id, $owner_id, $batch_delete_input)
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$batch_delete_input = new \Aurigma\AssetStorage\Model\BatchDeleteInput(); // \Aurigma\AssetStorage\Model\BatchDeleteInput | Operation parameters.

try {
    $apiInstance->privateMockupsBatchDelete($tenant_id, $owner_id, $batch_delete_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsBatchDelete: ', $e->getMessage(), PHP_EOL;
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

## `privateMockupsBatchUpdateCustomFields()`

```php
privateMockupsBatchUpdateCustomFields($tenant_id, $owner_id, $batch_update_custom_fields_input)
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$batch_update_custom_fields_input = new \Aurigma\AssetStorage\Model\BatchUpdateCustomFieldsInput(); // \Aurigma\AssetStorage\Model\BatchUpdateCustomFieldsInput | Operation parameters.

try {
    $apiInstance->privateMockupsBatchUpdateCustomFields($tenant_id, $owner_id, $batch_update_custom_fields_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsBatchUpdateCustomFields: ', $e->getMessage(), PHP_EOL;
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

## `privateMockupsBatchUpdateOwner()`

```php
privateMockupsBatchUpdateOwner($old_owner_id, $tenant_id, $owner_id, $batch_update_owner_input)
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
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
    $apiInstance->privateMockupsBatchUpdateOwner($old_owner_id, $tenant_id, $owner_id, $batch_update_owner_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsBatchUpdateOwner: ', $e->getMessage(), PHP_EOL;
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

## `privateMockupsBatchUpdateParentFolder()`

```php
privateMockupsBatchUpdateParentFolder($tenant_id, $owner_id, $batch_update_parent_folder_input)
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$batch_update_parent_folder_input = new \Aurigma\AssetStorage\Model\BatchUpdateParentFolderInput(); // \Aurigma\AssetStorage\Model\BatchUpdateParentFolderInput | Operation parameters.

try {
    $apiInstance->privateMockupsBatchUpdateParentFolder($tenant_id, $owner_id, $batch_update_parent_folder_input);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsBatchUpdateParentFolder: ', $e->getMessage(), PHP_EOL;
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

## `privateMockupsCopy()`

```php
privateMockupsCopy($id, $path, $name, $strategy, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\MockupDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
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
    $result = $apiInstance->privateMockupsCopy($id, $path, $name, $strategy, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsCopy: ', $e->getMessage(), PHP_EOL;
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

[**\Aurigma\AssetStorage\Model\MockupDto**](../Model/MockupDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateMockupsCreate()`

```php
privateMockupsCreate($file, $path, $name, $tenant_id, $owner_id, $metadata_format, $type, $custom_fields): \Aurigma\AssetStorage\Model\MockupDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
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
$metadata_format = new \Aurigma\AssetStorage\Model\MockupFormatType(); // \Aurigma\AssetStorage\Model\MockupFormatType | Mockup file format.
$type = new \Aurigma\AssetStorage\Model\MockupType(); // \Aurigma\AssetStorage\Model\MockupType | Mockup type.
$custom_fields = NULL; // array<string,mixed> | Entity custom attributes.

try {
    $result = $apiInstance->privateMockupsCreate($file, $path, $name, $tenant_id, $owner_id, $metadata_format, $type, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| File content. | |
| **path** | **string**| Parent folder full path. | |
| **name** | **string**| Entity name. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **metadata_format** | [**\Aurigma\AssetStorage\Model\MockupFormatType**](../Model/MockupFormatType.md)| Mockup file format. | [optional] |
| **type** | [**\Aurigma\AssetStorage\Model\MockupType**](../Model/MockupType.md)| Mockup type. | [optional] |
| **custom_fields** | [**array<string,mixed>**](../Model/array.md)| Entity custom attributes. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\MockupDto**](../Model/MockupDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateMockupsCreateFolder()`

```php
privateMockupsCreateFolder($tenant_id, $owner_id, $create_folder_dto): \Aurigma\AssetStorage\Model\FolderDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$create_folder_dto = new \Aurigma\AssetStorage\Model\CreateFolderDto(); // \Aurigma\AssetStorage\Model\CreateFolderDto | Create operation parameters.

try {
    $result = $apiInstance->privateMockupsCreateFolder($tenant_id, $owner_id, $create_folder_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsCreateFolder: ', $e->getMessage(), PHP_EOL;
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

## `privateMockupsDelete()`

```php
privateMockupsDelete($id, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\MockupDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateMockupsDelete($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\MockupDto**](../Model/MockupDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateMockupsDeleteFolder()`

```php
privateMockupsDeleteFolder($full_path, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\FolderDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$full_path = 'full_path_example'; // string | Folder full path.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateMockupsDeleteFolder($full_path, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsDeleteFolder: ', $e->getMessage(), PHP_EOL;
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

## `privateMockupsDeleteFolderById()`

```php
privateMockupsDeleteFolderById($id, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\FolderDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Folder identifier.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateMockupsDeleteFolderById($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsDeleteFolderById: ', $e->getMessage(), PHP_EOL;
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

## `privateMockupsGet()`

```php
privateMockupsGet($id, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\MockupDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateMockupsGet($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\MockupDto**](../Model/MockupDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateMockupsGetAll()`

```php
privateMockupsGetAll($type, $path, $include_subfolders, $skip, $take, $sorting, $search, $custom_fields, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\PagedOfMockupDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = new \Aurigma\AssetStorage\Model\\Aurigma\AssetStorage\Model\MockupType(); // \Aurigma\AssetStorage\Model\MockupType | Mockup type.
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
    $result = $apiInstance->privateMockupsGetAll($type, $path, $include_subfolders, $skip, $take, $sorting, $search, $custom_fields, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**\Aurigma\AssetStorage\Model\MockupType**](../Model/.md)| Mockup type. | [optional] |
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

[**\Aurigma\AssetStorage\Model\PagedOfMockupDto**](../Model/PagedOfMockupDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateMockupsGetAllFolders()`

```php
privateMockupsGetAllFolders($tenant_id, $owner_id): \Aurigma\AssetStorage\Model\FolderDto[]
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateMockupsGetAllFolders($tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsGetAllFolders: ', $e->getMessage(), PHP_EOL;
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

## `privateMockupsGetFile()`

```php
privateMockupsGetFile($id, $attachment, $tenant_id, $owner_id): \SplFileObject
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
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
    $result = $apiInstance->privateMockupsGetFile($id, $attachment, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsGetFile: ', $e->getMessage(), PHP_EOL;
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

## `privateMockupsGetFileStorageInfo()`

```php
privateMockupsGetFileStorageInfo($tenant_id, $owner_id): \Aurigma\AssetStorage\Model\FileStorageInfoDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateMockupsGetFileStorageInfo($tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsGetFileStorageInfo: ', $e->getMessage(), PHP_EOL;
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

## `privateMockupsGetFolder()`

```php
privateMockupsGetFolder($full_path, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\FolderContentOfMockupDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$full_path = 'full_path_example'; // string | Full folder path, if not set then root folder path is used.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateMockupsGetFolder($full_path, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsGetFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **full_path** | **string**| Full folder path, if not set then root folder path is used. | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\FolderContentOfMockupDto**](../Model/FolderContentOfMockupDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateMockupsGetFolderInfo()`

```php
privateMockupsGetFolderInfo($id, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\FolderDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Folder identifier.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateMockupsGetFolderInfo($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsGetFolderInfo: ', $e->getMessage(), PHP_EOL;
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

## `privateMockupsGetRetentionPolicy()`

```php
privateMockupsGetRetentionPolicy($id, $tenant_id, $owner_id): \Aurigma\AssetStorage\Model\RetentionPolicy
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.

try {
    $result = $apiInstance->privateMockupsGetRetentionPolicy($id, $tenant_id, $owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsGetRetentionPolicy: ', $e->getMessage(), PHP_EOL;
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

## `privateMockupsSetRetentionPolicy()`

```php
privateMockupsSetRetentionPolicy($id, $policy, $tenant_id, $owner_id)
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
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
    $apiInstance->privateMockupsSetRetentionPolicy($id, $policy, $tenant_id, $owner_id);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsSetRetentionPolicy: ', $e->getMessage(), PHP_EOL;
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

## `privateMockupsUpdate()`

```php
privateMockupsUpdate($id, $tenant_id, $owner_id, $metadata_format, $file, $path, $name, $custom_fields): \Aurigma\AssetStorage\Model\MockupDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant ID.
$owner_id = 'owner_id_example'; // string | Private storage owner identifier.
$metadata_format = new \Aurigma\AssetStorage\Model\MockupFormatType(); // \Aurigma\AssetStorage\Model\MockupFormatType | Mockup file format.
$file = "/path/to/file.txt"; // \SplFileObject | File content.
$path = 'path_example'; // string | Parent folder full path.
$name = 'name_example'; // string | Entity name.
$custom_fields = NULL; // array<string,mixed> | Entity custom attributes.

try {
    $result = $apiInstance->privateMockupsUpdate($id, $tenant_id, $owner_id, $metadata_format, $file, $path, $name, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
| **owner_id** | **string**| Private storage owner identifier. | [optional] |
| **metadata_format** | [**\Aurigma\AssetStorage\Model\MockupFormatType**](../Model/MockupFormatType.md)| Mockup file format. | [optional] |
| **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| File content. | [optional] |
| **path** | **string**| Parent folder full path. | [optional] |
| **name** | **string**| Entity name. | [optional] |
| **custom_fields** | [**array<string,mixed>**](../Model/array.md)| Entity custom attributes. | [optional] |

### Return type

[**\Aurigma\AssetStorage\Model\MockupDto**](../Model/MockupDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Code](../../README.md#OAuth2Code), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `privateMockupsUpdateFolder()`

```php
privateMockupsUpdateFolder($id, $tenant_id, $owner_id, $update_folder_dto): \Aurigma\AssetStorage\Model\FolderDto
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


$apiInstance = new Aurigma\AssetStorage\Api\PrivateMockupsApi(
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
    $result = $apiInstance->privateMockupsUpdateFolder($id, $tenant_id, $owner_id, $update_folder_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMockupsApi->privateMockupsUpdateFolder: ', $e->getMessage(), PHP_EOL;
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
