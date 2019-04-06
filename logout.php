<?php
require './auth/facebookinit.php';
require './auth/googleinit.php';

session_destroy();

unset($_SESSION['access_token']);
header("Location: index.php");
?>