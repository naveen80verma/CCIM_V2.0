<?php 
	include("common/connect.php");
	$id=$_GET['id'];
	$status=$_GET['status'];
	$query=mysql_query("update stage1users  set status='".$status."' where id='".$id."'");
	if($query)
	{
	?>
	<script type="text/javascript">
		window.location.href = 'index.php?status=done&page=status'; 
	</script>
	<?php
	}
	else
	{
	?>
	<script type="text/javascript">
		window.location.href = 'index.php?status=done&page=status'; 
	</script>
	<?php
	
	}
	?>