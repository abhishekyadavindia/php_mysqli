<?php
$server = "127.0.0.1";
$user = "root";
$pass = "123456";
$conn = mysqli_connect($server, $user, $pass);
if (!$conn) {
    die("Your Connection is not established. Error is " . mysqli_connect_error());
    echo "<br>";
}
else {
    echo "Connection Established.<br>";
}
// Creates Database.
$sql = "CREATE DATABASE db";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Your database is not created.");
}
else {
    echo "Database Created.";
}

?>