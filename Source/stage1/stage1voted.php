<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link type="text/css" rel="stylesheet" href="folderCSS/passwordChanged.css" />
<body>
<div id="mainContent">
<img src="Images/BEALogo.png"/>
<?php
ob_start();
session_start();
require_once('connect.php');

$db_server = mysql_connect($hostname, $user, $pass);
if(!$db_server) die("Unable to connect to MySQL:".mysql_error());
mysql_select_db($database, $db_server) or die("Unable to select database:".mysql_error());
 
$var_value = $_GET['username'];
//$myText = (string)$var_value;

?>

<center><br />
<h2>Thanks for voting, <?php echo $var_value; ?></h2><br><br />

You selections were submitted as follows:<br />
</center>
<?php

$query = "SELECT * FROM stage1users WHERE username = '$var_value'";
$result = mysql_query($query);

if (!$result) die ("Database access failed: ".mysql_error());
$rows = mysql_num_rows($result);

for($j = 0; $j <$rows; ++$j)
{
	$row = mysql_fetch_row($result);
	echo <<<_END
<pre>
	Industrial Broker of the Year: $row[4], $row[5], $row[6]
	
	Investment Broker of the Year: $row[7], $row[8], $row[9]
	
	Retail Broker of the Year: $row[10], $row[11], $row[12]
	
	Office Broker of the Year: $row[13], $row[14], $row[15]
	
	Architectural Firm of the Year: $row[16], $row[17], $row[18]
	
	Contractor of the Year: $row[19], $row[20]
	
	Developer of the Year: $row[22], $row[23], $row[24]
	
	Property Manager of the Year: $row[25]
	
	Real Estate Attorney of the Year: $row[28], $row[29], $row[30]
	
	Commercial Real Estate Broker of the Year: $row[31], $row[32], $row[33]
	
	Mid Market Real Estate Broker of the Year: $row[34], $row[35], $row[36]
	
</pre>
_END;
}

mysql_close();
?>


</div>
</body>
</html> 


