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
<!DOCTYPE html>
<html>
<head>
	<title>PHP and mysql</title>
</head>
<body>
<center>
ลบเรียบร้อยแล้ว
<br>
ชื่อ:<?php echo $user_profile[name];?><br><a href="index.php" target="_top">กลับไปหน้าแรก</a>
<?php
$sqlquery = "DELETE FROM $table WHERE iduser ='$user'";
$results=mysql_query($sqlquery);
?>
</center>
</body>
</html>
<?php
mysql_close();
?>