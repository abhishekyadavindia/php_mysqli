<?php
// Using mail function to mail any GMail ID
// We are using SMTP-Simple Mail Transfer Protocol.
// SMTP of Google is free service which is used to send and recieve gmail using there service.
$to_email = "abhishekyadav95869@gmail.com";
$subject = "iCode";
$body = "Hello Abhishek welcome to iCode";
$headers = "From: noreplyicodeilearn@gmail.com";
if (mail($to_email, $subject, $body, $headers)) {
    echo "Mail to " . $to_email . " is send successfully";
}
else {
    echo "Mail sending Failed...";
}
?>