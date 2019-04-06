<?php
require './auth/facebookinit.php';
require './auth/googleinit.php';

if(isset($_SESSION['access_token'])){
    ?>
    </br>
    <a href="logout.php">Logout</a>
    <?php
}
else if(isset($_SESSION['accesstoken'])){
    ?>
    </br>
    <a href="logout.php">Logout</a>
    <?php
}
else{
?>
<a href="<?php echo $login_url;?>">Login with facebook</a>
<br>
<br>
<a href="<?php echo $glogin_url;?>">Login with Google</a>
<?php
}
?>

