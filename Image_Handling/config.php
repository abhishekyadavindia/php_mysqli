<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    // Define Database Name
    define('DB_NAME', 'test');
    // Or you can use 
    // mysqli_select_db($conn, "database name");
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if (!$conn) {
        exit ("Connection Failed");
    }
?>