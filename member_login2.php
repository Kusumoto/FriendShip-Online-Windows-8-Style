<?php
session_start(); 
require("config.inc.php");
$password = $_REQUEST['password'];
$passwordmd5 = (md5($password));
$ref = $_REQUEST['ref'];

				mysql_connect($host,$user,$pass) or die("Can't Connect To Database");
 mysql_select_db($dbname);
 mysql_query(" set names utf8 ");
 
 if ($passwordmd5 != $config_memberpass) {
 echo "Error Password!";
 exit; 
 } else {
 
 $_SESSION['ses_user'] = $password;
header("Location: $ref");
}
?>