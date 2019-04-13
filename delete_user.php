<?php 
include 'includes/config.php';
require_once 'config.php';
//print_r($_SESSION);
extract($_SESSION);
//check for the authentication file
$file = file_get_contents('Authentication\auth\settings.json');
$file_data = json_decode($file,true);

//loop through to find th user data to be deleted
$array_file = array();
foreach($file_data as $key => $value){
    
    
     foreach($value as $result => $answer){
         if ($answer['Email'] == $email){
                $array_file[] = $result;
                
         }
}

}
foreach($array_file as $i){
    unset($value[$i]);
}
//save the empty array back to the json file
$value = array_values($value);
// encode array to json and save to file
file_put_contents('Authentication\auth\settings.json', json_encode($value));
//delete the session store
session_destroy();

unset($_SESSION['access_token']);
header("Location: $site_url");
?>

