<?php
include '../conn.php';

$sql = "SELECT * FROM shop_payment";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Shop Payments</title>
    <link rel="stylesheet" href="tables.css">
 </head>
 <body>
    
<br><br>


<body>
<br>
        <center><h1>All Shop Payments</h1></center>
<br>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full_Name</th>
                    <th>Email</th>
                    <th>Adress</th>
                    <th>City</th>
                    <th>State</th>
                    <th>zipCode</th>
                    <th>cardName</th>
                    <th>cardNumber</th>
                    <th>expMonth</th>
                    <th>expYear</th>
                    <th>CVV</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fullName']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['adress']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['state']; ?></td>
                    <td><?php echo $row['zipCode']; ?></td>
                    <td><?php echo $row['cardName']; ?></td>
                    <td><?php echo $row['cardNumber']; ?></td>
                    <td><?php echo $row['expMonth']; ?></td>
                    <td><?php echo $row['expYear']; ?></td>
                    <td><?php echo $row['cvv']; ?></td>

                    <td>
                        <a href="../edit_shopPayment.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="../del_shopPayments.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


<br><br><br>
</body>
</html>
