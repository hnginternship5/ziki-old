<?php
include 'includes/config.php';
include 'config.php';
extract($_SESSION);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $git = isset($_POST['git']) ? trim($_POST['git']) : null;
    $dribble = isset($_POST['dribble']) ? trim($_POST['dribble']) : null;
    
    $user = array();
    $user[] = array('Name'=> $name , 'Email'=> $email, 'github'=> $git,'dribble'=> $dribble );


    $fp = fopen('userdetails.json', 'w');
    fwrite($fp, json_encode($user));
    fclose($fp);
}
header("Location: {$site_url}timeline.php");
?>