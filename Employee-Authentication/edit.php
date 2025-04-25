<?php 
include 'db.php';
include 'nav.php';

if (!isset($_GET['id'])) {
    die("No ID provided.");
}

$id = $_GET['id'];
  
$result = $conn->query("SELECT * FROM employees WHERE id = $id");
$employee = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
   
    $conn->query("UPDATE employees SET name='$name', mobile='$mobile' WHERE id = $id");
    header("Location: index.php");
    exit;
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
        <h2>Edit Employee</h2>
       
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?= $employee['name']; ?>" required><br>

        <label for="mobile">Mobile:</label>
        <input type="tel" name="mobile" value="<?= $employee['mobile']; ?>" required><br>

        <input type="submit" value="Update" class="submit-btn">
      </form>
    </div>
  </div>
</body>
</html>
