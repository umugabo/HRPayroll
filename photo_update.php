<?php
include 'dbcon.php';
$owner_id =$_REQUEST['id'];
	$id = $_POST['ID_Card'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	
	$photo=$_POST['photo'];
	$cv=$_POST['cv'];
	$contract=$_POST['contract'];
	

	mysql_query("UPDATE Empl_table SET ID_Card='$id', fname='$fname', lname='$lname', photo='$photo',cv='$cv',contract='$contract' WHERE pass ='$owner_id'") or die (mysql_error());

echo '<script>alert("Record updated!");
				window.location.href="update.php"</script>';			
			?>