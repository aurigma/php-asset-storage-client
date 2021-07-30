# Aurigma\AssetStorage\BuildInfoApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**buildInfoGetInfo()**](BuildInfoApi.md#buildInfoGetInfo) | **GET** /api/storage/v1/info | Gets assembly build info
[**buildInfoHeadInfo()**](BuildInfoApi.md#buildInfoHeadInfo) | **HEAD** /api/storage/v1/info | Gets assembly build info


## `buildInfoGetInfo()`

```php
buildInfoGetInfo(): \Aurigma\AssetStorage\Model\BuildInfoModel
```

Gets assembly build info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\AssetStorage\Api\BuildInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->buildInfoGetInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildInfoApi->buildInfoGetInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Aurigma\AssetStorage\Model\BuildInfoModel**](../Model/BuildInfoModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buildInfoHeadInfo()`

```php
buildInfoHeadInfo()
```

Gets assembly build info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Aurigma\AssetStorage\Api\BuildInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->buildInfoHeadInfo();
} catch (Exception $e) {
    echo 'Exception when calling BuildInfoApi->buildInfoHeadInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
