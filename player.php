<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <style>
      body {
        font-family: 'Open Sans', sans-serif !important;
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

.disabledbutton {
      pointer-events: none;
      opacity: 0.4;
}
</style>
<style type="text/css">
/*
Creating a block for social media buttons
*/
.git {
  color: black;
  cursor: pointer;
  margin-left: 10px;
  font-size: 30px;
}
.twitter {
  color: #19C4FF;
  cursor: pointer;
  margin-left: 10px;
  font-size: 30px;
}
.instagram {
  color: #FF66FF;
  cursor: pointer;
  margin-left: 10px;
  font-size: 30px;
}
.facebook {
  color: #49649F;
  cursor: pointer;
  margin-left: 10px;
  font-size: 30px;
}
.linkedin {
  color: #007BB6;
  cursor: pointer;
  margin-left: 10px;
  font-size: 30px;
}
.fb-profile img.fb-image-lg{
    z-index: 0;
    width: 100%;  
    margin-bottom: 10px;
    max-height: 376px;
    max-width: 1140px;
}

.fb-image-profile
{
    margin: -90px 10px 0px 50px;
    z-index: 9;
    width: 20%; 
}

@media (max-width:768px)
{
    
.fb-profile-text>h1{
    font-weight: 700;
    font-size:16px;
}

.fb-image-profile
{
    margin: -45px 10px 0px 25px;
    z-index: 9;
    width: 20%; 
}
</style>
        <title>หน้าโปรไฟล์</title>
    </head>
    <body>
<?php
include('config_profile.php');
//We check if the users ID is defined
if(isset($_GET['iduser']))
{
        $id = intval($_GET['iduser']);
        //We check if the user exists
        $dn = mysql_query('select * from hello where iduser="'.$id.'"');
        if(mysql_num_rows($dn) > 0)
        {
                $dnn = mysql_fetch_array($dn);
                //We display the user datas
$count_dog = str_word_count($dnn["Name"]);
$edog = (str_word_count($dnn["Name"],1));
?>
<div class="container">
    <div class="fb-profile">
        <img align="left" class="fb-image-lg" src="<?php if ($dnn["coverurl"] == "http://www.uppic.org/image-AD0D_57D2E02B.jpg"):?><?php echo $dnn["coverurl"];?><?php else: ?><?php echo $dnn["coverurl"];?><?php endif ?>" alt="Profile Cover example"/>
        <img align="left" class="fb-image-profile thumbnail" src="<?php if ($dnn["image"] == " "):?><?php echo $dnn["imageurl"];?><?php else: ?>https://graph.facebook.com/<?php echo $dnn["image"];?>/picture<?php endif ?>" alt="Profile image"/>
        <div class="fb-profile-text">
            <h1><?php if ($count_dog > 2):?><?php echo $edog["0"];?> <?php echo $edog["2"];?><?php else: ?><?php echo $dnn["Name"];?><?php endif ?> <font color="#a6a6a6">(<?php echo $dnn["Team"];?>)</font></h1>
            <?php if ($dnn["image"] == " "):?>
<a href="https://www.facebook.com/app_scoped_user_id/<?php echo $dnn["iduser"];?>" target="_top"><div class="btn-group facebook fa fa-facebook"></div></a>
<?php else: ?>
<a href="https://www.facebook.com/app_scoped_user_id/<?php echo $dnn["image"];?>" target="_top"><div class="btn-group facebook fa fa-facebook"></div></a>
<?php endif ?>
<?php if ($dnn["twitter"] == ""):?>
<div class="btn-group twitter fa fa-twitter disabledbutton"></div>
<?php elseif ($dnn["twitter"] == " "): ?>
<div class="btn-group twitter fa fa-twitter disabledbutton"></div>
<?php else: ?>
<a href="https://twitter.com/<?php echo $dnn["twitter"];?>" target="_top"><div class="btn-group twitter fa fa-twitter"></div></a>
<?php endif ?>
<?php if ($dnn["instagram"] == ""):?>
<div class="btn-group instagram fa fa-instagram disabledbutton"></div>
<?php elseif ($dnn["instagram"] == " "): ?>
<div class="btn-group instagram fa fa-instagram disabledbutton"></div>
<?php else: ?>
<a href="https://www.instagram.com/<?php echo $dnn["instagram"];?>" target="_top"><div class="btn-group instagram fa fa-instagram"></div></a>
<?php endif ?>
<center>
<a class="twitter-timeline" data-chrome="nofooter noborders" href="https://twitter.com/<?php if ($dnn["twitter"] == ""):?><?php elseif ($dnn["twitter"] == " "): ?><?php else: ?><?php echo $dnn["twitter"];?><?php endif ?>">Tweets by <?php if ($dnn["twitter"] == ""):?><?php elseif ($dnn["twitter"] == " "): ?><?php else: ?><?php echo $dnn["twitter"];?><?php endif ?></a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></center>
        </div>
    </div>
</div><!-- /container -->  
<?php
        }
        else
        {
                echo 'This user dont exists.';
        }
}
else
{
        echo 'The user ID is not defined.';
}
?>
        </body>
</html>