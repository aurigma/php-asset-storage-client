# Aurigma Customer's Canvas SDK - Asset Storage Client
======================================================

This module is a PHP API client for Asset Storage service which is a part of [**Customer's Canvas**](https://customerscanvas.com) web-to-print system. It is supposed that you are familiar with its services and understand how to use its APIs. To learn more about Customer's Canvas and its services, refer the [Getting Started section of its documentation](https://customerscanvas.com/dev/getting-started/intro.html).

## Pre-requisites

To be able to use this package, you need to meet the following requirements: 

* You must have an account at Customer's Canvas.
* You need to use it in Angular applications **only**. 

For other platforms, see the [Backend services](https://customerscanvas.com/dev/getting-started/about-backend-services.html) article in Customer's Canvas documentation.  

## Installation

```
composer require aurigma/asset-storage
```

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/aurigma/php-asset-storage-client.git"
    }
  ],
  "require": {
    "aurigma/php-asset-storage-client": "*@dev"
  }
}
```

Then run `composer install`

## Getting Started

Please follow the [installation procedure](#installation).

Receive an access token through your backend as explained in the [documentation](https://customerscanvas.com/dev/getting-started/about-backend-services.html#authorization) and deliver it to your app. 

Then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ArtifactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$file = "/path/to/file.txt"; // \SplFileObject | Entity file content
$description = 'description_example'; // string | Artifact description
$group = 'group_example'; // string | Artifact group
$alias = 'alias_example'; // string | Artifact alias (special name within group)
$type = new \OpenAPI\Client\Model\ArtifactType(); // \OpenAPI\Client\Model\ArtifactType
$format = 'format_example'; // string | Artifact file format

try {
    $result = $apiInstance->artifactsCreate($tenant_id, $file, $description, $group, $alias, $type, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactsApi->artifactsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

Aurigma Inc <info@aurigma.com> (https://customerscanvas.com)

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ArtifactsApi* | [**artifactsCreate**](docs/Api/ArtifactsApi.md#artifactscreate) | **POST** /api/storage/v1/artifacts | Creates new entity
*ArtifactsApi* | [**artifactsDelete**](docs/Api/ArtifactsApi.md#artifactsdelete) | **DELETE** /api/storage/v1/artifacts/{id} | Deletes specified entity
*ArtifactsApi* | [**artifactsDeleteGroup**](docs/Api/ArtifactsApi.md#artifactsdeletegroup) | **DELETE** /api/storage/v1/artifacts/group/{group} | Deletes all entities with specified group
*ArtifactsApi* | [**artifactsGet**](docs/Api/ArtifactsApi.md#artifactsget) | **GET** /api/storage/v1/artifacts/{id} | Gets entity by id
*ArtifactsApi* | [**artifactsGetAll**](docs/Api/ArtifactsApi.md#artifactsgetall) | **GET** /api/storage/v1/artifacts | Gets all entities relevant to specified query parameters
*ArtifactsApi* | [**artifactsGetFile**](docs/Api/ArtifactsApi.md#artifactsgetfile) | **GET** /api/storage/v1/artifacts/{id}/file | Gets entity file from file storage
*ArtifactsApi* | [**artifactsUpdate**](docs/Api/ArtifactsApi.md#artifactsupdate) | **PUT** /api/storage/v1/artifacts/{id} | Updates specified entity
*BuildInfoApi* | [**buildInfoGetInfo**](docs/Api/BuildInfoApi.md#buildinfogetinfo) | **GET** /api/storage/v1/info | Gets assembly build info
*BuildInfoApi* | [**buildInfoHeadInfo**](docs/Api/BuildInfoApi.md#buildinfoheadinfo) | **HEAD** /api/storage/v1/info | Gets assembly build info
*ColorProfilesApi* | [**colorProfilesBatchCopy**](docs/Api/ColorProfilesApi.md#colorprofilesbatchcopy) | **POST** /api/storage/v1/colorProfiles/batchCopy | Copies selected entities and folders to another folder specified by path
*ColorProfilesApi* | [**colorProfilesBatchDelete**](docs/Api/ColorProfilesApi.md#colorprofilesbatchdelete) | **POST** /api/storage/v1/colorProfiles/batchDelete | Deletes selected entities and folders
*ColorProfilesApi* | [**colorProfilesBatchUpdateParentFolder**](docs/Api/ColorProfilesApi.md#colorprofilesbatchupdateparentfolder) | **POST** /api/storage/v1/colorProfiles/batchUpdateParentFolder | Updates parent folder for selected entities and folders
*ColorProfilesApi* | [**colorProfilesCopy**](docs/Api/ColorProfilesApi.md#colorprofilescopy) | **POST** /api/storage/v1/colorProfiles/{id} | Copies specified entity
*ColorProfilesApi* | [**colorProfilesCreate**](docs/Api/ColorProfilesApi.md#colorprofilescreate) | **POST** /api/storage/v1/colorProfiles | Creates new entity
*ColorProfilesApi* | [**colorProfilesCreateCollection**](docs/Api/ColorProfilesApi.md#colorprofilescreatecollection) | **POST** /api/storage/v1/colorProfiles/collections | Creates new collection
*ColorProfilesApi* | [**colorProfilesCreateFolder**](docs/Api/ColorProfilesApi.md#colorprofilescreatefolder) | **POST** /api/storage/v1/colorProfiles/folders | Creates new folder
*ColorProfilesApi* | [**colorProfilesDelete**](docs/Api/ColorProfilesApi.md#colorprofilesdelete) | **DELETE** /api/storage/v1/colorProfiles/{id} | Deletes specified entity
*ColorProfilesApi* | [**colorProfilesDeleteCollection**](docs/Api/ColorProfilesApi.md#colorprofilesdeletecollection) | **DELETE** /api/storage/v1/colorProfiles/collections/{id} | Deletes specified collection
*ColorProfilesApi* | [**colorProfilesDeleteFolder**](docs/Api/ColorProfilesApi.md#colorprofilesdeletefolder) | **DELETE** /api/storage/v1/colorProfiles/folders | Deletes specified folder
*ColorProfilesApi* | [**colorProfilesGet**](docs/Api/ColorProfilesApi.md#colorprofilesget) | **GET** /api/storage/v1/colorProfiles/{id} | Gets entity by id
*ColorProfilesApi* | [**colorProfilesGetAll**](docs/Api/ColorProfilesApi.md#colorprofilesgetall) | **GET** /api/storage/v1/colorProfiles | Gets all entities relevant to specified query parameters
*ColorProfilesApi* | [**colorProfilesGetAllCollections**](docs/Api/ColorProfilesApi.md#colorprofilesgetallcollections) | **GET** /api/storage/v1/colorProfiles/collections | Gets all collections
*ColorProfilesApi* | [**colorProfilesGetAllFolders**](docs/Api/ColorProfilesApi.md#colorprofilesgetallfolders) | **GET** /api/storage/v1/colorProfiles/folders/all | Gets all folders
*ColorProfilesApi* | [**colorProfilesGetCollection**](docs/Api/ColorProfilesApi.md#colorprofilesgetcollection) | **GET** /api/storage/v1/colorProfiles/collections/{id} | Gets collection content by collection id
*ColorProfilesApi* | [**colorProfilesGetFile**](docs/Api/ColorProfilesApi.md#colorprofilesgetfile) | **GET** /api/storage/v1/colorProfiles/{id}/file | Gets entity file from file storage
*ColorProfilesApi* | [**colorProfilesGetFolder**](docs/Api/ColorProfilesApi.md#colorprofilesgetfolder) | **GET** /api/storage/v1/colorProfiles/folders | Gets folder content by folder path
*ColorProfilesApi* | [**colorProfilesGetFolderInfo**](docs/Api/ColorProfilesApi.md#colorprofilesgetfolderinfo) | **GET** /api/storage/v1/colorProfiles/folders/{id} | Gets folder by id
*ColorProfilesApi* | [**colorProfilesUpdate**](docs/Api/ColorProfilesApi.md#colorprofilesupdate) | **PUT** /api/storage/v1/colorProfiles/{id} | Updates specified entity
*ColorProfilesApi* | [**colorProfilesUpdateCollection**](docs/Api/ColorProfilesApi.md#colorprofilesupdatecollection) | **PUT** /api/storage/v1/colorProfiles/collections/{id} | Updates specified collection
*ColorProfilesApi* | [**colorProfilesUpdateFolder**](docs/Api/ColorProfilesApi.md#colorprofilesupdatefolder) | **PUT** /api/storage/v1/colorProfiles/folders/{id} | Updates specified folder
*DataSchemasApi* | [**dataSchemasBatchCopy**](docs/Api/DataSchemasApi.md#dataschemasbatchcopy) | **POST** /api/storage/v1/dataSchemas/batchCopy | Copies selected entities and folders to another folder specified by path
*DataSchemasApi* | [**dataSchemasBatchDelete**](docs/Api/DataSchemasApi.md#dataschemasbatchdelete) | **POST** /api/storage/v1/dataSchemas/batchDelete | Deletes selected entities and folders
*DataSchemasApi* | [**dataSchemasBatchUpdateParentFolder**](docs/Api/DataSchemasApi.md#dataschemasbatchupdateparentfolder) | **POST** /api/storage/v1/dataSchemas/batchUpdateParentFolder | Updates parent folder for selected entities and folders
*DataSchemasApi* | [**dataSchemasCopy**](docs/Api/DataSchemasApi.md#dataschemascopy) | **POST** /api/storage/v1/dataSchemas/{id} | Copies specified entity
*DataSchemasApi* | [**dataSchemasCreate**](docs/Api/DataSchemasApi.md#dataschemascreate) | **POST** /api/storage/v1/dataSchemas | Creates new entity
*DataSchemasApi* | [**dataSchemasCreateCollection**](docs/Api/DataSchemasApi.md#dataschemascreatecollection) | **POST** /api/storage/v1/dataSchemas/collections | Creates new collection
*DataSchemasApi* | [**dataSchemasCreateFolder**](docs/Api/DataSchemasApi.md#dataschemascreatefolder) | **POST** /api/storage/v1/dataSchemas/folders | Creates new folder
*DataSchemasApi* | [**dataSchemasDelete**](docs/Api/DataSchemasApi.md#dataschemasdelete) | **DELETE** /api/storage/v1/dataSchemas/{id} | Deletes specified entity
*DataSchemasApi* | [**dataSchemasDeleteCollection**](docs/Api/DataSchemasApi.md#dataschemasdeletecollection) | **DELETE** /api/storage/v1/dataSchemas/collections/{id} | Deletes specified collection
*DataSchemasApi* | [**dataSchemasDeleteFolder**](docs/Api/DataSchemasApi.md#dataschemasdeletefolder) | **DELETE** /api/storage/v1/dataSchemas/folders | Deletes specified folder
*DataSchemasApi* | [**dataSchemasGet**](docs/Api/DataSchemasApi.md#dataschemasget) | **GET** /api/storage/v1/dataSchemas/{id} | Gets entity by id
*DataSchemasApi* | [**dataSchemasGetAll**](docs/Api/DataSchemasApi.md#dataschemasgetall) | **GET** /api/storage/v1/dataSchemas | Gets all entities relevant to specified query parameters
*DataSchemasApi* | [**dataSchemasGetAllCollections**](docs/Api/DataSchemasApi.md#dataschemasgetallcollections) | **GET** /api/storage/v1/dataSchemas/collections | Gets all collections
*DataSchemasApi* | [**dataSchemasGetAllFolders**](docs/Api/DataSchemasApi.md#dataschemasgetallfolders) | **GET** /api/storage/v1/dataSchemas/folders/all | Gets all folders
*DataSchemasApi* | [**dataSchemasGetCollection**](docs/Api/DataSchemasApi.md#dataschemasgetcollection) | **GET** /api/storage/v1/dataSchemas/collections/{id} | Gets collection content by collection id
*DataSchemasApi* | [**dataSchemasGetFile**](docs/Api/DataSchemasApi.md#dataschemasgetfile) | **GET** /api/storage/v1/dataSchemas/{id}/file | Gets entity file from file storage
*DataSchemasApi* | [**dataSchemasGetFolder**](docs/Api/DataSchemasApi.md#dataschemasgetfolder) | **GET** /api/storage/v1/dataSchemas/folders | Gets folder content by folder path
*DataSchemasApi* | [**dataSchemasGetFolderInfo**](docs/Api/DataSchemasApi.md#dataschemasgetfolderinfo) | **GET** /api/storage/v1/dataSchemas/folders/{id} | Gets folder by id
*DataSchemasApi* | [**dataSchemasUpdate**](docs/Api/DataSchemasApi.md#dataschemasupdate) | **PUT** /api/storage/v1/dataSchemas/{id} | Updates specified entity
*DataSchemasApi* | [**dataSchemasUpdateCollection**](docs/Api/DataSchemasApi.md#dataschemasupdatecollection) | **PUT** /api/storage/v1/dataSchemas/collections/{id} | Updates specified collection
*DataSchemasApi* | [**dataSchemasUpdateFolder**](docs/Api/DataSchemasApi.md#dataschemasupdatefolder) | **PUT** /api/storage/v1/dataSchemas/folders/{id} | Updates specified folder
*DataSetsApi* | [**dataSetsBatchCopy**](docs/Api/DataSetsApi.md#datasetsbatchcopy) | **POST** /api/storage/v1/dataSets/batchCopy | Copies selected entities and folders to another folder specified by path
*DataSetsApi* | [**dataSetsBatchDelete**](docs/Api/DataSetsApi.md#datasetsbatchdelete) | **POST** /api/storage/v1/dataSets/batchDelete | Deletes selected entities and folders
*DataSetsApi* | [**dataSetsBatchUpdateParentFolder**](docs/Api/DataSetsApi.md#datasetsbatchupdateparentfolder) | **POST** /api/storage/v1/dataSets/batchUpdateParentFolder | Updates parent folder for selected entities and folders
*DataSetsApi* | [**dataSetsCopy**](docs/Api/DataSetsApi.md#datasetscopy) | **POST** /api/storage/v1/dataSets/{id} | Copies specified entity
*DataSetsApi* | [**dataSetsCreate**](docs/Api/DataSetsApi.md#datasetscreate) | **POST** /api/storage/v1/dataSets | Creates new entity
*DataSetsApi* | [**dataSetsCreateCollection**](docs/Api/DataSetsApi.md#datasetscreatecollection) | **POST** /api/storage/v1/dataSets/collections | Creates new collection
*DataSetsApi* | [**dataSetsCreateFolder**](docs/Api/DataSetsApi.md#datasetscreatefolder) | **POST** /api/storage/v1/dataSets/folders | Creates new folder
*DataSetsApi* | [**dataSetsDelete**](docs/Api/DataSetsApi.md#datasetsdelete) | **DELETE** /api/storage/v1/dataSets/{id} | Deletes specified entity
*DataSetsApi* | [**dataSetsDeleteCollection**](docs/Api/DataSetsApi.md#datasetsdeletecollection) | **DELETE** /api/storage/v1/dataSets/collections/{id} | Deletes specified collection
*DataSetsApi* | [**dataSetsDeleteFolder**](docs/Api/DataSetsApi.md#datasetsdeletefolder) | **DELETE** /api/storage/v1/dataSets/folders | Deletes specified folder
*DataSetsApi* | [**dataSetsGet**](docs/Api/DataSetsApi.md#datasetsget) | **GET** /api/storage/v1/dataSets/{id} | Gets entity by id
*DataSetsApi* | [**dataSetsGetAll**](docs/Api/DataSetsApi.md#datasetsgetall) | **GET** /api/storage/v1/dataSets | Gets all entities relevant to specified query parameters
*DataSetsApi* | [**dataSetsGetAllCollections**](docs/Api/DataSetsApi.md#datasetsgetallcollections) | **GET** /api/storage/v1/dataSets/collections | Gets all collections
*DataSetsApi* | [**dataSetsGetAllFolders**](docs/Api/DataSetsApi.md#datasetsgetallfolders) | **GET** /api/storage/v1/dataSets/folders/all | Gets all folders
*DataSetsApi* | [**dataSetsGetCollection**](docs/Api/DataSetsApi.md#datasetsgetcollection) | **GET** /api/storage/v1/dataSets/collections/{id} | Gets collection content by collection id
*DataSetsApi* | [**dataSetsGetFile**](docs/Api/DataSetsApi.md#datasetsgetfile) | **GET** /api/storage/v1/dataSets/{id}/file | Gets entity file from file storage
*DataSetsApi* | [**dataSetsGetFolder**](docs/Api/DataSetsApi.md#datasetsgetfolder) | **GET** /api/storage/v1/dataSets/folders | Gets folder content by folder path
*DataSetsApi* | [**dataSetsGetFolderInfo**](docs/Api/DataSetsApi.md#datasetsgetfolderinfo) | **GET** /api/storage/v1/dataSets/folders/{id} | Gets folder by id
*DataSetsApi* | [**dataSetsUpdate**](docs/Api/DataSetsApi.md#datasetsupdate) | **PUT** /api/storage/v1/dataSets/{id} | Updates specified entity
*DataSetsApi* | [**dataSetsUpdateCollection**](docs/Api/DataSetsApi.md#datasetsupdatecollection) | **PUT** /api/storage/v1/dataSets/collections/{id} | Updates specified collection
*DataSetsApi* | [**dataSetsUpdateFolder**](docs/Api/DataSetsApi.md#datasetsupdatefolder) | **PUT** /api/storage/v1/dataSets/folders/{id} | Updates specified folder
*DesignsApi* | [**designsAddPreview**](docs/Api/DesignsApi.md#designsaddpreview) | **PUT** /api/storage/v1/designs/{id}/preview | Creates preview entity for specified source entity
*DesignsApi* | [**designsBatchCopy**](docs/Api/DesignsApi.md#designsbatchcopy) | **POST** /api/storage/v1/designs/batchCopy | Copies selected entities and folders to another folder specified by path
*DesignsApi* | [**designsBatchDelete**](docs/Api/DesignsApi.md#designsbatchdelete) | **POST** /api/storage/v1/designs/batchDelete | Deletes selected entities and folders
*DesignsApi* | [**designsBatchUpdateParentFolder**](docs/Api/DesignsApi.md#designsbatchupdateparentfolder) | **POST** /api/storage/v1/designs/batchUpdateParentFolder | Updates parent folder for selected entities and folders
*DesignsApi* | [**designsCopy**](docs/Api/DesignsApi.md#designscopy) | **POST** /api/storage/v1/designs/{id} | Copies specified entity
*DesignsApi* | [**designsCreate**](docs/Api/DesignsApi.md#designscreate) | **POST** /api/storage/v1/designs | Creates new entity
*DesignsApi* | [**designsCreateCollection**](docs/Api/DesignsApi.md#designscreatecollection) | **POST** /api/storage/v1/designs/collections | Creates new collection
*DesignsApi* | [**designsCreateFolder**](docs/Api/DesignsApi.md#designscreatefolder) | **POST** /api/storage/v1/designs/folders | Creates new folder
*DesignsApi* | [**designsDelete**](docs/Api/DesignsApi.md#designsdelete) | **DELETE** /api/storage/v1/designs/{id} | Deletes specified entity
*DesignsApi* | [**designsDeleteCollection**](docs/Api/DesignsApi.md#designsdeletecollection) | **DELETE** /api/storage/v1/designs/collections/{id} | Deletes specified collection
*DesignsApi* | [**designsDeleteFolder**](docs/Api/DesignsApi.md#designsdeletefolder) | **DELETE** /api/storage/v1/designs/folders | Deletes specified folder
*DesignsApi* | [**designsGet**](docs/Api/DesignsApi.md#designsget) | **GET** /api/storage/v1/designs/{id} | Gets entity by id
*DesignsApi* | [**designsGetAll**](docs/Api/DesignsApi.md#designsgetall) | **GET** /api/storage/v1/designs | Gets all entities relevant to specified query parameters
*DesignsApi* | [**designsGetAllCollections**](docs/Api/DesignsApi.md#designsgetallcollections) | **GET** /api/storage/v1/designs/collections | Gets all collections
*DesignsApi* | [**designsGetAllFolders**](docs/Api/DesignsApi.md#designsgetallfolders) | **GET** /api/storage/v1/designs/folders/all | Gets all folders
*DesignsApi* | [**designsGetCollection**](docs/Api/DesignsApi.md#designsgetcollection) | **GET** /api/storage/v1/designs/collections/{id} | Gets collection content by collection id
*DesignsApi* | [**designsGetFile**](docs/Api/DesignsApi.md#designsgetfile) | **GET** /api/storage/v1/designs/{id}/file | Gets entity file from file storage
*DesignsApi* | [**designsGetFolder**](docs/Api/DesignsApi.md#designsgetfolder) | **GET** /api/storage/v1/designs/folders | Gets folder content by folder path
*DesignsApi* | [**designsGetFolderInfo**](docs/Api/DesignsApi.md#designsgetfolderinfo) | **GET** /api/storage/v1/designs/folders/{id} | Gets folder by id
*DesignsApi* | [**designsUpdate**](docs/Api/DesignsApi.md#designsupdate) | **PUT** /api/storage/v1/designs/{id} | Updates specified entity
*DesignsApi* | [**designsUpdateCollection**](docs/Api/DesignsApi.md#designsupdatecollection) | **PUT** /api/storage/v1/designs/collections/{id} | Updates specified collection
*DesignsApi* | [**designsUpdateFolder**](docs/Api/DesignsApi.md#designsupdatefolder) | **PUT** /api/storage/v1/designs/folders/{id} | Updates specified folder
*FontsApi* | [**fontsAddPreview**](docs/Api/FontsApi.md#fontsaddpreview) | **PUT** /api/storage/v1/fonts/{id}/preview | Creates preview entity for specified source entity
*FontsApi* | [**fontsBatchCopy**](docs/Api/FontsApi.md#fontsbatchcopy) | **POST** /api/storage/v1/fonts/batchCopy | Copies selected entities and folders to another folder specified by path
*FontsApi* | [**fontsBatchDelete**](docs/Api/FontsApi.md#fontsbatchdelete) | **POST** /api/storage/v1/fonts/batchDelete | Deletes selected entities and folders
*FontsApi* | [**fontsBatchUpdateParentFolder**](docs/Api/FontsApi.md#fontsbatchupdateparentfolder) | **POST** /api/storage/v1/fonts/batchUpdateParentFolder | Updates parent folder for selected entities and folders
*FontsApi* | [**fontsCopy**](docs/Api/FontsApi.md#fontscopy) | **POST** /api/storage/v1/fonts/{id} | Copies specified entity
*FontsApi* | [**fontsCreate**](docs/Api/FontsApi.md#fontscreate) | **POST** /api/storage/v1/fonts | Creates new entity
*FontsApi* | [**fontsCreateCollection**](docs/Api/FontsApi.md#fontscreatecollection) | **POST** /api/storage/v1/fonts/collections | Creates new collection
*FontsApi* | [**fontsCreateFolder**](docs/Api/FontsApi.md#fontscreatefolder) | **POST** /api/storage/v1/fonts/folders | Creates new folder
*FontsApi* | [**fontsDelete**](docs/Api/FontsApi.md#fontsdelete) | **DELETE** /api/storage/v1/fonts/{id} | Deletes specified entity
*FontsApi* | [**fontsDeleteCollection**](docs/Api/FontsApi.md#fontsdeletecollection) | **DELETE** /api/storage/v1/fonts/collections/{id} | Deletes specified collection
*FontsApi* | [**fontsDeleteFolder**](docs/Api/FontsApi.md#fontsdeletefolder) | **DELETE** /api/storage/v1/fonts/folders | Deletes specified folder
*FontsApi* | [**fontsGet**](docs/Api/FontsApi.md#fontsget) | **GET** /api/storage/v1/fonts/{id} | Gets entity by id
*FontsApi* | [**fontsGetAll**](docs/Api/FontsApi.md#fontsgetall) | **GET** /api/storage/v1/fonts | Gets all entities relevant to specified query parameters
*FontsApi* | [**fontsGetAllCollections**](docs/Api/FontsApi.md#fontsgetallcollections) | **GET** /api/storage/v1/fonts/collections | Gets all collections
*FontsApi* | [**fontsGetAllFolders**](docs/Api/FontsApi.md#fontsgetallfolders) | **GET** /api/storage/v1/fonts/folders/all | Gets all folders
*FontsApi* | [**fontsGetCollection**](docs/Api/FontsApi.md#fontsgetcollection) | **GET** /api/storage/v1/fonts/collections/{id} | Gets collection content by collection id
*FontsApi* | [**fontsGetFile**](docs/Api/FontsApi.md#fontsgetfile) | **GET** /api/storage/v1/fonts/{id}/file | Gets entity file from file storage
*FontsApi* | [**fontsGetFolder**](docs/Api/FontsApi.md#fontsgetfolder) | **GET** /api/storage/v1/fonts/folders | Gets folder content by folder path
*FontsApi* | [**fontsGetFolderInfo**](docs/Api/FontsApi.md#fontsgetfolderinfo) | **GET** /api/storage/v1/fonts/folders/{id} | Gets folder by id
*FontsApi* | [**fontsUpdate**](docs/Api/FontsApi.md#fontsupdate) | **PUT** /api/storage/v1/fonts/{id} | Updates specified entity
*FontsApi* | [**fontsUpdateCollection**](docs/Api/FontsApi.md#fontsupdatecollection) | **PUT** /api/storage/v1/fonts/collections/{id} | Updates specified collection
*FontsApi* | [**fontsUpdateFolder**](docs/Api/FontsApi.md#fontsupdatefolder) | **PUT** /api/storage/v1/fonts/folders/{id} | Updates specified folder
*ImagesApi* | [**imagesAddPreview**](docs/Api/ImagesApi.md#imagesaddpreview) | **PUT** /api/storage/v1/images/{id}/preview | Creates preview entity for specified source entity
*ImagesApi* | [**imagesBatchCopy**](docs/Api/ImagesApi.md#imagesbatchcopy) | **POST** /api/storage/v1/images/batchCopy | Copies selected entities and folders to another folder specified by path
*ImagesApi* | [**imagesBatchDelete**](docs/Api/ImagesApi.md#imagesbatchdelete) | **POST** /api/storage/v1/images/batchDelete | Deletes selected entities and folders
*ImagesApi* | [**imagesBatchUpdateParentFolder**](docs/Api/ImagesApi.md#imagesbatchupdateparentfolder) | **POST** /api/storage/v1/images/batchUpdateParentFolder | Updates parent folder for selected entities and folders
*ImagesApi* | [**imagesCopy**](docs/Api/ImagesApi.md#imagescopy) | **POST** /api/storage/v1/images/{id} | Copies specified entity
*ImagesApi* | [**imagesCreate**](docs/Api/ImagesApi.md#imagescreate) | **POST** /api/storage/v1/images | Creates new entity
*ImagesApi* | [**imagesCreateCollection**](docs/Api/ImagesApi.md#imagescreatecollection) | **POST** /api/storage/v1/images/collections | Creates new collection
*ImagesApi* | [**imagesCreateFolder**](docs/Api/ImagesApi.md#imagescreatefolder) | **POST** /api/storage/v1/images/folders | Creates new folder
*ImagesApi* | [**imagesDelete**](docs/Api/ImagesApi.md#imagesdelete) | **DELETE** /api/storage/v1/images/{id} | Deletes specified entity
*ImagesApi* | [**imagesDeleteCollection**](docs/Api/ImagesApi.md#imagesdeletecollection) | **DELETE** /api/storage/v1/images/collections/{id} | Deletes specified collection
*ImagesApi* | [**imagesDeleteFolder**](docs/Api/ImagesApi.md#imagesdeletefolder) | **DELETE** /api/storage/v1/images/folders | Deletes specified folder
*ImagesApi* | [**imagesGet**](docs/Api/ImagesApi.md#imagesget) | **GET** /api/storage/v1/images/{id} | Gets entity by id
*ImagesApi* | [**imagesGetAll**](docs/Api/ImagesApi.md#imagesgetall) | **GET** /api/storage/v1/images | Gets all entities relevant to specified query parameters
*ImagesApi* | [**imagesGetAllCollections**](docs/Api/ImagesApi.md#imagesgetallcollections) | **GET** /api/storage/v1/images/collections | Gets all collections
*ImagesApi* | [**imagesGetAllFolders**](docs/Api/ImagesApi.md#imagesgetallfolders) | **GET** /api/storage/v1/images/folders/all | Gets all folders
*ImagesApi* | [**imagesGetCollection**](docs/Api/ImagesApi.md#imagesgetcollection) | **GET** /api/storage/v1/images/collections/{id} | Gets collection content by collection id
*ImagesApi* | [**imagesGetFile**](docs/Api/ImagesApi.md#imagesgetfile) | **GET** /api/storage/v1/images/{id}/file | Gets entity file from file storage
*ImagesApi* | [**imagesGetFolder**](docs/Api/ImagesApi.md#imagesgetfolder) | **GET** /api/storage/v1/images/folders | Gets folder content by folder path
*ImagesApi* | [**imagesGetFolderInfo**](docs/Api/ImagesApi.md#imagesgetfolderinfo) | **GET** /api/storage/v1/images/folders/{id} | Gets folder by id
*ImagesApi* | [**imagesUpdate**](docs/Api/ImagesApi.md#imagesupdate) | **PUT** /api/storage/v1/images/{id} | Updates specified entity
*ImagesApi* | [**imagesUpdateCollection**](docs/Api/ImagesApi.md#imagesupdatecollection) | **PUT** /api/storage/v1/images/collections/{id} | Updates specified collection
*ImagesApi* | [**imagesUpdateFolder**](docs/Api/ImagesApi.md#imagesupdatefolder) | **PUT** /api/storage/v1/images/folders/{id} | Updates specified folder
*PreviewsApi* | [**previewsGet**](docs/Api/PreviewsApi.md#previewsget) | **GET** /api/storage/v1/previews/{id} | Gets preview entity by id
*PreviewsApi* | [**previewsGetFile**](docs/Api/PreviewsApi.md#previewsgetfile) | **GET** /api/storage/v1/previews/{id}/file | Gets preview entity file from file storage
*PrivateDesignsApi* | [**privateDesignsAddPreview**](docs/Api/PrivateDesignsApi.md#privatedesignsaddpreview) | **PUT** /api/storage/v1/private-designs/{id}/preview | Creates preview entity for specified source entity
*PrivateDesignsApi* | [**privateDesignsBatchCopy**](docs/Api/PrivateDesignsApi.md#privatedesignsbatchcopy) | **POST** /api/storage/v1/private-designs/batchCopy | Copies selected entities and folders to another folder specified by path
*PrivateDesignsApi* | [**privateDesignsBatchDelete**](docs/Api/PrivateDesignsApi.md#privatedesignsbatchdelete) | **POST** /api/storage/v1/private-designs/batchDelete | Deletes selected entities and folders
*PrivateDesignsApi* | [**privateDesignsBatchUpdateOwner**](docs/Api/PrivateDesignsApi.md#privatedesignsbatchupdateowner) | **POST** /api/storage/v1/private-designs/batchUpdateOwner | Updates owner for selected entities and folders
*PrivateDesignsApi* | [**privateDesignsBatchUpdateParentFolder**](docs/Api/PrivateDesignsApi.md#privatedesignsbatchupdateparentfolder) | **POST** /api/storage/v1/private-designs/batchUpdateParentFolder | Updates parent folder for selected entities and folders
*PrivateDesignsApi* | [**privateDesignsCopy**](docs/Api/PrivateDesignsApi.md#privatedesignscopy) | **POST** /api/storage/v1/private-designs/{id} | Copies specified entity
*PrivateDesignsApi* | [**privateDesignsCreate**](docs/Api/PrivateDesignsApi.md#privatedesignscreate) | **POST** /api/storage/v1/private-designs | Creates new entity
*PrivateDesignsApi* | [**privateDesignsCreateCollection**](docs/Api/PrivateDesignsApi.md#privatedesignscreatecollection) | **POST** /api/storage/v1/private-designs/collections | Creates new collection
*PrivateDesignsApi* | [**privateDesignsCreateFolder**](docs/Api/PrivateDesignsApi.md#privatedesignscreatefolder) | **POST** /api/storage/v1/private-designs/folders | Creates new folder
*PrivateDesignsApi* | [**privateDesignsDelete**](docs/Api/PrivateDesignsApi.md#privatedesignsdelete) | **DELETE** /api/storage/v1/private-designs/{id} | Deletes specified entity
*PrivateDesignsApi* | [**privateDesignsDeleteCollection**](docs/Api/PrivateDesignsApi.md#privatedesignsdeletecollection) | **DELETE** /api/storage/v1/private-designs/collections/{id} | Deletes specified collection
*PrivateDesignsApi* | [**privateDesignsDeleteFolder**](docs/Api/PrivateDesignsApi.md#privatedesignsdeletefolder) | **DELETE** /api/storage/v1/private-designs/folders | Deletes specified folder
*PrivateDesignsApi* | [**privateDesignsGet**](docs/Api/PrivateDesignsApi.md#privatedesignsget) | **GET** /api/storage/v1/private-designs/{id} | Gets entity by id
*PrivateDesignsApi* | [**privateDesignsGetAll**](docs/Api/PrivateDesignsApi.md#privatedesignsgetall) | **GET** /api/storage/v1/private-designs | Gets all entities relevant to specified query parameters
*PrivateDesignsApi* | [**privateDesignsGetAllCollections**](docs/Api/PrivateDesignsApi.md#privatedesignsgetallcollections) | **GET** /api/storage/v1/private-designs/collections | Gets all collections
*PrivateDesignsApi* | [**privateDesignsGetAllFolders**](docs/Api/PrivateDesignsApi.md#privatedesignsgetallfolders) | **GET** /api/storage/v1/private-designs/folders/all | Gets all folders
*PrivateDesignsApi* | [**privateDesignsGetCollection**](docs/Api/PrivateDesignsApi.md#privatedesignsgetcollection) | **GET** /api/storage/v1/private-designs/collections/{id} | Gets collection content by collection id
*PrivateDesignsApi* | [**privateDesignsGetFile**](docs/Api/PrivateDesignsApi.md#privatedesignsgetfile) | **GET** /api/storage/v1/private-designs/{id}/file | Gets entity file from file storage
*PrivateDesignsApi* | [**privateDesignsGetFolder**](docs/Api/PrivateDesignsApi.md#privatedesignsgetfolder) | **GET** /api/storage/v1/private-designs/folders | Gets folder content by folder path
*PrivateDesignsApi* | [**privateDesignsGetFolderInfo**](docs/Api/PrivateDesignsApi.md#privatedesignsgetfolderinfo) | **GET** /api/storage/v1/private-designs/folders/{id} | Gets folder by id
*PrivateDesignsApi* | [**privateDesignsUpdate**](docs/Api/PrivateDesignsApi.md#privatedesignsupdate) | **PUT** /api/storage/v1/private-designs/{id} | Updates specified entity
*PrivateDesignsApi* | [**privateDesignsUpdateCollection**](docs/Api/PrivateDesignsApi.md#privatedesignsupdatecollection) | **PUT** /api/storage/v1/private-designs/collections/{id} | Updates specified collection
*PrivateDesignsApi* | [**privateDesignsUpdateFolder**](docs/Api/PrivateDesignsApi.md#privatedesignsupdatefolder) | **PUT** /api/storage/v1/private-designs/folders/{id} | Updates specified folder
*PrivateImagesApi* | [**privateImagesAddPreview**](docs/Api/PrivateImagesApi.md#privateimagesaddpreview) | **PUT** /api/storage/v1/private-images/{id}/preview | Creates preview entity for specified source entity
*PrivateImagesApi* | [**privateImagesBatchCopy**](docs/Api/PrivateImagesApi.md#privateimagesbatchcopy) | **POST** /api/storage/v1/private-images/batchCopy | Copies selected entities and folders to another folder specified by path
*PrivateImagesApi* | [**privateImagesBatchDelete**](docs/Api/PrivateImagesApi.md#privateimagesbatchdelete) | **POST** /api/storage/v1/private-images/batchDelete | Deletes selected entities and folders
*PrivateImagesApi* | [**privateImagesBatchUpdateOwner**](docs/Api/PrivateImagesApi.md#privateimagesbatchupdateowner) | **POST** /api/storage/v1/private-images/batchUpdateOwner | Updates owner for selected entities and folders
*PrivateImagesApi* | [**privateImagesBatchUpdateParentFolder**](docs/Api/PrivateImagesApi.md#privateimagesbatchupdateparentfolder) | **POST** /api/storage/v1/private-images/batchUpdateParentFolder | Updates parent folder for selected entities and folders
*PrivateImagesApi* | [**privateImagesCopy**](docs/Api/PrivateImagesApi.md#privateimagescopy) | **POST** /api/storage/v1/private-images/{id} | Copies specified entity
*PrivateImagesApi* | [**privateImagesCreate**](docs/Api/PrivateImagesApi.md#privateimagescreate) | **POST** /api/storage/v1/private-images | Creates new entity
*PrivateImagesApi* | [**privateImagesCreateCollection**](docs/Api/PrivateImagesApi.md#privateimagescreatecollection) | **POST** /api/storage/v1/private-images/collections | Creates new collection
*PrivateImagesApi* | [**privateImagesCreateFolder**](docs/Api/PrivateImagesApi.md#privateimagescreatefolder) | **POST** /api/storage/v1/private-images/folders | Creates new folder
*PrivateImagesApi* | [**privateImagesDelete**](docs/Api/PrivateImagesApi.md#privateimagesdelete) | **DELETE** /api/storage/v1/private-images/{id} | Deletes specified entity
*PrivateImagesApi* | [**privateImagesDeleteCollection**](docs/Api/PrivateImagesApi.md#privateimagesdeletecollection) | **DELETE** /api/storage/v1/private-images/collections/{id} | Deletes specified collection
*PrivateImagesApi* | [**privateImagesDeleteFolder**](docs/Api/PrivateImagesApi.md#privateimagesdeletefolder) | **DELETE** /api/storage/v1/private-images/folders | Deletes specified folder
*PrivateImagesApi* | [**privateImagesGet**](docs/Api/PrivateImagesApi.md#privateimagesget) | **GET** /api/storage/v1/private-images/{id} | Gets entity by id
*PrivateImagesApi* | [**privateImagesGetAll**](docs/Api/PrivateImagesApi.md#privateimagesgetall) | **GET** /api/storage/v1/private-images | Gets all entities relevant to specified query parameters
*PrivateImagesApi* | [**privateImagesGetAllCollections**](docs/Api/PrivateImagesApi.md#privateimagesgetallcollections) | **GET** /api/storage/v1/private-images/collections | Gets all collections
*PrivateImagesApi* | [**privateImagesGetAllFolders**](docs/Api/PrivateImagesApi.md#privateimagesgetallfolders) | **GET** /api/storage/v1/private-images/folders/all | Gets all folders
*PrivateImagesApi* | [**privateImagesGetCollection**](docs/Api/PrivateImagesApi.md#privateimagesgetcollection) | **GET** /api/storage/v1/private-images/collections/{id} | Gets collection content by collection id
*PrivateImagesApi* | [**privateImagesGetFile**](docs/Api/PrivateImagesApi.md#privateimagesgetfile) | **GET** /api/storage/v1/private-images/{id}/file | Gets entity file from file storage
*PrivateImagesApi* | [**privateImagesGetFolder**](docs/Api/PrivateImagesApi.md#privateimagesgetfolder) | **GET** /api/storage/v1/private-images/folders | Gets folder content by folder path
*PrivateImagesApi* | [**privateImagesGetFolderInfo**](docs/Api/PrivateImagesApi.md#privateimagesgetfolderinfo) | **GET** /api/storage/v1/private-images/folders/{id} | Gets folder by id
*PrivateImagesApi* | [**privateImagesUpdate**](docs/Api/PrivateImagesApi.md#privateimagesupdate) | **PUT** /api/storage/v1/private-images/{id} | Updates specified entity
*PrivateImagesApi* | [**privateImagesUpdateCollection**](docs/Api/PrivateImagesApi.md#privateimagesupdatecollection) | **PUT** /api/storage/v1/private-images/collections/{id} | Updates specified collection
*PrivateImagesApi* | [**privateImagesUpdateFolder**](docs/Api/PrivateImagesApi.md#privateimagesupdatefolder) | **PUT** /api/storage/v1/private-images/folders/{id} | Updates specified folder
*TenantsApi* | [**tenantsCreate**](docs/Api/TenantsApi.md#tenantscreate) | **POST** /api/storage/v1/tenants | Creates new tenant
*TenantsApi* | [**tenantsDelete**](docs/Api/TenantsApi.md#tenantsdelete) | **DELETE** /api/storage/v1/tenants/{id} | Deletes specified tenant
*TenantsApi* | [**tenantsGet**](docs/Api/TenantsApi.md#tenantsget) | **GET** /api/storage/v1/tenants/{id} | Gets tenant by id
*TenantsApi* | [**tenantsGetAll**](docs/Api/TenantsApi.md#tenantsgetall) | **GET** /api/storage/v1/tenants | Gets all tenants
*TenantsApi* | [**tenantsUpdate**](docs/Api/TenantsApi.md#tenantsupdate) | **PUT** /api/storage/v1/tenants/{id} | Updates specified tenant

## Models

- [ArtifactDto](docs/Model/ArtifactDto.md)
- [ArtifactType](docs/Model/ArtifactType.md)
- [BatchConflictDto](docs/Model/BatchConflictDto.md)
- [BatchCopyInput](docs/Model/BatchCopyInput.md)
- [BatchDeleteInput](docs/Model/BatchDeleteInput.md)
- [BatchUpdateOwnerInput](docs/Model/BatchUpdateOwnerInput.md)
- [BatchUpdateParentFolderInput](docs/Model/BatchUpdateParentFolderInput.md)
- [BuildInfoModel](docs/Model/BuildInfoModel.md)
- [CollectionContentOfColorProfileDto](docs/Model/CollectionContentOfColorProfileDto.md)
- [CollectionContentOfDataSchemaDto](docs/Model/CollectionContentOfDataSchemaDto.md)
- [CollectionContentOfDataSetDto](docs/Model/CollectionContentOfDataSetDto.md)
- [CollectionContentOfDesignDto](docs/Model/CollectionContentOfDesignDto.md)
- [CollectionContentOfFontDto](docs/Model/CollectionContentOfFontDto.md)
- [CollectionContentOfImageDto](docs/Model/CollectionContentOfImageDto.md)
- [CollectionDto](docs/Model/CollectionDto.md)
- [ColorProfileClass](docs/Model/ColorProfileClass.md)
- [ColorProfileDto](docs/Model/ColorProfileDto.md)
- [ColorProfileMetadata](docs/Model/ColorProfileMetadata.md)
- [ColorSpace](docs/Model/ColorSpace.md)
- [ConflictDto](docs/Model/ConflictDto.md)
- [ConflictResolvingStrategy](docs/Model/ConflictResolvingStrategy.md)
- [ConflictType](docs/Model/ConflictType.md)
- [CreateCollectionDto](docs/Model/CreateCollectionDto.md)
- [CreateFolderDto](docs/Model/CreateFolderDto.md)
- [CreateTenantDto](docs/Model/CreateTenantDto.md)
- [DataSchemaDto](docs/Model/DataSchemaDto.md)
- [DataSchemaMetadata](docs/Model/DataSchemaMetadata.md)
- [DataSetDto](docs/Model/DataSetDto.md)
- [DataSetMetadata](docs/Model/DataSetMetadata.md)
- [DesignDto](docs/Model/DesignDto.md)
- [DesignFontMetadata](docs/Model/DesignFontMetadata.md)
- [DesignMetadata](docs/Model/DesignMetadata.md)
- [DesignSurfaceMetadata](docs/Model/DesignSurfaceMetadata.md)
- [FolderContentOfColorProfileDto](docs/Model/FolderContentOfColorProfileDto.md)
- [FolderContentOfDataSchemaDto](docs/Model/FolderContentOfDataSchemaDto.md)
- [FolderContentOfDataSetDto](docs/Model/FolderContentOfDataSetDto.md)
- [FolderContentOfDesignDto](docs/Model/FolderContentOfDesignDto.md)
- [FolderContentOfFontDto](docs/Model/FolderContentOfFontDto.md)
- [FolderContentOfImageDto](docs/Model/FolderContentOfImageDto.md)
- [FolderDto](docs/Model/FolderDto.md)
- [FolderInfoDto](docs/Model/FolderInfoDto.md)
- [FontDto](docs/Model/FontDto.md)
- [FontMetadata](docs/Model/FontMetadata.md)
- [ImageDto](docs/Model/ImageDto.md)
- [ImageMetadata](docs/Model/ImageMetadata.md)
- [ImagePageMetadata](docs/Model/ImagePageMetadata.md)
- [NameConflictDto](docs/Model/NameConflictDto.md)
- [PagedOfArtifactDto](docs/Model/PagedOfArtifactDto.md)
- [PagedOfColorProfileDto](docs/Model/PagedOfColorProfileDto.md)
- [PagedOfDataSchemaDto](docs/Model/PagedOfDataSchemaDto.md)
- [PagedOfDataSetDto](docs/Model/PagedOfDataSetDto.md)
- [PagedOfDesignDto](docs/Model/PagedOfDesignDto.md)
- [PagedOfFontDto](docs/Model/PagedOfFontDto.md)
- [PagedOfImageDto](docs/Model/PagedOfImageDto.md)
- [PagedOfTenantDto](docs/Model/PagedOfTenantDto.md)
- [PreviewDto](docs/Model/PreviewDto.md)
- [PreviewMetadata](docs/Model/PreviewMetadata.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [TenantDto](docs/Model/TenantDto.md)
- [UpdateCollectionDto](docs/Model/UpdateCollectionDto.md)
- [UpdateFolderDto](docs/Model/UpdateFolderDto.md)
- [UpdateTenantDto](docs/Model/UpdateTenantDto.md)
