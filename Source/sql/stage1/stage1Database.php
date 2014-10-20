<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link type="text/css" rel="stylesheet" href="folderCSS/passwordChanged.css" />
<body>
<div id="mainContent">
<img src="Images/BEALogo.png"/>
<?php
require_once'../connect.php';

$db_server = mysql_connect($hostname, $username, $password);
if(!$db_server) die("Unable to connect to MySQL:".mysql_error());
mysql_select_db($database, $db_server) or die("Unable to select database:".mysql_error());

session_start(); 
$var_value = $_POST["userName"];
$myText = (string)$var_value;
$dbVar1A = $_POST["category1A"]; $dbVar1B = $_POST["category1B"]; $dbVar1C = $_POST["category1C"]; $dbVar2A = $_POST["category2A"]; $dbVar2B = $_POST["category2B"]; $dbVar2C = $_POST["category2C"];$dbVar3A = $_POST["category3A"]; $dbVar3B = $_POST["category3B"]; $dbVar3C = $_POST["category3C"]; $dbVar4A = $_POST["category4A"]; $dbVar4B = $_POST["category4B"]; $dbVar4C = $_POST["category4C"]; $dbVar5A = $_POST["category5A"]; $dbVar5B = $_POST["category5B"]; $dbVar5C = $_POST["category5C"]; $dbVar6A = $_POST["category6A"]; $dbVar6B = $_POST["category6B"]; $dbVar6C = $_POST["category6C"]; $dbVar7A = $_POST["category7A"]; $dbVar7B = $_POST["category7B"]; $dbVar7C = $_POST["category7C"]; $dbVar8A = $_POST["category8A"]; $dbVar8B = $_POST["category8B"]; $dbVar8C = $_POST["category8C"]; $dbVar9A = $_POST["category9A"]; $dbVar9B = $_POST["category9B"]; $dbVar9C = $_POST["category9C"]; $dbVar10A = $_POST["category10A"]; $dbVar10B = $_POST["category10B"]; $dbVar10C = $_POST["category10C"];


$answer1A = $_POST['category1A'];
$answer1B = $_POST['category1B'];
$answer1C = $_POST['category1C'];

$query1A = "UPDATE stage1users SET category1A = '$dbVar1A' WHERE username='$var_value'";
$query1B = "UPDATE stage1users SET category1B = '$dbVar1B' WHERE username='$var_value'";
$query1C = "UPDATE stage1users SET category1C = '$dbVar1C' WHERE username='$var_value'";

$result1A = mysql_query($query1A);
$result1B = mysql_query($query1B);
$result1C = mysql_query($query1C);

//****

$answer2A = $_POST['category2A'];
$answer2B = $_POST['category2B'];
$answer2C = $_POST['category2C'];

$query2A = "UPDATE stage1users SET category2A = '$dbVar2A' WHERE username='$var_value'";
$query2B = "UPDATE stage1users SET category2B = '$dbVar2B' WHERE username='$var_value'";
$query2C = "UPDATE stage1users SET category2C = '$dbVar2C' WHERE username='$var_value'";

$result2A = mysql_query($query2A);
$result2B = mysql_query($query2B);
$result2C = mysql_query($query2C);

//****

$answer3A = $_POST['category3A'];
$answer3B = $_POST['category3B'];
$answer3C = $_POST['category3C'];

$query3A = "UPDATE stage1users SET category3A = '$dbVar3A' WHERE username='$var_value'";
$query3B = "UPDATE stage1users SET category3B = '$dbVar3B' WHERE username='$var_value'";
$query3C = "UPDATE stage1users SET category3C = '$dbVar3C' WHERE username='$var_value'";

$result3A = mysql_query($query3A);
$result3B = mysql_query($query3B);
$result3C = mysql_query($query3C);

//****

$answer4A = $_POST['category4A'];
$answer4B = $_POST['category4B'];
$answer4C = $_POST['category4C'];

$query4A = "UPDATE stage1users SET category4A = '$dbVar4A' WHERE username='$var_value'";
$query4B = "UPDATE stage1users SET category4B = '$dbVar4B' WHERE username='$var_value'";
$query4C = "UPDATE stage1users SET category4C = '$dbVar4C' WHERE username='$var_value'";

$result4A = mysql_query($query4A);
$result4B = mysql_query($query4B);
$result4C = mysql_query($query4C);

$answer5A = $_POST['category5A'];
$answer5B = $_POST['category5B'];
$answer5C = $_POST['category5C'];

$query5A = "UPDATE stage1users SET category5A = '$dbVar5A' WHERE username='$var_value'";
$query5B = "UPDATE stage1users SET category5B = '$dbVar5B' WHERE username='$var_value'";
$query5C = "UPDATE stage1users SET category5C = '$dbVar5C' WHERE username='$var_value'";

$result5A = mysql_query($query5A);
$result5B = mysql_query($query5B);
$result5C = mysql_query($query5C);

//****

$answer6A = $_POST['category6A'];
$answer6B = $_POST['category6B'];
$answer6C = $_POST['category6C'];

$query6A = "UPDATE stage1users SET category6A = '$dbVar6A' WHERE username='$var_value'";
$query6B = "UPDATE stage1users SET category6B = '$dbVar6B' WHERE username='$var_value'";
$query6C = "UPDATE stage1users SET category6C = '$dbVar6C' WHERE username='$var_value'";

$result6A = mysql_query($query6A);
$result6B = mysql_query($query6B);
$result6C = mysql_query($query6C);

//****

$answer7A = $_POST['category7A'];
$answer7B = $_POST['category7B'];
$answer7C = $_POST['category7C'];

$query7A = "UPDATE stage1users SET category7A = '$dbVar7A' WHERE username='$var_value'";
$query7B = "UPDATE stage1users SET category7B = '$dbVar7B' WHERE username='$var_value'";
$query7C = "UPDATE stage1users SET category7C = '$dbVar7C' WHERE username='$var_value'";

$result7A = mysql_query($query7A);
$result7B = mysql_query($query7B);
$result7C = mysql_query($query7C);

//****

$answer8A = $_POST['category8A'];
$answer8B = $_POST['category8B'];
$answer8C = $_POST['category8C'];

$query8A = "UPDATE stage1users SET category8A = '$dbVar8A' WHERE username='$var_value'";
$query8B = "UPDATE stage1users SET category8B = '$dbVar8B' WHERE username='$var_value'";
$query8C = "UPDATE stage1users SET category8C = '$dbVar8C' WHERE username='$var_value'";

$result8A = mysql_query($query8A);
$result8B = mysql_query($query8B);
$result8C = mysql_query($query8C);

//****

$answer9A = $_POST['category9A'];
$answer9B = $_POST['category9B'];
$answer9C = $_POST['category9C'];

$query9A = "UPDATE stage1users SET category9A = '$dbVar9A' WHERE username='$var_value'";
$query9B = "UPDATE stage1users SET category9B = '$dbVar9B' WHERE username='$var_value'";
$query9C = "UPDATE stage1users SET category9C = '$dbVar9C' WHERE username='$var_value'";

$result9A = mysql_query($query9A);
$result9B = mysql_query($query9B);
$result9C = mysql_query($query9C);

//****

$answer10A = $_POST['category10A'];
$answer10B = $_POST['category10B'];
$answer10C = $_POST['category10C'];

$query10A = "UPDATE stage1users SET category10A = '$dbVar10A' WHERE username='$var_value'";
$query10B = "UPDATE stage1users SET category10B = '$dbVar10B' WHERE username='$var_value'";
$query10C = "UPDATE stage1users SET category10C = '$dbVar10C' WHERE username='$var_value'";

$result10A = mysql_query($query10A);
$result10B = mysql_query($query10B);
$result10C = mysql_query($query10C);




?>
<center><br />
<h2>Thanks for voting, <?php echo $var_value; ?></h2><br><br />

Your selections were recorded as follows:<br />

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
	Category 1 Choices: $row[3], $row[4], $row[5]
	Category 2 Choices: $row[6], $row[7], $row[8]
	Category 3 Choices: $row[9], $row[10], $row[11]
	Category 4 Choices: $row[12], $row[13], $row[14]
	Category 5 Choices: $row[15], $row[16], $row[17]
	Category 6 Choices: $row[18], $row[19], $row[20]
	Category 7 Choices: $row[21], $row[22], $row[23]
	Category 8 Choices: $row[24], $row[25], $row[26]
	Category 9 Choices: $row[27], $row[28], $row[29]
	Category 10 Choices: $row[30], $row[31], $row[32]
	</div>
	</pre>
	
_END;
}


/*echo 'Category One:'.$_POST["category1A"]."&nbsp;&nbsp;&nbsp;&nbsp;". $_POST["category1B"]."&nbsp;&nbsp;&nbsp;&nbsp;".$_POST["category1C"].'<br />'.'Category Two:'.$_POST["category2A"]."&nbsp;&nbsp;&nbsp;&nbsp;". $_POST["category2B"]."&nbsp;&nbsp;&nbsp;&nbsp;".$_POST["category2C"].'<br />'.'Category Three:'.$_POST["category3A"]."&nbsp;&nbsp;&nbsp;&nbsp;". $_POST["category3B"]."&nbsp;&nbsp;&nbsp;&nbsp;".$_POST["category3C"].'<br />'.'Category Four:'.$_POST["category4A"]."&nbsp;&nbsp;&nbsp;&nbsp;". $_POST["category4B"]."&nbsp;&nbsp;&nbsp;&nbsp;".$_POST["category4C"].'<br />'.'Category Five:'.$_POST["category5A"]."&nbsp;&nbsp;&nbsp;&nbsp;". $_POST["category5B"]."&nbsp;&nbsp;&nbsp;&nbsp;".$_POST["category5C"].'<br />'.'Category Six:'.$_POST["category6A"]."&nbsp;&nbsp;&nbsp;&nbsp;". $_POST["category6B"]."&nbsp;&nbsp;&nbsp;&nbsp;".$_POST["category6C"].'<br />'.'Category Seven:'.$_POST["category7A"]."&nbsp;&nbsp;&nbsp;&nbsp;". $_POST["category7B"]."&nbsp;&nbsp;&nbsp;&nbsp;".$_POST["category7C"].'<br />'.'Category Eight:'.$_POST["category8A"]."&nbsp;&nbsp;&nbsp;&nbsp;". $_POST["category8B"]."&nbsp;&nbsp;&nbsp;&nbsp;".$_POST["category8C"].'<br />'.'Category Nine:'.$_POST["category9A"]."&nbsp;&nbsp;&nbsp;&nbsp;". $_POST["category9B"]."&nbsp;&nbsp;&nbsp;&nbsp;".$_POST["category9C"].'<br />'.'Category Ten:'.$_POST["category10A"]."&nbsp;&nbsp;&nbsp;&nbsp;". $_POST["category10B"]."&nbsp;&nbsp;&nbsp;&nbsp;".$_POST["category10C"]
*/?>

<?php


/*
$query = "SELECT * FROM classics";
$result = mysql_query($query);

if (!$result) die ("Database access failed: ".mysql_error());
$rows = mysql_num_rows($result);

for($j = 0; $j <$rows; ++$j)
{
	$row = mysql_fetch_row($result);
	echo <<<_END
<pre>
	Author $row[0]
	TItle $row[1]
	Category $row[2]
	Year $row[3]
	ISBN $row[4]
</pre>


_END;
}

mysql_close($db_server);

function get_post($var)
{
	return mysql_real_escape_string($_POST[$var]);
}
*/

mysql_close();
?>


</div>
</body>
</html> 


