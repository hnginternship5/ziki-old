<?php
session_start();

require 'vendor/autoload.php';

$fb = new Facebook\Facebook([
    'app_id'=>'1049022241947586',
    'app_secret' => '83d0df86dfd991f91ae0b4290e82d63f',
    'default_graph_version' => 'v3.2'
]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl('http://localhost/login.php');

try{
  $access_token = $helper->getAccessToken();
  if(isset($access_token)){
    $_SESSION['access_token'] = (string)$access_token;
    header("Location: index.php"); //please enter homepage here!
  }
}
  catch(Exception $e){
    echo $e->getTraceAsString();
  }

  if(isset($_SESSION['access_token'])){
    try{
        $fb->setDefaultAccessToken($_SESSION['access_token']);
        $result = $fb->get('/me?local=en_US&fields=name,email');
        $user = $result->getGraphUser();
        //echo  $user->getField('name') ." is logged in using facebook!";
        //echo "Logged in";
    } catch(Exception $e){
      echo $e->getTraceAsString();

    }
  }
?>
