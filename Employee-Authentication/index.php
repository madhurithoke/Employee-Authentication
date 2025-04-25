<?php
 include 'db.php';
 include 'nav.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    
    <!-- Bootstrap CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background-color: #009579;
      }
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Center the title -->
        <h2 class="text-center">Employee List</h2>
        
        <!-- Table for employee data -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM employees");
                while ($row = $result->fetch_assoc()):
                ?>
                  <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['mobile']; ?></td>
                    <td><?= $row['status']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-primary" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <!-- Add Employee hyperlink centered below the table -->
        <div class="text-center">
            <a href="add.php">Add New Employee</a>
        </div>
    </div>

    <!-- Bootstrap
