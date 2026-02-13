# # MockupDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metadata** | [**\Aurigma\AssetStorage\Model\MockupDtoMetadata**](MockupDtoMetadata.md) |  | [optional]
**private** | **bool** | Indicates if the mockup is private. | [optional]
**type** | [**\Aurigma\AssetStorage\Model\MockupType**](MockupType.md) | Mockup type. | [optional]
**has_problems** | **bool** | Mockup &#39;has problems&#39; tag.  Indicates whether mockup has any problems preventing normal processing, e.g. missing source file for mockup link. | [optional]
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
