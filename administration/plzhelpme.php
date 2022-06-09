<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "dbtest";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
if(isset($_POST['signup'])){
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name=addslashes($_FILES['image']['name']);
			
			$save=mysql_query("INSERT INTO  admin (first,last,tel,depart,title,email,password,image,image_name) 
				VALUES ('$_POST[first]','$_POST[last]','$_POST[tel]','$_POST[depart]','$_POST[title]','$_POST[demail]','$_POST[password]','$image','{$image_name}')");
			
		if ($save) {
		header("location:view_question.php");
 }
 else
 {
 	echo "<script>alert('error while registering you');</script>";
 	header("location:regist.html");
 	exit();
 }
}

?>