<?php
// include_once("index.php");
print_r($_GET);
// echo $_GET["name"];
// session_start();
// $usersData = ["name" => trim($_GET["name"]) , "email" => $email , "ipAddress" => $_SERVER["SERVER_ADDR"] , "dateOfLog" => date("F j, Y, g:i a") ];
// print_r($_SESSION["users"]);
header("Location:logConfig.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
</head>
<body>
    <h1>Thanks For Contacting Us</h1>
    <strong>Name:</strong> <?php echo $_GET["name"] ;?>
    <br>
    <strong>Email:</strong> <?php echo $_GET["email"];?>
    <br>
    <strong>Message:</strong> <?php echo $_GET["message"];?>

    
</body>
</html>