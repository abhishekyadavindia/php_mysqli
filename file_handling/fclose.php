<?php
$fptr = fopen("file.txt", "r");
$content = fread($fptr, filesize("file.txt"));
// Lastly we have to close file handling using fclose.
// Usage:
// fclose(file pointer);
fclose($fptr);
?>