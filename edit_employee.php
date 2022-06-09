<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="file:///C|/Users/DJ PACCY/Desktop/css/style.css" type="text/css" />
<title>Employee Leave Management System</title>
</head>
<body background="#BCBCBC" id="body"><TABLE width='1198' bgcolor='#87CEEB' align="center"><tr><td>
<IMG SRC="image/kigali.png" WIDTH="1300" HEIGHT="130" BORDER="0" ALT="">
<?php
include 'dbcon.php';
$owner_id =$_REQUEST['pass'];

$result = mysql_query("SELECT * FROM empl_table WHERE pass  = '$owner_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$pass=$test['pass'] ;
				$id=$test['ID_Card'] ;
				$fname= $test['fname'] ;					
				$lname=$test['lname'] ;
				$brt=$test['Birth'];
				$phone=$test['phone'];
				$email=$test['Email'];
				$gender=$test['gender'];
				$natio=$test['nationality'];
				$prov=$test['province'];
				$sect=$test['sector'];
				$disct=$test['district'];
				$ftname=$test['fatname'];
				$mname=$test['motname'];
				$insu=$test['Insurance'];
				
				
				$stat=$test['status'];
				
			
?>
<FONT SIZE="4" COLOR="black">
<center><p><h1>Update Employee's Information </h1></p>
<FONT SIZE="4" COLOR="white">
  <form method="post" action="update_employee.php">
<table width="429" border="0" bgcolor=#98697565>

  <tr>
    <td width="120"> EMPL ID:</td>
    <td width="299"><input type="text" name="empl_card" value="<?php echo $id; ?>" /></td>
    
  </tr>
  <tr>
    <td>FIRST NAME:</td>
    <td><input type="text" name="fname" value="<?php echo $fname; ?>"/></td>
    </tr>
    <tr>
    <td>LASTNAME:</td>
    <td><input type="text" name="lname" value="<?php echo $lname; ?>" /></td>
    </tr>
	<tr>
    <td>DATE OF BIRTH:</td>
    <td><input type="text" name="brt"value="<?php echo $brt; ?>" /></td>
    </tr>
   <tr>
	<tr>
    <td>PHONE:</td>
    <td><input type="text" name="phone"value="<?php echo $phone; ?>" /></td>
    </tr>
   <tr>
    <td>EMAIL:</td>
    <td><input type="text" name="email"value="<?php echo $email; ?>" /></td>
    </tr>
   <tr>
    <td>GENDER:</td>
    <td><input type="text" name="gender"value="<?php echo $gender ;?>" /></td>
    </tr>
   <tr>
    <td>NATIONALITY:</td>
    <td><input type="text" name="natio" value="<?php echo $natio ;?>" /></td>
    </tr>
	
    <td>PROVINCE:</td>
    <td><input type="text" name="prov" value="<?php echo $prov ;?>" /></td>
    </tr>
	<tr>
	<tr>
    <td>SECTOR:</td>
    <td><input type="text" name="sect" value="<?php echo $sect ;?>" /></td>
    </tr>
	<tr>
    <td>DISTRICT:</td>
    <td><input type="text" name="disct" value="<?php echo $disct ;?>" /></td>
    </tr>
		<tr>
    <td>FATHERS_NAME:</td>
    <td><input type="text" name="ftname" value="<?php echo $ftname ;?>" /></td>
    </tr>
		<tr>
    <td>MOTHERS_NAME:</td>
    <td><input type="text" name="mname" value="<?php echo $mname ;?>" /></td>
    </tr>
		<tr>
    <td>INSURANCE:</td>
    <td><input type="text" name="insu" value="<?php echo $insu ;?>" /></td>
    </tr>
	
	
	
	
	
	
	<tr>
    <td>STATUS:</td>
    <td><input type="text" name="stat" value="<?php echo $stat ;?>" /></td>
    </tr>
	
	
	
	


   
 <tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="ok" value="Update"  /></td>
	</tr>
</table>
  </form><a href="update.php"><center><img src="photo/BACK.gif" width="230" height="40" border="0" alt="" &nbsp;&nbsp;&nbsp;&nbsp; /></center></a>   </table> <table> </td>