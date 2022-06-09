<?php

include'dbcon.php';
$owner_id =$_REQUEST['id'];
$result = mysql_query("SELECT * FROM Empl_table WHERE pass ='$owner_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found.");
		}
				
			$empl_id=$test['empl_id_card'];
						
     if(isset($_REQUEST['ok']))
		  {
                $owner_id =$_REQUEST['id'];
	            $id = $_POST['pass'];

				$id=$_POST['ID_Card'] ;
				$fname= $_POST['fname'] ;					
				$lname=$_POST['lname'] ;

				$status=$_POST['Active'];
				$bscsa=$_POST['Basic_salary'];
				$tallo=$_POST['Trans_allowance'];
				$hallo=$_POST['House_allowance'];
				$inkh=$_POST['Inkind_house'];
				$inkt=$_POST['Inkind_trans'];
				$inkl=$_POST['Inkind_loan'];
				$inko=$_POST['Inkind_others'];
				

	
	$status='Active';
	 
	mysql_query("UPDATE Empl_table SET pass='$id', Basic_salary='$bscsa', Trans_allowance='$tallo', House_allowance='$hallo',Inkind_house='$inkh',Inkind_trans='$inkt',Inkind_loan='$inkl',Inkind_others='$inko' WHERE pass ='$owner_id'") or die (mysql_error());
										
						$id = mysql_query("select MAX(days) as max_id from empl_leave_tbl where empl_card='$ID_Card'");										
								$row = mysql_fetch_array($id);
								$yes=$row['0'] - $days; 
						
								mysql_query("UPDATE  Empl_table SET status='$Active' WHERE empl_card='$ID_Card'");
	
		
	
	
	echo '<script>alert("Record updated!");
				window.location.href="edit_salary.php"</script>';			
			
	}
	?>