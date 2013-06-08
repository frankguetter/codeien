<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_sample = "localhost";
$database_sample = "sample";
$username_sample = "root";
$password_sample = "root";
$sample = mysql_pconnect($hostname_sample, $username_sample, $password_sample) or trigger_error(mysql_error(),E_USER_ERROR); 
?>