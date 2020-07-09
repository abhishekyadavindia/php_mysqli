<?php
$servername = "127.0.0.1";
$username = "root";
$password = "123456";
$database = "icode";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Sorry Unable to Connect to MySQL. The Error is " . mysqli_connect_error());
}
else {
    echo "Success, Your Connection established.";
}
?>