<?php
// Database connection
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "group4"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted

if ($_POST) {
    $studentName = $_POST['student_name'];
    $sex = $_POST['sex'];
    $ageGroup = $_POST['age_group'];
    $levelOfStudy = $_POST['level_of_study'];

 
    $sql = "INSERT INTO students (student_name, sex, age_group, level_of_study) VALUES ('$studentName', '$sex', '$ageGroup', '$levelOfStudy')";
    if ($conn->query($sql) === TRUE) {
        
    }
    $guardianName = $_POST['guardian_name'];
    $contactNumber = $_POST['contact_number'];
    $email = $_POST['email'];

    $sql = "INSERT INTO guardians (guardian_name, contact_number, email) VALUES ('$guardianName', '$contactNumber', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Guardian details saved successfully.')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
