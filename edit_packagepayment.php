<?php
include 'header.php';
include 'conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM gympackage WHERE id=$id";
    $result = $conn->query($sql);
    $gympackage = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $package_type = $_POST['package_type'];
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

    $sql = "UPDATE gympackage SET package_type='$package_type', full_name='$full_name', email='$email', address='$address', city='$city', state='$state', zip_code='$zip_code', card_name='$card_name', card_number='$card_number', exp_month='$exp_month', exp_year='$exp_year', cvv='$cvv' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location:admin/manage_shop_payments.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>












<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="edit.css">
</head>
 <body>

<br><br><br><br>

        <center><h1>Edit Package Payments</h1> </center>


    <div class="container">
        <form action="edit_packagepayment.php?id=<?php echo $id; ?>" method="post">

            <label for="package_type">package_type:</label>
            <input type="text" id="package_type" name="package_type" value="<?php echo $gympackage['package_type']; ?>" required><br>

            <label for="full_name">full_name:</label>
            <input type="text" id="full_name" name="full_name" value="<?php echo $gympackage['full_name']; ?>" required><br>

            <label for="email">email:</label>
            <input type="email" id="email" name="email" value="<?php echo $gympackage['email']; ?>" required><br>

            <label for="address">address:</label>
            <input type="text" id="address" name="address" value="<?php echo $gympackage['address']; ?>" required><br>
            
            <label for="city">city:</label>
            <input type="text" id="city" name="city" value="<?php echo $gympackage['city']; ?>" required><br>

            <label for="state">state:</label>
            <input type="text" id="state" name="state" value="<?php echo $gympackage['state']; ?>" required><br>

            <label for="zip_code">zipCode:</label>
            <input type="number" id="zip_code" name="zip_code" value="<?php echo $gympackage['zip_code']; ?>" required><br>

            <label for="card_name">cardName:</label>
            <input type="text" id="card_name" name="card_name" value="<?php echo $gympackage['card_name']; ?>" required><br>

            <label for="card_number">cardNumber:</label>
            <input type="number" id="card_number" name="card_number" value="<?php echo $gympackage['card_number']; ?>" required><br>

            <label for="exp_month">expMonth:</label>
            <input type="number" id="exp_month" name="exp_month" value="<?php echo $gympackage['exp_month']; ?>" required><br>

            <label for="exp_year">expYear:</label>
            <input type="number" id="exp_year" name="exp_year" value="<?php echo $gympackage['exp_year']; ?>" required><br>

            <label for="cvv">cvv:</label>
            <input type="number" id="cvv" name="cvv" value="<?php echo $gympackage['cvv']; ?>" required><br>

            <input type="submit" name="update" value="Update Users">

        </form>
    </div>

</body>
</html>

<?php include'footer.php';
?>