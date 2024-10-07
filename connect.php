<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$age = $_POST['age'];
$email = $_POST['email'];
$newPassword = $_POST['newPassword'];
$confirmPassword = $_POST['confirmPassword'];

$conn = new mysqli('localhost', 'root', '', 'user');

if($conn->connect_error){
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO signup (firstName, lastName, age, email, newPassword, confirmPassword) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $firstName, $lastName, $age, $email, $newPassword, $confirmPassword);
    $stmt->execute();

    $stmt->close();
    $conn->close();
    header("Location: sign.php"); // Corrected to 'location'
    exit();
}
?>
