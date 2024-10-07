<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <span>Have an account?</span>
                <header>User Sign In</header>
            </div>    
            <form action="sign.back.php" method="post" style="display: flex; flex-direction: column; gap: 15px; max-width: 300px; margin: 0 auto;">
    <input type="text" placeholder="Email" name="email" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">
    <input type="password" placeholder="Password" name="pwd" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">
    <button name="submit" type="submit" style="background-color: #4CAF50; color: white; padding: 10px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">Login</button>
    <br>
    <a href="fogetPass.php" style="text-align: center; color: #4CAF50; text-decoration: none;">Forget Password</a>
</form>
            <div class="bottom">
                <div class="left">
                    <input type="checkbox" id="check">
                    <label for="check"> Remember Me</label>
                </div>
                <div class="right">
                    <label><a href="#">Forgot Password?</a></label>
                </div>  
            </div>      
        </div>
    </div>      
    
</body>
</html>
<?php include 'footer.php'; ?>
