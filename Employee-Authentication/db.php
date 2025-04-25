<?php

$conn = mysqli_connect('localhost', 'root', '', 'employee_project');

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Show message only if this file is accessed directly
if (basename(__FILE__) === basename($_SERVER['SCRIPT_FILENAME'])) {
    echo "<script>alert('Database connected successfully!');</script>";
}

?>
