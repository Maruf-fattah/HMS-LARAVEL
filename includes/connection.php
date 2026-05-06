<?php
// Replace 'mysql_service_name' with the Internal Host from Dokploy
$host = 'mysql'; 
$user = 'root';
$pass = '@Mmi202601927019010'; // Ensure this matches your Dokploy DB settings
$dbname = 'hms_db';

$con = mysqli_connect($host, $user, $pass, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
