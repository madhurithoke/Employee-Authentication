<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM employees WHERE id=$id");
echo "<script>alert('Employee deleted successfully'); window.location.href='index.php';</script>";
?>
