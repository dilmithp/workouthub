<!-- Header Section -->
<?php include'header.php';
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="styles3.css">
 </head>
 <body>
    <br><br><br>


        <center><h1 style="color:#fff">Feedback Insert</h1></center>

        <br>


    <div class="container">
        <?php if (isset($message)) { echo "<p class='success'>$message</p>"; } ?>
        <form action="insert_feedback.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" required></textarea><br>

            <input type="submit" name="submit" value="Submit Feedback">
        </form>
    </div>


    <br><br><br><br>



</body>
</html>
<?php include'footer.php';
?>