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

php
$host = "localhost";

$username = "boyphon1_pokego"; //mysqluser

$password = "team1556th"; //mysql password

$objConnect = mysql_connect($host,$username,$password);

$objDB = mysql_select_db("boyphon1_pokego"); //table name

$strSQL = "SELECT * FROM hello"; //ไม่ต้องเปลี่ยน

$objQuery = mysql_query($strSQL) or die (mysql_error()); //ไม่ต้องเปลี่ยน

$strSQLei = "SELECT * FROM hello WHERE image = '$user'"; //ไม่ต้องเปลี่ยน

$objQueryei = mysql_query($strSQLei); //ไม่ต้องเปลี่ยน

$objResultei = mysql_fetch_array($objQueryei); //ไม่ต้องเปลี่ยน

$strSQLeiei = "SELECT * FROM hello WHERE iduser = '$user'"; //ไม่ต้องเปลี่ยน

$objQueryeiei = mysql_query($strSQLeiei); //ไม่ต้องเปลี่ยน

$objResulteiei = mysql_fetch_array($objQueryeiei); //ไม่ต้องเปลี่ยน
