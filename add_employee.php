<?php
    include("db.php");

    if($_SERVER['REQUEST_METHOD']==="POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $position = $_POST["position"];

        $sql = "INSERT INTO employees (name, email, position) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name,$email, $position);

        if($stmt->execute()){
            echo "Employee added successfully";
        }
        else{
            echo "Insert failed";
        }

        $stmt->close();
        $conn->close();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add Employee</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <script src="" async defer></script>
        <h1>Add Employee</h1>
        <form action="add_employee.php" method="post">
            <label>Name:</label>
            <input type="text" name="name" required><br><br>
            <label>Email:</label>
            <input type="email" name="email" required><br><br>
            <label>Position:</label>
            <input type="text" name="position" required><br><br>
            <button type="submit">Add Employee</button>
        </form>
    </body>
</html>