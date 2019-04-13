<?php
//include 'includes/config.php';
//include 'config.php';
//extract($_SESSION);
$l="user";
include 'header.php';
//print_r($_SESSION);
?>

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
                header("Location: $site_url");
            }
        ?>
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
</head>
<body id="setCssClass">
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
        margin-top: -10rem;
    }

    .theme {
        display: inline-block;
        float: right;
        margin-top: -10rem;
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
<body id="setCssClass">
    <main class="motuns-main-container">
    <div class=" blog-item motuns-content-container">
        <div class="d-flx">
	   <a href="/timeline.php">
            <img class="img-fluid logo" src="assets/img/zikilogo.png">
	</a>
            <a href="/logout.php"><button type="button" class="log" data-toggle="modal"
                    data-target="#exampleModalCenter">
                    Log Out
                </button></a>
        </div>
        <div class="body">
            <section class="content">
                <div class="details">
                    <div class="d-grid update">
                    <img src="<?php echo $img ?>" alt="Not Found" onerror=this.src="assets/img/avatar-2.jpeg" class="avatar" />
                    <br/>
                        <button class="upcase user-profile-button">
                            update
                        </button>
                    </div>
                    <form class="user-profile-setting-form" action="#">
                        Full Name*<br>
                        <input class="user-profile-input" type="text" name="firstname" placeholder="Dragon"<?php 
                             echo $name;
                        ?>" disabled>
                        <br>

                        Email Address<br>
                        <input class="user-profile-input" type="text" name="email" placeholder="<?php 
                             echo $email;
                        ?>" disabled>
                        <br>
                        Github<br>
                        <input class="user-profile-input" type="text" name="lastname" placeholder="http://github.com/myusername">
                        <br>
                        Dribble<br>
                        <input class="user-profile-input" type="text" name="lastname" placeholder="http://dribbble.com/myusername">
                    </form>
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
                <button class="co.red fl-r">
                    Delete account
                </button>
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

