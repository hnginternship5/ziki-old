<?php
$title = "Timeline";
include 'header.php';

if (!isset($_SESSION['name'])) {
  // header("Location: {$site_url}");
}
?>

<!-- code BELOW this line -->

<p>Post-login Timeline Page</p> <!-- delete this -->

<!-- code ABOVE this line -->

<?php include 'footer.php'; ?>
