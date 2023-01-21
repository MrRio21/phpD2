<?php
//Day 2 
session_start();


$error="";
$name="";
$email="";
$message="";
var_dump($_POST);
// echo strlen($_POST["name"]);
// echo $_POST["name"];
// echo strlen($_POST["message"]);
echo $name;
if (count($_POST)>0){

    $name = isset($_POST["name"])?$_POST["name"]:"";
    $email = isset($_POST["email"])?$_POST["email"]:"";
    $message = isset($_POST["message"])?$_POST["message"]:"";

    if(strlen($name)>100 && $name ){
        $error = "*The name should be less than 100";
    }
    elseif(!filter_var($email , FILTER_VALIDATE_EMAIL)){
        $error="*The email isn't valid";

    }elseif(strlen($message < 255)){
        $error = "*The message should be less than 255";
    }
    else{
        $error="";
        
       $usersData = ["dateOfLog" => date("F j Y g:i a"), "ipAddress" => $_SERVER["SERVER_ADDR"] , "email" => $email  ,"name" => trim($name)];
       $_SESSION["users"]=  $usersData;   
       // die("Thanks For Contacting Us <br/> Name: ".$name."<br/> Email:".$email."<br/> messege :".$message);
        header("Location:contactUs.php?name=$name&email=$email&message=$message");
     
    }

}

?>