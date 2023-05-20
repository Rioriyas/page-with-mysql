<?php
session_start();
include("database.php");
if($_SERVER["REQUEST_METHOD"] == 'POST'){

    $email = $_POST['Email'];
    $passward = $_POST['Password'];

    $query = "SELECT * FROM registration WHERE  
    email = '$email' limit 1";

        $result = mysqli_query($conn,$query);

        echo"Line Ok";

        if($result){
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data = mysqli_fetch_assoc($result);
                echo"success";

                if($user_data['Password'] ==$password)
                {
                    header("location:loginpage.php");
                    echo"Login Successfull";
                }
                else{
                    echo"Wrong Email or Password";
                }
            }
            
        }
        else{
            echo"Wrong Email or Password";
        }
  

}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>

<body>
    <form action="admin.php" method="post">
        <center>
            <h1>Admin Page</h1>
            User Email :<input type="text" name="Email"><br>
            Password:<input type="password" name="Password"><br>

            <input type="submit" value="Login"><br>
            <a href="index.php">You Havn't ID?. Pls Register! </a>
    </form>
    </center>
</body>
</html>