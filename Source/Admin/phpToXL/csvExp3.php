<?php
require_once 'connect.php';
$db_server = mysql_connect($hostname, $user, $pass);
if(!$db_server) die("Unable to connect to MySQL:".mysql_error());
mysql_select_db($database, $db_server) or die("Unable to select database:".mysql_error());

$output = "";
$table = "stage1users"; // Enter Your Table Name 
$sql = mysql_query("select * from $table");
$columns_total = mysql_num_fields($sql);

// Get The Field Name

for ($i = 0; $i < $columns_total; $i++) {
	if($i != 3){
$heading = mysql_field_name($sql, $i);
$output .= ''.$heading.',';
	}
}
$output .="\n";

// Get Records from the table

while ($row = mysql_fetch_array($sql)) {
for ($i = 0; $i < $columns_total; $i++) {
	if($i != 3){
$output .=''.$row["$i"].',';
	}
}
$output .="\n";
}

// Download the file

$filename = "myFile.csv";
//header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);

echo $output;

exit;
?>

If VoteCheck = 1, that means user has voted