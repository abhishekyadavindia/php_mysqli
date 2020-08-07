<!-- First in your XAMPP/WAMP Server go to main folder in our case we would take case of xampp same process for WAMP users. -->
First in your XAMPP Server go to C:\xampp\php (or that path where you have installed XAMPP and go to php folder in that)
Then find "php.ini" file or there can be two files name "php.ini-development" and "php.ini-production"
Open that file/files in your text editor.
Search for SMTP in that file php.ini or that two files also.
In the case you have both files do changes in both of them.
Do this changes there
SMTP = smtp.gmail.com
smtp_port = 587
sendmail_from = Your email address@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe" -t"
--------------------------------------------Note: Please check whether to remove ; from above of this written things because ; represents comment in ini file.
--------------------------------------------Now go to C:\xampp\sendmail
And open sendmail.ini file in your text editor.
Changes to do are:
smtp_server = smtp.gmail.com
smtp_port = 587 (or 25)
error_logfile=error.log
debug_logfile=debug.log
auth_username=Your Email address entered in php.ini @gmail.com
auth_password=Password of your gmail
force_sender=Your Gmail @gmail.com
Use   