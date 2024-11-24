<?php
    include 'db.php';

    $sql = "SELECT * FROM employees";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Employees</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="text-center">
        <h1>Employees</h1>
        <a href="add_employee.php">Add Employee</a>
        </div>
        <div>
            <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows>0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['position']; ?></td>
                            <td><?php echo $row['created_at']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">No employees found.</td>
                        </tr>
                <?php endif; ?>
            </tbody>
            </table>
        </div>
        
    </body>
</html>
