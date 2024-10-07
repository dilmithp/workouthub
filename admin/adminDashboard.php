<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin_dashboard.css">
</head>
<body>
    <center><h1>Welcome to the Admin Dashboard</h1></center>
    <div class="nav">
        <a href="users.php">Manage Users</a>
        <a href="view_messages.php">View Messages</a>
        <a href="view_feedback.php">View Feedbacks</a>
        <a href="manage_gym_packages.php">Manage Gym Packages</a>
        <a href="manage_shop_payments.php">Manage Shop Payments</a>
    </div>
</body>
</html>

