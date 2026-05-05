<?php

$host = "mysql"; // <-- put your container/service name here
$user = "root";
$password = ""; // change if needed
$database = "hms_db";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
