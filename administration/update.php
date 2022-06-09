<?php
$co=mysql_connect("localhost","root","");
mysql_select_db("dbtest");
if (isset($_POST['comfirm'])) {
$save=mysql_query("INSERT INTO  appointment (host,place,time) 
				VALUES ('$_POST[host]','$_POST[place]','$_POST[date]')");
			if ($save) {
				header("location: respond.php");
			exit();	
			}
			else{
				header("location: error.php");
			exit();
			}

			 
}
?>