<?php
//99% gak usah diganti
$host = 'localhost';
$user = 'root';
$pass = '';
//buat connect ke database
	mysql_connect($host, $user, $pass) or die (mysql_error());
	mysql_select_db('agus') or die (mysql_error());
?>