<?php 
	include("common/connect.php");
	$id=$_GET['id'];
	 $query=mysql_query("delete from stage1users  where id='".$id."'");
	if($query)
	{
	?>
	<script type="text/javascript">
		window.location.href = 'index.php?status=done'; 
	</script>
	<?php
	}
	else
	{
	?>
	<script type="text/javascript">
		window.location.href = 'index.php?status=done'; 
	</script>
	<?php
	
	}
	?>