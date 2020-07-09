<?php
// mysqli_num_rows();
// mysqli_fetch_assoc();
$server = "127.0.0.1";
$user = "root";
$pass = "123456";
$database = "database";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Your Connection is not established. Error is " . mysqli_connect_error());
}
else {
    echo "Connection Established.<br>";
}
$sql = "SELECT * FROM `trip`";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
echo $num;
echo "<br>";
var_dump(mysqli_fetch_assoc($result));
echo "<br>"; 


?>