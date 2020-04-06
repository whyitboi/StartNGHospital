<?php


print_r($_POST);
//collecting the data
$first_name =$_POST["first_name"];
$last_name =$_POST["last_name"];
$email =$_POST["email"];
$password =$_POST["password"];
$designation =$_POST["designation"];
$department =$_POST["department"];

$errorArray =[];

//Validating the data
if($first_name == ""){
    $errorArray = "First name cannot be blank";
}
 if($last_name == ""){
    $errorArray = "Last name cannot be blank";
}

print_r($errorArray);


//Saving data to file

//Return back to home with staus message

?>