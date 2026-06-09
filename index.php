<?php
ob_start();
session_start();
require_once __DIR__ . '/includes/connection.php';
?>

<!DOCTYPE html>
<html>
<html lang="en">
<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>HMS</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

//if (isset($_REQUEST['login'])) {
   // $username = mysqli_real_escape_string($connection, $_REQUEST['username']);
    //$pwd = mysqli_real_escape_string($connection, $_REQUEST['pwd']);
    
    //$fetch_query = mysqli_query($connection, "SELECT * FROM tbl_employee WHERE username = '$username' AND password = '$pwd'");
    
    //if ($fetch_query) {
        //$res = mysqli_num_rows($fetch_query);
        
       // if ($res > 0) {
          //  $data = mysqli_fetch_array($fetch_query);
           // $name = $data['first_name'] . ' ' . $data['last_name'];
          //  $role = $data['role'];
           // $_SESSION['name'] = $name;
            //$_SESSION['role'] = $role;
            
     //       header('Location: dashboard.php');
           // exit();
   //     } else {
   //         $msg = "Incorrect login details.";
      //  }
 //   } else {
  //      $msg = "Database query failed: " . mysqli_error($connection);
  //  }
//}
//$host     = 'database-mysql-uioydi';    // Internal Host
//$user     = 'maruful.ac.npg@gmail.com';  // User
//$password = '@Mmi202601927019010';       // Password
//$hms_db   = 'hms-db';                   // Database Name
//$port     = 3306; 
	<?php
// 1. Start the session safely
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 2. Active Database Configuration (NO '//' SLASHES)
$host     = 'database-mysql-uioydi';    // Internal Host
$user     = 'maruful.ac.npg@gmail.com';  // Database Username
$password = '@Mmi202601927019010';       // Database Password
$hms_db   = 'hms_db';                   // Correct Database Name (with dash)
$port     = 3306;                       // Port

// 3. Establish connection using your explicit variables
$connection = mysqli_connect($host, $user, $password, $hms_db, $port);

// 4. Verify connection works
if (!$connection) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// 5. Handle Login Logic
if (isset($_REQUEST['login'])) {
    $username = mysqli_real_escape_string($connection, $_REQUEST['username']);
    $pwd = mysqli_real_escape_string($connection, $_REQUEST['pwd']);
    
    $fetch_query = mysqli_query($connection, "SELECT * FROM tbl_employee WHERE username = '$username' AND password = '$pwd'");
    
    if ($fetch_query) {
        $res = mysqli_num_rows($fetch_query);
        
        if ($res > 0) {
            $data = mysqli_fetch_array($fetch_query);
            $name = $data['first_name'] . ' ' . $data['last_name'];
            $role = $data['role'];
            $_SESSION['name'] = $name;
            $_SESSION['role'] = $role;
            
            header('Location: dashboard.php');
            exit();
        } else {
            $msg = "Incorrect login details.";
        }
    } else {
        $msg = "Database query failed: " . mysqli_error($connection);
    }
}
?>
	<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form method="post" class="form-signin">
						<div class="account-logo">
                            <a href="index.html"><img src="assets/img/logo-dark.png" alt=""></a>
                                   </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" autofocus="" class="form-control" name="username" required>
</div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="pwd" required>
                        </div>
                        <span style="color:red;"><?php if(!empty($msg)){ echo $msg; } ?></span>
                        <br>
                             <div class="form-group text-center">
                            <button type="submit" name="login" class="btn btn-primary account-btn">Login</button>
                        </div>
                        
                    </form>
                </div>
			</div>
 </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- login23:12-->
</html>
