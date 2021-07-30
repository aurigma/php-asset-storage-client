<?php
require_once __DIR__.'/../../vendor/autoload.php';

use Jumbojett\OpenIDConnectClient;
use GuzzleHttp\ClientInterface;
use Aurigma\AssetStorage\HeaderSelector;
use Aurigma\AssetStorage\Configuration;
use Aurigma\AssetStorage\Api\FontsApi;
use Aurigma\AssetStorage\Api\ImagesApi;

$oidc = new OpenIDConnectClient('BACK_OFFICE_URL', 'CLIENT_ID', 'CLIENT_SECRET');
$oidc->providerConfigParam(array('token_endpoint'=> 'BACK_OFFICE_URL'.'/connect/token'));

// this assumes success (to validate check if the access_token property is there and a valid JWT) :
$accessToken = $oidc->requestClientCredentialsToken()->access_token;

$client = new GuzzleHttp\Client([
    // Base URI is used with relative requests
    'base_uri' => 'API_URL',
    // You can set any number of default request options.
    'timeout'  => 30.0,
]);
$selector = new HeaderSelector();
$config = new Configuration();
$config->setAccessToken($accessToken);
$config->setHost('API_URL');

$imagesApi = new ImagesApi($client, $config, $selector);
$response2 = $imagesApi->imagesGet('Image_id', 1);
print_r($response2);

echo 'Done! ';
?>