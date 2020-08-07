<?php
// $_SERVER is Super Global used for checking web requests and many other things from server.
// $_SERVER['PHP_SELF']
/*
Returns the File Name of Current Executing Script.
Note: Used also in action attribute of HTML in PHP for executing server request of forms.
*/
// $_SERVER['REQUEST_URI']
/* 
Tells Uniform Resource Identifier(URI) for REQUEST in SERVER.
*/
// $_SERVER['REQUEST_METHOD']
/*
 * Used for checking server request method which can be post or get.
 */
// $_SERVER['NAME']
/*
Returns the name of host server.
*/
// $_SERVER['GATEWAY_INTERFACE']
/*
Returns the version of the Common Gateway Interface (CGI) the server is using.
In computing, Common Gateway Interface (CGI) is an interface specification for web servers to execute programs like console applications (also called command-line interface programs) running on a server that generates web pages dynamically. Such programs are known as CGI scripts or simply as CGIs. The specifics of how the script is executed by the server are determined by the server. In the common case, a CGI script executes at the time a request is made and generates HTML.
In brief, an HTTP GET or POST request from the client may send HTML form data to the CGI program via standard input. Other data, such as URL paths, and HTTP header data, are presented as process environment variables.
*/
// $_SERVER['SERVER_ADDR']
/*
Returns the IP address of the host server.
*/
// $_SERVER['SERVER_SOFTWARE']
/*
Returns the server identification string (such as Apache/2.2.24).
*/
// $_SERVER['SERVER_PROTOCOL']
/*
Returns the name and revision of the information protocol (such as HTTP/1.1)
*/
// $_SERVER['REQUEST_TIME']	
/*
Returns the timestamp of the start of the request (such as 1377687496).
*/
// $_SERVER['HTTPS']
/*
Is the script queried through a secure HTTP protocol.
*/
// 
echo $_SERVER['PHP_SELF']. "<br>";
echo $_SERVER['REQUEST_URI']. "<br>";
echo $_SERVER['REQUEST_METHOD']. "<br>";
// echo $_SERVER['NAME']."<br>"; ---> Returns Error if not connected to Database.
echo $_SERVER['GATEWAY_INTERFACE']."<br>";
echo $_SERVER['SERVER_ADDR']."<br>";
echo $_SERVER['SERVER_SOFTWARE']."<br>";
echo $_SERVER['REQUEST_TIME']."<br>";
// echo $_SERVER['HTTPS']."<br>";---> Returns Error if no HTTPS Connection.
echo $_SERVER['REMOTE_ADDR']."<br>";
// echo $_SERVER['REMOTE_HOST']."<br>";
echo $_SERVER['REMOTE_PORT']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
?>