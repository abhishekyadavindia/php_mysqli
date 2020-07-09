<?php
// fgetc literally means f for file, get and c for character so it means getting first character from file.
// fgets literally means f for file, get and s for sentence. So it means getting first sentence from file.
// Usage:
// fgetc("filepointer");
// fgets("filepointer");
$fptr = fopen("file.txt", "r");
// echo fgets($fptr) . "<br/>";
// echo fgetc($fptr);
// Writing whole file using fgets and fgetc using while loop.
while ($a = fgets($fptr)) {
    echo $a . "<br>";
}
while ($b = fgetc($fptr)) {
    echo $b;
}
// Write a program which reads the content of a file until full stop has been encountered
while ($c = fgetc($fptr)) {
    echo $c;
    if ($a == ".") {
    break;
    }
}

?>