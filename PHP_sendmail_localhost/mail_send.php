<?php
// Using mail function to mail any GMail ID
// We are using SMTP-Simple Mail Transfer Protocol.
// SMTP of Google is free service which is used to send and recieve gmail using there service.
// Enter Email of Receiver.
$to_email = "youremail@gmail.com";
$subject = "iCode";
$body = "Hello Welcome Please Check Mail.";
// Please Enter Email from where you have to send it.
$headers = "From: youremail@gmail.com";
if (mail($to_email, $subject, $body, $headers)) {
    echo "Mail to " . $to_email . " is send successfully";
}
else {
    echo "Mail sending Failed...";
}
?>
