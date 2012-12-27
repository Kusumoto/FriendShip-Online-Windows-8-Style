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
include("config.inc.php");

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$address = $_REQUEST['address'];
$phonenumber = $_REQUEST['phonenumber'];
$university = $_REQUEST['university'];
$email = $_REQUEST['email'];
$pic = $_REQUEST['pic'];
$twitter = $_REQUEST['twitter'];
$facebook = $_REQUEST['facebook'];
mysql_connect($host,$user,$pass) or die("Can't Connect To Database");
 mysql_select_db($dbname);
 mysql_query(" set names utf8 ");
$sql = "UPDATE friend_data Set pic='$pic', name='$name', address='$address', phonenumber='$phonenumber', university='$university', email='$email', facebook='$facebook', twitter='$twitter' WHERE id='$id' ";
$result = mysql_query($sql);
 if (!$result) {
 echo("Error in SQL ".mysql_error() );
}    
echo "อัพเดตเรียบร้อย กรุณากดปุ่ม ESC บนคีร์บอร์ดเพื่อปิดหน้านี้";