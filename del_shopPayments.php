<?php
include 'conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM shop_payment WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: all_shopPayments.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
