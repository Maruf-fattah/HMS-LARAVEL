<?php
// 1. Precise credentials extracted directly from your Dokploy panel
$host     = 'database-mysql-uioydi';    // Internal Host
$user     = 'maruful.ac.npg@gmail.com';  // User
$password = '@Mmi202601927019010';       // Password
$hms_db   = 'hms-db';                   // Database Name
$port     = 3306;                       // Internal Port

// 2. Establish connection
$conn = mysqli_connect($host, $user, $password, $hms_db, $port);

// 3. Connection Test
if (!$conn) {
    die("Database Connection failed: " . mysqli_connect_error());
}
