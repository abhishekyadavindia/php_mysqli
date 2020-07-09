<?php
    require_once("mysql.php");
    $pass = "hari";
    // $password = password_verify($pass, $hash);
    $sql = "SELECT * FROM `signup` WHERE `password` = `hari`";
    $result = mysqli_query($conn, $sql);
    var_dump(mysqli_fetch_assoc($result));
    echo "<br>";
    echo mysqli_fetch_assoc($result);
    // $result = mysqli_query($conn, $sql);
    // echo mysqli_fetch_assoc($result) . "<br>";
    // var_dump(mysqli_fetch_assoc($result));
    // echo mysqli_error($conn);

?>
