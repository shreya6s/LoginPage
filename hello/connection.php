<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "shreya123";

$connec = mysqli_connect($servername,$username,$password,$dbname);

if($connec)
{
   //echo "connection OK";
}
else
{
    echo "connection FAILED" .mysqli_connect_error();
}
?>