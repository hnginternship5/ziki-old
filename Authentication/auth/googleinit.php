<?php
session_start();

require ("vendor/autoload.php");

$g_client = new Google_Client();
$g_client->setClientId("2070310808-dfavj133e4eda2ueprv1tfqemspcb3vb.apps.googleusercontent.com");
$g_client->setClientSecret("DBsnKq_qekAhT7sMWxEHs1sB");
$g_client->setRedirectUri('http://localhost/ziki/authentication/index.php');
$g_client->setScopes(array('https://www.googleapis.com/auth/userinfo.email','https://www.googleapis.com/auth/userinfo.profile'));

//function to save access token to json file
//$KEY_LOCATION = __DIR__ . '/client_secret.json';

//Google created authorization url
$glogin_url = $g_client->createAuthUrl();

//Google authorization  code
$code = isset($_GET['code']) ? $_GET['code'] : NULL;

//Fetch access token
if(isset($code)) {
  try {
 
      $_SESSION['accesstoken'] = $g_client->fetchAccessTokenWithAuthCode($code);
       //= $gaccess_token;
      $g_client->setAccessToken($_SESSION['accesstoken']);
      $user_info = $g_client->verifyIdToken();

      //header('Location: index.php');//please enter homepage here

      $response = array();
      $user = array();
      $user[] = array('Name'=> $user_info['name'], 'Email'=> $user_info['email'], 'Access Token'=> $_SESSION['accesstoken']);

      $response['user'] = $user;

      $fp = fopen('settings.json', 'w');
      fwrite($fp, json_encode($response));
      fclose($fp);



  }catch (Exception $e){
      echo "Google Authentication Error:  ". $e->getMessage();
  }

} else{
  $user = null;
}
?>

