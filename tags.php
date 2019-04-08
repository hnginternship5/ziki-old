<?php
// Check if the server request method is, and the request URL is tags
if($_SERVER['REQUEST_METHOD'] == "GET" && $_SERVER['PHP_SELF'] == "/tags.php"){
    $tag = isset($_GET['t']) ? $_GET['t'] : NULL ;
}else{
    $tag = NULL;
}
