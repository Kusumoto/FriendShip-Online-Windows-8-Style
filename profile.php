<?php
//Start PHP Script
$id = $_REQUEST['id'];

function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

if ($id=="") {
echo "Error Hacker!!!!!"; 
exit;
}
include("config.inc.php");
mysql_connect($host,$user,$pass)or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
mysql_select_db($dbname);
mysql_query(" set NAMES utf8");

$sql = "SELECT * from friend_data WHERE id='$id'";
$dbquery = mysql_query($sql);
$result = mysql_fetch_array($dbquery);

if (!$result) {
    echo "ไม่พบคนๆนี้ คุณเป็นใครกันแน่?";
    exit;
    }
 $pic = mysql_result($dbquery, 0, 'pic') ;
 $name = mysql_result($dbquery, 0, 'name') ;
  $address = mysql_result($dbquery, 0, 'address') ;
  $phonenumber = mysql_result($dbquery, 0, 'phonenumber') ;
 $university = mysql_result($dbquery, 0, 'university') ;
   $email = mysql_result($dbquery, 0, 'email') ;   
  $facebook = mysql_result($dbquery, 0, 'facebook') ;
  $twitter = mysql_result($dbquery, 0, 'twitter') ;
  
//End PHP Script
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="FriendShip 6.3 V2">
    <meta name="author" content="Azerdar Kusumoto">
    <link href="css/modern.css" rel="stylesheet">
    <link href="css/modern-responsive.css" rel="stylesheet">
    <title>We are 6.3 :: Phatthalung School 2012 - Profile</title>
    
    <link href="css/theme-dark.css" rel="stylesheet" type="text/css">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">
     <script type="text/javascript" src="js/assets/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="js/assets/jquery.mousewheel.min.js"></script>

    <script type="text/javascript" src="js/modern/dropdown.js"></script>
    <script type="text/javascript" src="js/modern/accordion.js"></script>
    <script type="text/javascript" src="js/modern/buttonset.js"></script>
    <script type="text/javascript" src="js/modern/carousel.js"></script>
    <script type="text/javascript" src="js/modern/input-control.js"></script>
    <script type="text/javascript" src="js/modern/pagecontrol.js"></script>
    <script type="text/javascript" src="js/modern/rating.js"></script>
    <script type="text/javascript" src="js/modern/slider.js"></script>
    <script type="text/javascript" src="js/modern/tile-slider.js"></script>
    <script type="text/javascript" src="js/modern/tile-drag.js"></script>

    <script type="text/javascript" src="js/assets/github.info.js"></script>
    <script type="text/javascript" src="js/assets/google-analytics.js"></script>
    <script type="text/javascript" src="js/google-code-prettify/prettify.js"></script>
    <script src="js/sharrre/jquery.sharrre-1.3.4.min.js"></script>
    <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=155287691231100";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body lass="modern-ui">
<div class="page">
<div class="page secondary">
<div class="page-header">
<div class="page-header-content">
<h1>
Profile
<small>We are 6.3 :: Phatthalung School 2012</small>
</h1>
<a class="back-button big page-back" href="http://friendship.kusumoto.co"></a>
</div>
</div>
</div></div>

    <div class="page secondary">
    <div class="page-header">
    <div class="page-header-content">
    </div>
    </div>
     
    <div class="page-region">
    <div class="page-region-content">
    
   <div class="image-container place-left bg-color-orangeDark">
	<img src="./img/<?php echo $pic; ?>.jpg">
	<div class="overlay"><?php echo $name; ?></div>
	</div>
	<div class="border-color-red place-left bg-color-blueLight">
  <strong>ชื่อ - นามสกุล :: </strong><?php echo $name; ?></br>
  <strong>ที่อยู่ :: </strong><?php echo $address; ?></br>
  <strong>เบอร์โทรศัพท์ :: </strong><?php echo $phonenumber; ?></br>
  <strong>มหาลัยที่ศึกษาต่อ :: </strong><?php echo $university; ?></br>
  <strong>E-Mail :: </strong><?php echo $email; ?></br>
  <strong>Facebook :: </strong><?php echo $facebook; ?></br>
  <strong>Twitter :: </strong><?php echo $twitter; ?> </br>
  <center><a href="http://kusumoto.co/friendship_old/editprofile.php?id=<?php echo $id; ?>" target="_Blank" class="button bg-color-green"  >แก้ไขข้อมูลเพิ่มเติม</a></center>

	</div>
	<div class="fb-comments bg-color-orange border-color-red " data-href="<?php echo curPageURL() ?>" data-num-posts="5" data-width="470"">...
	
	</div>
    </div>
    </div>
    </div>
    
    <div class="page">
<div class="nav-bar">
<div class="nav-bar-inner padding10">
<span class="element">
2012, FriendShip Version 2 © by
<a class="fg-color-white" href="mailto:admin@kusumoto.co">Kusumoto Computer</a>
</span>
</div>
</div>
</div>
</div>
</body>
</html>