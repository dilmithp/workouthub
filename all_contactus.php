<?php
include 'header.php';
include 'conn.php';

$sql = "SELECT * FROM contactus";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Messeges</title>
    <link rel="stylesheet" href="styles3.css">
 </head>
 <body>
    
<br><br>


<body>
<br>
        <center><h1>All Messages</h1></center>
<br>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>SurName</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['surname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                    <td>
                        <a href="edit_contactus.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="delete_contactus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
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