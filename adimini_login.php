<?php
// Database connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "group4";

// Creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Getting username and password from the form
    $un = trim($_POST['username']);
    $pw = trim($_POST['password']);

    if (empty($un) || empty($pw)) {
        echo "Please provide both username and password.";
        exit;
    }

    // Prepare and execute query to fetch hashed password
    $stmt = $conn->prepare("SELECT password FROM admins WHERE username = ?");
    $stmt->bind_param("s", $un);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Verify password
        if (password_verify($pw, $row['password'])) {
            $_SESSION['username'] = $un; // Set session variable
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid username or password. Please try again.";
        }
    } else {
        echo "Invalid username or password. Please try again.";
    }

    $stmt->close();
}

$conn->close();
?>
