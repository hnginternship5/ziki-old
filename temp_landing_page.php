<?php
require_once 'Authentication/auth/googleinit.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script>
        window.onload = () => {
            location.replace('timeline.php')
        }
    </script>
    <title>Redirecting....</title>

        <style type="text/css">

        #information-container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #cccccc;
        }

        .information {
            margin: 0 0 30px 0;
        }

        .information label {
            display: inline-block;
            vertical-align: middle;
            width: 150px;
            font-weight: 700;
        }

        .information span {
            display: inline-block;
            vertical-align: middle;
        }

        .information img {
            display: inline-block;
            vertical-align: middle;
            width: 100px;
        }

        </style>
    </head>

    <body>
        <h1>Redirecting... </h1>
        

    </body>
</html>
