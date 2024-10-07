<!-- Header Section -->
<?php
session_start();
?> 
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
 </head>
 <body>
    
<header>
        <nav class="navbar">
            <div class="logo">
                <a href="index.php"><img src="image/image7.png" alt="workouthub" align-items="center"></a>

            </div>
            
            
            <div class="cart-section">
                
            </div>
        </nav>
        <br>

        <div class="nav-links">
            <ul>
                <li ><a href="shop.php">Shop</a></li>
                <li><a href="coaching.php">Online Coaching</a></li>
                <li><a href="fitnessarticle.php">Fitness Articles</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li><a href="about.php">About Us</a></li>
                <li style="float: right;">
        <?php
        if (isset($_SESSION['firstName'])) {
          echo "<a href=\"logout.php\" onclick=\"confirmLogout(event)\">Logout</a>";
        } else if (isset($_SESSION['username'])) {
          echo "<a href=\"logout.php\" onclick=\"confirmLogout(event)\">Logout</a>";
        } else {
          echo "<a href=\"sign.php\">Login</a>";
        } ?></li>
      <li style="float: right;">
        <?php
        if (isset($_SESSION['firstName'])) {
          echo "<a href=\"profile.php\">" . $_SESSION['firstName'] . '!' . "</a>";
        } else if (isset($_SESSION['adminFname'])) {
          echo "<a href=\"#\">" . 'Admin ' . $_SESSION['username'] . '!' . "</a>";
        } else {
          echo "<a href=\"signup.php\">Sign Up</a>";
        } ?></li>
            </ul>
        </div>
    </header>