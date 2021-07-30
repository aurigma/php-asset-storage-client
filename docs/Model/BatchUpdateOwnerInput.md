# # BatchUpdateOwnerInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**update_all** | **bool** | If set to &#39;true&#39; all folders and entities, which belong to specified ownerId should be updated with new ownerId | [optional]
**entity_ids** | **string[]** | List of entities, which are operation subjects | [optional]
**folder_ids** | **string[]** | List of folders, which are operation subjects | [optional]
**conflict_strategy** | [**\Aurigma\AssetStorage\Model\ConflictResolvingStrategy**](ConflictResolvingStrategy.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
