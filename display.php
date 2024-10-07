<?php
include 'connect.php';

$sql = "SELECT *FROM signup";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Workout Hub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <h2>users</h2>
    <button class="btn btn-primary my-5"><a href="signup.php" class="text-light">Add user</a></button>
    <table class="table">
        <head>
            <tr>
                <th >First name</th>
                <th >Last name</th>
                <th >Age</th>
                <th >Email</th>
                <th >New password</th>
                <th >Confirm password</th>
                <th>Action<th>
            </tr>
        </head>
        <tbody>

        <?php

        if ($result->num_rows>0) {
            while ($row = $result->fetch_assoc()) {
              
                ?>
                
                    <tr>
                        <td><?php echo $row['firstName']; ?></td>
                        <td><?php echo $row['lastName']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['newPassword']; ?></td>
                        <td><?php echo $row['confirmPassword']; ?></td>
                        <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id'];?>">
                            Edit</a>&nbsp;<a class="btn btn_danger" href="delete.php?id=<?php echo $row['id']; ?>">
                                delete</a></td>
            </tr>
                        
                
            

        </tbody>
    </table>
</div>
</body>
</html>
