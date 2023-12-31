<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $service = $_POST["service"];
    $message = $_POST["message"];

    $to = "jesushenriquez196@gmail.com"; // Replace with your email address
    $subject = "New Service Request";

    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Service: $service\n";
    $email_body .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_body);

    // You can redirect the user to a thank you page or show a thank you message here
    echo "Thank you for your request!";
} else {
    // Handle the case where the form is not submitted properly
    echo "Error: Form not submitted.";
}
?>
