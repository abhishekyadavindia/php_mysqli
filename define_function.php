<?php
// Syntax of Using define Function
// define ( string $name , mixed $value [, bool $case_insensitive = FALSE ] ) : bool
// For Example:
// For Printing HelloWorld using Define function, we can assign a VARIABLE as HelloWorld and echo it.(here that variable is CONSTANT)
    // define("CONSTANT", "HelloWorld");
    // echo CONSTANT; 
//   Make Connection with DataBase using define()
    define('DB_SERVER', '127.0.0.1');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '123456');
    define('DB_DATABASE', 'database');
    // Establish Connection
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if (!$conn) {
        die("We are Unable to Connect with Database. By Error -->" . mysqli_connect_error());
    }
    else {
        echo "Connection Was Successful. You are in Database 'database'";
    }
?>