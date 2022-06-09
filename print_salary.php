<center><table border="1"><tr><td><img src="photo/log.jpg" width="100%" height="100" border="0" alt="" &nbsp;&nbsp;&nbsp;&nbsp; /></center>
<?php


include 'dbcon.php';




?>
<?php
  
include 'dbcon.php';

$result = mysqli_query($conn, "SELECT * FROM employee");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}

?>


<style type="text/css">
#data { margin: 0 auto; width:600px; }
body { background:#AACCFF repeat 0;
}

</style>
<h1 style="text-align : center">PAYROLL</h1>
<table border="1">
<tr>
<td>First Name</td>
<td>Middle Name</td>
<td>Last Name</td>
<td>Phone</td>
<td>Email</td>
<td>Gender</td>
<td>Basic Salary</td>
<td>House Allowance</td>
<td>Transport Allowance</td>
<td>Others Cash Allowance</td>
<td>Gross Salary</td>
<td>PAYE Base</td>
<td>PAYE</td>


</tr>
<?php

$result = mysqli_query($conn, "SELECT employee.f_name, employee.m_name, employee.l_name, employee.gender, employee.phone, employee.email, benefits.basic_salary, benefits.tran_allowance, benefits.house_allowance, benefits.other_cash_allowance FROM `employee` INNER JOIN benefits ON benefits.emp_id = employee.empl_id");
while($row = mysqli_fetch_array($result))
  {
	  $gs=$row['basic_salary']+$row['house_allowance']+$row['tran_allowance']+$row['other_cash_allowance'];
	  $PayeBase = $gs-0;
	  
	  if($PayeBase<=30000){
		  $Paye = ($PayeBase*0)/100;
	  }
	  elseif($PayeBase>30000 && $PayeBase<=100000){
		  $Paye = ($PayeBase-30000)*(20/100);
	  }
	  elseif($PayeBase>100000){
		  $Paye = 14000+($PayeBase-100000)*(30/100);
		  
	  }
	  
	  
echo "<tr><td>".$row['f_name']."</td><td>".$row['m_name']."</td><td>".$row['l_name']."</td><td>".$row['phone']."</td><td>".$row['email']."</td><td>".$row['gender']."</td><td>".$row['basic_salary']."</td><td>".$row['house_allowance']."</td><td>".$row['tran_allowance']."</td><td>".$row['other_cash_allowance']."</td><td>".$gs."</td><td>".$PayeBase."</td><td>".$Paye."</td></tr>";      
  }




?>




</table>