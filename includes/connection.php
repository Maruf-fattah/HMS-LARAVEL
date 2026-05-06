<?php
$host = "mysql"; // or "mysql" if Docker
$user = "root";
$password = "";
$database = "hms_db";

$conn = mysqli_connect("mysql", "root", "password", "hms_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
