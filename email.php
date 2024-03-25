<?php
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Specify recipient email address
    $recipient_email = 'josephaoga@hotmail.com'; // Change this to your desired email address

    // Construct email message
    $subject = 'New message from contact form';
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

    // Send email
    $mail_success = mail($recipient_email, $subject, $body);

    // Return response to JavaScript
    if ($mail_success) {
        echo 'sent';
    } else {
        echo 'error';
    }
?>