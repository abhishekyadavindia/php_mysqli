<?php
$server = "127.0.0.1";
$user = "root";
$pass = "123456";
$conn = mysqli_connect($server, $user, $pass)
if (!$conn) {
    die("Your Connection is not established. Error is " . mysqli_connect_error());
}
else {
    echo "Connection Established.";
}
?>