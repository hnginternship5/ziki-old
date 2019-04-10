<?php
require("vendor/autoload.php");
if (!session_id()) {
  session_start();
}
$fb = new Facebook\Facebook([
  'app_id' => '1049022241947586',
  'app_secret' => '83d0df86dfd991f91ae0b4290e82d63f',
 //'app_id' => '325441314824736',
  //'app_secret' => 'dc99854d60314fe5dc1cf55b15ee4e3a',
  'default_graph_version' => 'v2.10',
]);
$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl('http://localhost/ziki/temp_landing_page.php');
try {
  $accessToken = $helper->getAccessToken();
} catch (Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
if (!isset($accessToken)) {
  if ($helper->getError()) {
    header('HTTP/1.0 401 Unauthorized');
    echo "Error: " . $helper->getError() . "\n";
    echo "Error Code: " . $helper->getErrorCode() . "\n";
    echo "Error Reason: " . $helper->getErrorReason() . "\n";
    echo "Error Description: " . $helper->getErrorDescription() . "\n";
  } else {
    header('HTTP/1.0 400 Bad Request');
    echo 'Bad request';
  }
  exit;
}
// Logged in
echo '<h3>Access Token</h3>';
echo ($accessToken->getValue());
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
// The OAuth 2.0 client handler helps us manage access tokens
$oAuth2Client = $fb->getOAuth2Client();
// Get the access token metadata from /debug_token
$tokenMetadata = $oAuth2Client->debugToken($accessToken);
// echo '<h3>Metadata</h3>';
// var_dump($tokenMetadata);
// Validation (these will throw FacebookSDKException's when they fail)
$tokenMetadata->validateAppId( '325441314824736');
// If you know the user ID this access token belongs to, you can validate it here
//$tokenMetadata->validateUserId('123');
$tokenMetadata->validateExpiration();
if (!$accessToken->isLongLived()) {
  // Exchanges a short-lived access token for a long-lived one
  try {
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
  } catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
    exit;
  }
  // echo '<h3>Long-lived</h3>';
  // var_dump($accessToken->getValue());
}
try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name,email', $accessToken->getValue());
} catch (Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
$_SESSION['accesstoken'] = (string)$accessToken;
$user = $response->getGraphUser();
$name = $user['name'];
$id = $user['id'];
$email = $user['email'];
$response = array();
$user = array();
$user[] = array('Name' => $name, 'Email' => $email, 'Access Token' => $_SESSION['accesstoken']);
$response['user'] = $user;
$fp = fopen('settings.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
echo 'Logged in as '.$name;
echo '<br/>';
echo 'With email ' . $email;
echo '<br/>';
echo 'And session variables';
print_r($_SESSION);
// OR
// User is logged in with a long-lived access token.
// You can redirect them to a members-only page.
// header( 'Location: http://localhost:8000/temp_landing_page.php');