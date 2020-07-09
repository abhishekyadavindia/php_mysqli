<?php
    require_once("mysql.php");
    password_verify($pass, $result)
    $pass = "123456";
    $password = password_verify($pass, $result);
    // echo $password;
    // To Check whether password enetred by user is write or wrong we can again convert it to hash and match.
    $sql = "SELECT * FROM `signup` WHERE `password` = $password";
    $result = mysqli_query($conn, $sql);
    echo mysqli_error($conn);

    // if ($result) {
    //     echo "Hello " . $pass;
    // } 
    // else {
    //     echo "Please Enter Password Carefully.";
    // }
?>