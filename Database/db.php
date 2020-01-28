<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$db = "ecommerce";

// Create connection
$con = mysqli_connect($serverName, $userName, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>