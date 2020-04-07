<?php include_once("lib/header.php")?>
    Login
<?php include_once("lib/menu.php");


     if (isset($_SESSION['message']) && !empty($_SESSION['message'])) {
          print "<span style='color:red'>" . $_SESSION['message'] . "</span>";
           session_unset();
          session_destroy(); 
     }

     include_once("lib/footer.php");

?>