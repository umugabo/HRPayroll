<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "dbtest";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
if(isset($_POST['add'])){
			
	$save=mysql_query("INSERT INTO  report (names,sector,time,ibyakiriwe,ibakemuwe,ibyananiranye,common,nature,institution,innovation,presented) 
		VALUES ('$_POST[names]','$_POST[sector]','$_POST[date]','$_POST[ibyakiriwe]','$_POST[ibyakemuwe]','$_POST[ibigikurikiranwa]','$_POST[common]','$_POST[nature]','$_POST[institution]','$_POST[innovation]','$_POST[presented]')");
	if ($save) {
	header("location: report_archive.php");
	exit();	
			}
		else{
	echo("<script>alert('Some Error Occured');</script>");
		header("location: genarate_report.php");
				
			exit();
			}

			 
        	
}
?>