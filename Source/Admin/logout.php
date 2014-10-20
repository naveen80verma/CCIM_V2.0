<?php
session_start();
unset($_SESSION["admin_name"]);
?>
<script type="text/javascript">
		window.location.href = 'login.php'; 
	</script>