<?php include 'includes/config.php';
//print_r($_SESSION);
extract($_SESSION);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <title>Profile Setting</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Hind:400,500,700" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/base.css">
    <style type="text/css">
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
</head>
<body id="setCssClass">
<style>
    @media only screen and (min-width: 768px) {
    .logo-profile{
        margin: 0 1rem;
        }
    }
    @media only screen and (min-width: 1024px) {
    
  .logo-profile{
    margin: 1rem;
    }
}
</style>
<?php
            if(isset($_SESSION['accesstoken'])){
  try{

        ?>
<?php
        }catch(Exception $e){
            //echo "Google Auth Error:  ". $e->getMessage();
         }
            }

            else{
                header("Location: index.php");
            }
        ?>
<body id="setCssClass">
    <main class="motuns-main-container">
        <section class="motuns-side-bar">
        <div class="logo-area logo-profile">
	      <a href="timeline.php">
            <img src="assets/img/zikilogo.png" alt="" class="logo" />
            </a>
          </div>
            
            <p class="">
                Profile
            </p>
        </section>
        <div class="container">
            <section class="motuns-content-container">
                <h2>
                    Settings
                </h2>
                <div class="details">
                    <div class="d-grid update">
                        <img src="/assets/img/avatar-2.jpeg" alt="" class="avatar">
                        <button class="upcase user-profile-button">
                            update
                        </button>
                    </div>
                    <form class="user-profile-setting-form" action="/action_page.php">
                        First name:<br>
                        <input class="user-profile-input" type="text" name="firstname" placeholder="Dragon">
                        <br>
                        Last name:<br>
                        <input class="user-profile-input" type="text" name="lastname" placeholder="Blade">
                        <br>
                        Email Address:<br>
                        <input class="user-profile-input" type="text" name="firstname">
                        <br>
                        Change password:<br>
                        <input class="user-profile-input" type="text" name="lastname">

                    </form>

                </div>
                <div class="sub">
                  <div>
                    <span class="btn mb-3 user-profile-button co-red">
                        Delete account
                    </span>
                  </div>
                    <p class="lang">
                        Language
                        <span class="en">
                            en
                        </span>
                    </p>
                </div>
            </section>
            <section class="theme">
                <div>
                    <p>
                        Theme
                    </p>
                    <button class="drop user-profile-button">
                        DragonBlade Slicer Supreme 2000
                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 12L0.0717973 -6.02284e-07L13.9282 -1.81365e-06L7 12Z" fill="#9A9A9A"/>
                        </svg>
                    </button>
                </div>
                <div class="togg">
                    <p>
                        Mode
                    </p>
                    <div class="d-flx no-justify">
                        <div class="">
                        <label class="switch">
                             <input type="checkbox" class="toggleFocus" id="toggleThemeMode">
                             <span class="slider round"></span>
                        </label>
                        </div>
                        <p class="ml-1 themeModeLabel">
                            Light Mode
                        </p>
                    </div>
                </div>
            </section>
            <button  class="capitalize lang user-profile-button">
                Save changes
            </button>
        </div>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="SwitchTheme.js"></script>
</html>

