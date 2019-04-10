<?php
include 'header.php';

//print_r($_SESSION);
?>
<?php if (!isset($_SESSION['name'])) { ?>


    <div class="container-fluid">
        <div class="row justify-content-between m-4">
            <img class="img-fluid logo" src="assets/img/zikilogo.png">
            <a href="/auth.php" class="btn btn-primary align-self-end px-5">Login</a>
        </div>
    <?php  } else { }
?>

    <div class="container justify-content-center">
        <div class="col-xs-5">

            <!-- <div class=""> -->
            <div class="post-section"></div>
            <!-- </div> -->
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>
=======
<?php require_once('footer.php'); ?>
