<?php
include '../conn.php';

$sql = "SELECT * FROM signup";
$result = $conn->query($sql);

if (!$result) {
    die('Query Failed: ' . $conn->error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <link rel="stylesheet" href="tables.css">
</head>
<body>
    <center><h1>All Users</h1></center>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['firstName']); ?></td>
                    <td><?php echo htmlspecialchars($row['lastName']); ?></td>
                    <td><?php echo htmlspecialchars($row['age']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td>
                        <a href="../edit_users.php?id=<?php echo urlencode($row['id']); ?>">Edit</a>
                        <a href="../delete_users.php?id=<?php echo urlencode($row['id']); ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

