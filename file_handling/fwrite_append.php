<?php
// Run One Code at One Time.
// If file dosen't exist fwrite function itself create it.
// Write Method is used in File Pointer.
$fptr = fopen("myfile.txt", "w");
fwrite($fptr, "This is a first line.");
fclose($fptr);
// Append Method is used in File Pointer.
$fptr = fopen("myfile.txt", "a");
fwrite($fptr, "This is a first line.");
fclose($fptr);
?>