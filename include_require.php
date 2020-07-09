<?php
// Include and require both imports file in your file but in the case of file is not found and there is no error in your impoting file and some codes are written, include would execute the program with giving some Warning. But require would give you fatal error and wouldn't execute anything.
// In the case you are unable to understand it you can mail me at abhishekyadav95869@gmail.com.
include "mysql_connect.php";
require "mysql_connect.php";
echo "There is an Error."
// Require Once/Include Once
// Here also Require function would require file once but include would not.
/* The require_once() statement is identical to require() except PHP will check if the file has already been included, and if so, not include (require) it again.*/
// require_once("mysql.php");
// The include_once() statement includes and evaluates the specified file during the execution of the script. This is a behavior similar to the include() statement, with the only difference being that if the code from a file has already been included, it will not be included again. As the name suggests, it will be included just once.

// include_once() may be used in cases where the same file might be included and evaluated more than once during a particular execution of a script, so in this case it may help avoid problems such as function redefinitions, variable value reassignments, etc.
// include_once("mysql.php");

?>