<?php
session_start();
ob_start();
$db=mysql_connect("localhost","essdev_ccim","pass@word1");
mysql_select_db("essdev_ccim",$db);
?>
