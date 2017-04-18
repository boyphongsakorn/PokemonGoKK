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
?>
<?php
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
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <script src="sadist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sadist/sweetalert.css">
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
<style type="text/css">
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}

.modal-body {
  padding: 0px !important;
}
</style>
<script type="text/javascript">
$('#whatisyoutuber_help').on('shown.bs.modal', function () {
  $('#whatisyoutuber_help').focus()
})
</script>
</head>
<body>
  <center>
  <?php if ($user): ?>
    <?php else: ?>
      <a href="<?php echo $loginUrl; ?>" target="_top"><img src="http://ezyfind.co.za/Images/facebook-login.png" width="180" height="35.063"></a>
    <?php endif ?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">จัดการบัญชี</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php" target="_top"><--- กลับไปที่หน้าหลัก</a></li>
      <li class="active"><a href="login.php">หน้าแรก</a></li>
      <?php if ($user): ?>
        <?php if ($objResult): ?>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">จัดการบัญชี</a>
        <ul class="dropdown-menu">
        <li><a href="edit.php#editteam">แก้ไขทีม</a></li>
        <li><a href="edit.php#deleteteam">ลบทีม</a></li>
        <li><a href="profileset.php#editimage">เปลี่ยนรูปโปรไฟล์</a></li>
        <li><a href="profileset.php#editsocial">แก้ไขโซเชียล</a></li>
        </ul>
        </li>
          <?php if ($objResult[youtuber] == '1'): ?>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Youtuber Settings</a>
          <ul class="dropdown-menu">
          <li><a href="profileset.php#editsocial">แก้ไขโซเชียล</a></li>
          <li><a href="profileset.php#changename">เปลี่ยนชื่อ</a></li>
          </ul>
          </li>
          <?php else: ?>
          <?php endif ?>
        <?php else: ?>
        <?php endif ?>
      <?php else: ?>
      <?php endif ?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if ($user): ?>
      <li><a href="?Action=Logout">ออกจากระบบ</a></li>
      <?php else: ?>
      <li><a href="<?php echo $loginUrl; ?>" target="_top">ล็อกอินผ่าน <img src="http://ezyfind.co.za/Images/facebook-login.png" width="105" height="20.453"></a></li>
      <?php endif ?>
    </ul>
  </div>
</nav>
<?php
$count_dog = str_word_count($objResult["Name"]);
$edog = (str_word_count($objResult["Name"],1));
?>
<?php if ($user): ?>
<div class="container">
    <div class="row profile">
    <div class="col-md-3">
      <div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        <div class="profile-userpic">
          <?php if ($objResult["image"] == " "):?>
          <img src='<?php echo $objResult["imageurl"];?>' class="img-responsive" alt="">
          <?php else: ?>
          <img src='https://graph.facebook.com/<?php echo $user;?>/picture' class="img-responsive" alt="">
          <?php endif ?>
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
            <?php print_r($user_profile[name]); ?>
          </div>
          <?php if ($objResult[Team]): ?>
          <div class="profile-usertitle-job">
            <?php echo $objResult[Team];?>
          </div>
          <?php else :?>
          <div class="profile-usertitle-job">
            ยังไม่มีทีม
          </div>
          <?php endif ?>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <!--div class="profile-userbuttons">
          <button type="button" class="btn btn-success btn-sm">Follow</button>
          <button type="button" class="btn btn-danger btn-sm">Message</button>
        </div-->
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu">
          <ul class="nav">
            <li class="active">
              <a href="login.php">
              <i class="glyphicon glyphicon-home"></i>
              Overview </a>
            </li>
            <li>
              <a href="edit.php">
              <i class="glyphicon glyphicon-user"></i>
              My Team </a>
            </li>
            <li>
              <a href="profileset.php">
              <i class="glyphicon glyphicon-cog"></i>
              Account Settings </a>
            </li>
            <li>
              <a href="help.html">
              <i class="glyphicon glyphicon-flag"></i>
              Help </a>
            </li>
          </ul>
        </div>

<!--จบ เมนู-->
</div>
    </div>
    <?php else: ?>
      <?php endif ?>
  <?php if ($user): ?>
    <div class="col-md-9">
            <div class="profile-content">
      <h4>ยินดีต้อนรับ <?php print_r($user_profile[name]); ?></h4>
      <h4>สถานะต่างๆ</h4>
      <pre>ชื่อ : <?php print_r($user_profile[name]); ?></pre>
      <pre>ไอดี : <?php print_r($user_profile[id]); ?></pre>
      <pre>ทีม : <?php if ($objResult[Team]): ?><?php echo $objResult[Team];?><?php else: ?>ยังไม่มีทีม<?php endif ?></pre>
      <pre>บัญชี : <?php if ($objResult[youtuber] == '0'): ?>ปกติ<?php else: ?>Youtuber<?php endif ?> | <a href="https://docs.google.com/forms/d/e/1FAIpQLSeD6oeB2NNUI81VIe4y4nTepOwAsfWvzYT_3J4NiMdX5T5A6g/viewform">ส่งเรื่องของบัญชี Youtuber</a> | <a data-toggle="modal" data-target="#whatisyoutuber_help">บัญชี Youtuber คืออะไร ?</a></pre>
      <!-- Modal -->
<div class="modal fade" id="whatisyoutuber_help" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">บัญชี Youtuber คืออะไร ?</h4>
      </div>
      <div class="modal-body">
บัญชี Youtuber คือ บัญชีสำหรับชาวผู้ทำคลิปใน Youtube<br>
เป็นบัญชี Youtuber แล้วทำอะไรได้บ้าง ?<br>
1. เปลี่ยนชื่อได้ (ระบบจะเปลี่ยนชื่อเป็น ช่อง Youtube ของคุณให้ตอนแรก)<br>
2. สามารถเปลี่ยนจาก Social 3 ปุ่ม เป็นปุ่ม Subscribe ได้ (ปุ่ม Subscribe ระบบจะตั้งมาให้อยู่แล้ว แต่ถ้าต้องการเปลี่ยนสามารถเปลี่ยนได้)<br>
แล้วอื่นๆ อีกมากมาย ที่จะตามมาในภายหลัง
      </div>
    </div>
  </div>
</div>
    <?php else: ?>
      <a href="<?php echo $loginUrl; ?>"><img src="http://ezyfind.co.za/Images/facebook-login.png" width="180" height="35.063"></a>
      <br>
      <strong><em>ถ้าไม่สามารถ ล็อกอินได้</em></strong>
    <?php endif ?>
  <?php if ($user): ?>
    <?php if ($objResult): ?>
    <h4>จัดการทีมที่คุณอยู่</h4>
    <pre>ตอนนี้คุณอยู่ทีม <?php echo $objResult[Team];?> <a href="edit.php#editteam"><button type="button" class="btn btn-primary btn-xs">แก้ไข</button></a> <a data-toggle="modal" data-target="#editteam_help"><button type="button" class="btn btn-primary btn-xs">ลบ</button></a></pre>
    <?php else: ?>
    <pre>ตอนนี้คุณยังไม่มีทีม <a href="edit.php#addteam">เพิ่มทีม</a></pre>
    <?php endif ?>
  <?php else: ?>
  <br>
  ให้กด Login ใหม่อีกครั้ง
  <br>
  ถ้ายังไม่ได้อีกให้ โหลดหน้านี้ใหม่ แล้วกด ล็อกอินอีกครั้ง
  <br>
  (ส่วนมากจะเจอในปัญหานี้ในมือถือ)
  <?php endif ?>
  </div>
    </div>
  </div>
</div>
<div class="modal fade" id="editteam_help" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ลบทีม</h4>
      </div>
      <div class="modal-body">
        <?php if ($objResult): ?>
    <form method="post" action="delete_s1.php">
    <input type="hidden" name="id" value="NULL" />
    <table>
    <tr>
    <td colspan="2"><center>
    ตอนนี้คุณอยู่ทีม <?php echo $objResult[Team];?> ต้องการลบออก 
    <input type="submit" target="_top" value="คลิก"! onclick="return confirm('คุณแน่ใจแล้วใช่ไหม ที่จะลบ?')" />
    </center>
    </td>
    </tr>
    </b>
    </table>
    <?php else: ?>
    คุณยังไม่ได้ลงทีมเข้าไปในระบบ <a href="login.php">คลิกที่นี้</a>
    <?php endif ?>
      </div>
    </div>
  </div>
</div>
  </center>
  </body>
</html>