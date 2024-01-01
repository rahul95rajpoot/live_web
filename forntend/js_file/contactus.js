document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        // Validate the form fields before submission
        if (validateForm()) {
            // If the form is valid, submit the data to the backend or perform other actions
            alert('Form submitted successfully!'); // Replace this with your actual submission logic
        }
    });

    function validateForm() {
        const firstName = document.getElementById('firstName').value.trim();
        const lastName = document.getElementById('lastName').value.trim();
        const mobileNumber = document.getElementById('mobileNumber').value.trim();
        const email = document.getElementById('email').value.trim();
        const query = document.getElementById('query').value.trim();

        // Simple validation example - you can customize this based on your requirements
        if (firstName === '' || lastName === '' || mobileNumber === '' || email === '' || query === '') {
            alert('All fields are required. Please fill in all the details.');
            return false;
        }

        // Validate email format
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Invalid email address. Please enter a valid email.');
            return false;
        }

        // You can add more complex validation logic as needed

        return true; // Form is valid
    }
});
