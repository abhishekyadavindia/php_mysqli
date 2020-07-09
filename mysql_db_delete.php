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
$sql = "DROP DATABASE `new`;";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Sorry, We are unable to delete your Database.");
}
else {
    echo "Your DataBase is Deleted.";
}


?>