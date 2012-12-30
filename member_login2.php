<?php
session_start(); 
require("config.inc.php");
$password = $_REQUEST['password'];
$passwordmd5 = (md5($password));
$ref = $_REQUEST['ref'];
 
if ($config_memberpass != $passwordmd5 ) {
	echo "Error Password!";
	exit;
	}
 
 $_SESSION['ses_user'] = $password;
header("Location: $ref");

?>