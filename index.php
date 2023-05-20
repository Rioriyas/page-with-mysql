<?php

session_start();
include("database.php");

if($_SERVER['REQUEST_METHOD']=="POST"){

    $Fname = $_POST['Firstname'];
    $Lname = $_POST['Lastname'];
    $email = $_POST['Email'];
    $passward = $_POST['Password'];
    $mobile = $_POST['Mobile'];

    $sql = "INSERT INTO registration(firstname,lastname,email,password,mobile) VALUES ('$Fname','$Lname','$email','$passward','$mobile')"; 

    try{
        
    
        mysqli_query ($conn,$sql);
        echo"Registration Completed";
    }
    catch(mysqli_sql_exception){
        echo"Registration not Complete";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="post">
    <center><h1>Registration Form</h1> <br>
    Firstname :<input type = "text" name = "Firstname"><br>
    Lastname :<input type = "text" name = "Lastname"><br>
    Email :<input type = "text" name = "Email"><br>
    Password :<input type = "password" name = "Password"><br>
    Mobile  :<input type = "text" name = "Mobile"><br>
    <input type="submit" value="Register"><br>

    <a href="admin.php">Already a User?. Pls Login </a>

    <h2>Copy Right 2023 - Riyas</h2>

    </center>
    </form>
</body>
</html>