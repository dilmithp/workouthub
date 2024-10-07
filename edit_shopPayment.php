<?php
include 'header.php';
include 'conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM shop_payment WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $shop_payment = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $address = $_POST['adress'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipCode = $_POST['zipCode'];
    $cardName = $_POST['cardName'];
    $cardNumber = $_POST['cardNumber'];
    $expMonth = $_POST['expMonth'];
    $expYear = $_POST['expYear'];
    $cvv = $_POST['cvv'];

    $stmt = $conn->prepare("UPDATE shop_payment SET fullName=?, email=?, adress=?, city=?, state=?, zipCode=?, cardName=?, cardNumber=?, expMonth=?, expYear=?, cvv=? WHERE id=?");
    $stmt->bind_param("sssssssisisi", $fullName, $email, $address, $city, $state, $zipCode, $cardName, $cardNumber, $expMonth, $expYear, $cvv, $id);
    
    if ($stmt->execute()) {
        header("Location: admin/manage_shop_payments.php");
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
    <center><h1>Edit Payments</h1></center>
    <div class="container">
    <form action="edit_shopPayment.php?id=<?php echo $id; ?>" method="post">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" value="<?php echo $shop_payment['fullName']; ?>" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $shop_payment['email']; ?>" required><br>

            <label for="adress">Address:</label>
            <input type="text" id="adress" name="adress" value="<?php echo $shop_payment['adress']; ?>" required><br>

            <label for="city">City:</label>
            <input type="text" id="city" name="city" value="<?php echo $shop_payment['city']; ?>" required><br>

            <label for="state">State:</label>
            <input type="text" id="state" name="state" value="<?php echo $shop_payment['state']; ?>" required><br>

            <label for="zipCode">Zip Code:</label>
            <input type="number" id="zipCode" name="zipCode" value="<?php echo $shop_payment['zipCode']; ?>" required><br>

            <label for="cardName">Card Name:</label>
            <input type="text" id="cardName" name="cardName" value="<?php echo $shop_payment['cardName']; ?>" required><br>

            <label for="cardNumber">Card Number:</label>
            <input type="number" id="cardNumber" name="cardNumber" value="<?php echo $shop_payment['cardNumber']; ?>" required><br>

            <label for="expMonth">Exp Month:</label>
            <input type="number" id="expMonth" name="expMonth" value="<?php echo $shop_payment['expMonth']; ?>" required><br>

            <label for="expYear">Exp Year:</label>
            <input type="number" id="expYear" name="expYear" value="<?php echo $shop_payment['expYear']; ?>" required><br>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" value="<?php echo $shop_payment['cvv']; ?>" required><br>

            <input type="submit" name="update" value="Update Users">
        </form>
    </div>
</body>
</html>

<?php include 'footer.php'; ?>
