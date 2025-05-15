<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\COMPOSER\vendor\autoload.php'; // Update this if needed

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Initialize response message
$responseMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['fullName'] ?? ''), ENT_QUOTES, 'UTF-8');
    $email = filter_var(trim($_POST['email_address'] ?? ''), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message'] ?? ''), ENT_QUOTES, 'UTF-8');


    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        $responseMessage = "<p style='color: red;'>Please fill in all fields.</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $responseMessage = "<p style='color: red;'>Invalid email address.</p>";
    } else {
        $mail = new PHPMailer(true);
        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 't8386640@gmail.com'; // RentMyCaravan Temporary Email Address
            $mail->Password = 'xwwqvspnnuswoqsi';  // Gmail App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Email content
            $mail->setFrom('t8386640@gmail.com', 'Rent My Caravan');
            $mail->addAddress('t8386640@gmail.com');
            $mail->addReplyTo($email, $name);
            $mail->Subject = "New Contact Form Submission";
            $mail->Body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

            $mail->send();

            $responseMessage = "<p style='color: green;'>Thanks for contacting us, $name! We’ll get back to you soon.</p>";
        } catch (Exception $e) {
            $responseMessage = "<p style='color: red;'>Message could not be sent. Error: {$mail->ErrorInfo}</p>";
        }
    }
}

// Return the message so it can be displayed via AJAX
echo $responseMessage;
