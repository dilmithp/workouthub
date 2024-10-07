<?php
// Database connection
$servername = "localhost"; // Change to your database server if different
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "user"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Capture the form data
    $package_type = $_POST['package'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $card_name = $_POST['card_name'];
    $card_number = $_POST['card_number'];
    $exp_month = $_POST['exp_month'];
    $exp_year = $_POST['exp_year'];
    $cvv = $_POST['cvv'];

    // Insert data into the database
    $sql = "INSERT INTO gympackage ( package_type,full_name, email, address, city, state, zip_code, card_name, card_number, exp_month, exp_year, cvv) 
            VALUES ('$package_type',  '$full_name', '$email', '$address', '$city', '$state', '$zip_code', '$card_name', '$card_number', '$exp_month', '$exp_year', '$cvv')";

    if ($conn->query($sql) === TRUE) {
header("location:package_success.php"); 
   
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
