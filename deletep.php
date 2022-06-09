<?php
include 'dbcon.php';
	$pass = $_POST['id'];
	mysql_query("DELETE from empl_table WHERE id='$pass'");
			

		 echo "<script>windows: location='delete.php'</script>";				
			