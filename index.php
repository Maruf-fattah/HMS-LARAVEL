<?php 
ob_start(); 
session_start(); 
require_once __DIR__ . '/includes/connection.php'; 

$msg = "";

if (isset($_POST['login'])) {
    // 1. Grab credentials safely from POST
    $username = trim($_POST['username']); 
    $pwd = trim($_POST['pwd']); 

    // 2. Use a Prepared Statement to find the employee by username
    $stmt = mysqli_prepare($connection, "SELECT * FROM tbl_employee WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_array($result);
        
        // 3. Verify password (Assuming you migrate to password_hash() in your signup/DB)
        // If your database still uses plain text temporarily, change this line to: if ($pwd === $data['password'])
        if (password_verify($pwd, $data['password'])) { 
            $_SESSION['name'] = $data['first_name'] . ' ' . $data['last_name'];
            $_SESSION['role'] = $data['role'];
            
            header('Location: dashboard.php');
            exit();
        } else {
            $msg = "Incorrect login details.";
        }
    } else {
        $msg = "Incorrect login details.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>HMS - Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form method="post" class="form-signin" action="">
                        <div class="account-logo">
                            <a href="index-2.html"><img src="assets/img/logo-dark.png" alt="Logo"></a>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" autofocus class="form-control" name="username" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="pwd" required>
                        </div>
                        
                        <?php if (!empty($msg)): ?>
                            <span style="color:red; display:block; margin-bottom:10px;"><?php echo htmlspecialchars($msg); ?></span>
                        <?php endif; ?>

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
</html>
