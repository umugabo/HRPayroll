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

				
				$bscsa=$test['Basic_salary'];
				$tallo=$test['Trans_allowance'];
				$hallo=$test['House_allowance'];
				$inkh=$test['Inkind_house'];
				$inkt=$test['Inkind_trans'];
				$inkl=$test['Inkind_loan'];
				$inko=$test['Inkind_others'];
?>
<FONT SIZE="4" COLOR="black">
<center><p><h1>Update Employee's Pay Base </h1></p>
<FONT SIZE="4" COLOR="white">
  <form method="post" action="sal_up.php">
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
    <td>BASIC_SALARY:</td>
    <td><input type="text" name="bscsa" value="<?php echo $bscsa ;?>" /></td>
    </tr>
	<tr>
    <td>TRANS_ALLOWANCE:</td>
    <td><input type="text" name="tallo" value="<?php echo $tallo ;?>" /></td>
    </tr>
	<tr>
    <td>HOUSE_ALLOWANCE:</td>
    <td><input type="text" name="hallo" value="<?php echo $hallo ;?>" /></td>
    </tr>
	<tr>
    <td>INKIND_HOUSE:</td>
    <td><input type="text" name="inkh" value="<?php echo $inkh ;?>" /></td>
    </tr>
	<tr>
    <td>INKIND_TRANS:</td>
    <td><input type="text" name="inkt" value="<?php echo $inkt ;?>" /></td>
    </tr>
	<tr>
    <td>INKIND_LOAN:</td>
    <td><input type="text" name="inkl" value="<?php echo $inkl ;?>" /></td>
    </tr>
	<tr>
    <td>INKIND_OTHERS:</td>
    <td><input type="text" name="inko" value="<?php echo $inko ;?>" /></td>
    </tr>

   
 <tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="ok" value="Update"  /></td>
	</tr>
</table>
  </form><a href="update.php"><center><img src="photo/BACK.gif" width="230" height="40" border="0" alt="" &nbsp;&nbsp;&nbsp;&nbsp; /></center></a>   </table> <table> </td>