# # DesignDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metadata** | [**\Aurigma\AssetStorage\Model\DesignMetadata**](DesignMetadata.md) |  | [optional]
**has_problems** | **bool** | Design &#39;hasProblems&#39; tag  indicates whether design has any problems preventing normal processing, e.g. missing font etc. | [optional]
**private** | **bool** | Design &#39;private&#39; tag  indicates whether design is private. | [optional]
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
