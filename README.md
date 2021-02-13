# PokemonGoKK

เป็น Project ที่ สร้างขี้นมาเพื่อให้ทุกคนแชร์ว่าตัวเองอยู่ ทีมอะไร

# สิ่งที่ต้องแก้

config_profile.php

mysql_connect('localhost', 'ชื่อผู้ใช้ฐานข้อมูล', 'รหัสฐานข้อมูล');

mysql_select_db('ชื่อdatabase');

# changetofb_s1.php

$DBhost ="localhost"; //IPDatabase

$DBuser = "boyphon1_pokego"; //mysqluser

$DBpass = "team1556th"; //mysql password

$DBName = "boyphon1_pokego";// database name

$table = "hello"; //table name

# ทุกหน้า

$facebook = new Facebook(array(

  'appId'  => 'ไอดีแอด',

  'secret' => 'รหัสที่สอง',

));

$host = "localhost";

$username = "boyphon1_pokego"; //mysqluser

$password = "team1556th"; //mysql password

$objConnect = mysql_connect($host,$username,$password);

$objDB = mysql_select_db("boyphon1_pokego"); //table name
