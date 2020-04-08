<?php
include_once("lib/header.php");
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
}
?>

<h3>Dashboard</h3>
Welcome, <?php print $_SESSION['fullname']; ?>, You are logged in as <?php print $_SESSION['role']; ?> 
 with user ID, <?php print $_SESSION['loggedin']; ?>
<?php include_once("lib/menu.php");
include_once("lib/footer.php"); ?>