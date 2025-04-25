<?php 
include 'db.php';
include 'nav.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $status = $_POST['status'];

    if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        die("Invalid name.");
    }
    if (!preg_match("/^[0-9]{10}$/", $mobile)) {
        die("Mobile must be 10 digits.");
    }
    if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/", $password)) {
        die("Password must have 8+ chars, a number, a letter, a symbol.");
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if ($conn->query("INSERT INTO employees (name, mobile, password, status) VALUES ('$name', '$mobile', '$hashedPassword', '$status')")) {
        echo "<script>alert('Employee added successfully!'); window.location.href='add.php';</script>";
    } else {
        echo "Error: " . $conn->error;
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
  <form method="post" class="form-box">
    <h2>Add Employee</h2>
    <input type="text" name="name" placeholder="Enter full name" required>
    <input type="tel" name="mobile" placeholder="Enter mobile number" required>
    <input type="password" name="password" placeholder="Create a password" required>
    <select name="status" required>
      <option value="on" selected>On</option>
      <option value="off">Off</option>
    </select>
    <input type="submit" class="submit-btn" value="ADD">
  </form>
</div>
<div>
<body>
<html>   


