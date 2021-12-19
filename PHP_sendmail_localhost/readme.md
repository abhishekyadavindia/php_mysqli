<!-- First in your XAMPP/WAMP Server go to main folder in our case we would take case of xampp same process for WAMP users. -->
<h1>PHP-How to send mail in Localhost</h1>
First in your XAMPP Server go to C:\xampp\php (or that path where you have installed XAMPP and go to php folder in that)<br>
Then find "php.ini" file or there can be two files name "php.ini-development" and "php.ini-production"<br>
Open that file/files in your text editor.<br>
Search for SMTP in that file php.ini or that two files also.<br>
In the case you have both files do changes in both of them.<br>
Do this changes there<br>
SMTP = smtp.gmail.com<br>
smtp_port = 587<br>
sendmail_from = Your email address@gmail.com<br>
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe" -t"
<hr><div style="background: ghostwhite; 
            font-size: 20px; 
            padding: 10px; 
            border: 1px solid lightgray; 
            margin: 10px;">
  <b>Note</b>: Please check whether to remove ; from above of this written things because ; represents comment in ini file.
</div>
<hr>Now go to C:\xampp\sendmail<br>
And open sendmail.ini file in your text editor.<br>
Changes to do are:<br>
smtp_server = smtp.gmail.com<br>
smtp_port = 587 (or 25)<br>
error_logfile=error.log<br>
debug_logfile=debug.log<br>
auth_username=Your Email address entered in php.ini @gmail.com<br>
auth_password=Password of your gmail<br>
force_sender=Your Gmail @gmail.com<br>
Use   
