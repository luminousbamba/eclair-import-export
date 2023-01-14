<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connexiontable = "localhost";
$database_connexiontable = "eclair";
$username_connexiontable = "root";
$password_connexiontable = "";
$connexiontable = mysql_pconnect($hostname_connexiontable, $username_connexiontable, $password_connexiontable) or trigger_error(mysql_error(),E_USER_ERROR); 
?>