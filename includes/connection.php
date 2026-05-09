<?php
$host = "mysql";      // This must match your docker-compose service name
$user = "root";       // Your DB username
$pass = "root";       // Your DB password (from docker-compose)
$db   = "hms_db";     // Your DB name

$conn = mysqli_connect($host, $user, $root, $hms_db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
