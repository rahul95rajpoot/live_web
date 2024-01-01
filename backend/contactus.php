<?php
// Include the database connection file
include 'connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $mobileNumber = $_POST['mobileNumber'];
    $email = $_POST['email'];
    $query = $_POST['query'];

    // You should perform proper validation and sanitization here

    // Insert data into the database
    $sql = "INSERT INTO contact_us (name, mobileNumber, email, query) VALUES ('$name', '$mobileNumber', '$email', '$query')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
