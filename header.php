<!-- mylo carson 2019-->
<?php include 'includes/config.php';
//print_r($_SESSION);
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

    <!-- Markdown cdn link -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">

    <style type="text/css">
        /** mylo carson 2019 */
        p{
            /*font-family: 'Amiri', serif;*/
            font-family: 'Josefin Sans', sans-serif;
            font-size: 1.5em;
            /*color: #2f2f2f;*/
            color: #000;
            letter-spacing: 0.02em;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'B612', sans-serif;
            /*font-weight: bold;*/
        }

        html,body{
            margin:0;
            padding: 0;
            overflow-x: hidden;
            background-color: #fff;
        }

        ul{
            margin:0;
            padding:0;
        }

        .page-head{
            min-height: 350px;
            max-height: 400px;
            background-image: url(../img/header.png);
            background-attachment: fixed;
            background-size: contain;
            background-repeat: no-repeat;
        }

        .ziki-post{
            color: white;
            font-family: 'Source Sans Pro', sans-serif;
        }

        div.header-caption{
            margin-top: 40px;
        }

        h1.ziki-post{
            font-size: 8em !important;
        }

        i.s-icons{
            margin: 20px 5px;
        }

        .posts-area{
            padding-top: 30px;
            padding-bottom: 80px;
        }

        div.posts{
            margin-top: 40px;
        }

        .star{
            color: #ffc107;
        }

        .liked{
            color: red;
        }

        .blog-main-item{
            background: #F8F8F8;
            box-shadow: 0px 4px 13px rgba(0, 0, 0, 0.12);
            border-radius: 11px
            min-height: 200px;
            /*margin-left: 10px;*/
            margin-right: 10px;
        }

        .post-img{
            max-height: 200px;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
        }

        .post-heading{
            margin-top: 15px;
        }

        .post-text{
            font-size: 1.4em;
            line-height: normal;
            color: #000000;
        }

        .read-more{
            color: #449f44;
            font-size: 0.8em;
            font-weight: bold;
        }

        .post-icon{
            font-size: 1.5em;
            /*color: red;
        */}

        .chat-icon{color: #007bff;}

        .spaced-icon{
            margin-left: 15px;
            margin-right: 15px;
        }

        .post-date{
            font-weight: bold;
            font-size: 0.8em;
            margin: 10px 0;
        }
        .post-footer{
            /*margin-bottom: 15px;*/
        }

        /*WYSIWYG*/
        .editor{
            width:100%;
            min-height: 15rem;
            margin: 2rem;
            padding: 1rem;
            font-size: 1.2rem;
            box-shadow: 0 .1rem .4rem rgba(0,0,0,0.03);
            border: none;
            overflow-y: auto;
            font-size: 1.4rem;
            font-weight: 600;
            margin: 0 auto;
        }
        .editor:focus {
            outline: none;
        }
        .toolbar{
            display:grid;
            grid-template-columns: repeat(auto-fit,minmax(20px,40px));
            color: rgb(0, 0, 0);
            grid-gap: 1rem;
            padding: 1rem;
            justify-content: center;
            align-items:center;
            opacity: 0;
            transition: all 0.5s;
        }
        .tool{
            border: none;
            padding: 1rem;
            background-color: rgba(0,0,0,0.03);
        } 
        .status-area {
            border-radius: 15px;
            outline: none;
        }
        .form-control {
            outline: none;
            font-weight: bold;
        }
        /*editor code ends here*/
        li{
            list-style-type: none;
        }

        .profile-section{
            background: rgba(243, 243, 243, 0.62);
        }

        .profile-main{
            /*margin-top: 100px;*/
        }

        .profile-name{
            font-family: 'B612', sans-serif;
            font-style: normal;
            line-height: normal;
            text-align: center;
            letter-spacing: -0.04em;
            margin-bottom: 6px
        }

        .user-skills {
            font-family: 'B612', sans-serif;
            font-style: normal;
            /*font-weight: 600;*/
            font-size: 12px;
            line-height: normal;
            text-align: center;
            margin-top: 6px;
            margin-bottom: 16px;
        }

        .profile-motto{
            font-family: 'Josefin Sans', sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 1.1em;
            line-height: normal;
            text-align: center;
            margin-top: 16px;
            margin-bottom: 24px;
        }

        .menu-wrapper{
            margin:68px 0;
        }

        .menu-item{
            margin: 15px 0;
        }

        .line{
            width: 50%;
            height: 1px;
            background-color: rgba(0, 0, 0, 0.3);
        }

        .blog-item-img{
            border-radius: 11px;
            width: inherit;
            height: 165px;
        }

        .blog-item-author-avatar-wrapper{
            max-width: 50px;
        }

        .blog-item-author-avatar{
            border-radius: 50%;
            max-width: 70px;
            height: 60px;
            margin-right:  10px ; 
            border: 0.5px solid rgba(0, 0, 0, 0.5);
        }

        .post-section{
            min-height: 160px;
            background: #F8F8F8;
            /*padding: 18px 30px;*/
            margin-top: 30px;
            /*margin-left: 48px;*/
            /*margin-right: 45px;*/
            /*margin-bottom: 22px;*/
        }

        .post-input{
            background-color: transparent;
            font-family: Open Sans;
            font-style: normal;
            font-weight: 600;
            font-size: 18px;
            line-height: normal;
            outline: 0;
            border: 0;
            padding: 5px;
            color: #000000;
            resize: none;
        }

        .post-filter{
            font-style: normal;
            font-weight: bold;
            font-size: 13px;
            line-height: normal;
            letter-spacing: -0.05em;
            color: #333333;
        }

        .post-filter-title{
            font-weight: normal;
        }

        a{
            text-decoration: none;
            color: #449f44;;
        }

        a:hover, a:focus, a:visited{
            text-decoration: none;
            color: #000000;;
        }

        .pagination-section{
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .padd{padding: 20px 0;}

        /*Media query*/
        @media (max-width: 576px) {
            .post-img{
                max-height: 200px;
                border-radius: 15px 15px 0 0;
            }

            .blog-item-author-avatar{
                z-index: 9999999;
                position: relative;
                top: 30px;
            }

            .posts{
                margin-top: -20px;
            }

            .blog-main-item{
                margin-left: 10px;
            }

            textarea{
                min-height: 40vh !important;
            }

            .post-section{
                min-width: 100%;
                margin: 30px 0px;
            }

            .fa, .fas, .fab{
                font-size: .9em;
                padding: 5px;
            }
        }
        .dark{
            background: #07223e;
        }
        .dark h4, p{
            color : white
        }
    </style>
</head>
<body id="setCssClass">
  <div class="container-fluid">
    <!-- mylo carson 2019-->
