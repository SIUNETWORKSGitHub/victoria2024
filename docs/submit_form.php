<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $service = $_POST["service"];
    $message = $_POST["message"];

    // Email information
    $to = "jesushenriquez196@gmail.com"; // Replace with your email address
    $subject = "New Service Request";

    // Compose email message
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Service: $service\n";
    $email_body .= "Message:\n$message";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    $mailSuccess = mail($to, $subject, $email_body, $headers);

    // Check if the email was sent successfully
    if ($mailSuccess) {
        echo "Thank you for your request! We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong and we couldn't process your request.";
    }
} else {
    // Handle the case where the form is not submitted properly
    echo "Error: Form not submitted.";
}
?>
