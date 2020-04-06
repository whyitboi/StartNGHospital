<?php


print_r($_POST);
//collecting & validating data
$errorCount = 0;
$first_name =$_POST["first_name"] != "" ? $_POST["first_name"] : $errorCount++;
$last_name =$_POST["last_name"] != "" ? $_POST["last_name"] : $errorCount++;
$email =$_POST["email"] != "" ? $_POST["email"] : $errorCount++;
$password =$_POST["password"] != "" ? $_POST["password"] : $errorCount++;
$designation =$_POST["designation"] != "" ? $_POST["designation"] : $errorCount++;
$department =$_POST["department"] != "" ? $_POST["department"] : $errorCount++;

if($errorCount > 0){
    //errormessage

}
else{
    //continue to program

}

$errorArray =[];

print_r($errorArray);


//Saving data to file

//Return back to home with staus message

?>