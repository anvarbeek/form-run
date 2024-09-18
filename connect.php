<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
}else{
    echo "Connected successfully";
}?>