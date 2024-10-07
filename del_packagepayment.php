<?php
include 'conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM gympackage WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: all_packagepayments.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
