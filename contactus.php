<?php include'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Hub</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
 <!-- Contact Us Section -->
 <div class="content">
        <div class="contact-section">
            <h1 style="color:#fff">Contact Us </h1>
            <div class="contact-container">
            <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31691.00341833223!2d79.84767605820312!3d6.927078137648738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2594c1086d23b%3A0x6f8fcb72eafc00a6!2sColombo%2007%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1696490725609!5m2!1sen!2sus" 
                    width="100%" 
                    height="300px" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class="contact-image">
                   <p>Email :- fitwithus@workouthub.com</p>
                   <p>Contact No :- +94 764801269</p>
                   <p>Address :-WorkoutHub Fitness Center</p>
                   <p>123 Energize Avenue,Colombo 07,</p>
                   <P>Western Province,Sri Lanka.</p>
                
                   <img src="image/image25.jpeg" width="400px" height="350">
                   
                </div>
                <div class="contact-form">
                <form action="contactusconnect.php" method="POST">
                    
                        <label for="name" class="align-left">Name:</label>
                        <input type="text" id="name" name="name" placeholder="Your name.." required>

                        <label for="surname"class="align-left">Surname:</label>
                        <input type="text" id="surname" name="surname" placeholder="Your surname.." required>

                        <label for="email"class="align-left">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Your email.." required>

                        <label for="message"class="align-left">Message:</label>
                        <textarea id="message" name="message" placeholder="Write something.." style="height:150px" required></textarea>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="script.js"></script>
<?php include'footer.php';?>