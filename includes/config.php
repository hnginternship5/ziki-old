<?php
ob_start();
session_start();
//define('DIR', 'http://localhost/calebconnect/');

//database credentials

//set timezone
date_default_timezone_set('Europe/London');

include('functions.php');
$users ='../Authentication\auth\settings.json';
//echo "function is ok";
//load classes as needed
function __autoload($class) {

   $class = strtolower($class);

	//if call from within assets adjust the path
   $classpath = 'classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	}

	//if call from within admin adjust the path
   $classpath = '../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	}

	//if call from within admin adjust the path
   $classpath = '../../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	}

}

$user = new User($users);
?>
