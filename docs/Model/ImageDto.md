# # ImageDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metadata** | [**\Aurigma\AssetStorage\Model\ImageMetadata**](ImageMetadata.md) |  | [optional]
**private** | **bool** | Image &#39;private&#39; tag  indicates whether image is private | [optional]
**mime_type** | **string** | Image file associated media format type | [optional]
**previews** | [**array<string,\Aurigma\AssetStorage\Model\PreviewMetadata>**](PreviewMetadata.md) | Preview dictionary  Key: \&quot;previewMetadata.namespace-previewMetadata.name\&quot;  Value: \&quot;previewMetadata\&quot; | [optional]
**size** | **int** | Entity file size | [optional]
**folder_id** | **string** | Parent folder id | [optional]
**tenant_id** | **int** | Entity tenant identifier | [optional]
**id** | **string** | Entity unique identifier | [optional]
**owner_id** | **string** | Entity owner identifier | [optional]
**name** | **string** | Entity name | [optional]
**custom_fields** | **array<string,mixed>** | Entity custom attributes | [optional]
**last_modified** | [**\DateTime**](\DateTime.md) | Last entity modification date and time | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
