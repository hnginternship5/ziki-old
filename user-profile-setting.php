<?php
$l="user";
include 'header.php';

if(isset($_SESSION['accesstoken'])){
  try{

  } catch(Exception $e) {
    //echo "Google Auth Error:  ". $e->getMessage();
  }
}

else{
  // header("Location: $site_url");
}
?>

<!-- code BELOW this line -->

<p>Settings Page</p> <!-- delete this -->

<!-- code ABOVE this line -->

<?php include 'footer.php'; ?>
