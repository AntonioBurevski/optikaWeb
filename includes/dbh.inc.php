<?php
//Database Handler (DBH)

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "LoginSystem";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

//If our connection fails
if(!$conn){
    //Kill everything off die();
    die("Connection failed: " . mysqli_connect_error());
}

