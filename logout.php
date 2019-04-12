<?php
include 'header.php';
include 'config.php';
session_destroy();

unset($_SESSION['access_token']);
header("Location: $site_url");
?>
