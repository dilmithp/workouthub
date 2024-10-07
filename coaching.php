<?php include'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Hub</title>
    <link rel="stylesheet" href="coaching.css">
</head>
<body >

    <!-- Main Section with Banner -->
    <div class="main-section">
        
<section id="pricing" class="pricing">
        <h2>Choose Your Plan</h2>
        <div class="pricing-container">
            <div class="pricing-card basic" data-tier="basic">
                <h3>Basic</h3>
                <ul class="features">
                    <li>On-Demand Fitness Classes</li>
                    <li>Personalized Nutrition Plans</li>
                    <li>Interactive Member Forums</li>
                    <li>Live Chat and Phone Support</li>
                </ul>
                <hr>
                <div class="price">LKR 2999.99<span>/month</span></div>
                <a href="gympackageform.php"><button class="cta-button">Get Started</button></a>
            </div>
            <div class="pricing-card pro" data-tier="pro">
                <div class="pro-badge">Pro</div>
                <h3>Pro</h3>
                <ul class="features">
                    <li>Essential Fitness Tools</li>
                    <li>Custom Exercise Routines</li>
                    <li>Virtual Group Training</li>
                    <li>Nutrition consultation</li>
                    <li>24/7 chat support</li>
                </ul>
                <hr>
                <div class="price">LKR 4999.99<span>/month</span></div>
                <a href="gympackageform.php"><button class="cta-button">Get Started</button></a>
            </div>
            <div class="pricing-card premium" data-tier="premium">
                <div class="premium-badge">Premium</div>
                <h3>Premium</h3>
                <ul class="features">
                    <li>Private Coaching Sessions</li>
                    <li>Enhanced Progress Monitoring</li>
                    <li>Exclusive Member-Only Content</li>
                    <li>Exclusive premium content</li>
                    <li>VIP Customer Support</li>
                </ul>
                <hr>
                <div class="price">LKR 7999.99<span>/month</span></div>
                <a href="gympackageform.php"><button class="cta-button">Get Started</button></a>
            </div>
        </div>
    </section>


    <!-- Popup Window -->
    <div id="popup" class="popup">
    <div class="popup-content">
        <span class="close">&times;</span>
        <h2>Register for <span id="plan-name"></span></h2>
        <form id="registration-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" id="subscription-type" name="subscription_type">
            <div class="form-section">
                <h3>Customer Details</h3>
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-birthday-cake"></i>
                    <input type="number" name="age" placeholder="Age" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-ruler-vertical"></i>
                    <input type="number" name="height" placeholder="Height (cm)" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-weight"></i>
                    <input type="number" name="weight" placeholder="Weight (kg)" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-home"></i>
                    <input type="text" name="address" placeholder="Address" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-id-card"></i>
                    <input type="text" name="nic" placeholder="NIC" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-phone"></i>
                    <input type="tel" name="contact" placeholder="Contact Number" required>
                </div>
            </div>
            <div class="form-section">
                <h3>Payment Details</h3>
                <div class="form-group">
                    <i class="fas fa-credit-card"></i>
                    <select name="card_type" required>

<option value="">Select Card Type</option>
                        <option value="visa">Visa</option>
                        <option value="mastercard">Mastercard</option>
                        <option value="amex">American Express</option>
                    </select>
                </div>
                <div class="form-group">
                    <i class="fas fa-credit-card"></i>
                    <input type="text" name="card_number" placeholder="Card Number" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-calendar-alt"></i>
                    <select name="exp_month" required>
                        <option value="">Expiry Month</option>
                        <?php for($i=1; $i<=12; $i++) echo "<option value='$i'>$i</option>"; ?>
                    </select>
                    <select name="exp_year" required>
                        <option value="">Expiry Year</option>
                        <?php for($i=date('Y'); $i<=date('Y')+10; $i++) echo "<option value='$i'>$i</option>"; ?>
                    </select>
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="text" name="cvv" placeholder="CVV" required>
                </div>
            </div>
            <button type="submit" class="submit-btn">Register</button>
        </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
<?php include'footer.php';?>
