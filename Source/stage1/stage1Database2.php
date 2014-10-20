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
ob_start();
//session_start(); 
$var_value = $_POST["userName"];
$myText = (string)$var_value;


$t1a = $_POST['t1a'];
$t1b = $_POST['t1b'];
$t1c = $_POST['t1c'];
$t2a = $_POST['t2a'];
$t2b = $_POST['t2b'];
$t2c = $_POST['t2c'];
$t3a = $_POST['t3a'];
$t3b = $_POST['t3b'];
$t3c = $_POST['t3c'];
$t4a = $_POST['t4a'];
$t4b = $_POST['t4b'];
$t4c = $_POST['t4c'];

$t5a = $_POST['t5a'];
$t5b = $_POST['t5b'];
$t5c = $_POST['t5c'];

$t6a = $_POST['t6a'];
$t6b = $_POST['t6b'];
$t6c = $_POST['t6c'];

$t7a = $_POST['t7a'];
$t7b = $_POST['t7b'];
$t7c = $_POST['t7c'];

$t8a = $_POST['t8a'];
$t8b = $_POST['t8b'];
$t8c = $_POST['t8c'];

$t9a = $_POST['t9a'];
$t9b = $_POST['t9b'];
$t9c = $_POST['t9c'];

$t10a = $_POST['t10a'];
$t10b = $_POST['t10b'];
$t10c = $_POST['t10c'];

$t11a = $_POST['t11a'];
$t11b = $_POST['t11b'];
$t11c = $_POST['t11c'];
echo $t1a;
echo $t2a;
$abc="$var_value&t1a=$t1a&t1b=$t1b&t1c=$t1c&t2a=$t2a&t2b=$t2b&t2c=$t2c&t3a=$t3a&t3b=$t3b&t3c=$t3c&t4a=$t4a&t4b=$t4b&t4c=$t4c&t5a=$t5a&t5b=$t5b&t5c=$t5c&t6a=$t6a&t6b=$t6b&t6c=$t6c&t7a=$t7a&t7b=$t7b&t7c=$t7c&t8a=$t8a&t8b=$t8b&t8c=$t8c&t9a=$t9a&t9b=$t9b&t9c=$t9c&t10a=$t10a&t10b=$t10b&t10c=$t10c&t11a=$t11a&t11b=$t11b&t11c=$t11c";
?>
<script type="text/javascript">
		window.location.href = 'stage1Database.php?userName=<?php echo $abc; ?>'; 
	</script>
	<?php
//header("location:stage1Database.php?userName=$var_value&t1a=$t1a&t1b=$t1b&t1c=$t1c&t2a=$t2a&t2b=$t2b&t2c=$t2c&t3a=$t3a&t3b=$t3b&t3c=$t3c&t4a=$t4a&t4b=$t4b&t4c=$t4c&t5a=$t5a&t5b=$t5b&t5c=$t5c&t6a=$t6a&t6b=$t6b&t6c=$t6c&t7a=$t7a&t7b=$t7b&t7c=$t7c&t8a=$t8a&t8b=$t8b&t8c=$t8c&t9a=$t9a&t9b=$t9b&t9c=$t9c&t10a=$t10a&t10b=$t10b&t10c=$t10c&t11a=$t11a&t11b=$t11b&t11c=$t11c");

//&t2a=$t2a&t2b=$t2b&t2c=$t2c&t3a=$t3a&t3b=$t3b&t3c=$t3c&t4a=$t4a&t4b=$t4b&t4c=$t4c&t5a=$t5a&t5b=$t5b&t5c=$t5c&t6a=$t6a&t6b=$t6b&t6c=$t6c&t7a=$t7a&t7b=$t7b&t7c=$t7c&t8a=$t8a&t8b=$t8b&t8c=$t8c&t9a=$t9a&t9b=$t9b&t9c=$t9c&t10a=$t10a&t10b=$t10b&t10c=$t10c&t1a=$t11a&t11b=$t11b&t11c=$t11c");
?>

 


