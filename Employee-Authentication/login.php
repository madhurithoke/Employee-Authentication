<?php
include 'db.php';
include 'nav.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM employees WHERE mobile = '$mobile' AND status = 'on'");
    
    if ($result && $result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['employee_id'] = $user['id'];
            echo "<script>alert('Login successful!'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Invalid password.');</script>";
        }
    } else {
        echo "<script>alert('Invalid mobile or account is off.');</script>";
    }
}
?>


<html>
<head>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>
<body>
<div class="main-container">
<div class="form-wrapper">
  <form action="login.php" method="post" class="form-box">
    <h2>Login</h2>
    <input type="text" name="mobile" placeholder="Enter mobile number" required>
    <input type="password" name="password" placeholder="Enter password" required>
    <a href="#">Forgot password?</a>
    <input type="submit" class="submit-btn" value="Login">
    <div class="signup-text">Not a member? <a href="add.php">Signup now</a></div>
  </form>
</div>
</div>
</body>
</html>
