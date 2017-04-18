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
      <li><a href="profileset.php#editimage">เปลี่ยนรูปโปรไฟล์</a></li>
      <li><a href="profileset.php#editsocial">แก้ไขโซเชียล</a></li>
      <li><a href="profileset.php">ตั้งค่าโปรไฟล์</a></li>
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
              My Team </a>
            </li>
            <li class="active">
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
      <h4>สถานะบัญชี</h4>
      <pre>ตอนนี้บัญชีของคุณคือ <?php if ($objResult[youtuber] == "0"): ?>ปกติ<br>ถ้าต้องการบัญชี Youtuber สามารถส่งคำขอได้<a href="https://goo.gl/forms/1DgBkOGcVLmncALX2" target="_black">ที่นี้</a><?php else: ?>Youtuber<?php endif ?></pre>
    <?php else: ?>
      <strong><em>You are not Connected.</em></strong>
    <?php endif ?>
    <?php if ($user): ?>
    <?php if ($objResult[profileset]): ?>
    <?php if ($objResult): ?>
    <h4 id="changename">เปลี่ยนชื่อ <a data-toggle="modal" data-target="#changename_help"><i class="fa fa-question-circle" aria-hidden="true"></i></a></h4>
    <form method="post" action="changename_s1.php">
    <input type="hidden" name="id" value="NULL" />
<pre><?php if ($objResult[youtuber] == "1"): ?>เปลี่ยนชื่อเป็น
<input type="text" name="changename" id="changename" class="form-control" placeholder="ชื่อ"/> <input type="submit" class="btn btn-primary btn-xs" value="send"!/>
<?php else: ?>เฉพาะ บัญชี Youtuber เท่านั่น<?php endif ?></form></pre>
    <form method="post" action="proset_s1.php">
    <input type="hidden" name="id" value="NULL" />
    <h4>เลือกรูปแบบโปรไฟล์ของคุณ <a data-toggle="modal" data-target="#proset_help"><i class="fa fa-question-circle" aria-hidden="true"></i></a></h4>
    <pre>ตอนนี้คุณเลือกแบบที่ <?php echo $objResult[profileset];?></pre>
    <pre>คุณต้องการรูปแบบ <select class="form-control" name="proid">
    <option value="1"><font color="white">1</font></option>
    <option value="2"><font color="white">2</font></option>
    <option value="3"><font color="white">3</font></option>
    <?php if ($objResult[youtuber] == "1"): ?><option value="4"><font color="white">4</font></option><?php else: ?><?php endif ?>
    <option value="5"><font color="white">5</font></option>
    </select> <input  type="submit" class="btn btn-primary btn-xs" value="send"!/></pre>
    </form>
<pre>id เว็บ profile <input type="text" name="profileid" id="profileid" class="form-control" placeholder="id เว็บ profile.boyphongsakorn.xyz" <?php if ($objResult[profileset] == '5'): ?><?php else: ?> readonly <?php endif ?> /></pre>
    <h4 id="editimage">เปลี่ยนรูปโปรไฟล์ <a data-toggle="modal" data-target="#editimage_help"><i class="fa fa-question-circle" aria-hidden="true"></i></a></h4>
<!-- Modal -->
<div class="modal fade" id="editimage_help" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">วิธีการเปลี่ยนรูปโปรไฟล์</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://player.vimeo.com/video/182864759" width="570" height="291" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
    <form method="post" action="editimage_s1.php">
    <input type="hidden" name="id" value="NULL" />
    <?php if ($objResult[image] == " "): ?>
<pre>ตอนนี้คุณใช้รูปที่คุณเลือกเอง ถ้าต้องการเปลี่ยนเป็นรูป Facebook <a href="changetofb_s1.php"><button type="button" class="btn btn-primary btn-xs">คลิกที่นี้</button></a></pre>
    <?php else: ?>
<pre>ตอนนี้คุณใช้รูปของ Facebook อยู่</pre>
    <?php endif ?>
<pre>ต้องการจะเปลี่ยนรูปเป็น (ใส่ที่อยู่รูปของคุณ)
<input type="text" name="imageurl" id="imageurl" class="form-control" placeholder="Url รูปภาพ"/> <?php if ($objResult[image] == " "): ?><input type="submit" class="btn btn-primary btn-xs" value="send"!/><?php else: ?><input type="submit" class="btn btn-primary btn-xs" value="send"!/><?php endif ?>
</form></pre>
    <?php else: ?>
    <?php endif ?>
    <form method="post" action="proset_s1.php">
    <input type="hidden" name="id" value="NULL" />
    <h4>เลือกรูปแบบโปรไฟล์ของคุณ <a data-toggle="modal" data-target="#proset_help"><i class="fa fa-question-circle" aria-hidden="true"></i></a></h4>
    <pre>ตอนนี้คุณเลือกแบบที่ <?php echo $objResult[profileset];?></pre>
    <pre>คุณต้องการรูปแบบ <select class="form-control" name="proid">
    <option value="1"><font color="white">1</font></option>
    <option value="2"><font color="white">2</font></option>
    <option value="3"><font color="white">3</font></option>
    <?php if ($objResult[youtuber] == "1"): ?><option value="4"><font color="white">4</font></option><?php else: ?><?php endif ?>
    <option value="5"><font color="white">5</font></option>
    </select> <input  type="submit" class="btn btn-primary btn-xs" value="send"!/></pre>
    </form>
<pre>id เว็บ profile <input type="text" name="profileid" id="profileid" class="form-control" placeholder="id เว็บ profile.boyphongsakorn.xyz" <?php if ($objResult[profileset] == '5'): ?><?php else: ?> readonly <?php endif ?> /></pre>
    <?php else: ?>
    <form method="post" action="proset_s1.php">
    <input type="hidden" name="id" value="NULL" />
    <h4>เลือกรูปแบบโปรไฟล์ของคุณ <a data-toggle="modal" data-target="#proset_help"><i class="fa fa-question-circle" aria-hidden="true"></i></a></h4>
    <pre>คุณต้องการรูปแบบ <select class="form-control" name="proid">
    <option value="1"><font color="white">1</font></option>
    <option value="2"><font color="white">2</font></option>
    <option value="3"><font color="white">3</font></option>
    <option value="4"><font color="white">4</font></option>
    <option value="5"><font color="white">5</font></option>
    </select> <input  type="submit" class="btn btn-primary btn-xs" value="send"!/></pre>
    </form>
<pre>id เว็บ profile <input type="text" name="profileid" id="profileid" class="form-control" placeholder="id เว็บ profile.boyphongsakorn.xyz" <?php if ($objResult[profileset] == '5'): ?><?php else: ?> readonly <?php endif ?> /></pre>
    <?php endif ?>
    <h4>แก้ไข หน้าปก ของคุณ <a data-toggle="modal" data-target="#prosetcover_help"><i class="fa fa-question-circle" aria-hidden="true"></i></a></h4>
    <form method="post" action="editcover_s1.php">
    <input type="hidden" name="id" value="NULL" />
    <pre>หน้าของรูปภาพคือ 1140x376
    <input type="text" name="imageurl" id="imageurl" class="form-control" placeholder="Url รูปภาพ"/> <?php if ($objResult[image] == " "): ?><input type="submit" class="btn btn-primary btn-xs" value="send"!/><?php else: ?><input type="submit" class="btn btn-primary btn-xs" value="send"!/><?php endif ?></form></pre>
    <?php if ($objResult): ?>
    <form method="post" action="updata_social1.php">
    <input type="hidden" name="id" value="NULL" />
<h4 id="editsocial"><?php if ($objResult[twitter] == " "): ?>เพิ่ม Social Media <?php else: ?>แก้ไข Social Media <?php endif ?><a data-toggle="modal" data-target="#editsocial_help"><i class="fa fa-question-circle" aria-hidden="true"></i></h4></a>
<pre>Twitter : <input type="text" name="twitter" id="twitter" class="form-control" placeholder="twitter"/>
Instagram : <input type="text" name="instagram" id="instagram" class="form-control" placeholder="instagram"/>
<?php if ($objResult[youtuber] == "1"): ?>Youtube : <input type="text" name="youtube" id="youtube" class="form-control" placeholder="youtube"/><?php else: ?><?php endif ?> <input type="submit" class="btn btn-primary btn-sm" value="คลิก" !/></pre>
    </form>
<!-- Modal -->
<div class="modal fade" id="editsocial_help" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">วิธีการเพิ่ม/เปลี่ยน Twitter และ instagram</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://player.vimeo.com/video/182865117" width="570" height="291" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
    <?php else: ?>
    <?php endif ?>
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
        <img src="http://brsocial.esy.es/4.PNG"><br>
        แบบที่4 เฉพาะ บัญชีแบบ Youtuber เท่านั่น<br>
		แบบที่ 5 <br>
        <img src="http://brsocial.esy.es/1.PNG"><br>
        เหมือนแบบที่หนึ่ง แต่ คลิกที่รูปโปรไฟล์ มันจะเว็บ profile.boyphongsakorn.xyz ที่คุณจะลงทะเบียนไว้<br>(เลือกแบบที่ 5 ถึงจะสามารถ ใส่ ไอดีของเว็บ profile.boyphongsakorn.xyz ได้น่ะครับ)
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="prosetcover_help" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">การเปลี่ยน รูปภาพหน้าปก</h4>
      </div>
      <div class="modal-body">
      	<img src="http://kkgo.boyphongsakorn.xyz/uploadimages/1140x376.png" height="100"><br>
        หน้าปกต้องมีขนาด 1140 x 376 (ถ้าใหญ่กว่านั่น รูปจะโดนบีบ) 
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