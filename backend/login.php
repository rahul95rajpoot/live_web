<?php
session_start();
include 'connection.php'; // Adjust the path based on your file structure

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST["password"];

    // Your login logic here, check if the credentials are valid
    $stmt = $conn->prepare("SELECT * FROM registration WHERE mail = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        // Debug information
        echo "Input Password: $password<br>";
        echo "Password in Database: {$user['password']}<br>";

        // Check if the entered password matches the password in the database
        if ($password == $user['password']) {
            // Successful login
            $_SESSION['username'] = $user['name']; // You can use the username or any other relevant information if needed
            header("Location: ../frontend/contactus.html"); // Change this to your home page URL
            exit();
        } else {
            // Display an error message and redirect to index.html
            echo "Invalid email or password. Please <a href='index.html'>try again</a>.";
            exit();
        }
    } else {
        // Display an error message and redirect to index.html
        echo "No user found with the provided email. Please <a href='index.html'>try again</a>.";
        exit();
    }

    $stmt->close();
}

$conn->close();
?>
