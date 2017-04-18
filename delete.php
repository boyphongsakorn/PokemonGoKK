<?php
require 'sdk/facebook.php';

$facebook = new Facebook(array(
  'appId'  => '186594941759209',
  'secret' => 'de1a28dfd9b5ccd98f3a44ac65b8e99e',
));

// Get User ID
$user = $facebook->getUser();

if ($user) {
  try {
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl();
}

// Logout
if($_GET["Action"] == "Logout")
{
  $facebook->destroySession();
  header("location:login.php");
  exit();
}

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
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Facebook Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <style>
      body {
        font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
      }
      h1 a {
        text-decoration: none;
        color: #3b5998;
      }
      h1 a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
  <center>
    <?php if ($user): ?>
    <?php else: ?>
      <strong><em>You are not Connected.</em></strong>
    <?php endif ?>
  <?php if ($user): ?>
    <?php if ($objResult): ?>
    <form method="post" action="delete_s1.php">
    <input type="hidden" name="id" value="NULL" />
    <table>
    <tr>
    <td colspan="2"><center>
    ตอนนี้คุณอยู่ทีม <?php echo $objResult[Team];?> ต้องการลบออก 
    <input type="submit" target="_top" value="คลิก"!/>
    </center>
    </td>
    </tr>
    </b>
    </table>
    <?php else: ?>
    คุณยังไม่ได้ลงทีมเข้าไปในระบบ <a href="login.php">คลิกที่นี้</a>
    <?php endif ?>
  <?php else: ?>
  <br>
  คุณยังไม่ได้เข้าสู่ระบบ โดยใช้ เฟสบุ๊ค
  <?php endif ?>
  </center>
  </body>
</html>