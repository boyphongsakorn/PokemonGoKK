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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">หน้าแก้ไขทีม</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php"><--- กลับไปที่หน้าหลัก</a></li>
      <li><a href="login.php">หน้าแรก</a></li>
      <li><a href="edit.php">แก้ไขทีม</a></li>
      <li><a href="delete.php">ลบทีม</a></li>
      <li class="active"><a href="editimage.php">เปลี่ยนรูปโปรไฟล์</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if ($user): ?>
      <li><a href="?Action=Logout">ออกจากระบบ</a></li>
      <?php else: ?>
      <li><a href="<?php echo $loginUrl; ?>">เข้าสู่ระบบ</a></li>
      <?php endif ?>
    </ul>
  </div>
</nav>

    <?php if ($user): ?>
      <h3>ยินดีต้อนรับ <?php print_r($user_profile[name]); ?></h3>
      <img src="https://graph.facebook.com/<?php echo $user; ?>/picture">
      <h3>ชื่อ และ ไอดี</h3>
      <pre><?php print_r($user_profile[name]); ?></pre>
      <pre><?php print_r($user_profile[id]); ?></pre>
    <?php else: ?>
      <strong><em>You are not Connected.</em></strong>
    <?php endif ?>
  
  <?php if ($user): ?>
    <br>
    <form method="post" action="editimage_s1.php">
    <input type="hidden" name="id" value="NULL" />
    <table>
    <tr>
    <td colspan="2"><center>
    <?php if ($objResult[image] == " "): ?>
    ตอนนี้คุณใช้รูปที่คุณเลือกเอง
    <?php else: ?>
    ตอนนี้คุณใช้รูปของ Facebook อยู่
    <?php endif ?>
    <br>
    ต้องการจะเปลี่ยนรูปเปน (ใส่ที่อยู่รูปของคุณ)
    <br>
    <input type="text" name="imageurl" id="imageurl"/>
    <input  type="submit" value="send"!/>
    <br>
    **ถ้าเปลี่ยนแล้ว ท่านจะไม่สามารถเปลี่ยนกลับไปเป็น รูปโปรไฟล์ของท่าน ได้อีกเลย**
    </center>
    </td>
    </tr>
    </b>
    </table>
  <?php else: ?>
  <br>
  คุณยังไม่ได้เข้าสู่ระบบ โดยใช้ เฟสบุ๊ค
  <?php endif ?>
  </center>
  </body>
</html>