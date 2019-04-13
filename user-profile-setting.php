<?php
//include 'includes/config.php';
include 'config.php';
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

    <main class="motuns-main-container">
    <div class=" blog-item motuns-content-container">
        <div class="d-flx">
	   <a href="/timeline.php">
            <img class="img-fluid logo" src="assets/img/zikilogo.png">
	</a>
            <a href="/logout.php"><button type="button" class="log" data-toggle="modal" data-target="#exampleModalCenter">
             Log Out
            </button></a>
        </div>
        <div class="body">
            <section class="content">
                <div class="details">
                    <div class="d-grid update">
                    <img src="<?php if (isset($img) && $img !==''){echo $img ;
                    }else {
                      echo "assets/img/noavatar92.png";
                    }?>" alt="Not Found" onerror=this.src="assets/img/noavatar92.png" class="avatar" />
                    <br/>
                        <button class="upcase user-profile-button">
                            update
                        </button>
                    </div>
                    <form class="user-profile-setting-form" action="#">
                        First Name*<br>
                        <input class="user-profile-input" type="text" name="firstname" placeholder="Dragon"<?php
                             echo $name;
                        ?>">
                        <br>

                        Last Name*<br>
                        <input class="user-profile-input" type="text" name="lastname" placeholder="Blade"<?php

                        ?>">
                        <br>

                        Email Address*<br>
                        <input class="user-profile-input" type="text" name="email" placeholder="<?php
                             echo $email;
                        ?>">
                        <br>
                        Change password*<br>
                        <input class="user-profile-input" type="text" name="lastname">
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
