<?php
include 'includes/config.php';
include 'config.php';
extract($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php if (isset($l)){ ?>
  <title>Page Title</title> <!-- needs to be set -->
<?php } else {?>
    <title><?php echo $title; ?></title>
  <?php }?>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery-331.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Hind:400,500,700|Josefin+Sans:300|B612:700|Source+Sans+Pro:900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="build/main.css?ver=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] . '/build/main.css'); ?>">

    <!-- Markdown cdn link -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">

</head>
<?php if (isset($l)) {?>
  <body class="" id="setCssClass">
<?php } else {?>
  <body class="" id="bodySwitch">
<?php } ?>
  <div class="container">
