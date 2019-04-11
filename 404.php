<?php

$check = http_response_code(404)  === 200;
if (!$check){
	include('404.html');
	die();
}
 

 ?>
