<?php
    // Empty Function Determines if Variable is Empty or not.
    // Returns TRUE if variable is empty and if variable is not empty then it would return FALSE.
    $var1 = "";
    $var2 = "HelloWorld";
    $check_empty1 = empty($var1);   // Has to Return TRUE
    $check_empty2 = empty($var2);   // Has to Return FALSE
    var_dump($check_empty1);
    // Returns:- bool(true)
    var_dump($check_empty2);
    // Returns:- bool(false)
?>