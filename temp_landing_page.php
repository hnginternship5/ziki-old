<?php
require_once 'Authentication/auth/googleinit.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Temp</title>

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
        <h1>Temporary Landing Page (After login)</h1>
        <?php
            if(isset($_SESSION['accesstoken'])){
  try{
  
        ?>
            <div id="information-container">
                <div class="information">
                    <label>Name</label><span><?= $user_info['name'] ?></span>
                </div>
                <div class="information">
                    <label>Email</label><span><?= $user_info['email'] ?></span>
                </div>
                <div class="information">
                    <label>Picture</label><img src="<?= $user_info['picture'] ?>" />
                </div>
            </div>
        <?php
        }catch(Exception $e){
            echo "Google Auth Error:  ". $e->getMessage();
         }
            }
            
            else{
                echo "User not logged in";
            }
        ?>

    </body>
</html>