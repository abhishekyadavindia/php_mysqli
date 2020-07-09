<?php
// fopen means literally f as file and open so it enables us to use file to open in an php script with some modes like w for write, r for reading and a for append.
// More modes can be found on PHP Manual.
// fptr is not function in php we create a variable for fopen using fptr because fptr literally means file pointer.
// File Pointer in  any Programming Language means a function which points to our file. In php that function of file pointer is fopen()
// Usage:
// fopen("name of file.file extension", "mode of using it");
$fptr = fopen("file.txt", "r");
// Error Handling using if-else statement
if (!$fptr) {
    die("Unable to open file.txt");
}
else {
    // No Error it would run $fptr
}
?>