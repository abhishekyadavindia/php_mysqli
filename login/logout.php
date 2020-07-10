<?php

    // Author- Abhishek Yadav
    // Please visit - https://abhishekyadavindia.blogspot.com
    // Please also visit my youtube channel - https://www.youtube.com/channel/UCpWAaAz70iWB5h-BayZPqig
    session_start();
    if (isset($_SESSION['loggedin'])) {
        session_unset();
        session_destroy();
        header("location: login.php");
        exit;
    }
    else {
        header("location: login.php");
        exit;
    }
?>
