// This script is a placeholder for future interactivity.
console.log('Online Gym Trainer page loaded successfully.');

// Example script for future interactivity
console.log('About Us page loaded successfully.');
// script.js
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();

    let name = document.getElementById('name').value;
    let surname = document.getElementById('surname').value;
    let email = document.getElementById('email').value;
    let message = document.getElementById('message').value;

    // Basic form validation
    if (name && surname && email && message) {
        alert("Thank you for your message, " + name + "!");
        // Clear the form after submission
        document.getElementById('contactForm').reset();
    } else {
        alert("Please fill out all fields before submitting.");
    }
});



