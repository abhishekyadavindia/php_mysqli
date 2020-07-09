<?php
    require_once "config.php";
    $email = "abhishek@gmail.com";
    $password  = "abhishek@gmail.com";
    $sql1 = "SELECT * FROM `register` WHERE `Email` = '$email'";
    $result = mysqli_query($conn, $sql1);
    $var = mysqli_fetch_assoc($result);
    $var1 = $var['Password'];
    $var2 = password_verify($password, $var1);
    echo var_dump($var2);
    // $sql = "SELECT * FROM `register` WHERE `Password` = 'Bihar'";
?>