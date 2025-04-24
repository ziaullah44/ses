<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "ziau25427@gmail.com"; // 🔁 Replace with YOUR Gmail
    $subject = "Portfolio Contact Message from $name";
    $body    = "You received a message from your portfolio website:\n\n" .
               "Name: $name\n" .
               "Email: $email\n" .
               "Message:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.history.back();</script>";
    } else {
        echo "<script>alert('Message sending failed. Please try again.'); window.history.back();</script>";
    }
}
?>
