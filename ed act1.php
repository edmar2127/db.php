<?php

$hostName = "localhost";
$dbUser ="root";
$dbpassword ="";
$dbName ="humanity"
$conn = mysqli_connect($hostName, $dbUser, $dbpassword, $dbName);
if(!$conn){
    die("something wentwrong;");
}
    echo"connected successfully";
    ?>