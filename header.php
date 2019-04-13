<!-- mylo carson 2019-->
<?php include 'includes/config.php';
//print_r($_SESSION);
//if( $user->is_logged_in() ){ header('Location: timeline.php'); }

extract($_SESSION);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="theme-color" content="#ffffff">
<?php if (isset($l)){ ?>
  <title> <?php echo $name ?> Profile Settings</title>
<?php } else {?>
    <title><?php echo $title; ?></title>
  <?php }?>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery-331.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Hind:400,500,700|Josefin+Sans:300|B612:700|Source+Sans+Pro:900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/newtm.css">

    <!-- Markdown cdn link -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="assets/css/theme1.css">
  <style media="screen">
  :root{
      --blog-detail-header: #07223E;
      --prev-next-bg: #f8f8f8;
      --prev-next-text: #3667e7;
  }
  .dark{
      --blog-detail-header: #fff;
      --prev-next-bg: #104B87;
      --prev-next-text: #fff;
    }
    .blog-details-fluid{
        padding:  0;
        marging:  0;
    }
    .blog-details-header{
        color: var(--blog-detail-header);
    }

    .blog-details-date, .blog-details-image-description{
        font-size: 14px;
        font-weight: 300;
    }
    .blog-details-content:first-child{
        margin-top: 100px;
    }
    .blog-details-content > div{
        margin: 50px 0;
    }
    .subscribe{
        font-size: 18px;
    }
    .btn-tags{
        background-color: var(--default-btn-bg-color);
        color: var(--default-btn-text-color);
    }
    .tag-btns-area{
        margin-left: 6rem!important;
    }
    .prev-next{
      background-color: var(--prev-next-bg);
      color: var(--prev-next-text);
    }
    .prev, .next{
        width:50%;
    }
    @media screen and (max-width: 768px){
      .blog-details-content > div, .blog-tools{
          margin: 20px 0!important;
          padding: 0!important;
      }
      .fav-comment, .subscribe{
          padding:20px 0!important;
      }
      .tag-btns-area{
        margin-left: 0!important;
    }
  }
  </style>

  <?php if (isset($l)) {?>
    <style>

        .m-4 {
            margin: 0 !important ;
        }
    .content {
        margin-top:  3rem;
    }

    .update {
        margin-bottom:  3rem;
    }


    .user-profile-setting-form {
        margin-top: 0;
    }

    .log {
        background-color: transparent;
        font-weight: bold;
    }

    .co.red {
        color: (--ziki-red) !important ;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
        }

    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked + .slider {
      background-color: #111;
    }

    input:focus + .slider {
      box-shadow: 0 0 1px #111;
    }

    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;
    }

    </style>

  <style>
      @media only screen and (min-width: 768px) {

      .user-profile-setting-form {
          width: 35%;
  }

      .motuns-content-container {
          margin: 4rem;
          padding-right: 1rem;
      }

      .logo-profile{
          margin: 0 1rem;
          }

      .details {
          display: flex;
          justify-content: space-between;
          margin: 0;
      }

      .update {
          order:  2;
      }
      .upcase {
          margin-top: -19rem;
      }

      .theme {
          display: inline-block;
          float: right;
          margin-top: -25rem;
          margin-right: -4rem;
      }

      .drop {
          min-height: auto;
          background-color: transparent;
          color: black;
          border: 1px solid black;
          outline: none;
          font-size:  14px;
  }
      .capitalize {
          margin-left: 0;
      }

      .fl-r {
          float:      right;
          color:      red;
      }
      }
      @media only screen and (min-width: 1024px) {

    .logo-profile{
      margin: 1rem;
      }
      .body {
          width:  80%;
          margin: auto;
      }
      @media only screen and (min-width: 1440px) {
          .body {
              width:  80%;
              margin: auto;
              padding: 0 5% 0 15%;
      }

      }

  }
  </style>
<?php } ?>
</head>
<?php if (isset($l)) {?>
  <body class="" id="setCssClass">
<?php }else {?>
  <body class="" id="bodySwitch">
  <?php } ?>
    <!-- mylo carson 2019-->
