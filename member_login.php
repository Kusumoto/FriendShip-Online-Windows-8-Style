<?php
require("config.inc.php");
$ref = $_REQUEST['ref'];
?>
<form id="form1" name="form1" method="post" action="member_login2.php">
  <label>
  Password :: 
<input type="password" name="password" id="password" />
  </label>
  <input type="submit" name="button" id="button" value="Login" />
  <input name="ref" type="hidden" id="ref" value="<?php echo $ref; ?>" />
</form>

