<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link type="text/css" rel="stylesheet" href="folderCSS/passwordChanged.css" />
<body>
<div id="mainContent">
<img src="Images/BEALogo.png"/>
<?php
require_once'connect.php';

$db_server = mysql_connect($hostname, $user, $pass);
if(!$db_server) die("Unable to connect to MySQL:".mysql_error());
mysql_select_db($database, $db_server) or die("Unable to select database:".mysql_error());

session_start(); 
$var_value = $_GET['username'];
//$myText = (string)$var_value;

?>

<center><br />
Sorry, you have entered an incorrect username/password combination. You will be redirected to the login screen.
</center>

<?php
header("Refresh: 3; url=loginPHP2.php");
?>


</div>
</body>
</html> 


