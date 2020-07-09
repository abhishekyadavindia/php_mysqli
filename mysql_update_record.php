<?php
// Query of Update in MySQL ---> UPDATE `Name of Table` SET `Name of Row` = 'From which to change' WHERE `Name of Table`.`Name set for Serial Number of Row` = Serial Number of Row;
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
    $sql = "UPDATE `trip` SET `dest` = 'Andhra Pradesh' WHERE `trip`.`sno` = 3";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Updated Successfully.<br>";
        echo mysqli_affected_rows($conn) . " Rows Affected.";
    }
    else {
        echo "Not Updated by Error --->" . mysqli_error($conn) . "<br>";
        echo mysqli_affected_rows($conn) . " Rows Affected.";
    }

}

?>