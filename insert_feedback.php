<?php
include 'conn.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    $sql = "INSERT INTO feedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";
    if ($conn->query($sql) === TRUE) {
        // Redirect to feedback success page
        header('Location: feedback_success.php');
        exit(); // Stop further execution
    } else {
        $message = "Error: " . $conn->error;
    }
}
?>
