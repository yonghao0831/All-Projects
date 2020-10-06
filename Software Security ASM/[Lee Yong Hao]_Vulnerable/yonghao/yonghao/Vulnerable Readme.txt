I included the database file in "yonghao" folder with other php file
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
I included a malicious file in a folder called "yonghao" to be used in the upload vulerability
<important>

there is a malicious code file to test out this attack.
hackscript.html = pop out the session ID once it is executed

1. Open the upload picture page(requires login)
localhost:80/yonghao/yonghao/upload.php

2. Choose hackscript.html to prove the attack and upload it

3. Open MyPicture on the navigation bar, it should lead to a directory that contains all the uploaded files.

4. Run the uploaded malicious file, the malicious code should run and show the result.



Second Vulnerability - Login SQL Injection

sql command used : ' or '1'='1

1. Open the login.php (which is the login page) 
localhost:80/yonghao/yonghao/login.php

2. Use the sql command rather than normal password and username to login

3. There are no security checking hence the attacker are able to login without the correct credentials



Third Vulnerability - Cross-site Scripting (XSS) - Reflected XSS Vulnerability

css command used : <img%20src=x%20onMouseOver=alert(document.cookie)>

1. Open the search page (requires login)
localhost:80/yonghao/yonghao/search.php

2. Use the css command rather than normal user ID

3. After use css command, there will create a small icon

4. Once the user hovers his mouse icon to the image, the attacker will be able to get the victim session ID


   