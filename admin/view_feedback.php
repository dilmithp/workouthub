<?php
include '../conn.php';

$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Feedbacks</title>
    <link rel="stylesheet" href="tables.css">
 </head>
 <body>
    
<br><br>


<body>
<br>
        <center><h1>All Feedbacks</h1></center>
<br>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Feedback</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['feedback']; ?></td>
                    <td>
                        <a href="../edit_feedback.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="../delete_feedback.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


<br><br><br>
    

?>
</body>
</html>
