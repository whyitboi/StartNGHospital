
<p>
    <?php
    if (!isset($_SESSION['loggedin'])) {
    ?>
        <a href="index.php">Home</a> |
        <a href="login.php">Login</a> |
        <a href="register.php">Register</a> |
        <a href="forgot.php">Forgot Password</a> |

    <?php } else { ?>

        <a href="logout.php">Logout</a> |
        <a href="forgot.php">Change Password</a> |
    <?php } ?>
    

</p>