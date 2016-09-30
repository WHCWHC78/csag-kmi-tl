<?php
require "mysql.php";


//รายละเอียดฐานข้อมูล
$dbhost = 'localhost';
$dbusername = 'root';
$dbpass = "";
$dbname = 'csag';


$mysql = new MySQL_Connection($dbhost, $dbusername,$dbpass, $dbname);
$mysql->charset = 'utf8';


$conn=@mysql_connect($dbhost,$dbusername,$dbpass)or die("Cannot select DB");
$db=mysql_select_db($dbname)or die("Cannot select DB");
mysql_query("SET NAMES utf8");
?>
