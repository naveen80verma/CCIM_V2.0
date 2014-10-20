<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link type="text/css" rel="stylesheet" href="folderCSS/passwordChanged.css" />
<body>
<h1>Password Change Page</h1>
<div id="mainContent">

<?php 
require_once('connect.php');

$db_server = mysql_connect($hostname, $user, $pass);
if(!$db_server) die("Unable to connect to MySQL:".mysql_error());
mysql_select_db($database, $db_server) or die("Unable to select database:".mysql_error());

session_start(); 

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
$newmypassword=$_POST['newmypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
//$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
//$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM stage1users WHERE username='$myusername' AND password='$mypassword'";
//$sql="SELECT * FROM stage1usersTest WHERE username='$myusername'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword");

echo "<br /><p>You have successfully changed your password for user ".$myusername.". <br />You will be redirected to the login page now.</p>";

$query="UPDATE stage1users SET password = '$newmypassword' WHERE username='$myusername'";
//$query2="UPDATE stage1usersTest SET voteCheck = 1 WHERE username='$myusername'";
$result=mysql_query($query);
//$result2=mysql_query($query2);

header("Refresh: 3; url=loginPHP2.php?user=$myusername");
}

else {
echo "Wrong Username or Password <br /> You will be redirected to the previous page.";
header("Refresh: 3; url=changePword2.php");
}

mysql_close();
?>
</div>
</body>
</html>


