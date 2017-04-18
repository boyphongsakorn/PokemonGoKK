<?php
require 'sdk/facebook.php';

$facebook = new Facebook(array(
  'appId'  => '186594941759209',
  'secret' => 'de1a28dfd9b5ccd98f3a44ac65b8e99e',
));

$user = $facebook->getUser();

if ($user) {
  try {
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

/**
 * @author runeveryday
 * @copyright 2010
 */

$DBhost ="localhost"; 
$DBuser = "boyphon1_pokego"; //mysqluser
$DBpass = "team1556th"; //mysql password
$DBName = "boyphon1_pokego";// database name
$table = "hello"; //table name
mysql_connect($DBhost,$DBuser,$DBpass) or die("error");
mysql_select_db("$DBName") or die("error");
$strSQL = "SELECT * FROM $table WHERE iduser = '$user'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
?>
<?php if ($objResult): ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP and mysql</title>
</head>
<body>
<center>
แก้ไขข้อมูลแล้ว
<br>
ลิงค์รูปภาพ:<?php echo $user;?><br>ชื่อ:<?php echo $user_profile[name];?><br>ทีม:<?php echo $_POST[Team];?><br><a href="index.php">กลับไปหน้าแรก</a>
<?php
$sqlquery = "UPDATE $table SET Team = '$_POST[Team]' WHERE iduser = '$user'";
$results=mysql_query($sqlquery);
?>
<?php else:?>
คุณเคยลงข้อมูลไว้แล้ว <a href="index.php">กลับไปหน้าแรก</a>
<?php endif ?>
</center>
</body>
</html>
<?php
mysql_close();
?>