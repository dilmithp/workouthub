<?php
include '../conn.php';

$sql = "SELECT * FROM gympackage";
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
        <center><h1>All Package Payments</h1></center>
<br>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Package Type</th>
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
                    <td><?php echo $row['package_type']; ?></td>
                    <td><?php echo $row['full_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['state']; ?></td>
                    <td><?php echo $row['zip_code']; ?></td>
                    <td><?php echo $row['card_name']; ?></td>
                    <td><?php echo $row['card_number']; ?></td>
                    <td><?php echo $row['exp_month']; ?></td>
                    <td><?php echo $row['exp_year']; ?></td>
                    <td><?php echo $row['cvv']; ?></td>

                    <td>
                        <a href="../edit_packagepayment.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="../del_packagepayment.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


<br><br><br>
</body>
</html>
