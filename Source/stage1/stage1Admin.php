<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link type="text/css" rel="stylesheet" href="folderCSS/passwordChanged.css" />
<body>
<div id="mainContent2">
<img src="Images/BEALogo.png"/>
<center>
<?php
require_once('connect.php');

$db_server = mysql_connect($hostname, $user, $pass);
if(!$db_server) die("Unable to connect to MySQL:".mysql_error());
mysql_select_db($database, $db_server) or die("Unable to select database:".mysql_error());

session_start(); 
$var_value = $_GET['username'];
//$myText = (string)$var_value;

?>
<table id="display" style="display:inline-block; margin-right: 50px;" border="1"><tr><th colspan="3" height="60" bgcolor="#CCCCCC">Users who have voted</th></tr>
<tr><th bgcolor="#CCCCCC">Username</th><th bgcolor="#CCCCCC">Name</th><th bgcolor="#CCCCCC">Email</th></tr>
<?php

$query = "SELECT * FROM stage1users WHERE voteCheck = 1 AND number != 99";
$result = mysql_query($query);

$count = 0;

if (!$result) die ("Database access failed: ".mysql_error());

$rows = mysql_num_rows($result);

for($j = 0; $j <$rows; ++$j)
{
	$count++;
	$row = mysql_fetch_row($result);
	if($count%2){?><tr bgcolor="#CCCCCC"><?php }if(!($count%2)){?><tr bgcolor="#999999"><?php }?><td><?php echo <<<_END

	$row[2] </td> <td>$row[38]</td><td>$row[37]
	
</td></tr>

_END;

}
?><?php
//mysql_close();
?>
</table>

<table id="display" style="display:inline-block; margin-left: 50px;" border="1"><tr><th colspan="3" height="60" bgcolor="#CCCCCC">Users who have not voted</th></tr>
<tr><th bgcolor="#CCCCCC">Username</th><th bgcolor="#CCCCCC">Name</th><th bgcolor="#CCCCCC">Email</th></tr>
<?php

$query = "SELECT * FROM stage1users WHERE voteCheck = 0 AND number != 99";
$result = mysql_query($query);

$count = 0;

if (!$result) die ("Database access failed: ".mysql_error());

$rows = mysql_num_rows($result);

for($j = 0; $j <$rows; ++$j)
{
	$count++;
	$row = mysql_fetch_row($result);
	if($count%2){?><tr bgcolor="#CCCCCC"><?php }if(!($count%2)){?><tr bgcolor="#999999"><?php }?><td><?php echo <<<_END

	$row[2] </td> <td>$row[38]</td><td> $row[37]
	
</td></tr>

_END;

}
?>
</table>
</center>
<?php
//****
//CATEGORY 1
//****

$query = "SELECT * FROM stage1users WHERE voteCheck = 1 AND number != 99";
$result = mysql_query($query);

//Cat 1
$anderson = 0;
$dishman = 0;
$heaton = 0;
$parry = 0;
$richards = 0;
$roberts = 0;

//Cat 2
$barratt = 0;
$blanchard = 0;
$paul = 0;
$shin = 0;
$wood = 0;

//CAT 3
$bogden;
$hatch;
$moore;
$simonsen;
$thain;

//CAT 4
$fugal = 0;
$perkins = 0;
$smith = 0;

//CAT 5
$eda = 0;
$ffkr = 0;
$mhtn = 0;

//CAT 6
$bigd = 0;
$layton = 0;
$okland = 0;

//CAT 7
$freeport = 0;
$miller = 0;

//CAT 8
$bennion = 0;

//CAT 9
$hulme = 0;
$sabey = 0;
$taylor = 0;

//CAT 10
$duke = 0;
$holt = 0;
$montegomery = 0;
$pearce = 0;
$thompson = 0;

//CAT 11
$green = 0;
$hilton = 0;
$mastakas = 0;
$mccarty = 0;
$smith = 0;
$snow = 0;
$spiers = 0;

if (!$result) die ("Database access failed: ".mysql_error());

$rows = mysql_num_rows($result);

for($j = 0; $j <$rows; ++$j)

{
	$row = mysql_fetch_row($result);
	{
	switch($row[4])
	{
		case "Zach Anderson":
		$anderson++;
		break;
		
		case "Tom Dischman":
		$dishman++;
		break;
		
		case "Jeff Heaton":
		$heaton++;
		break;
		
		case "Travis J. Parry":
		$parry++;
		break;
		
		case "Jeff Richards":
		$richards++;
		break;
		
		case "Kyle Roberts":
		$roberts++;
		break;
	}
	
	switch($row[5])
	{
		case "Zach Anderson":
		$anderson++;
		break;
		
		case "Tom Dishman":
		$dishman++;
		break;
		
		case "Jeff Heaton":
		$heaton++;
		break;
		
		case "Travis J. Parry":
		$parry++;
		break;
		
		case "Jeff Richards":
		$richards++;
		break;
		
		case "Kyle Roberts":
		$roberts++;
		break;
	}
	switch($row[6])
	{
		case "Zach Anderson":
		$anderson++;
		break;
		
		case "Tom Dishman":
		$dishman++;
		break;
		
		case "Jeff Heaton":
		$heaton++;
		break;
		
		case "Travis J. Parry":
		$parry++;
		break;
		
		case "Jeff Richards":
		$richards++;
		break;
		
		case "Kyle Roberts":
		$roberts++;
		break;
	}
	//CATEGORY 2
	switch($row[7])
	{
		case "Greg Barratt":
		$barratt++;
		break;
		
		case "Bryce Blanchard":
		$blanchard++;
		break;
		
		case "Kip Paul":
		$paul++;
		break;
		
		case "Danny Shin":
		$shin++;
		break;
		
		case "Brandon Wood":
		$wood++;
		break;
	}
	
	switch($row[8])
	{
		case "Greg Barratt":
		$barratt++;
		break;
		
		case "Bryce Blanchard":
		$blanchard++;
		break;
		
		case "Kip Paul":
		$paul++;
		break;
		
		case "Danny Shin":
		$shin++;
		break;
		
		case "Brandon Wood":
		$wood++;
		break;
	}
	switch($row[9])
	{
		case "Greg Barratt":
		$barratt++;
		break;
		
		case "Bryce Blanchard":
		$blanchard++;
		break;
		
		case "Kip Paul":
		$paul++;
		break;
		
		case "Danny Shin":
		$shin++;
		break;
		
		case "Brandon Wood":
		$wood++;
		break;
	}
	//CATEGORY 3
	switch($row[10])
	{
		case "Heather Bogden":
		$bogden++;
		break;
		
		case "Chris Hatch":
		$hatch++;
		break;
		
		case "Rob Moore":
		$moore++;
		break;
		
		case "Tim Simonsen":
		$simonsen++;
		break;
		
		case "Stuart Thain":
		$thain++;
		break;
	}
	switch($row[11])
	{
		case "Heather Bogden":
		$bogden++;
		break;
		
		case "Chris Hatch":
		$hatch++;
		break;
		
		case "Rob Moore":
		$moore++;
		break;
		
		case "Tim Simonsen":
		$simonsen++;
		break;
		
		case "Stuart Thain":
		$thain++;
		break;
	}
	switch($row[12])
	{
		case "Heather Bogden":
		$bogden++;
		break;
		
		case "Chris Hatch":
		$hatch++;
		break;
		
		case "Rob Moore":
		$moore++;
		break;
		
		case "Tim Simonsen":
		$simonsen++;
		break;
		
		case "Stuart Thain":
		$thain++;
		break;
	}
	//CATEGORY 4
	switch($row[13])
	{
		case "Brandon Fugal":
		$fugal++;
		break;
		
		case "Collin Perkins":
		$perkins++;
		break;
		
		case "Eric Smith":
		$smith++;
		break;
	}
	switch($row[14])
	{
		case "Brandon Fugal":
		$fugal++;
		break;
		
		case "Collin Perkins":
		$perkins++;
		break;
		
		case "Eric Smith":
		$smith++;
		break;
		
	}
	switch($row[15])
	{
		case "Brandon Fugal":
		$fugal++;
		break;
		
		case "Collin Perkins":
		$perkins++;
		break;
		
		case "Eric Smith":
		$smith++;
		break;
		
	}
	//CATEGORY 5
	switch($row[16])
	{
		case "EDA Architects":
		$eda++;
		break;
		
		case "FFKR Architects":
		$ffkr++;
		break;
		
		case "MHTN Architects":
		$mhtn++;
		break;
	}
	switch($row[17])
	{
		case "EDA Architects":
		$eda++;
		break;
		
		case "FFKR Architects":
		$ffkr++;
		break;
		
		case "MHTN Architects":
		$mhtn++;
		break;
	}
	switch($row[18])
	{
		case "EDA Architects":
		$eda++;
		break;
		
		case "FFKR Architects":
		$ffkr++;
		break;
		
		case "MHTN Architects":
		$mhtn++;
		break;
	}
	//Category 6
	switch($row[19])
	{
		case "Big-D Construction":
		$bigd++;
		break;
		
		case "Layton Construction":
		$layton++;
		break;
		
		case "Okland Construction":
		$okland++;
		break;
	}
	switch($row[20])
	{
		case "Big-D Construction":
		$bigd++;
		break;
		
		case "Layton Construction":
		$layton++;
		break;
		
		case "Okland Construction":
		$okland++;
		break;
	}
	switch($row[21])
	{
		case "Big-D Construction":
		$bigd++;
		break;
		
		case "Layton Construction":
		$layton++;
		break;
		
		case "Okland Construction":
		$okland++;
		break;
	}
	//Category 7
	switch($row[22])
	{
		case "Freeport West Industrial Prope":
		$freeport++;
		break;
		
		case "Miller Development Company":
		$miller++;
		break;
	}
	switch($row[23])
	{
		case "Freeport West Industrial Prope":
		$freeport++;
		break;
		
		case "Miller Development Company":
		$miller++;
		break;
	}
	
	//Category 8
	switch($row[25])
	{
		case "Scott Bennion":
		$bennion++;
		break;
	}
	//Category 9
	switch($row[28])
	{
		case "Loyal Hulme":
		$hulme++;
		break;
		
		case "Scott Sabey":
		$sabey++;
		break;
		
		case "Victor Taylor":
		$taylor++;
		break;
	}
	switch($row[29])
	{
		case "Loyal Hulme":
		$hulme++;
		break;
		
		case "Scott Sabey":
		$sabey++;
		break;
		
		case "Victor Taylor":
		$taylor++;
		break;
	}
	switch($row[30])
	{
		case "Loyal Hulme":
		$hulme++;
		break;
		
		case "Scott Sabey":
		$sabey++;
		break;
		
		case "Victor Taylor":
		$taylor++;
		break;
	}
	//Category 10
	switch($row[31])
	{
		case "Brandon Duke":
		$duke++;
		break;
		
		case "Jeffrey Holt":
		$holt++;
		break;
		
		case "John R. Montgomery":
		$montgomery++;
		break;
		
		case "Michelle Pearce":
		$pearce++;
		break;
		
		case "Todd Thompson":
		$thompson++;
		break;
	}
	switch($row[32])
	{
		case "Brandon Duke":
		$duke++;
		break;
		
		case "Jeffrey Holt":
		$holt++;
		break;
		
		case "John R. Montgomery":
		$montgomery++;
		break;
		
		case "Michelle Pearce":
		$pearce++;
		break;
		
		case "Todd Thompson":
		$thompson++;
		break;
	}
	switch($row[33])
	{
		case "Brandon Duke":
		$duke++;
		break;
		
		case "Jeffrey Holt":
		$holt++;
		break;
		
		case "John R. Montgomery":
		$montgomery++;
		break;
		
		case "Michelle Pearce":
		$pearce++;
		break;
		
		case "Todd Thompson":
		$thompson++;
		break;
	}
	//Category 11
	switch($row[34])
	{
		case "Tom Green":
		$green++;
		break;
		
		case "James Hilton":
		$hilton++;
		break;
		
		case "John Mastakas":
		$mastakas++;
		break;
		
		case "Sean McCarty":
		$mccarty++;
		break;
		
		case "Colton Smith":
		$csmith++;
		break;
		
		case "David Snow":
		$snow++;
		break;
		
		case "Ryan Speirs":
		$spiers++;
		break;
	}
	switch($row[35])
	{
		case "Tom Green":
		$green++;
		break;
		
		case "James Hilton":
		$hilton++;
		break;
		
		case "John Mastakas":
		$mastakas++;
		break;
		
		case "Sean McCarty":
		$mccarty++;
		break;
		
		case "Colton Smith":
		$csmith++;
		break;
		
		case "David Snow":
		$snow++;
		break;
		
		case "Ryan Speirs":
		$spiers++;
		break;
	}
	switch($row[36])
	{
		case "Tom Green":
		$green++;
		break;
		
		case "James Hilton":
		$hilton++;
		break;
		
		case "John Mastakas":
		$mastakas++;
		break;
		
		case "Sean McCarty":
		$mccarty++;
		break;
		
		case "Colton Smith":
		$csmith++;
		break;
		
		case "David Snow":
		$snow++;
		break;
		
		case "Ryan Speirs":
		$spiers++;
		break;
	}
	}
}?>
<center><table id="display2" border="1"><tr><th colspan="8" height="60" bgcolor="#CCCCCC">Vote Tally</th></tr><tr><td bgcolor="#cccccc"><?php 	
echo "Industrial Broker:&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Zach Anderson: ".$anderson."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Tom Dishman: ".$dishman."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Jeff Heaton: ".$heaton."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Travis J. Parry: ".$parry."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Jeff Richards: ".$richards."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Kyle Roberts: ".$roberts."&nbsp;&nbsp;<br />";?></td><td bgcolor="#cccccc"></td></tr>

<tr><td bgcolor="#999999"><?php
echo "Investment Broker:&nbsp;&nbsp;";?></td><td bgcolor="#999999"><?php
echo "&nbsp;&nbsp;Greg Barratt: ".$barratt."&nbsp;&nbsp;";?></td><td bgcolor="#999999"><?php
echo "&nbsp;&nbsp;Bryce Blanchard: ".$blanchard."&nbsp;&nbsp;";?></td><td bgcolor="#999999"><?php
echo "&nbsp;&nbsp;Kip Paul: ".$paul."&nbsp;&nbsp;";?></td><td bgcolor="#999999"><?php
echo "&nbsp;&nbsp;Danny Shin: ".$shin."&nbsp;&nbsp;";?></td><td bgcolor="#999999"><?php
echo "&nbsp;&nbsp;Brandon Wood: ".$wood."&nbsp;&nbsp;<br />";?></td><td bgcolor="#999999"></td><td bgcolor="#999999"></td></tr>

<tr><td bgcolor="#cccccc"><?php
echo "Retail Broker:&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Heather Bogden: ".$bogden."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Chris Hatch: ".$hatch."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Rob Moore: ".$moore."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Tim Simonsen: ".$simonsen."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Stuart Thain: ".$thain."&nbsp;&nbsp;<br />";?></td><td bgcolor="#cccccc"></td><td bgcolor="#cccccc"></td></tr>

<tr><td bgcolor="#999999"><?php
echo "Office Broker:&nbsp;&nbsp;";?></td><td bgcolor="#999999"><?php
echo "&nbsp;&nbsp;Brandon Fugal: ".$fugal."&nbsp;&nbsp;";?></td><td bgcolor="#999999"><?php
echo "&nbsp;&nbsp;Collin Perkins: ".$perkins."&nbsp;&nbsp;";?></td><td bgcolor="#999999"><?php
echo "&nbsp;&nbsp;Eric Smith: ".$smith."&nbsp;&nbsp;<br />";?></td><td bgcolor="#999999"></td><td bgcolor="#999999"></td><td bgcolor="#999999"></td><td bgcolor="#999999"></td></tr>

<tr><td bgcolor="#cccccc"><?php
echo "Architectural Firm:&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;EDA Architects: ".$eda."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;FFKR Architects: ".$ffkr."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;MHTN Architects: ".$mhtn."&nbsp;&nbsp;<br />";?></td><td bgcolor="#cccccc"></td><td bgcolor="#cccccc"></td><td bgcolor="#cccccc"></td><td bgcolor="#cccccc"></td></tr>

<tr><td bgcolor="#999999"><?php
echo "Contractor:&nbsp;&nbsp;";?></td><td bgcolor="#999999"><?php
echo "&nbsp;&nbsp;Big-D Construction: ".$bigd."&nbsp;&nbsp;";?></td><td bgcolor="#999999"><?php
echo "&nbsp;&nbsp;Layton Construction: ".$layton."&nbsp;&nbsp;";?></td><td bgcolor="#999999"><?php
echo "&nbsp;&nbsp;Okland Construction: ".$okland."&nbsp;&nbsp;<br />";?></td><td bgcolor="#999999"></td><td bgcolor="#999999"></td><td bgcolor="#999999"></td><td bgcolor="#999999"></td></tr>

<tr><td bgcolor="#cccccc"><?php
echo "Developer:&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Freeport West: ".$freeport."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Miller Development: ".$miller."&nbsp;&nbsp;<br />";?></td><td bgcolor="#cccccc"></td><td bgcolor="#cccccc"></td><td bgcolor="#cccccc"></td><td bgcolor="#cccccc"></td><td bgcolor="#cccccc"></td></tr>

<tr><td bgcolor="#999999"><?php
echo "Property Manager:&nbsp;&nbsp;";?></td><td bgcolor="#999999"><?php
echo "&nbsp;&nbsp;Scott Bennion: ".$bennion."&nbsp;&nbsp;<br />";?></td><td bgcolor="#999999"></td><td bgcolor="#999999"></td><td bgcolor="#999999"></td><td bgcolor="#999999"></td><td bgcolor="#999999"></td><td bgcolor="#999999"></td></tr>

<tr><td bgcolor="#cccccc"><?php
echo "Real Estate Attorney:&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Loyal Hulme: ".$hulme."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Scott Sabey: ".$sabey."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Victor Taylor: ".$taylor."&nbsp;&nbsp;<br />";?></td><td bgcolor="#cccccc"></td><td bgcolor="#cccccc"></td><td bgcolor="#cccccc"></td><td bgcolor="#cccccc"></td></tr>

<tr><td bgcolor="#999999"><?php
echo "Commercial Real Estate Banker:&nbsp;&nbsp;";?></td><td bgcolor="#999999"><?php
echo "&nbsp;&nbsp;Brandon Duke: ".$duke."&nbsp;&nbsp;";?></td><td bgcolor="#999999"><?php
echo "&nbsp;&nbsp;Jeffrey Holt: ".$holt."&nbsp;&nbsp;";?></td><td bgcolor="#999999"><?php
echo "&nbsp;&nbsp;John R. Montgomery: ".$montgomery."&nbsp;&nbsp;";?></td><td bgcolor="#999999"><?php
echo "&nbsp;&nbsp;Michelle Pearce: ".$pearce."&nbsp;&nbsp;";?></td><td bgcolor="#999999"><?php
echo "&nbsp;&nbsp;Todd Thompson: ".$thompson."&nbsp;&nbsp;<br />";?></td><td bgcolor="#999999"></td><td bgcolor="#999999"></td></tr>

<tr><td bgcolor="#cccccc"><?php
echo "Mid Market Real Estate Banker:&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Tom Green: ".$green."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;James Hilton: ".$hilton."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;John Mastakas: ".$mastakas."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Sean McCarty: ".$mccarty."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Colton Smith: ".$csmith."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;David Snow: ".$snow."&nbsp;&nbsp;";?></td><td bgcolor="#cccccc"><?php
echo "&nbsp;&nbsp;Ryan Spiers: ".$spiers."&nbsp;&nbsp;";?></td></tr>

?></td></tr>
</table>
<br />

<form name="input" action="phpToXL/csvExp3.php" method="get">
<input type="submit" value="Export">
</form> 
</center>
</div>
</body>
</html> 


