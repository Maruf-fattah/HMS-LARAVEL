<?php
// Use the "Internal Host" name you found in Dokploy here:
$host = 'mysql'; // If Dokploy says "mysql-123", use "mysql-123"
$user = 'root';
$pass = '@Mmi202601927019010'; 
$dbname = 'hms_db';

$con = mysqli_connect($host, $user, $pass, $dbname);

if (!$con) {
    // This will tell you if the name is still wrong or if the password is wrong
    die("Connection failed: " . mysqli_connect_error());
}
?>
