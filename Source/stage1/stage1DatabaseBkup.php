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


$dbVar1A = $_GET["t1a"]; $dbVar1B = $_GET["t1b"]; $dbVar1C = $_GET["t1c"]; $dbVar2A = $_GET["t2a"]; $dbVar2B = $_GET["t2b"]; $dbVar2C = $_GET["t2c"];$dbVar3A = $_GET["t3a"]; $dbVar3B = $_GET["t3b"]; $dbVar3C = $_GET["t3c"]; $dbVar4A = $_GET["t4a"]; $dbVar4B = $_GET["t4b"]; $dbVar4C = $_GET["t4c"]; $dbVar5A = $_GET["t5a"]; $dbVar5B = $_GET["t5b"]; $dbVar5C = $_GET["t5c"]; $dbVar6A = $_GET["t6a"]; $dbVar6B = $_GET["t6b"]; $dbVar6C = $_GET["t6c"]; $dbVar7A = $_GET["t7a"]; $dbVar7B = $_GET["t7b"]; $dbVar7C = $_GET["t7c"]; $dbVar8A = $_GET["t8a"]; $dbVar8B = $_GET["t8b"]; $dbVar8C = $_GET["t8c"]; $dbVar9A = $_GET["t9a"]; $dbVar9B = $_GET["t9b"]; $dbVar9C = $_GET["t9c"]; $dbVar10A = $_GET["t10a"]; $dbVar10B = $_GET["t10b"]; $dbVar10C = $_GET["t10c"]; $dbVar11A = $_GET["t11a"]; $dbVar11B = $_GET["t11b"]; $dbVar11C = $_GET["t11c"];


$answer1A = $_GET['category1A'];
$answer1B = $_GET['category1B'];
$answer1C = $_GET['category1C'];

$query1A = "UPDATE stage1users SET Category1A = '$dbVar1A' WHERE username='$var_value'";
$query1B = "UPDATE stage1users SET Category1B = '$dbVar1B' WHERE username='$var_value'";
$query1C = "UPDATE stage1users SET Category1C = '$dbVar1C' WHERE username='$var_value'";

$result1A = mysql_query($query1A);
$result1B = mysql_query($query1B);
$result1C = mysql_query($query1C);

//****

$answer2A = $_GET['category2A'];
$answer2B = $_GET['category2B'];
$answer2C = $_GET['category2C'];

$query2A = "UPDATE stage1users SET category2A = '$dbVar2A' WHERE username='$var_value'";
$query2B = "UPDATE stage1users SET category2B = '$dbVar2B' WHERE username='$var_value'";
$query2C = "UPDATE stage1users SET category2C = '$dbVar2C' WHERE username='$var_value'";

$result2A = mysql_query($query2A);
$result2B = mysql_query($query2B);
$result2C = mysql_query($query2C);

//****

$answer3A = $_GET['category3A'];
$answer3B = $_GET['category3B'];
$answer3C = $_GET['category3C'];

$query3A = "UPDATE stage1users SET category3A = '$dbVar3A' WHERE username='$var_value'";
$query3B = "UPDATE stage1users SET category3B = '$dbVar3B' WHERE username='$var_value'";
$query3C = "UPDATE stage1users SET category3C = '$dbVar3C' WHERE username='$var_value'";

$result3A = mysql_query($query3A);
$result3B = mysql_query($query3B);
$result3C = mysql_query($query3C);

//****

$answer4A = $_GET['category4A'];
$answer4B = $_GET['category4B'];
$answer4C = $_GET['category4C'];

$query4A = "UPDATE stage1users SET category4A = '$dbVar4A' WHERE username='$var_value'";
$query4B = "UPDATE stage1users SET category4B = '$dbVar4B' WHERE username='$var_value'";
$query4C = "UPDATE stage1users SET category4C = '$dbVar4C' WHERE username='$var_value'";

$result4A = mysql_query($query4A);
$result4B = mysql_query($query4B);
$result4C = mysql_query($query4C);

$answer5A = $_GET['category5A'];
$answer5B = $_GET['category5B'];
$answer5C = $_GET['category5C'];

$query5A = "UPDATE stage1users SET category5A = '$dbVar5A' WHERE username='$var_value'";
$query5B = "UPDATE stage1users SET category5B = '$dbVar5B' WHERE username='$var_value'";
$query5C = "UPDATE stage1users SET category5C = '$dbVar5C' WHERE username='$var_value'";

$result5A = mysql_query($query5A);
$result5B = mysql_query($query5B);
$result5C = mysql_query($query5C);

//****

$answer6A = $_GET['category6A'];
$answer6B = $_GET['category6B'];
$answer6C = $_GET['category6C'];

$query6A = "UPDATE stage1users SET category6A = '$dbVar6A' WHERE username='$var_value'";
$query6B = "UPDATE stage1users SET category6B = '$dbVar6B' WHERE username='$var_value'";
$query6C = "UPDATE stage1users SET category6C = '$dbVar6C' WHERE username='$var_value'";

$result6A = mysql_query($query6A);
$result6B = mysql_query($query6B);
$result6C = mysql_query($query6C);

//****

$answer7A = $_GET['category7A'];
$answer7B = $_GET['category7B'];
$answer7C = $_GET['category7C'];

$query7A = "UPDATE stage1users SET category7A = '$dbVar7A' WHERE username='$var_value'";
$query7B = "UPDATE stage1users SET category7B = '$dbVar7B' WHERE username='$var_value'";
$query7C = "UPDATE stage1users SET category7C = '$dbVar7C' WHERE username='$var_value'";

$result7A = mysql_query($query7A);
$result7B = mysql_query($query7B);
$result7C = mysql_query($query7C);

//****

$answer8A = $_GET['category8A'];
$answer8B = $_GET['category8B'];
$answer8C = $_GET['category8C'];

$query8A = "UPDATE stage1users SET category8A = '$dbVar8A' WHERE username='$var_value'";
$query8B = "UPDATE stage1users SET category8B = '$dbVar8B' WHERE username='$var_value'";
$query8C = "UPDATE stage1users SET category8C = '$dbVar8C' WHERE username='$var_value'";

$result8A = mysql_query($query8A);
$result8B = mysql_query($query8B);
$result8C = mysql_query($query8C);

//****

$answer9A = $_GET['category9A'];
$answer9B = $_GET['category9B'];
$answer9C = $_GET['category9C'];

$query9A = "UPDATE stage1users SET category9A = '$dbVar9A' WHERE username='$var_value'";
$query9B = "UPDATE stage1users SET category9B = '$dbVar9B' WHERE username='$var_value'";
$query9C = "UPDATE stage1users SET category9C = '$dbVar9C' WHERE username='$var_value'";

$result9A = mysql_query($query9A);
$result9B = mysql_query($query9B);
$result9C = mysql_query($query9C);

//****

$answer10A = $_GET['category10A'];
$answer10B = $_GET['category10B'];
$answer10C = $_GET['category10C'];

$query10A = "UPDATE stage1users SET category10A = '$dbVar10A' WHERE username='$var_value'";
$query10B = "UPDATE stage1users SET category10B = '$dbVar10B' WHERE username='$var_value'";
$query10C = "UPDATE stage1users SET category10C = '$dbVar10C' WHERE username='$var_value'";

$result10A = mysql_query($query10A);
$result10B = mysql_query($query10B);
$result10C = mysql_query($query10C);

//****

$answer11A = $_GET['category11A'];
$answer11B = $_GET['category11B'];
$answer11C = $_GET['category11C'];

$query11A = "UPDATE stage1users SET category11A = '$dbVar11A' WHERE username='$var_value'";
$query11B = "UPDATE stage1users SET category11B = '$dbVar11B' WHERE username='$var_value'";
$query11C = "UPDATE stage1users SET category11C = '$dbVar11C' WHERE username='$var_value'";

$result11A = mysql_query($query11A);
$result11B = mysql_query($query11B);
$result11C = mysql_query($query11C);




?>
<center><br />

<!--***
***-->
<?php
$name = strtolower($var_value);

if($name == 'thardy'){
	$name = 'Troy';
}

if($name == 'sandrews'){
	$name = 'Steve';
}

if($name == 'dbanks'){
	$name = 'Diane';
}

if($name == 'rbellow'){
	$name = 'Rusty';
}

if($name == 'jbooth'){
	$name = 'Jared';
}

if($name == 'bbradley'){
	$name = 'Ben';
}

if($name == 'nhanks'){
	$name = 'Nate';
}

if($name == 'jhilton'){
	$name = 'James';
}

if($name == 'jjensen'){
	$name = 'Jeremy';
}

if($name == 'jkim'){
	$name = 'Jessmine';
}

if($name == 'gkohler'){
	$name = 'Grady';
}

if($name == 'tparry'){
	$name = 'Travis';
}

if($name == 'mrafferty'){
	$name = 'Monica';
}

if($name == 'cromrell'){
	$name = 'Craig';
}

if($name == 'crussell'){
	$name = 'Chuck';
}

if($name == 'esmith'){
	$name = 'Eric';
}

if($name == 'jsmith'){
	$name = 'John';
}

if($name == 'bstratton'){
	$name = 'Brent';
}

if($name == 'mwestbrook'){
	$name = 'Molly';
}

if($name == 'awheeler'){
	$name = 'Andy';
}

if($name == 'jwilking'){
	$name = 'Jan';
}
?>
<!--***
***-->
<h2>Thanks for voting,&nbsp; <?php echo $name;?></h2><br><br />

Your selections will submitted as follows:<br />
</center>
<?php



$queryPage = "SELECT * FROM stage1users WHERE username='$var_value'";
$resultPage = mysql_query($queryPage);


$rows = mysql_num_rows($resultPage);

for($j = 0; $j < $rows; ++$j)
{
	$row = mysql_fetch_row($resultPage);
	echo <<<_END
	<pre>
	<div id="resultsID">
	<table border="0">
	<tr><td><h3>Industrial Broker of the Year:</h3> $row[4], $row[5], $row[6]&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td><h3>Investment Broker of the Year:</h3> $row[7], $row[8], $row[9]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td><h3>Retail Broker of the Year:</h3> $row[10], $row[11], $row[12]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td><h3>Office Broker of the Year:</h3> $row[13], $row[14], $row[15]</td></tr><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
	<tr><td><h3>Architectural Firm of the Year:</h3> $row[16], $row[17], $row[18]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td><h3>Contractor of the Year:</h3> $row[19], $row[20], $row[21]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td><h3>Developer of the Year:</h3> $row[22], $row[23], $row[24]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td><h3>Property Manager of the Year:</h3> $row[25], $row[26], $row[27]</td></tr><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
	<tr><td><h3>Real Estate Attorney of the Year:</h3> $row[28], $row[29], $row[30]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td><h3>Commercial Real Estate Broker of the Year:</h3> $row[31], $row[32], $row[33]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td><h3>Mid Market Real Estate Broker of the Year:</h3> $row[34], $row[35], $row[36]</td></tr>
	</table>
	</div>
	</pre>
	
_END;
}
?>
<center>
Click on the button below to finalize and be redirected to the main page.

<form id="finalize" action="stage1Finalize.php">
<input type="hidden" name="userName" value="<?php echo $var_value ?>"/>
<input type="submit" value="Finalize and redirect"/>
</form>
<input type="button" value="<-- Go back and change my vote" onclick="window.history.back()"/>
</center>
</div>
</body>
</html> 


