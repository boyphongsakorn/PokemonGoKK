<html>
<head>
	<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css"/>
	<meta charset="UTF-8">
	<title>Pokemon Go</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link href="dist/css/flat-ui.css" rel="stylesheet">
  <script type="text/javascript" src="jquery-3.1.0.min.js"></script>
  <script src="https://apis.google.com/js/platform.js"></script>
<style type="text/css">
.block-update-card {
  height: 102px;
  border: 1px #FFFFFF solid;
  width: 380px;
  float: left;
  margin-left: 10px;
  margin-top: 5px;
  padding: 0;
  box-shadow: 1px 1px 8px #d8d8d8;
  background-color: #ffffff;
}
.block-update-card .h-status {
  width: 100%;
  height: 7px;
  background: repeating-linear-gradient(45deg, #606dbc, #606dbc 10px, #465298 10px, #465298 20px);
}
.block-update-card .v-status {
  width: 5px;
  height: 80px;
  float: left;
  margin-right: 5px;
  background: repeating-linear-gradient(45deg, #606dbc, #606dbc 10px, #465298 10px, #465298 20px);
}
.block-update-card .update-card-MDimentions {
  width: 102px;
  height: 102px;
}
.block-update-card .update-card-body {
  margin-top: 10px;
  margin-left: 5px;
}
.block-update-card .update-card-body h4 {
  color: #737373;
  font-weight: bold;
  font-size: 13px;
  background-color: #ffffff;
}
.block-update-card .update-card-body p {
  color: #737373;
  font-size: 12px;
}
.block-update-card .card-action-pellet {
  padding: 5px;
}
.block-update-card .card-action-pellet div {
  margin-right: 10px;
  font-size: 15px;
  cursor: pointer;
  color: #dddddd;
}
.block-update-card .card-action-pellet div:hover {
  color: #999999;
}
.block-update-card .card-bottom-status {
  color: #a9a9aa;
  font-weight: bold;
  font-size: 14px;
  border-top: #e0e0e0 1px solid;
  padding-top: 5px;
  margin: 0px;
}
.block-update-card .card-bottom-status:hover {
  background-color: #dd4b39;
  color: #FFFFFF;
  cursor: pointer;
}

/*
Creating a block for social media buttons
*/
.card-body-social {
  font-size: 30px;
  margin-top: 10px;
}
.card-body-social .git {
  color: black;
  cursor: pointer;
  margin-left: 10px;
}
.card-body-social .twitter {
  color: #19C4FF;
  cursor: pointer;
  margin-left: 10px;
}
.card-body-social .instagram {
  color: #FF66FF;
  cursor: pointer;
  margin-left: 10px;
}
.card-body-social .facebook {
  color: #49649F;
  cursor: pointer;
  margin-left: 10px;
}
.card-body-social .linkedin {
  color: #007BB6;
  cursor: pointer;
  margin-left: 10px;
}

.music-card {
  background-color: green;
}

.navbar {
    margin-bottom: 0px !important; 
    border-radius: 0px !important;
}

@media only screen and (max-width: 700px) {
    .playerpage {
        width: 100% !important;
    }
}
</style>
<style>
    #customBtn {
      width: 155px;
    }
    #customBtn:hover {
      box-shadow: 2px 2px 3px #888888;
      border-radius: 5px;
      cursor: hand;
    }
</style>
<style type="text/css">
body { 
    background-image: url('img/718409.png');
    background-attachment: fixed;
    background-position: center; 
}
</style>
<script>
  function onYtEvent(payload) {
    if (payload.eventType == 'subscribe') {
      // Add code to handle subscribe event.
    } else if (payload.eventType == 'unsubscribe') {
      // Add code to handle unsubscribe event.
    }
    if (window.console) { // for debugging only
      window.console.log('YT event: ', payload);
    }
  }
</script>
<style>
     #ad_root {
        background-color: white;
        color: #444;
        border: 1px solid #ccc;
        border-left: 0;
        border-right: 0;
        display: none;
        font-family: sans-serif;
        font-size: 14px;
        line-height: 16px;
        width: 320px;
        text-align: left;
        position: relative;
      }
      .thirdPartyMediaClass {
        width: 320px;
        height: 168px;
        margin: 12px 0;
      }
      .thirdPartySubtitleClass {
        font-size: 18px;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        height: 16px;
        -webkit-box-orient: vertical;
      }
      .thirdPartyTitleClass {
        padding-right: 12px;
        line-height: 18px;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        height: 36px;
        -webkit-box-orient: vertical;
      }
      .thirdPartyCallToActionClass {
        background-color: #416BC4;
        color: white;
        border-radius: 4px;
        padding: 6px 20px;
        float: right;
        text-align: center;
        text-transform: uppercase;
        font-size: 11px;
      }
      .fbDefaultNativeAdWrapper {
        font-size: 12px;
        line-height: 14px;
        margin: 12px 0;
        height: 36px;
        vertical-align: top;
      }
      .disabledbutton {
      pointer-events: none;
      opacity: 0.4;
      }
</style>
<script>
$('#login_popup').on('shown.bs.modal', function () {
  $('#login_popup').focus()
})
$('#blog_newsupdate').on('shown.bs.modal', function () {
  $('#blog_newsupdate').focus()
})
</script>
<script>
//Here you can add your own picture for snow. Just change the url
var snowsrc="http://network.boyphongsakorn.ga/imageupload/do.php?img=151"
//how many snowflakes there will be (currently 12)
var no =10;
//How fast will the snow disappear (0 is never)
var hidesnowtime = 0;
//The height the snow will reach before it disappears ("windowheight" or "pageheight")
var snowdistance = "pageheight";
///////////////////////////////End of Settings///////////////////////////////////
var ie4up = (document.all) ? 1 : 0;
var ns6up = (document.getElementById&&!document.all) ? 1 : 0;
function iecompattest()
{
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}
var dx, xp, yp;
var am, stx, sty;
var i, doc_width = 800, doc_height = 600;
if (ns6up)
{
doc_width = self.innerWidth;
doc_height = self.innerHeight;
}
else
if (ie4up)
{
doc_width = document.body.clientWidth;
doc_height = document.body.clientHeight;
}
dx = new Array();
xp = new Array();
yp = new Array();
am = new Array();
stx = new Array();
sty = new Array();
for (i = 0; i < no; ++ i)
{
dx[i] = 0;
xp[i] = Math.random()*(doc_width-50);
yp[i] = Math.random()*doc_height;
am[i] = Math.random()*20;
stx[i] = 0.02 + Math.random()/10;
sty[i] = 0.7 + Math.random();
if (ie4up||ns6up)
{
if (i == 0)
{
document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><a href=\"http://rftactical.darkbb.com/index.htm\"><img src='"+snowsrc+"' border=\"0\"><\/a><\/div>");
}
else
{
document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><img src='"+snowsrc+"' border=\"0\"><\/div>");
}
}
}
function snowIE_NS6()
{
doc_width = ns6up?window.innerWidth-10 : iecompattest().clientWidth-10;
doc_height=(window.innerHeight && snowdistance=="windowheight")? window.innerHeight : (ie4up && snowdistance=="windowheight")? iecompattest().clientHeight : (ie4up && !window.opera && snowdistance=="pageheight")? iecompattest().scrollHeight : iecompattest().offsetHeight;
for (i = 0; i < no; ++ i)
{
yp[i] += sty[i];
if (yp[i] > doc_height-50)
{
xp[i] = Math.random()*(doc_width-am[i]-30);
yp[i] = 0;
stx[i] = 0.02 + Math.random()/10;
sty[i] = 0.7 + Math.random();
}
dx[i] += stx[i];
document.getElementById("dot"+i).style.top=yp[i]+"px";
document.getElementById("dot"+i).style.left=xp[i] + am[i]*Math.sin(dx[i])+"px";
}
snowtimer=setTimeout("snowIE_NS6()", 10);
}
function hidesnow()
{
if (window.snowtimer) clearTimeout(snowtimer)
for (i=0; i<no; i++) document.getElementById("dot"+i).style.visibility="hidden"
}

if (ie4up||ns6up)
{
snowIE_NS6();
if (hidesnowtime>0)
setTimeout("hidesnow()", hidesnowtime*1000)
}
</script>
<script type="text/javascript">
$('#fileuser').on('shown.bs.modal', function () {
  $('#fileuser').focus()
})
</script>
</head>
<body>
<center>
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
$host = "localhost";
$username = "boyphon1_pokego";
$password = "team1556th";
$objConnect = mysql_connect($host,$username,$password);

$objDB = mysql_select_db("boyphon1_pokego");
$strSQL = "SELECT * FROM hello";
$objQuery = mysql_query($strSQL) or die (mysql_error());
$strSQLei = "SELECT * FROM hello WHERE image = '$user'";
$objQueryei = mysql_query($strSQLei);
$objResultei = mysql_fetch_array($objQueryei);
$strSQLeiei = "SELECT * FROM hello WHERE iduser = '$user'";
$objQueryeiei = mysql_query($strSQLeiei);
$objResulteiei = mysql_fetch_array($objQueryeiei);
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Pokemon GO KK</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a data-toggle="modal" data-target="#blog_newsupdate">News Website Update</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if ($user): ?>
        <?php if ($objResulteiei["image"] == $user):?>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src='https://graph.facebook.com/<?php echo $user;?>/picture' width="21" height="21"> บัญชี <span class="caret"></span></a>
        <?php elseif ($objResulteiei["image"] == " "):?>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src='<?php echo $objResulteiei["imageurl"];?>' width="21" height="21"> บัญชี <span class="caret"></span></a>
        <?php else: ?>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src='https://graph.facebook.com/<?php echo $user;?>/picture' width="21" height="21"> บัญชี <span class="caret"></span></a>
        <?php endif ?>
        <ul class="dropdown-menu">
          <?php if ($objResultei): ?>
          <li><a href="login.php">ภาพรวม</a></li>
          <li><a href="edit.php#editteam">แก้ไขทีมของคุณ</a></li>
          <li><a href="edit.php#deleteteam">ลบทีมของคุณ</a></li>
          <li><a href="profileset.php#editimage">เปลี่ยนรูปโปรไฟล์</a></li>
          <li><a href="profileset.php">แก้ไขรูปแบบโปรไฟล์</a></li>
          <li><a href="profileset.php#editsocial">แก้ไขโซเชียล</a></li>
          <?php elseif ($objResulteiei):?>
          <li><a href="login.php">ภาพรวม</a></li>
          <li><a href="edit.php#editteam">แก้ไขทีมของคุณ</a></li>
          <li><a href="profileset.php#editsocial">แก้ไขโซเชียล</a></li>
          <li><a href="edit.php#deleteteam">ลบทีมของคุณ</a></li>
          <li><a href="profileset.php#editimage">เปลี่ยนรูปโปรไฟล์</a></li>
          <li><a href="profileset.php">แก้ไขรูปแบบโปรไฟล์</a></li>
          <?php else: ?>
          <li><a href="edit.php">เพิ่มทีมของคุณ</a></li>
          <?php endif ?>
          <li><a href="login.php?Action=Logout">ออกจากระบบ</a></li>
          </ul>
          </li>
      <?php else: ?>
      <li><a data-toggle="modal" data-target="#login_popup"><img src="http://ezyfind.co.za/Images/facebook-login.png" width="120" height="23.375"></a></li>
      <!--li><img id="customBtn" src="./signin_button.png" onClick="signInClick()" alt="Sign in with Google+" /></li-->
      <?php endif ?>
    </ul>
  </div>
</nav>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40172537-3', 'auto');
  ga('send', 'pageview');

</script>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
<?php
$count_dog = str_word_count($objResult["Name"]);
$edog = (str_word_count($objResult["Name"],1));
?>
<div class="media block-update-card">
  <a class="pull-<?php if ($objResult["profileset"] == '1'): ?>left<?php elseif($objResult["profileset"] == '3' or $objResult["profileset"] == '4'): ?>left<?php else: ?>right<?php endif ?>" href="#">
      <?php if ($objResult["Team"] == 'Team Instinct'): ?>
      <img class="media-object update-card-MDimentions" src="http://f.ptcdn.info/284/044/000/oa58vwdt2IQM0bZ0DvI-o.jpg">
      <?php elseif ($objResult["Team"] == 'Team Mystic'): ?>
      <img class="media-object update-card-MDimentions" src="http://f.ptcdn.info/284/044/000/oa58w5gv1cfayDiQEsq-o.jpg">
      <?php else: ?>
      <img class="media-object update-card-MDimentions" src="http://f.ptcdn.info/284/044/000/oa58wf8dwO4RZtGBNKD-o.jpg">
      <?php endif ?>
  </a>
<?php if ($objResult["profileset"] == "4"):?>
<?php else: ?>
  <?php if ($objResult["image"] == " "):?>
  <a class="pull-<?php if ($objResult["profileset"] == '1'): ?>right<?php elseif($objResult["profileset"] == '3' or $objResult["profileset"] == '4'): ?>right<?php else: ?>left<?php endif ?>" <?php if ($objResult["profileset"] == '3' or $objResult["profileset"] == '5'): ?>data-toggle="modal" data-target="#pop<?php echo $objResult["iduser"];?>"<?php elseif($objResult["youtuber"] == '1'): ?>href="https://www.youtube.com/user/<?php echo $objResult["yuurl"];?><?php else: ?>href="https://www.facebook.com/app_scoped_user_id/<?php echo $objResult["iduser"];?><?php endif ?>">
  <img src='<?php echo $objResult["imageurl"];?>' width="102" height="102">
  </a>
  <?php else: ?>
  <a class="pull-<?php if ($objResult["profileset"] == '1'): ?>right<?php elseif($objResult["profileset"] == '3' or $objResult["profileset"] == '4'): ?>right<?php else: ?>left<?php endif ?>" <?php if ($objResult["profileset"] == '3'  or $objResult["profileset"] == '5'): ?>data-toggle="modal" data-target="#pop<?php echo $objResult["image"];?>"<?php elseif($objResult["youtuber"] == '1'): ?>href="https://www.youtube.com/user/<?php echo $objResult["yuurl"];?><?php else: ?>href="https://www.facebook.com/app_scoped_user_id/<?php echo $objResult["image"];?><?php endif ?>">
  <img src='https://graph.facebook.com/<?php echo $objResult["image"];?>/picture' width="102" height="102">
  </a>
  <?php endif ?>
<?php endif ?>
  <div class="media-body update-card-body">
    <?php if ($count_dog > 2):?>
    <h4 class="media-heading"><?php echo $edog["0"];?> <?php echo $edog["2"];?></h4>
    <?php else: ?>
    <h4 class="media-heading"><?php echo $objResult["Name"];?></h4>
    <?php endif ?>
    <div class="btn-toolbar card-body-social" role="toolbar">
<?php if ($objResult["profileset"] == "4"):?>
<div class="g-ytsubscribe" data-channel="<?php echo $objResult["yuurl"];?>" data-layout="full" data-count="default" data-onytevent="onYtEvent"></div>
<?php else: ?>
	<?php if ($objResult["image"] == " "):?>
	<a href="https://www.facebook.com/app_scoped_user_id/<?php echo $objResult["iduser"];?>"><div class="btn-group facebook fa fa-facebook"></div></a>
	<?php else: ?>
	<a href="https://www.facebook.com/app_scoped_user_id/<?php echo $objResult["image"];?>"><div class="btn-group facebook fa fa-facebook"></div></a>
	<?php endif ?>
	<?php if ($objResult["twitter"] == ""):?>
	<div class="btn-group twitter fa fa-twitter disabledbutton"></div>
	<?php elseif ($objResult["twitter"] == " "): ?>
	<div class="btn-group twitter fa fa-twitter disabledbutton"></div>
	<?php else: ?>
	<a href="https://twitter.com/<?php echo $objResult["twitter"];?>"><div class="btn-group twitter fa fa-twitter"></div></a>
	<?php endif ?>
	<?php if ($objResult["instagram"] == ""):?>
	<div class="btn-group instagram fa fa-instagram disabledbutton"></div>
	<?php elseif ($objResult["instagram"] == " "): ?>
	<div class="btn-group instagram fa fa-instagram disabledbutton"></div>
	<?php else: ?>
	<a href="https://www.instagram.com/<?php echo $objResult["instagram"];?>"><div class="btn-group instagram fa fa-instagram"></div></a>
	<?php endif ?>
<?php endif ?>
    </div>
  </div>
</div>
<script>
$('#pop<?php echo $objResult["iduser"];?>').on('shown.bs.modal', function () {
  $('#pop<?php echo $objResult["iduser"];?>').focus()
})
</script>
<!-- Modal -->
<div class="modal fade" id="pop<?php echo $objResult["iduser"];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php if ($count_dog > 2):?><?php echo $edog["0"];?> <?php echo $edog["2"];?><?php else: ?><?php echo $objResult["Name"];?><?php endif ?></h4>
      </div>
      <div class="modal-body">
      <?php if ($objResult["profileset"] == '5'): ?>
      <iframe class="playerpage" src="http://profile.boyphongsakorn.pro/profile.php?iduser=<?php echo $objResult["profileid"];?>" style="
    width: 564px; height: 504px;" frameborder="0"></iframe>
      </div>
      <div class="modal-footer">
        <a href="http://profile.boyphongsakorn.pro/profile.php?iduser=<?php echo $objResult["profileid"];?>" target="_blank"><button type="button" class="btn btn-primary">เปิดในหน้าใหม่</button></a>
      </div>
      <?php else: ?>
        <iframe class="playerpage" src="http://kkgo.boyphongsakorn.pro/player.php?iduser=<?php echo $objResult["iduser"];?>" style="
    width: 564px; height: 504px;" frameborder="0"></iframe>
      </div>
      <div class="modal-footer">
        <a href="http://kkgo.boyphongsakorn.pro/player.php?iduser=<?php echo $objResult["iduser"];?>" target="_blank"><button type="button" class="btn btn-primary">เปิดในหน้าใหม่</button></a>
      </div>
      <?php endif ?>
    </div>
  </div>
</div>
<?php
}
?>
<div class="modal fade" id="login_popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <iframe src="http://kkgo.boyphongsakorn.pro/login.php" style="
    width: 190px; height: 35px;" frameborder="0" scrolling="No"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bs-example-modal-lg" id="blog_newsupdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
      	<div align="left">
        Update 15/09/2559<br>
1. ระบบ Youtuber | ระบบ Youtuber ทำอะไรได้บ้าง ?<br>
<span style="margin-left:2em">1.1 เปลี่ยนชื่อได้ (ระบบจะเปลี่ยนชื่อเป็น ช่อง Youtube ของคุณให้ตอนแรก)<br>
<span style="margin-left:2em">1.2 สามารถเปลี่ยนจาก Social 3 ปุ่ม เป็นปุ่ม Subscribe ได้ (ปุ่ม Subscribe ระบบจะตั้งมาให้อยู่แล้ว แต่ถ้าต้องการเปลี่ยนสามารถเปี่ยนได้)<br>
ถ้าใครอยากใช้ คลิก<a href="https://docs.google.com/forms/d/e/1FAIpQLSeD6oeB2NNUI81VIe4y4nTepOwAsfWvzYT_3J4NiMdX5T5A6g/viewform" target="_black">ที่นี้</a>เลยครับ
        </div>
      </div>
    </div>
  </div>
</div>
</center>
<?php
mysql_close($objConnect);
?>
</body>
</html>