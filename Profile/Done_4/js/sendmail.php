<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $message = $_POST["message"];

    $to = "contact@rakeshprajapat.in";
    $subject = "New Contact Form Submission";

    $body = "
    Name: $name\n
    Email: $email\n
    Mobile: $mobile\n
    Message: $message\n
    ";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Failed to send message. Try again later.";
    }
}
?>