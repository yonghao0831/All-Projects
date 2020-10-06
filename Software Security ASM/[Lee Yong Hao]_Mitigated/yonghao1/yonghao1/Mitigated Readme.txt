I included the database file in "yonghao1" folder with other php file
database name = login.sql
table name = users

Username	Password
 admin	admin
 user	user
 user2	user2pass
 user4 	jason
 harlou 	harloupassword
 hackme	hackmepass

Main Website Function File
index.php = homepage after login that allow the user to access to certain function such as upload file and search friends
login.php = login page (contain vulnerability)
search.php = search friend page based on user ID (contain vulnerability)
upload.php = upload image page (contain vulnerability)

Other Website Function File
logout.php = a function that is used when a user log out
session.php = a function that restrict the user from accessing the homepage without logging in
dbcon.php = a function that connects to the database



First Vulnerability - File Upload Vulnerability

<important>
I included a malicious file in a folder called "yonghao1" to be used in the upload vulerability
<important>

there is a malicious code file to test out this attack.
hackscript.html = pop out the session ID once it is executed

1. Open the upload picture page(requires login)
localhost:80/yonghao1/yonghao1/upload.php

2. Choose hackscript.html to prove the attack and upload it

3. The attacker are now unable to upload script file as there are now file checking that prevent script files to be uploaded to the server

3. Open MyPicture on the navigation bar, it should lead to a directory that contains all the uploaded files.

4. The uploaded file should not be available in the directory as it is blocked by the system



Second Vulnerability - Login SQL Injection

sql command used : ' or '1'='1

1. Open the login.php (which is the login page) 
localhost:80/yonghao1/yonghao1/login.php

2. Use the sql command rather than normal password and username to login

3. The attacker are now unable to login using this vulnerability anymore, as there are now data sanitzation changing all the ' symbol to \  causing the command incomplete so that it cannot be used



Third Vulnerability - Cross-site Scripting (XSS) - Reflected XSS Vulnerability

css command used : <img%20src=x%20onMouseOver=alert(document.cookie)>

1. Open the search page (requires login)
localhost:80/yonghao1/yonghao1/search.php

2. Use the css command rather than normal user ID

3. The attacker are now unable to create an extra form using the vulnerability, when the attacker use script for the input in the field, the script will sanitized and removed



Steps for prevention

unrestricted file upload = file type other than png, jpg and jpeg will be blocked

sql injection =  (') into (\') that are contained in ' or '1'='1

XSS reflected =  <script> will be replaced with empty spaces

   