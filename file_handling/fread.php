<?php
$fptr = fopen("file.txt", "r");
// fread Function
// fread literally means f for file and read.
// $content = fread($fptr, text length of file to write)
// For finding text length of file you can use function.
// filesize("file name.file extension");
$content = fread($fptr, filesize("file.txt"));

?>