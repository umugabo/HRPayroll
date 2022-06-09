<?php

include 'dbcon.php';


?>

<html>




<body>

<table>



<?php

if(isset($_POST['gene'])){
	
			if(isset($_POST['bd'])){ $bd='birth date'; } else { $bd=""; }
			if(isset($_POST['gender'])){ $gen='gender'; } else { $gen=""; }
			if(isset($_POST['mstatus'])){ $mstatus='marture status'; } else { $mstatus="";}
			if(isset($_POST['phone'])){ $phone='phone'; } else { $phone=""; $phone1=""; }
			if(isset($_POST['email'])){ $email='email'; } else { $email=""; $email1=""; }
			if(isset($_POST['qualif'])){ $qualif='qualification'; } else { $qualif=""; }
			if(isset($_POST['startd'])){ $startd='start date';} else { $startd=""; }
			if(isset($_POST['endd'])){ $endd='ending date'; } else { $endd=""; }
			if(isset($_POST['pbirth'])){ $pbirth='birth place'; } else { $pbirth=""; }
			if(isset($_POST['presidance'])){ $presidance='residance place'; } else { $presidance=""; }
			if(isset($_POST['position'])){ $position='positon'; } else { $position=""; }
			if(isset($_POST['father_name'])){ $fname='father name'; } else { $fname=""; }
			if(isset($_POST['mother_name'])){ $mname='mother name'; } else { $mname="";}
			if(isset($_POST['nchild'])){ $nchild='no children'; } else { $nchild="";}
			if(isset($_POST['insurance'])){ $insurance='insurance'; } else { $insurance=""; }
			if(isset($_POST['em_number'])){ $em_number='emargency number'; } else { $em_number=""; }
			if(isset($_POST['em_name'])){ $em_name='emargency name'; } else { $em_name=""; }
			if(isset($_POST['username'])){ $username='username'; } else { $username=""; }
			
			
			if($_POST['date1'] !=""){ $date="employee.starting_date <='".$_POST['date1']."'"; } else { $date="employee.starting_date !=''"; }
			
			if(isset($_POST['choice1'])){
				if($_POST['choice1']==1){
					$cond="WHERE ".$date;
				}
				elseif($_POST['choice1']==2){
					$cond="WHERE employee.position=".$_POST['choice2']." AND ".$date;
				}
				elseif($_POST['choice1']==3){
					$cond="WHERE employee.qualification=".$_POST['choice2']." AND ".$date;
				}
				elseif($_POST['choice1']==4){
					$cond="WHERE employee.user_type=".$_POST['choice2']." AND ".$date;
				}
				elseif($_POST['choice1']==5){
					$cond="WHERE employee.status='".$_POST['choice2']."' AND ".$date;
				}
			}
	
	echo "<tr>
<td>Empleyee code</td>
<td>First Name</td>
<td>Middle Name</td>
<td>Last Name</td>
<td>".$bd."</td>
<td>".$gen."</td>
<td>".$mstatus."</td>
<td>".$phone."</td>
<td>".$email."</td>
<td>".$qualif."</td>
<td>".$startd."</td>
<td>".$endd."</td>
<td>".$pbirth."</td>
<td>".$presidance."</td>
<td>".$position."</td>
<td>".$fname."</td>
<td>".$mname."</td>
<td>".$nchild."</td>
<td>".$insurance."</td>
<td>".$em_number."</td>
<td>".$em_name."</td>
<td>".$username."</td>

</tr>";
	
	
$result = mysqli_query($conn, "SELECT * FROM `employee` INNER JOIN positions ON positions.post_id=employee.position INNER JOIN qualifications ON qualifications.qual_id=employee.qualification $cond");
		while($row = mysqli_fetch_array($result))
		{	  
			if(isset($_POST['bd'])){ $bd1=$row['birth_date']; } else { $bd1=""; }
			if(isset($_POST['gender'])){ $gen1=$row['gender']; } else { $gen1="";  }
			if(isset($_POST['mstatus'])){ $mstatus1=$row['mstatus']; } else { $mstatus1=""; }
			if(isset($_POST['phone'])){ $phone1=$row['phone']; } else { $phone1=""; }
			if(isset($_POST['email'])){  $email1=$row['email']; } else { $email1=""; }
			if(isset($_POST['qualif'])){  $qualif1=$row['qual_name']; } else { $qualif1=""; }
			if(isset($_POST['startd'])){  $startd1=$row['starting_date']; } else { $startd1=""; }
			if(isset($_POST['endd'])){ $endd1=$row['ending_date']; } else { $endd1=""; }
			if(isset($_POST['pbirth'])){ $pbirth1=$row['place_birth']; } else { $pbirth1=""; }
			if(isset($_POST['presidance'])){ $presidance1=$row['place_residence']; } else { $presidance1=""; }
			if(isset($_POST['position'])){ $position1=$row['post_name']; } else { $position1=""; }
			if(isset($_POST['father_name'])){ $fname1=$row['father_name']; } else { $fname1=""; }
			if(isset($_POST['mother_name'])){ $mname1=$row['mother_name']; } else { $mname1=""; }
			if(isset($_POST['nchild'])){ $nchild1=$row['n_child']; } else { $nchild1=""; }
			if(isset($_POST['insurance'])){ $insurance1=$row['insurance']; } else { $insurance1=""; }
			if(isset($_POST['em_number'])){ $em_number1=$row['em_number']; } else { $em_number1=""; }
			if(isset($_POST['em_name'])){ $em_name1=$row['em_name']; } else { $em_name1=""; }
			if(isset($_POST['username'])){ $username1=$row['username']; } else { $username1=""; }
			
			echo "<tr><td>".$row['emp_code']."</td><td>".$row['f_name']."</td><td>".$row['m_name']."</td><td>".$row['l_name']."</td><td>".$bd."</td>
<td>".$gen1."</td>
<td>".$mstatus1."</td>
<td>".$phone1."</td>
<td>".$email1."</td>
<td>".$qualif1."</td>
<td>".$startd1."</td>
<td>".$endd1."</td>
<td>".$pbirth1."</td>
<td>".$presidance1."</td>
<td>".$position1."</td>
<td>".$fname1."</td>
<td>".$mname1."</td>
<td>".$nchild1."</td>
<td>".$insurance1."</td>
<td>".$em_number1."</td>
<td>".$em_name1."</td>
<td>".$username1."</td></tr>";      
		}

}
?>



</table>






</body>

</html>