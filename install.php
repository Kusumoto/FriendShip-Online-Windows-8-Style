<?php
/*
FriendShip-Online-Windows-8-Style
---------------------------------------------------------
FriendShip Online Windows 8 Style for Student and School
Design for PHP and MYSQL
Programmer :: Kusumoto
Website :: http://kusumoto.co
This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported License.
---------------------------------------------------------
*/

//Check writable config.inc.php
$error = '';  //setup error parameters

//check form post data
if(isset($_POST['data_submit'])) {
	if(!$error){
			if(!@mysql_connect($_POST['data_mysqlhost'],$_POST['data_mysqluser'],$_POST['data_mysqlpass'])) {
				echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้";
				exit;
				}
			if(!@mysql_select_db($_POST['data_mysqldb'])) {
				echo "ไม่สามารถเลือกฐานข้อมูลได้";
				exit;
				}
			}
	if(!$error){
			$sql = file_get_contents('mysql.txt');
			if(@mysql_query($sql)) {
				$_POST['data_adminpass'] = (md5($_POST['data_adminpass']));
				$_POST['data_memberpass'] = (md5($_POST['data_memberpass']));
				
				$config = file_get_contents('config.txt');
				$config = str_replace(array_keys($_POST),$_POST,$config);
		
		if(!@fopen("config.inc.php", "w")){
		echo 'ไม่สามารถเขียนไฟล์ config.inc.php ได้ โปรดตรวจสอบ<br />';
		$error = '1';
		exit;
		}
				$handle = fopen("config.inc.php", "w");
				fwrite($handle,$config);
				fclose($handle);
				
				$success = 1;
		}else{
			echo 'ไม่สามารถสร้างตารางข้อมูลได้<br />' . mysql_error();
		}
		
	}
	
}

if ($success==1) {
echo "Install complete </br><a href='admin_index.php'>Go to Admin Panel</a></br></br><i>please delete or rename file 'install.php' and set permission file 'config.inc.php' to 111 after install complete";
exit;
}			
			
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Install :: FriendShip-Online-Windows-8-Style</title>
<style type="text/css">
#header {
	text-align: center;
}
#header2 {
	font-size: 24px;
}
body p {
	text-align: center;
}
</style>
</head>

<body>
<h1 id="header">FriendShip-Online-Windows-8-Style<br />
<span id="header2">FriendShip Online Windows 8 Style for Student and School</span></h1>
<p>Installation Script Version 1.0 by Kusumoto</p>
<p><a href="http://kusumoto.co">http://kusumoto.co</a></p>
<form id="form1" name="form1" method="post" action="">
  <table width="551" border="1" align="center">
    <tr>
      <td colspan="2"><center><b>Mysql Server Setting</center></td>
    </tr>
    <tr>
      <td width="178">Mysql Username</td>
      <td width="357"><input type="text" name="data_mysqluser"/></td>
    </tr>
    <tr>
      <td>Mysql Password</td>
      <td><input type="password" name="data_mysqlpass" /></td>
    </tr>
    <tr>
      <td>Mysql Server</td>
      <td><input type="text" name="data_mysqlhost" /></td>
    </tr>
    <tr>
      <td>Mysql Database</td>
      <td><input type="text" name="data_mysqldb" /></td>
    </tr>
    <tr>
      <td colspan="2"><center>Website Setting</center></td>
    </tr>
    <tr>
      <td>Admin username</td>
      <td><input type="text" name="data_adminuser" /></td>
    </tr>
    <tr>
      <td>Admin password</td>
      <td><input type="password" name="data_adminpass" /></td>
    </tr>
    <tr>
      <td>Member password</td>
      <td><input type="password" name="data_memberpass" /></td>
    </tr>
    <tr>
      <td>titlebar</td>
      <td><input type="text" name="data_titlebar" /></td>
    </tr>
    <tr>
      <td>login-user-first</td>
      <td><input type="text" name="data_firstname" /></td>
    </tr>
    <tr>
      <td>login-user-seccond</td>
      <td><input type="text" name="data_lastname" /></td>
    </tr>
    <tr>
      <td>startname</td>
      <td><input type="text" name="data_startname" /></td>
    </tr>
    <tr>
      <td>login-logo</td>
      <td><input type="text" name="data_logo" /></td>
    </tr>
  </table>
  <p>
    <input type="submit" name="data_submit" value="Install" />
  </p>
</form>
</body>
</html>