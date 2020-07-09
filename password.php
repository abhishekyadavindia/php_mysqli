<?php
    require_once("mysql.php");
    // password_hash function is used for converting passwords from its original form to hash which is hard to crack.
    // Usage: password_hash(Password Variable, Algorithm of hashing password);
    // Likely we would use default algorithm which is PASSWORD_DEFAULT 
    $pass = "123456";
    $password = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `signup` (`sno`, `dt`, `name`, `email`, `password`, `address`, `city`, `state`, `zip`) VALUES (NULL, CURRENT_TIMESTAMP, '', '', '$password', '', '', '', '123456')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Inserted in Database Successfully";
    }
    else {
        echo mysqli_error($conn);
    }
?>