<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

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


if (empty( $_SESSION['ses_user'] )) {
header("Location: login.php?ref=". curPageURL() ."");
exit;
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
body,td,th {
	font-family: tahoma;
}
-->
</style>
<?php
$id = $_REQUEST['id'];


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
?>
<strong>Edit Profile :: แก้ไขข้อมูล</strong>
<form id="form1" name="form1" method="post" action="editprofile2.php">
  <p>ชื่อ - นามสกุล 
    <input name="name2" type="text" disabled="disabled" id="name" value="<?php echo $name; ?>" /> 
    (ไม่อนุญาตให้เปลี่ยน)
</p>
  <p>ที่อยู่ 
    <textarea name="address" id="address"><?php echo $address; ?></textarea>
</p>
  <p>เบอร์โทร 
    <input name="phonenumber" type="text" id="phonenumber" value="<?php echo $phonenumber; ?>" />
  </p>
  <p>มหาลัยที่ศึกษาต่อ 
    <input name="university" type="text" id="university" value="<?php echo $university; ?>" />
  </p>
  <p>E-Mail 
    <input name="email" type="text" id="email" value="<?php echo $email; ?>" />
  </p>
  <p>Facebook 
    <input name="facebook" type="text" id="facebook" value="<?php echo $facebook; ?>" />
  </p>
  <p>Twitter 
    <input name="twitter" type="text" id="twitter" value="<?php echo $twitter; ?>" />
</p>
  <p>รูป 
    <input name="pic2" type="text" id="pic" disabled="disabled" value="<?php echo $pic; ?>" />
    (ไม่อนุญาตให้เปลี่ยน)  </p>
  <p>
    <input type="submit" name="button" id="button" value="บันทึก" />
    <input name="id" type="hidden" id="id" value="<?php echo $id; ?>" />
    <input name="name" type="hidden" id="id" value="<?php echo $name; ?>" />
    <input name="pic" type="hidden" id="id" value="<?php echo $pic; ?>" />
  </p>
</form>
