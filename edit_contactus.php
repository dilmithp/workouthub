<?php
include 'header.php';
include 'conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM contactus WHERE id=$id";
    $result = $conn->query($sql);
    $contactus = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "UPDATE contactus SET name='$name', surname='$surname', email='$email', message='$message' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: all_contactus.php");
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

<br><br><br><br>

        <center><h1>Edit Contactus</h1> </center>


    <div class="container">
        <form action="edit_contactus.php?id=<?php echo $id; ?>" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $contactus['name']; ?>" required><br>

            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname" value="<?php echo $contactus['surname']; ?>" required><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo $contactus['email']; ?>" required><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required><?php echo $contactus['message']; ?></textarea><br>


            <input type="submit" name="update" value="Update Contactus">
        </form>
    </div>

</body>
</html>

<?php include'footer.php';
?>