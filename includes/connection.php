<?php
$server = "mysql";
$username = "root";
$password = "@Mmi202601927019010";
$database = "hms_db";
$conn = mysqli_connect("mysql", "root", "@Mmi202601927019010");
$select_db = mysqli_select_db($connection, $database);
if(!$select_db)
{
	echo("connection terminated");
}
?>
