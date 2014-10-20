<?php

require_once('connect.php');
ini_set('display_errors','off');
$db_server = mysql_connect($hostname, $user, $pass);
if(!$db_server) die("Unable to connect to MySQL:".mysql_error());
mysql_select_db($database, $db_server) or die("Unable to select database:".mysql_error());

// username and password sent from form
$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM stage1users WHERE username='$username' and password='$password' and status='y'";
$result=mysql_query($sql);

	
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

$voteCheck="SELECT * FROM stage1users WHERE username='$username' and password='$password'";
$result=mysql_query($voteCheck);
while ($row = mysql_fetch_object($result))
{
	
	//echo $row->voteCheck;
	
	if($row->username == "Admin"){
		header("location:stage1Admin.php");
		echo hello;
	}
	 else if($row->voteCheck == 1){//if already voted
		header("location:stage1voted.php?username=$username");
		//include('stage1/stage1.php?username');
	}
	
	else if($row->voteCheck == 0){
		header("location:stage2.php?username=$username");
		//include 'stage1/stage1.php?username';
	}
}

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("username");
//session_register("password");
//include('stage1/stage2.php');
}

else {

header("location:loginIssue.php");

}


?>

