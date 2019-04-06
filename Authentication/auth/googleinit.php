<?php
require ("vendor/autoload.php");

$g_client = new Google_Client();
$g_client->setClientId("2070310808-dfavj133e4eda2ueprv1tfqemspcb3vb.apps.googleusercontent.com");
$g_client->setClientSecret("DBsnKq_qekAhT7sMWxEHs1sB");
$g_client->setRedirectUri('https://ziki.hng.tech/Authentication/login.php');
$g_client->setScopes("email");

//function to save access token to json file
//$KEY_LOCATION = __DIR__ . '/client_secret.json';

//Google created authorization url
$glogin_url = $g_client->createAuthUrl();

//Google authorization  code
$code = isset($_GET['code']) ? $_GET['code'] : NULL;


//Fetch access token
if(isset($code)) {
  try {
 
      $gaccess_token = $g_client->fetchAccessTokenWithAuthCode($code);
      $_SESSION['accesstoken'] = $gaccess_token;
      $g_client->setAccessToken($_SESSION['accesstoken']);
      
      header('Location: index.php');//please enter homepage here


  }catch (Exception $e){
      echo $e->getMessage();
  }

  try {
      $user = $g_client->verifyIdToken();
      //$user = $plus->people->get('');

  }catch (Exception $e) {
      echo $e->getMessage();
  }
} else{
  $user = null;
}
if(isset($_SESSION['accesstoken'])){
  //Whatever you want to do once user is verified
  try{
    //echo "Logged in";

  }catch(Exception $e){
    echo $e->getMessage();
 }
}

