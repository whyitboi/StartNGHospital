<?php include_once("lib/header.php")?>
    <h3>Forgot</h3>
    Provide the email associated with your account

    <form method="POST" action="processingForgot">
    <p>
          <?php
          if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
               print "<span style='color:red'>" . $_SESSION['error'] . "</span>";
               //session_unset();
               session_destroy(); 
          }
          ?>
     </p>
    <p>
          <input type="text" name="email" placeholder="Email"  />
     </p>
     <p>
         <button type="submit">Reset Password</button>
     </p>
    </form>
    <?php include_once("lib/menu.php");
     include_once("lib/footer.php");

?>