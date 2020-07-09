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
$sql1 = "CREATE DATABASE db1";
$result1 = mysqli_query($conn, $sql1);
if (!$result1) {
    die("Your database is not created.");
}
else {
    echo "Database Created.";
}
// SQL query for making table in database.
// CREATE TABLE `Name of Database` . `Name of Table to be Created` ( `Name of First Row` Type of Row(Length/Value) NOT NULL/...  , PRIMARY KEY (`Name of Same first Database`)) ENGINE = InnoDB;
$sql2 = "CREATE TABLE `db1`.`example` ( `serial` INT(10) NOT NULL AUTO_INCREMENT ,  `name` TEXT NOT NULL ,  `password` VARCHAR(11) NOT NULL ,  `date` DATETIME(6) NOT NULL ,    PRIMARY KEY  (`serial`)) ENGINE = InnoDB;";
$result2 = mysqli_query($conn, $sql2);
if (!$result2) {
    die("Your table is not created.");
}
else {
    echo "Table is Created.";
}


?>