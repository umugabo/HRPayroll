<?php
if(isset($_POST['signup'])) {
	$con=mysql_connect("localhost","root","");
mysql_select_db("dbtest");
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name=addslashes($_FILES['image']['name']);
$save=mysql_query("INSERT INTO sector (first,last,phone,sector,department,post,email,password,image,name)
 VALUES ('$_POST[first]','$_POST[last]','$_POST[phone]','$_POST[sector]','$_POST[department]','$_POST[post]','$_POST[email]','$_POST[password]','$image','$image_name')");

		if ($save) {
		include"view.php";
 }
 else
 {
 	echo "<script>alert('error while registering you');</script>";
 	include"regist.html";

 }
}

?>