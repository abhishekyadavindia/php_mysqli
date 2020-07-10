<?php
    //  Here we are making connection with database having server localhost, username root, password 123456, and in database we are using MySQL Database in which we have database name test and it has columns Email, Password, Name, dt, Address.
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '123456');
    define('DB_NAME', 'test');
    // Try to Connect with Database
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if (!$conn) {
        die('<div class="alert alert-danger" role="alert">
        <strong>Error:</strong> Connection Failed.
      </div>');
    }
?>
