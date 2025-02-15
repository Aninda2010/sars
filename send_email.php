<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SARS - Committed to make your life easy</title>

    <style>
        /* Global Styling */
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #E0E2EE; /* Previous background color */
        }

        img {
            border: 0px solid #555;
        }

        .container {
            display: flex; /* Use flexbox for layout */
            align-items: center;
            justify-content: space-between;
            padding: 20px;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 45%; /* Adjust form width */
            background-color: #F9AE65; /* Background color for the form */
        }

        .input-row {
            margin-bottom: 15px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn-submit {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 12px;
        }

        /* Blinking Text */
        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .blinking-text {
            text-align: center;
            margin-top: 20px;
            font-size: 30px;
            color: red;
            animation: blink 1s infinite;
        }

        /* Media Query for Responsiveness */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .form-container {
                width: 80%;
            }
        }

        /* Navbar Styling */
        .topnav {
            overflow: hidden;
            background-color: #3C6D79; /* Restored background color */
        }

        .topnav a {
            float: left;
            color: #ddd;
            text-align: center;
            padding: 10px 30px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #E0E2EE;
            color: Blue;
        }

        .topnav a.active {
            background-color: #F9AE65;
            color: Gray;
        }

        .topnav-right {
            float: right;
        }

    </style>
</head>

<body>

    <!-- Top Navigation Bar (Restored) -->
    <div class="topnav">
        <img src="logo.png" alt="Company Logo" width="100" height="90">
        <div class="topnav-right">
            <a href="index.html">Home</a>
            <a class="active" href="contact.html">Contact</a>
            <a href="FAQ.html">FAQ</a>
        </div>
    </div>

    <!-- Contact Section with Image and Form -->
    <div class="container">
<img src="about.jpeg" alt="About SARS" style="width: 70%; height: 100%;">
        <div class="form-container">
            <h2>Contact Us</h2>
            <form id="contactForm" method="POST" action="send_email.php" onsubmit="return validateForm()">
                <div class="input-row">
                    <label for="userName">Name</label>
                    <input type="text" class="input-field" id="userName" name="userName" placeholder="Enter your name" />
                    <span id="userNameError" class="error"></span>
                </div>
                <div class="input-row">
                    <label for="userEmail">Email</label>
                    <input type="email" class="input-field" id="userEmail" name="userEmail" placeholder="Enter your email" />
                    <span id="userEmailError" class="error"></span>
                </div>
                <div class="input-row">
                    <label for="subject">Subject</label>
                    <input type="text" class="input-field" id="subject" name="subject" placeholder="Enter subject" />
                    <span id="subjectError" class="error"></span>
                </div>
                <div class="input-row">
                    <label for="message">Message</label>
                    <textarea class="input-field" id="message" name="message" rows="5" placeholder="Enter your message"></textarea>
                    <span id="messageError" class="error"></span>
                </div>
                <div class="input-row">
                    <button type="submit" class="btn-submit">Send Message</button>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript for Form Validation -->
    <script>
        function validateForm() {
            let valid = true;
            // Reset error messages
            document.getElementById("userNameError").textContent = "";
            document.getElementById("userEmailError").textContent = "";
            document.getElementById("subjectError").textContent = "";
            document.getElementById("messageError").textContent = "";

            // Validate Name
            let userName = document.getElementById("userName").value;
            if (userName == "") {
                document.getElementById("userNameError").textContent = "Name is required.";
                valid = false;
            }

            // Validate Email
            let userEmail = document.getElementById("userEmail").value;
            let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (userEmail == "") {
                document.getElementById("userEmailError").textContent = "Email is required.";
                valid = false;
            } else if (!emailPattern.test(userEmail)) {
                document.getElementById("userEmailError").textContent = "Invalid email address.";
                valid = false;
            }

            // Validate Subject
            let subject = document.getElementById("subject").value;
            if (subject == "") {
                document.getElementById("subjectError").textContent = "Subject is required.";
                valid = false;
            }

            // Validate Message
            let message = document.getElementById("message").value;
            if (message == "") {
                document.getElementById("messageError").textContent = "Message is required.";
                valid = false;
            }

            return valid;  // Allow form submission if valid
        }
    </script>

    <!-- Promotional Blinking Text -->
    <div class="blinking-text">
        Don't get left behind! Over 70% of businesses are online. Get your website up and running for only Rs. 999! #website #business #digitalmarketing #sale
    </div>








<?php

// Include PHPMailer libraries
require 'C:\Apache24\htdocs\mysite\PHPMailer-master\src\PHPMailer.php';
require 'C:\Apache24\htdocs\mysite\PHPMailer-master\src\Exception.php';
require 'C:\Apache24\htdocs\mysite\PHPMailer-master\src\SMTP.php';

// Use PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Create the PHPMailer instance
$mail = new PHPMailer(true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize
    $userName = htmlspecialchars(trim($_POST['userName']));
    $userEmail = htmlspecialchars(trim($_POST['userEmail']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Email address where the contact form will be sent (set this to your actual email)
    $toEmail = "email to be used to send data"; 

    // Subject of the email
    $emailSubject = "Contact Form Submission: " . $subject;

    // Email body content (HTML formatted)
    $emailBody = "
        <h3>Contact Information</h3>
        <p><strong>Name:</strong> $userName</p>
        <p><strong>Email:</strong> $userEmail</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong> <br> $message</p>
    ";

    try {
        // Server settings for SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Gmail SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'email';  // Your email address
        $mail->Password = 'password';  // App-specific password or email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Correct encryption type
        $mail->Port = 587;  // SMTP port for Gmail

        // Recipients
        $mail->setFrom($userEmail, $userName);  // Set the sender email and name
        $mail->addAddress('email - where data to be recvd');  // Set the recipient email

        // Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = $emailSubject;
        $mail->Body    = $emailBody;

        // Send the email
        $mail->send();
        echo '<script type="text/javascript">
            alert("Thank you for contacting us. We will get back to you in 2 business days.");
          </script>';
    } catch (Exception $e) {
        echo '<script type="text/javascript">
            alert("Sorry your message could not reach to us. Please call us in our number:9830241436:' . $mail->ErrorInfo . '");
          </script>';
    }
}
?>

</body>
</html>