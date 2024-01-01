document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        // Validate each form field
        var name = document.getElementById('name').value;
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        var mobileNumber = document.getElementById('mobileNumber').value;
        var email = document.getElementById('email').value;
        var age = document.getElementById('age').value;
        var gender = document.getElementById('gender').value;

        // Simple validation example (you should enhance this based on your requirements)
        if (name.trim() === '' || username.trim() === '' || password.trim() === '' || mobileNumber.trim() === '' || email.trim() === '' || age.trim() === '' || gender.trim() === '') {
            alert('All fields are required.');
            event.preventDefault(); // Prevent form submission
            return;
        }

        if (isNaN(age) || age <= 0) {
            alert('Please enter a valid age.');
            event.preventDefault(); // Prevent form submission
            return;
        }

        // You can add more validation rules as needed

        // If all validation passes, the form will be submitted
    });
});
