# PokemonGoKK

เป็น Project ที่ สร้างขี้นมาเพื่อให้ทุกคนแชร์ว่าตัวเองอยู่ ทีมอะไร

# สิ่งที่ต้องแก้

config_profile.php

<?php
//We start sessions
session_start();

/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the members area
can work correctly.
******************************************************/

//We log to the DataBase
mysql_connect('localhost', 'username', 'รหัสmysql');
mysql_select_db('ชื่อdatabase');

//Webmaster Email
$mail_webmaster = 'example@example.com';

//Top site root URL
$url_root = 'http://www.example.com';

/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Home page file name
$url_home = 'index.php';

//Design Name
$design = 'default';
?>

changetofb_s1.php

$DBhost ="localhost"; //IPDatabase
$DBuser = "boyphon1_pokego"; //mysqluser
$DBpass = "team1556th"; //mysql password
$DBName = "boyphon1_pokego";// database name
$table = "hello"; //table name

ทุกหน้า

$facebook = new Facebook(array(
  'appId'  => 'ไอดีแอด',
  'secret' => 'รหัสที่สอง',
));

<?php
$host = "localhost";
$username = "boyphon1_pokego"; //mysqluser
$password = "team1556th"; //mysql password
$objConnect = mysql_connect($host,$username,$password);

$objDB = mysql_select_db("boyphon1_pokego"); //table name
$strSQL = "SELECT * FROM hello";
$objQuery = mysql_query($strSQL) or die (mysql_error());
$strSQLei = "SELECT * FROM hello WHERE image = '$user'";
$objQueryei = mysql_query($strSQLei);
$objResultei = mysql_fetch_array($objQueryei);
$strSQLeiei = "SELECT * FROM hello WHERE iduser = '$user'";
$objQueryeiei = mysql_query($strSQLeiei);
$objResulteiei = mysql_fetch_array($objQueryeiei);
?>
