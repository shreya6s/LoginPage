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
    <script src="zu.js"></script>
    <title>youareintheclouds</title>
</head>
<body>

<?php

$username=$password="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $username=test_input($_POST['username']);
    $password=test_input($_POST['password']);
}

function test_input($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>

    <div class="wrapper">
        <form method="post" action=" <?php echo htmlspecialchars($SERVER["PHP_SELF}"]); ?>">
            <h1 id="title">Login</h1>
            <div class="input-box">
                <input id="user" type="text", placeholder="Username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input id="pass" type="password", placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input id="remember" type="checkbox"> Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn" id="btn1" >Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </form>

        <?php 

    if($username!="" && $password!="")
    {
    $query="SELECT * from login WHERE username = '$username' AND password='$password'";
    $data=mysqli_query($connec,$query);
    $count=mysqli_num_rows($data);
    if($count>0)
    { 
        header("Location: home.php");
    }
    else
    {
      echo'<div class="ohno" >
      <p style="font-size: 12px;
      color: white;
      display: block;
      position: relative;
      text-align: center;">Oh Noo! invalid username/password</p>
      </div>';
    }
  }
    ?>
      
    </div>

    
</body>
</html>

