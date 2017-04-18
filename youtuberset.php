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
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
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

.form-control {
  width: 30% !important;
  display: inline !important;
}

select.form-control option.I
{
    background-color: #FFFF00;
}

select.form-control option.M
{
    background-color: #0033FF;
}

select.form-control option.V
{
    background-color: #FF0000;
}
</style>
<script type="text/javascript">
$('#proset_help').on('shown.bs.modal', function () {
  $('#proset_help').focus()
})
$('#prosetcover_help').on('shown.bs.modal', function () {
  $('#prosetcover_help').focus()
})
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</head>
<body>
  <center>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">จัดการบัญชี</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php"><--- กลับไปที่หน้าหลัก</a></li>
      <li><a href="login.php">หน้าแรก</a></li>
      <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">จัดการบัญชี</a>
      <ul class="dropdown-menu">
      <li><a href="edit.php#editteam">แก้ไขทีม</a></li>
      <li><a href="edit.php#deleteteam">ลบทีม</a></li>
      <li><a href="edit.php#editimage">เปลี่ยนรูปโปรไฟล์</a></li>
      <li><a href="edit.php#editsocial">แก้ไขโซเชียล</a></li>
      <li><a href="profileset.php">ตั้งค่าโปรไฟล์</a></li>
      </ul>
      </li>
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
<!--เริ่มเมนู-->
<?php
$count_dog = str_word_count($objResult["Name"]);
$edog = (str_word_count($objResult["Name"],1));
?>
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
          <?php if ($count_dog > 2):?>
          <div class="profile-usertitle-name">
            <?php echo $edog["0"];?> <?php echo $edog["2"];?>
          </div>
          <div class="profile-usertitle-job">
            <?php echo $objResult[Team];?>
          </div>
          <?php else: ?>
          <div class="profile-usertitle-name">
            <?php echo $edog["0"];?> <?php echo $edog["1"];?>
          </div>
          <div class="profile-usertitle-job">
            <?php echo $objResult[Team];?>
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
            <li>
              <a href="login.php">
              <i class="glyphicon glyphicon-home"></i>
              Overview </a>
            </li>
            <li>
              <a href="edit.php">
              <i class="glyphicon glyphicon-user"></i>
              Account Settings </a>
            </li>
            <li class="active">
        <a href="#" target="_blank">
        <i class="glyphicon glyphicon-cog"></i>
        Custom Profile</a>
      </li>
            <li>
              <a href="help.html">
              <i class="glyphicon glyphicon-flag"></i>
              Help </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
<!--จบเมนู-->
<?php if ($user): ?>
      <div class="col-md-9">
            <div class="profile-content">
      <h3>หน้าตั้งค่าโปรไฟล์</h3>
      <h4>สถานะ</h4>
      <pre>ชื่อ : <?php print_r($user_profile[name]); ?></pre>
      <pre>ไอดี : <?php print_r($user_profile[id]); ?></pre>
    <?php else: ?>
      <strong><em>You are not Connected.</em></strong>
    <?php endif ?>
    <?php if ($user): ?>
    <?php if ($objResult[profileset]): ?>
    <form method="post" action="proset_s1.php">
    <input type="hidden" name="id" value="NULL" />
    <h4>เลือกรูปแบบโปรไฟล์ของคุณ <a data-toggle="modal" data-target="#proset_help"><i class="fa fa-question-circle" aria-hidden="true"></i></a></h4>
    <pre>ตอนนี้คุณเลือกแบบที่ <?php echo $objResult[profileset];?></pre>
    <pre>คุณต้องการรูปแบบ <select class="form-control" name="proid">
    <option value="1"><font color="white">1</font></option>
    <option value="2"><font color="white">2</font></option>
    <option value="3"><font color="white">3</font></option>
    </select> <input  type="submit" class="btn btn-primary btn-xs" value="send"!/></pre>
    </form>
    <?php else: ?>
    <form method="post" action="proset_s1.php">
    <input type="hidden" name="id" value="NULL" />
    <h4>เลือกรูปแบบโปรไฟล์ของคุณ <a data-toggle="modal" data-target="#proset_help"><i class="fa fa-question-circle" aria-hidden="true"></i></a></h4>
    <pre>คุณต้องการรูปแบบ <select class="form-control" name="proid">
    <option value="1"><font color="white">1</font></option>
    <option value="2"><font color="white">2</font></option>
    <option value="3"><font color="white">3</font></option>
    </select> <input  type="submit" class="btn btn-primary btn-xs" value="send"!/></pre>
    </form>
    <?php endif ?>
    <h4>แก้ไข หน้า Player ของคุณ <a data-toggle="modal" data-target="#prosetcover_help"><i class="fa fa-question-circle" aria-hidden="true"></i></a></h4>
    <form method="post" action="editcover_s1.php">
    <input type="hidden" name="id" value="NULL" />
    <pre>หน้าของรูปภาพคือ 1140x376
    <input type="text" name="imageurl" id="imageurl" class="form-control" placeholder="Url รูปภาพ"/> <?php if ($objResult[image] == " "): ?><input type="submit" class="btn btn-primary btn-xs" value="send"!/><?php else: ?><input type="submit" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="ถ้าเปลี่ยนแล้ว จะไม่สามารถเปลี่ยนกลับไปเป็นรูปโปรไฟล์ของเฟสได้" value="send"!/><?php endif ?></form></pre>
          <!-- Modal -->
<div class="modal fade" id="proset_help" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">รูปแบบของ โปรไฟล์</h4>
      </div>
      <div class="modal-body">
      	แบบที่ 1<br>
        <img src="http://brsocial.esy.es/1.PNG"><br>
        แบบที่ 2<br>
        <img src="http://brsocial.esy.es/2.PNG"><br>
        แบบที่ 3<br>
        <img src="http://brsocial.esy.es/1.PNG"><br>
        เหมือนแบบที่หนึ่ง แต่ คลิกที่รูปโปรไฟล์ แล้วมันจะไป<a href="http://kkgo.boyphongsakorn.xyz/player.php?iduser=<?php print_r($user_profile[id]); ?>" target="_blank">ที่นี้</a><br>
        แบบที่3 แนะนำให้ใช้ตอนที่เพิ่ม Twitter ของเราเข้าไปแล้วน่ะครับ
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="prosetcover_help" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">รูปแบบและขนาดของหน้าปก โปรไฟล์</h4>
      </div>
      <div class="modal-body">
      	Coming Soon....
      </div>
    </div>
  </div>
</div>
  <?php else: ?>
  <br>
  คุณยังไม่ได้เข้าสู่ระบบ โดยใช้ เฟสบุ๊ค
  <?php endif ?>
</body>
</html>