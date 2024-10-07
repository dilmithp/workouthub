<?php
include 'header.php';
include 'conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM feedback WHERE id=$id";
    $result = $conn->query($sql);
    $feedback = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback_text = $_POST['feedback'];

    $sql = "UPDATE feedback SET name='$name', email='$email', feedback='$feedback_text' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: all_feedbacks.php");
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

        <center><h1>Edit Feedback</h1> </center>


    <div class="container">
        <form action="edit_feedback.php?id=<?php echo $id; ?>" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $feedback['name']; ?>" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $feedback['email']; ?>" required><br>

            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" required><?php echo $feedback['feedback']; ?></textarea><br>

            <input type="submit" name="update" value="Update Feedback">
        </form>
    </div>

</body>
</html>

<?php include'footer.php';
?>