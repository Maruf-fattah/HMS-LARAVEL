<?php
// Use the EXACT internal service name shown in your Dokploy database logs
$host     = 'database-mysql-uioydi'; 
$user     = 'maruful.ac.npg@gmail.com';
$password = '@Mmi202601927019010';
$hms_db   = 'hms-db';
$port     = 3306;

// Create connection
$conn = mysqli_connect($host, $user, $password, $hms_db, $port);

// Test if it works
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
