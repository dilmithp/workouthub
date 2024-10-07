<?php include'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Workout Hub</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <main>
        <section class="signup-form">
            <h2>Sign Up</h2>
            <form action="connect.php" method="POST">
                <div class="form-group">
                    <input type="text" name="firstName" placeholder="First Name" required>
                    <input type="text" name="lastName" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <input type="number" name="age" placeholder="Age" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="E-Mail" required>
                </div>
                <div class="form-group">
                    <input type="password" name="newPassword" placeholder="Create New Password" required>
                </div>
                <div class="form-group">
                    <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
                </div>
                <button type="submit" class="signup-btn" name="submit">Sign Up</button>
            </form>
        </section>
    </main>

   
    <!-- Basic JavaScript (Optional) -->
    <script>
        document.querySelector('.search-bar button').addEventListener('click', function() {
            alert('Search functionality is under construction.');
        });
    </script>
</body>
</html>
<?php include'footer.php';
?>