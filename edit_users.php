<?php
include 'header.php';
include 'conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM signup WHERE id=$id";
    $result = $conn->query($sql);
    $signup = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    $sql = "UPDATE signup SET firstName='$firstName', lastName='$lastName', age='$age', email='$email', newPassword='$newPassword', confirmPassword='$confirmPassword' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: all_users.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>
        <center><h1>Edit Users</h1> </center>


    <div class="container">
        <form action="edit_users.php?id=<?php echo $id; ?>" method="post">
        <label for="firstName">firstName:</label>
            <input type="text" id="firstName" name="firstName" value="<?php echo $signup['firstName']; ?>" required><br>

            <label for="lastName">lastName:</label>
            <input type="text" id="lastName" name="lastName" value="<?php echo $signup['lastName']; ?>" required><br>

            <label for="age">age:</label>
            <input type="text" id="age" name="age" value="<?php echo $signup['age']; ?>" required><br>
            
            <label for="email">email:</label>
            <input type="email" id="email" name="email" value="<?php echo $signup['email']; ?>" required><br>

            <label for="newPassword">newPassword:</label>
            <input type="password" id="newPassword" name="newPassword" value="<?php echo $signup['newPassword']; ?>" required><br>

            <label for="confirmPassword">confirmPassword:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" value="<?php echo $signup['confirmPassword']; ?>" required><br>

            <input type="submit" name="update" value="Update Users">
        </form>
    </div>

</body>
</html>



<?php include'footer.php';
?>