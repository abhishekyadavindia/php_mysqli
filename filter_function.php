<?php
$email = "myemail@email.com";
$gmail = "noreply@gmail.com";
// You can Filter Emails using this function.
$verify = filter_var($email, FILTER_VALIDATE_EMAIL);
// There are many more methods to validate other things.
// For more methods of filter_var visit - https://www.php.net/manual/en/function.filter-var
if ($verify) {
    echo 'Success';
}
else {
    echo 'Error';
}
?>