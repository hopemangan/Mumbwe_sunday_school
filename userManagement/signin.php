<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "group4";

// Establish a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start the session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $username = $conn->real_escape_string(trim($_POST['username']));
    $password = $_POST['password']; // Raw password for verification

    // Prepare SQL query to find the user
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Login successful, redirect to home page or another page
            $_SESSION['username'] = $username; // Store session data if needed
            header("Location: home.html");
            exit();
        } else {
            echo "Invalid password. Please try again.";
        }
    } else {
        echo "No user found with that username.";
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>
