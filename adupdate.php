<?php
include 'dbcon.php';
$owner_id =$_REQUEST['id'];
	$id = $_POST['ID_Card'];
	$fn = $_POST['fname'];
	$ln = $_POST['lname'];
	$username=$_POST['username'];
	$password=$_POST['password'];



	mysql_query("UPDATE empl_table SET ID_Card='$id', fname='$fn', lname='$ln',username='$username',password='".md5($_POST['password'])."' WHERE pass ='$$owner_id'") or die (mysql_error());
			
echo '<script>alert("Record updated!");
				window.location.href="admupdate.php"</script>';			
			?>