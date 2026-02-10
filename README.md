# <center>PRESENTING MY LATHP LEGACY - 4 Importance of PHP Session</center>
## What is this website do ?
* This website is for DAMN Poster Login page.
## RECOMMENDED WAY TO CLONE
* `git clone https://github.com/KuberaKrishna/LAHTP-LEGACY-4.git PhpSession` || if you are not using the default 'PhpSession', have to replace 'PhpSession' to 'Your filename' in _libs/load.php line 7.
## Read this before executing in Linux
* Move the configuration folder to /var/www/ (Due to file permissions).
* Works perfectly in Mac and Windows.
## SETTING UP DATABASE ENVIRONMENT
* To create user in adminer, use sql/adminer-user.sql
* To create DB in adminer, use sql/adminer-sql.sql
* To create user in phpmyadmin, use sql/phpmyadmin-user.sql
* To create DB in phpmyadmin, use sql/phpmyadmin-sql.sql
## SQLi and XSS ?
* This website is considered safe from SQL injection (SQLi) and cross-site scripting (XSS). It uses prepared statements to prevent SQL injection and sanitized input.
* This website was tested using a legal tool called SQLMap.
* The Password hashing method used is, PASSWORD_BCRYPT cost of 9.
### LIST OF USER YOU CAN LOGIN
- Adam
- Alan Palker
- Ben Tennyson
- Bhomas Tangalter
- Bijoy
- Bob
- Cactus Jack
- Kevin
- Lendrick Kumar
- Ninja
- Paul
- Sony Moore
- Willem Dafoe
* password for all user `123456789`