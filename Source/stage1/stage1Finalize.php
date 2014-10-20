<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link type="text/css" rel="stylesheet" href="folderCSS/passwordChanged.css" />
<body>
<div id="mainContent">
<img src="Images/BEALogo.png"/>

<?php
require_once('connect.php');

$db_server = mysql_connect($hostname, $user, $pass);
if(!$db_server) die("Unable to connect to MySQL:".mysql_error());
mysql_select_db($database, $db_server) or die("Unable to select database:".mysql_error());

//session_start(); 
$var_value = $_GET["userName"];
$myText = (string)$var_value;


echo("$var_value");

$query2="UPDATE stage1users SET voteCheck = 1 WHERE username='$var_value'";
$resultquery2=mysql_query($query2);
?>
<script type="text/javascript">
		window.location.href = 'http://www.ccimbusinessexcellenceawards.com/'; 
	</script>




