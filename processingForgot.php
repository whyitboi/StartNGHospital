<?php
session_start();
$errorCount = 0;
$email =$_POST["email"] != "" ? $_POST["email"] : $errorCount++;
$_SESSION["email"] = $email;

if($errorCount > 0){
    //errormessage
    $_SESSION['error'] = "You have ".$errorCount." error(s) in your form";
    header("Location: forgot.php");
} else{
    $allusers = scandir("db/users/staff/");
    $countAllUsers = count($allusers);

    for($counter = 0; $counter < $countAllUsers; $counter++){
         $currentUser = $allusers[$counter];

         //send reset link to user
         if($currentUser == $email.".json"){
            $to = $email;
            $subject = "Password Reset Link";
            $txt = "A password reset has been initiated on your account, If you did not 
            request this reset, please ignore this message, otherwise visit http://localhost/startngPHP/reset.php";
            $headers = "From: no-reply@snh.org" . "\r\n" .
            "CC: whyitboi@snh.org";
            
           $passwordReset = mail($to,$subject,$txt,$headers);
           if($passwordReset){
            $_SESSION['message'] = "The password reset link has been sent to your email ".$email;
            header("Location: login.php"); 
           }else{
            $_SESSION['error'] = "Something went wrong";
            header("Location: login.php"); 
           }
            die();
        }

    }
       //errormessage if email doesn't exist
       $_SESSION['error'] = "The email " .$email. ", is not associated with any account";
        header("Location: forgot.php"); 
 }

?>
