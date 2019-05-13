<?php
$host="localhost";
$db="takipedi_dene";
$user="takipedi_dene";
$pass="GQu5)y^dC";
$conn=@mysql_connect($host,$user,$pass) or die("Mysql Baglanamadi");
 
mysql_select_db($db,$conn) or die("Veritabanina Baglanilamadi");
mysql_set_charset('latin5',$conn);
?>