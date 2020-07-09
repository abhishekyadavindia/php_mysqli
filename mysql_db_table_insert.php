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
$sql1 = "CREATE DATABASE new";
$result1 = mysqli_query($conn, $sql1);
if (!$result1) {
    die("Your database is not created.<br>");
}
else {
    echo "Database Created.<br>";
}
// SQL query for making table in database.
// CREATE TABLE `Name of Database` . `Name of Table to be Created` ( `Name of First Row` Type of Row(Length/Value) NOT NULL/...  , PRIMARY KEY (`Name of Same first Database`)) ENGINE = InnoDB;
$sql2 = "CREATE TABLE `new`.`example` ( `serial` INT(10) NOT NULL AUTO_INCREMENT ,  `username` TEXT NOT NULL ,  `password` VARCHAR(11) NOT NULL ,  `date` DATETIME(6) NOT NULL ,    PRIMARY KEY  (`serial`)) ENGINE = InnoDB;";
$result2 = mysqli_query($conn, $sql2);
if (!$result2) {
    die("Your table is not created.<br>");
}
else {
    echo "Table is Created.<br>";
}
// MySQL Query for Inserting Data to Table.
// INSERT INTO `Name of Database` . `Name of Table` (`Name of First Column`, `Name of Second Column`, `Name of Third Column`, `Name of Fourth Column`, ...) VALUES ('Value for First Column', 'Value for Second Column', 'Value of Third Column', 'Value of Fourth Column', ...);
$sql3 = "INSERT INTO `new` . `example` (`serial`, `username`, `password`, `date`) VALUES ('1', 'abhishek', 'hsj123@', '2020-06-22 11:10:29.000000');";
$result3 = mysqli_query($conn, $sql3);
if (!$result3) {
    die("Insertion Failed.");
}
else {
    echo "Insertion Succeded.";
}

?>