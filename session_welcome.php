<?php
session_start();
// Error Handling using if-else statement
if (isset($_SESSION['username'])) {
    echo "Welcome - " . $_SESSION['username'];
    echo "<br>Your Category is " . $_SESSION['category'];
}
else {
    echo "You are not logged in. Please Login First.";
}
?>