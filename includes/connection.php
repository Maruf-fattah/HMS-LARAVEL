<?php
// 1. Explicitly define the credentials found in your Dokploy panel
$host     = 'database-mysql-uioydi';
$user     = 'maruful.ac.npg@gmail.com';
$password = '@Mmi202601927019010';
$hms_db   = 'hms-db';
$port     = 3306;

// 2. Establish the connection
$conn = mysqli_connect($host, $user, $password, $hms_db, $port);

// 3. Error handling to make sure it works
if (!$conn) {
    die("Database Connection failed: " . mysqli_connect_error());
}
