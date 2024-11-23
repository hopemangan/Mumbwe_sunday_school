<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST["send"])) {
    $sender = $_POST["sender"];
    $receiver = $_POST["recipient"]; // Corrected spelling from "reciepient"
    $msg = $_POST["msg"];
    echo "<script>alert($msg)</script>";
    $body = "
        <strong>Sender:</strong> " . htmlspecialchars($sender) . "<br>
        <strong>To:</strong> " . htmlspecialchars($receiver) . "<br>
         <strong>message: </strong>".htmlspecialchars($msg). "<br>
    ";

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'lwitikomwalungila7@gmail.com';
        $mail->Password = 'uang blae ozsk emil'; // Consider using environment variables or a secure method for this
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('stanashady1@gmail.com', 'Mumbwe Secondary School Management System');
        $mail->addAddress($receiver); // Send to the recipient provided by the user
        $mail->isHTML(true);
        $mail->Subject = "No-reply";
        $mail->Body = $body;

        if ($mail->send()) {
            echo "<script>alert('Message sent to: $receiver')</script> ";
            echo '<script>
            setTimeout(function(){
                window.location.href = "home.html";
            }, 2000);  // 2000 milliseconds = 2 seconds
          </script>';
        } else {
            echo "<script>alert('Failed to send message to $receiver ')</script>";
        }

        $mail->clearAddresses();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


?>
