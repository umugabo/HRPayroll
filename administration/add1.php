<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "dbtest";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
if(isset($_POST['add'])){
			
			$save=mysql_query("INSERT INTO  question (ufn, uln,usec,ucell,uid,structure,conclusion,nb,lfname,llname,post,depart,time) 
				VALUES ('$_POST[fname]','$_POST[lname]','$_POST[sec]','$_POST[cell]','$_POST[id]','$_POST[structure]',
					'$_POST[conclusion]','$_POST[nb]','$_POST[rfname]','$_POST[rlname]','$_POST[post]','$_POST[depart]','$_POST[date]')");
			if ($save) {
				header("location: add.php");
			exit();	
			}
			else{
				header("location: error.php");
			exit();
			}

			 
        	
}
?>