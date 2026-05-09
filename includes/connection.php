<?php
$server = "mysql";
$username = "root";
$password = "@Mmi202601927019010";
$database = "hms_db";
$conn = mysqli_connect("mysql", "root", "rootpassword", "hms_db");
//                                                   ^ Added comma here
$select_db = mysqli_select_db($connection, $database);
if(!$select_db)
{
	echo("connection terminated");
}
?>
