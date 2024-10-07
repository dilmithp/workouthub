<?php
include 'conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM signup WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: all_users.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
