<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>youareintheclouds</title>
</head>
<body>

<div class="wrapper">
        <form action="">
            <h1 id="title">Register</h1>
            <div class="input-box">
                <input id="fname" type="text", placeholder="First Name" name="firstname" required>
                <i class='bx bxs-cat'></i>
            </div>
            <div class="input-box">
                <input id="lname" type="text", placeholder="Last Name" name="lastname" required>
                <i class='bx bxs-dog' ></i>
            </div>
            <div class="input-box">
                <input id="user" type="text", placeholder="UserName" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input id="pass" type="password", placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            
            <div class="register-link">
            <p>Have an account?<a href="login.php">Login</a></p>
            </div>
           
            <button type="submit" class="btn" id="btn1" name="register">Register</button>
        </form>
    </div>
    
    
</body>
</html>

<?php

$fname=$_GET['firstname'];
$lname=$_GET['lastname'];
$uname=$_GET['username'];
$pass=$_GET['password'];

if ($fname !="" && $lname !="" && $uname !="" && $pass !="" )
{
$query="INSERT INTO LOGIN VALUES ('$fname','$lname','$uname','$pass')";
$data=mysqli_query($connec,$query);

if ($data)
{
    header("Location: home.php");
}
else
{
 echo 'invalid';
}
}
?>