<?php
include 'header.php';
include 'conn.php';

$sql = "SELECT * FROM signup";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Feedbacks</title>
    <link rel="stylesheet" href="styles3.css">
 </head>
 <body>
    
<br><br>


<body>
<br>
        <center><h1>All Users</h1></center>
<br>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>firstName</th>
                    <th>lastName</th>
                    <th>age</th>
                    <th>email</th>
                    <th>newPassword</th>
                    <th>confirmPassword</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstName']; ?></td>
                    <td><?php echo $row['lastName']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['newPassword']; ?></td>
                    <td><?php echo $row['confirmPassword']; ?></td>
                    <td>
                        <a href="edit_users.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="delete_users.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


<br><br><br>

</body>
</html>


<?php include'footer.php';
?>