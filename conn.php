<?php
// Database connection details
$servername = "localhost"; // Your server name, 'localhost' if running on the same server
$username = "root";        // Database username
$password = "";            // Database password (leave empty if none)
$dbname = "group4"; // Database name

// Establish a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $fullname = $conn->real_escape_string($_POST['fullname']);
    $sex = $conn->real_escape_string($_POST['sex']);
    $phoneNumber = $conn->real_escape_string($_POST['phoneNumber']);
    $email = $conn->real_escape_string($_POST['email']);
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
    $confirmPassword = $conn->real_escape_string($_POST['confirmPassword']);

    // Validation: Check if required fields are not empty
    if (empty($fullname) || empty($phoneNumber) || empty($email) || empty($username) || empty($password) || empty($confirmPassword)) {
        echo "All fields are required.";
        exit();
    }

    // Validation: Check if password and confirm password match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
        exit();
    }

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Insert data into the database
    $sql = "INSERT INTO users (fullname, sex, phoneNumber, email, username, password)
            VALUES ('$fullname', '$sex', '$phoneNumber', '$email', '$username', '$hashedPassword')";

    // Execute the query and check if successful
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
         header("Location: login.html");
        exit(); // Stop further execution to ensure redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
