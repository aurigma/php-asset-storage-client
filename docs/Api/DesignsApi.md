# Aurigma\AssetStorage\DesignsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**designsAddPreview()**](DesignsApi.md#designsAddPreview) | **PUT** /api/storage/v1/designs/{id}/preview | Creates a preview entity for specified source entity. |
| [**designsBatchCopy()**](DesignsApi.md#designsBatchCopy) | **POST** /api/storage/v1/designs/batch-copy | Copies the specified entities and folders to another folder. |
| [**designsBatchDelete()**](DesignsApi.md#designsBatchDelete) | **POST** /api/storage/v1/designs/batch-delete | Deletes the specified entities and folders. |
| [**designsBatchUpdateCustomFields()**](DesignsApi.md#designsBatchUpdateCustomFields) | **POST** /api/storage/v1/designs/batch-update-custom-fields | Updates custom fields values for the specified entities. |
| [**designsBatchUpdateParentFolder()**](DesignsApi.md#designsBatchUpdateParentFolder) | **POST** /api/storage/v1/designs/batch-update-parent-folder | Updates parent folder for the specified entities and folders. |
| [**designsCopy()**](DesignsApi.md#designsCopy) | **POST** /api/storage/v1/designs/{id} | Copies the specified entity. |
| [**designsCreate()**](DesignsApi.md#designsCreate) | **POST** /api/storage/v1/designs | Creates a new entity. |
| [**designsCreateFolder()**](DesignsApi.md#designsCreateFolder) | **POST** /api/storage/v1/designs/folders | Creates a new folder. |
| [**designsDelete()**](DesignsApi.md#designsDelete) | **DELETE** /api/storage/v1/designs/{id} | Deletes the specified entity. |
| [**designsDeleteFolder()**](DesignsApi.md#designsDeleteFolder) | **DELETE** /api/storage/v1/designs/folders/content-by-path | Deletes the specified folder and its content by folder path. |
| [**designsDeleteFolderById()**](DesignsApi.md#designsDeleteFolderById) | **DELETE** /api/storage/v1/designs/folders/{id} | Deletes the specified folder and its content by folder identifier. |
| [**designsGet()**](DesignsApi.md#designsGet) | **GET** /api/storage/v1/designs/{id} | Returns an entity by ID. |
| [**designsGetAll()**](DesignsApi.md#designsGetAll) | **GET** /api/storage/v1/designs | Returns all entities relevant to specified query parameters. |
| [**designsGetAllFolders()**](DesignsApi.md#designsGetAllFolders) | **GET** /api/storage/v1/designs/folders/all | Returns all folders. |
| [**designsGetFile()**](DesignsApi.md#designsGetFile) | **GET** /api/storage/v1/designs/{id}/file | Returns an entity file from file storage. |
| [**designsGetFileStorageInfo()**](DesignsApi.md#designsGetFileStorageInfo) | **GET** /api/storage/v1/designs/file-storage-info | Returns information about the use of file storage. |
| [**designsGetFolder()**](DesignsApi.md#designsGetFolder) | **GET** /api/storage/v1/designs/folders/content-by-path | Returns a folder and its content by folder path. |
| [**designsGetFolderInfo()**](DesignsApi.md#designsGetFolderInfo) | **GET** /api/storage/v1/designs/folders/{id} | Returns a folder by ID. |
| [**designsUpdate()**](DesignsApi.md#designsUpdate) | **PUT** /api/storage/v1/designs/{id} | Updates the specified entity. |
| [**designsUpdateFolder()**](DesignsApi.md#designsUpdateFolder) | **PUT** /api/storage/v1/designs/folders/{id} | Updates the specified folder. |


## `designsAddPreview()`

```php
designsAddPreview($id, $name, $namespace, $width, $height, $tenant_id, $format, $file, $is_custom): \Aurigma\AssetStorage\Model\DesignDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
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
$format = 'format_example'; // string | Preview image format, e.g. Jpeg, Png, Bmp.
$file = "/path/to/file.txt"; // \SplFileObject | Preview file content.
$is_custom = True; // bool | Indicates if the preview is custom.  Custom previews preserved even if source is changed.

try {
    $result = $apiInstance->designsAddPreview($id, $name, $namespace, $width, $height, $tenant_id, $format, $file, $is_custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsAddPreview: ', $e->getMessage(), PHP_EOL;
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
| **format** | **string**| Preview image format, e.g. Jpeg, Png, Bmp. | [optional] |
| **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| Preview file content. | [optional] |
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

## `designsBatchCopy()`

```php
designsBatchCopy($tenant_id, $batch_copy_input)
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$batch_copy_input = new \Aurigma\AssetStorage\Model\BatchCopyInput(); // \Aurigma\AssetStorage\Model\BatchCopyInput | Operation parameters.

try {
    $apiInstance->designsBatchCopy($tenant_id, $batch_copy_input);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsBatchCopy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
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

## `designsBatchDelete()`

```php
designsBatchDelete($tenant_id, $batch_delete_input)
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$batch_delete_input = new \Aurigma\AssetStorage\Model\BatchDeleteInput(); // \Aurigma\AssetStorage\Model\BatchDeleteInput | Operation parameters.

try {
    $apiInstance->designsBatchDelete($tenant_id, $batch_delete_input);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsBatchDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
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

## `designsBatchUpdateCustomFields()`

```php
designsBatchUpdateCustomFields($tenant_id, $batch_update_custom_fields_input)
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$batch_update_custom_fields_input = new \Aurigma\AssetStorage\Model\BatchUpdateCustomFieldsInput(); // \Aurigma\AssetStorage\Model\BatchUpdateCustomFieldsInput | Operation parameters.

try {
    $apiInstance->designsBatchUpdateCustomFields($tenant_id, $batch_update_custom_fields_input);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsBatchUpdateCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
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

## `designsBatchUpdateParentFolder()`

```php
designsBatchUpdateParentFolder($tenant_id, $batch_update_parent_folder_input)
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$batch_update_parent_folder_input = new \Aurigma\AssetStorage\Model\BatchUpdateParentFolderInput(); // \Aurigma\AssetStorage\Model\BatchUpdateParentFolderInput | Operation parameters.

try {
    $apiInstance->designsBatchUpdateParentFolder($tenant_id, $batch_update_parent_folder_input);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsBatchUpdateParentFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
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

## `designsCopy()`

```php
designsCopy($id, $path, $name, $strategy, $tenant_id): \Aurigma\AssetStorage\Model\DesignDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
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

try {
    $result = $apiInstance->designsCopy($id, $path, $name, $strategy, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsCopy: ', $e->getMessage(), PHP_EOL;
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

## `designsCreate()`

```php
designsCreate($file, $path, $name, $tenant_id, $id, $metadata_fonts, $metadata_surfaces, $metadata_print_areas, $metadata_has_data_schema, $metadata_data_schema_id, $metadata_data_schema_name, $metadata_has_toggle_set, $metadata_toggle_set_id, $metadata_toggle_set_name, $metadata_has_palettes, $metadata_palettes, $has_problems, $custom_fields): \Aurigma\AssetStorage\Model\DesignDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | File content.
$path = 'path_example'; // string | Parent folder full path.
$name = 'name_example'; // string | Entity name.
$tenant_id = 56; // int | Tenant ID.
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
    $result = $apiInstance->designsCreate($file, $path, $name, $tenant_id, $id, $metadata_fonts, $metadata_surfaces, $metadata_print_areas, $metadata_has_data_schema, $metadata_data_schema_id, $metadata_data_schema_name, $metadata_has_toggle_set, $metadata_toggle_set_id, $metadata_toggle_set_name, $metadata_has_palettes, $metadata_palettes, $has_problems, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| File content. | |
| **path** | **string**| Parent folder full path. | |
| **name** | **string**| Entity name. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
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

## `designsCreateFolder()`

```php
designsCreateFolder($tenant_id, $create_folder_dto): \Aurigma\AssetStorage\Model\FolderDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.
$create_folder_dto = new \Aurigma\AssetStorage\Model\CreateFolderDto(); // \Aurigma\AssetStorage\Model\CreateFolderDto | Create operation parameters.

try {
    $result = $apiInstance->designsCreateFolder($tenant_id, $create_folder_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsCreateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |
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

## `designsDelete()`

```php
designsDelete($id, $tenant_id): \Aurigma\AssetStorage\Model\DesignDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designsDelete($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |

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

## `designsDeleteFolder()`

```php
designsDeleteFolder($full_path, $tenant_id): \Aurigma\AssetStorage\Model\FolderDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$full_path = 'full_path_example'; // string | Folder full path.
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designsDeleteFolder($full_path, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsDeleteFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **full_path** | **string**| Folder full path. | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |

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

## `designsDeleteFolderById()`

```php
designsDeleteFolderById($id, $tenant_id): \Aurigma\AssetStorage\Model\FolderDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Folder identifier.
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designsDeleteFolderById($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsDeleteFolderById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Folder identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |

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

## `designsGet()`

```php
designsGet($id, $tenant_id): \Aurigma\AssetStorage\Model\DesignDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designsGet($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |

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

## `designsGetAll()`

```php
designsGetAll($data_schema_id, $toggle_set_id, $palette_id, $palette_uid, $font_post_script_name, $path, $include_subfolders, $skip, $take, $sorting, $search, $custom_fields, $tenant_id): \Aurigma\AssetStorage\Model\PagedOfDesignDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
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

try {
    $result = $apiInstance->designsGetAll($data_schema_id, $toggle_set_id, $palette_id, $palette_uid, $font_post_script_name, $path, $include_subfolders, $skip, $take, $sorting, $search, $custom_fields, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `designsGetAllFolders()`

```php
designsGetAllFolders($tenant_id): \Aurigma\AssetStorage\Model\FolderDto[]
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designsGetAllFolders($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsGetAllFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |

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

## `designsGetFile()`

```php
designsGetFile($id, $attachment, $tenant_id): \SplFileObject
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$attachment = True; // bool | Indicates if file should be provided as an attachment with proper filename supplied (default value is 'false').
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designsGetFile($id, $attachment, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsGetFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **attachment** | **bool**| Indicates if file should be provided as an attachment with proper filename supplied (default value is &#39;false&#39;). | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |

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

## `designsGetFileStorageInfo()`

```php
designsGetFileStorageInfo($tenant_id): \Aurigma\AssetStorage\Model\FileStorageInfoDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designsGetFileStorageInfo($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsGetFileStorageInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant ID. | [optional] |

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

## `designsGetFolder()`

```php
designsGetFolder($full_path, $tenant_id): \Aurigma\AssetStorage\Model\FolderContentOfDesignDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$full_path = 'full_path_example'; // string | Full folder path, if not set then root folder path is used.
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designsGetFolder($full_path, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsGetFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **full_path** | **string**| Full folder path, if not set then root folder path is used. | [optional] |
| **tenant_id** | **int**| Tenant ID. | [optional] |

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

## `designsGetFolderInfo()`

```php
designsGetFolderInfo($id, $tenant_id): \Aurigma\AssetStorage\Model\FolderDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Folder identifier.
$tenant_id = 56; // int | Tenant ID.

try {
    $result = $apiInstance->designsGetFolderInfo($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsGetFolderInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Folder identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |

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

## `designsUpdate()`

```php
designsUpdate($id, $tenant_id, $metadata_fonts, $metadata_surfaces, $metadata_print_areas, $metadata_has_data_schema, $metadata_data_schema_id, $metadata_data_schema_name, $metadata_has_toggle_set, $metadata_toggle_set_id, $metadata_toggle_set_name, $metadata_has_palettes, $metadata_palettes, $has_problems, $file, $path, $name, $custom_fields): \Aurigma\AssetStorage\Model\DesignDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Entity identifier.
$tenant_id = 56; // int | Tenant ID.
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
    $result = $apiInstance->designsUpdate($id, $tenant_id, $metadata_fonts, $metadata_surfaces, $metadata_print_areas, $metadata_has_data_schema, $metadata_data_schema_id, $metadata_data_schema_name, $metadata_has_toggle_set, $metadata_toggle_set_id, $metadata_toggle_set_name, $metadata_has_palettes, $metadata_palettes, $has_problems, $file, $path, $name, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
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
| **file** | [**\SplFileObject**](../Model/\SplFileObject.md)| File content. | [optional] |
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

## `designsUpdateFolder()`

```php
designsUpdateFolder($id, $tenant_id, $update_folder_dto): \Aurigma\AssetStorage\Model\FolderDto
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


$apiInstance = new Aurigma\AssetStorage\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Folder identifier.
$tenant_id = 56; // int | Tenant ID.
$update_folder_dto = new \Aurigma\AssetStorage\Model\UpdateFolderDto(); // \Aurigma\AssetStorage\Model\UpdateFolderDto | Operation parameters.

try {
    $result = $apiInstance->designsUpdateFolder($id, $tenant_id, $update_folder_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->designsUpdateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Folder identifier. | |
| **tenant_id** | **int**| Tenant ID. | [optional] |
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
