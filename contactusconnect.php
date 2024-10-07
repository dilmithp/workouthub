<?php
// Retrieve form data
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create a connection to the MySQL database
$conn = new mysqli('localhost', 'root', '', 'user');

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    // Prepare the SQL query (removed the extra comma after 'message')
    $stmt = $conn->prepare("INSERT INTO contactus (name, surname, email, message) VALUES (?, ?, ?, ?)");

    // Bind the parameters to the prepared statement
    $stmt->bind_param("ssss", $name, $surname, $email, $message);

    // Execute the statement
    if ($stmt->execute()) {
       header("location: contactus_success.php");
    } else {
        echo "Error: " . $stmt->error;
    }
   
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
