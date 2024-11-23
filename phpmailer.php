<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "group4"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validating email format
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Handling the request to send the reset code
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
    $email = $_POST['email'];

    // Checking if the email is valid
    if (!is_valid_email($email)) {
        echo "Invalid email format.";
        exit();
    }

    // Checkinng if the email exists
    $query = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();
    
    if ($result->num_rows > 0) {
        // Generating a 4-digit reset code
        $reset_code = mt_rand(1000, 9999);
        $expiry_time = date("Y-m-d H:i:s", strtotime("+15 minutes"));

        // Storing the reset code and its expiry in the database
        $update = $conn->prepare("UPDATE users SET reset_code = ?, reset_code_expiry = ? WHERE email = ?");
        $update->bind_param("sss", $reset_code, $expiry_time, $email);
        $update->execute();

        // Send the reset code to the user's email using PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'hopematimat10@gmail.com';
            $mail->Password   = 'mblp frmq pljk rudu';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom('hopematimat10@gmail.com', 'group4');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset Code';
            $mail->Body    = "Your password reset code is: <b>$reset_code</b>";

            $mail->send();
            $_SESSION['email'] = $email;
            header('Location: reset_code.html');
            exit();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Email not found in our system.";
    }
}

// Handling the code verification
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reset_code'])) {
    if (!isset($_SESSION['email'])) {
        echo "Session expired. Please request a new reset code.";
        exit();
    }

    $reset_code = $_POST['reset_code'];
    $email = $_SESSION['email'];
    
    // Fetching the code and expiry time from the database
    $query = $conn->prepare("SELECT reset_code, reset_code_expiry FROM users WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();
    $user = $result->fetch_assoc();

    if ($user && $user['reset_code'] == $reset_code && strtotime($user['reset_code_expiry']) > time()) {
        header('Location: new_password.html');
        exit();
    } else {
        echo "Invalid or expired reset code.";
    }
}

// Handling the password reset
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new_password'])) {
    if (!isset($_SESSION['email'])) {
        echo "Session expired. Please request a new reset code.";
        exit();
    }

    // Hash the new password securely
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
    $email = $_SESSION['email'];  

    // Update password in the database
    $update = $conn->prepare("UPDATE users SET password = ?, reset_code = NULL, reset_code_expiry = NULL WHERE email = ?");
    $update->bind_param("ss", $new_password, $email);

    if ($update->execute()) {
        echo "Password updated successfully.";
    } else {
        echo "Error updating password: " . $update->error;
    }

    unset($_SESSION['email']);
    
    header('Location: login.html');
    exit();
}


?>
