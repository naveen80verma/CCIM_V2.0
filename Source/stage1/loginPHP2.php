<?php
require_once('connect.php');
$db_server = mysql_connect($hostname, $user, $pass);
if(!$db_server) die("Unable to connect to MySQL:".mysql_error());
mysql_select_db($database, $db_server) or die("Unable to select database:".mysql_error());
$query=mysql_query("select status from voting where id='1'");
$data=mysql_fetch_assoc($query);
if($data['status']=='disabled')
{
	header('location:closed.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link type="text/css" rel="stylesheet" href="folderCSS/login.css" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Business Excellence Awards</title>
</head>
<body>
<div id="logoDiv"></div>
<div id="mainContent">
    <form name="reg" action="loginPHP.php" onsubmit="return validateForm()" method="post">
    <table width="285" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
    <td colspan="2">
    <div align="center">       
    </div></td>
    </tr>
    <tr>
    <td><div align="right">Username:</div></td>
    <td><input type="text" name="username" /></td>
    </tr>
    <tr>
    <td><div align="right">Password:</div></td>
    <td><input type="password" name="password" /></td>
    </tr>
    <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="Submit" /></td></tr>
    <tr><td colspan="2">Check if you're using Internet Explorer<input type="checkbox" name="IECheck" id="IECheck" /></td></tr>
	<tr><td colspan="3"><a href="changePword2.php">Change Password</a></td></tr>
    </tr>
    </table>
    </form>
    <center>
	<!--<h2>Voting is now closed. The winners will be recognized on February 22. Please visit http://www.ccimbusinessexcellenceawards.com/ for more information.</h2>-->
    <div id="info"><p><h2>Welcome to the BEA voting section</h2><br /><h4>The following pages are comprised of eleven categories. Make one selection in each category to advance to additional pages. <br />To view the work and background of each nominee, click on the name. A separate window will appear revealing additional information on the subject.<br /><br /> <strong>Please note these documents are confidential and are not to be downloaded.</strong><br /><br />On the eleventh and final category, after making your selection, click on the 'Review selections and Submit' button to enter and view all of your selections. <br /><br />Please note that once you have submitted your choices, you will not be able to revise your selections but you will be able to view them by returning to the site and logging in again.</h4></p></div>    
    </center>
	<script>
		var form = document.getElementsByName("reg")[0];
		var checkBox = document.getElementById("IECheck");
		IECheck.onchange = function()
		{
		if(this.checked)
		{
			form.action = "loginPHPIE.php";
		}
		else
		{
			form.action = "loginPHP.php";
		}
		console.log(form.action);
		};
	</script>       
</div> 
</body>
</html>
