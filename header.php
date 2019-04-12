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
    <title><?php echo $title; ?></title>
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
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

  <style>
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
</head>
<body class="" id="bodySwitch">
    <!-- mylo carson 2019-->
