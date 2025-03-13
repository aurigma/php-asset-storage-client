# # ImageDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metadata** | [**\Aurigma\AssetStorage\Model\ImageDtoMetadata**](ImageDtoMetadata.md) |  | [optional]
**private** | **bool** | Image &#39;private&#39; tag  indicates whether image is private. | [optional]
**mime_type** | **string** | Image file associated media format type. | [optional]
**previews** | [**array<string,\Aurigma\AssetStorage\Model\PreviewMetadata>**](PreviewMetadata.md) | Preview dictionary.  Key: %preview_namespace%-%preview_name%.  Value: \&quot;preview description\&quot;. | [optional]
**size** | **int** | File size. | [optional]
**descriptor** | **string** | File descriptor. | [optional]
**folder_id** | **string** | Parent folder id. | [optional]
**tenant_id** | **int** | Entity tenant identifier. | [optional]
**id** | **string** | Entity unique identifier. | [optional]
**owner_id** | **string** | Entity owner identifier. | [optional]
**name** | **string** | Entity name. | [optional]
**custom_fields** | **array<string,mixed>** | Entity custom attributes. | [optional]
**last_modified** | **\DateTime** | Last entity modification date and time. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
