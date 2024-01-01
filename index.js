document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('loginForm');

    form.addEventListener('submit', function (event) {
        // Validate the form fields before submission
        if (!validateForm()) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });

    function validateForm() {
        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value.trim();

        // Simple validation example - you can customize this based on your requirements
        if (username === '' || password === '') {
            alert('Both username and password are required. Please enter both details.');
            return false;
        }       

        return true; // Form is valid
    }
});
