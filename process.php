<?php
$host = 'localhost'; 
$dbname = 'group4'; 
$username = 'root'; 
$password = '';

// Connect to the database
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
    // Get form data
    $user = trim($_POST['username']);
    $pass = trim($_POST['password']);

    // Validate input (ensure username and password are not empty)
    if (empty($user) || empty($pass)) {
        echo "Please provide a username and password.";
        exit;
    }

    // Hash the password
    $hashedPass = password_hash($pass, PASSWORD_BCRYPT);

    // Using a prepared statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO admins (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $user, $hashedPass);

    if ($stmt->execute()) {
        echo "Sign-up successful!";
        echo '<script>
                setTimeout(function(){
                    window.location.href = "admin_signin.html";
                }, 2000);  // 2000 milliseconds = 2 seconds
              </script>';
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
