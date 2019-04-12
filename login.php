<?php
//include config
require_once('includes/config.php');
$title = 'Welcome';
$location = 'login';
//check if already logged in
?>

<?php
//include 'header.php'; ?>

<!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Login Locally</title>
      <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
      <link href="https://fonts.googleapis.com/css?family=Hind:400,500,700" rel="stylesheet">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/base.css">
  </head>
  <body class="">
      <main class="auth-main-container">
          <div class="auth-content-wrap">
              <div class="auth-content">
    <?php
    if( $user->is_logged_in() ){ header('Location: timeline.php'); }

    //process login form if submitted
    if(isset($_POST['submit'])){

      $name = trim($_POST['name']);
      $email = trim($_POST['email']);
$persist = isset($_POST['persist']); //will be true or false
      if($user->login($name,$email,$persist)){
        if (isset($_GET['l'])) {
          $l=$_GET['l'];
          header('Location: '.$l.'');

        }
        else {
          header('Location: timeline.php');
          exit;
        }

      } else {
        $message = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Oops!</strong> Wrong name or email<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }

    }//end if submit

//Print_r($_SESSION);
    ?>

            <header id="cul" class="auth-header">
              <h1>
                Ziki - Local Login
                <span class="sr-only">Sign In</span>
              </h1>



            <!-- form -->
            <form class="auth-form" autocomplete="yes" method="post">
              <!-- .form-group -->
                <?php  if(isset($message)){ echo $message; }?>
              <div class="form-group">
                <div class="form-label-group">
                  <label for="inputUser">full Name</label>
                  <input type="text" id="inputUser" name="name" class="form-control" required="" autofocus="">
                </div>
              </div>
              <!-- /.form-group -->
              <!-- .form-group -->
              <div class="form-group">
                <div class="form-label-group">
                  <label for="inputPassword">Email</label>
                  <input type="email" id="inputPassword" name="email" class="form-control" required="">
                </div>
              </div>
              <!-- /.form-group -->
              <!-- .form-group -->
              <div class="form-group">
                <button class="btn btn-lg btn-block" name="submit"  type="submit">Sign In</button>
              </div>
              <!-- /.form-group -->
              <!-- .form-group -->
              <div class="form-group text-center">
                <div class="custom-control custom-control-inline custom-checkbox">
                  <input type="checkbox" name='persist' class="custom-control-input" id="remember-me" checked>
                  <label class="custom-control-label" for="remember-me">Keep me sign in</label>
                </div>
              </div>
              <!-- /.form-group -->
              <!-- recovery links -->

              <!-- /recovery links -->
            </form>
          </div>
      </div>

    </main>

  </body>

  </html>
