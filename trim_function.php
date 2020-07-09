<?php
    // Trim Function removes whitespaces which means any kind of space which is created by any special keyword also.
    // Usage: trim ( string $str [, string $character_mask = " \t\n\r\0\x0B" ] ) : string
    $str1 = "HelloWorld .";
    $a =trim($str1);
    var_dump($a);


?>