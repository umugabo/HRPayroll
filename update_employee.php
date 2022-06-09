<?php
include 'dbcon.php';
$pass =$_REQUEST['id'];
$id = $_POST['pass'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone=$_POST['phone'];
	$Email=$_POST['Email'];
	$gender=$_POST['gender'];


	mysql_query("UPDATE empl_table SET ID_Card='$ID_Card', fname='$fname', lname='$lname', phone='$phone',Email='$Email',gender='$gender',username='$username',password='".md5($_POST['password'])."' WHERE pass ='$$owner_id'") or die (mysql_error());
			
echo '<script>alert("Record updated!");
				window.location.href="hr.php"</script>';			
			?>