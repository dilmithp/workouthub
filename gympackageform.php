<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Custom CSS file link  -->
    <link rel="stylesheet" href="gympackage.css">

    <title>Gym Package Choose and Pay</title>
</head>
<body>

<div class="container">

    <form action="packagebillform.php" method="POST">

        <div class="row">

            <div class="col">

                <h3 class="title">Choose Your Gym Package</h3>
                
                <div class="inputBox">
                    <span>Select Package:</span>
                    <select name="package" required>
                        <option value="basic">Basic Package - $20/month</option>
                        <option value="premium">Premium Package - $40/month</option>
                        <option value="pro">Pro Package - $60/month</option>
                    </select>
                </div>

                <h3 class="title">Billing Address</h3>

                <div class="inputBox">
                    <span>Full Name:</span>
                    <input type="text" name="full_name" placeholder="John Doe" required>
                </div>
                <div class="inputBox">
                    <span>Email:</span>
                    <input type="email" name="email" placeholder="example@example.com" required>
                </div>
                <div class="inputBox">
                    <span>Address:</span>
                    <input type="text" name="address" placeholder="Room - Street - Locality" required>
                </div>
                <div class="inputBox">
                    <span>City:</span>
                    <input type="text" name="city" placeholder="Mumbai" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>State:</span>
                        <input type="text" name="state" placeholder="India" required>
                    </div>
                    <div class="inputBox">
                        <span>Zip Code:</span>
                        <input type="text" name="zip_code" placeholder="123456" required>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">Payment</h3>

                <div class="inputBox">
                    <span>Cards Accepted:</span>
                    <img src="image/img10.jpeg" alt="">
                </div>
                <div class="inputBox">
                    <span>Name on Card:</span>
                    <input type="text" name="card_name" placeholder="Mr. John Doe" required>
                </div>
                <div class="inputBox">
                    <span>Credit Card Number:</span>
                    <input type="number" name="card_number" placeholder="1111-2222-3333-4444" required>
                </div>
                <div class="inputBox">
                    <span>Exp Month:</span>
                    <input type="number" name="exp_month" placeholder="January" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Exp Year:</span>
                        <input type="number" name="exp_year" placeholder="2024" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV:</span>
                        <input type="text" name="cvv" placeholder="123" required>
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="Proceed to Checkout" class="submit-btn">

    </form>

</div>    
    
</body>
</html>
