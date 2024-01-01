<?php
// Include the connection file
include 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];    
    $password = $_POST["password"];
    $mobileNumber = $_POST["mobile"];
    $email = $_POST["mail"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    // Validate and sanitize input (you should enhance this based on your requirements)

    // Insert user data into the database
    $sql = "INSERT INTO registration (name, password, mobile, mail, age, gender) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssis", $name, $password, $mobileNumber, $email, $age, $gender);

    if ($stmt->execute()) {
        echo "Registration successful!";
        header("Location: ../index.html"); // Redirect to the login page
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>
