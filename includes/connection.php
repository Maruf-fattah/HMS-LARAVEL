<?php

$server = "mysql"; // <-- put your container/service name here
$user = "root";
$password = ""; // change if needed
$database = "hms_db";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//$server = ""mysql";
//$username = "root";
//$password = "";
//$database = "hms_db";
//$connection = mysqli_connect("$server","$username","$password");
//$select_db = mysqli_select_db($connection, $database);
//if(!$select_db)
{
//	echo("connection terminated");
}
