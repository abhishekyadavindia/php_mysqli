<?php
// What is Session?
// Session is used to manage sensitive informations of user in server like password, username, etc.
// session_start();---> This is in built function in PHP to start session.
// When Login Information is true and equal to data in database, then we start session.
session_start();
$_SESSION['username'] = "Hari";
$_SESSION['category'] = "Books";
echo "You are logged in.";
// $_SESSION is a global variable and this information can be accessed at any webpage of the same website. This is aborted when session variables are unset or destroyed.

?>