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
				$Empl_code=$test['Empl_code'] ;
				$id=$test['ID_Card'] ;
				$fname= $test['fname'] ;					
				$lname=$test['lname'] ;
				$username=$test['username'];
				$password=$test['password'];
				
?>
<FONT SIZE="4" COLOR="black">
<center><p><h1>Update Employee's Password </h1></p>
<FONT SIZE="4" COLOR="white">
  <form method="post" action="adupdate.php">
<table width="429" border="0" bgcolor=#98697565>
  <tr>
    <td width="120"> CODE:</td>
    <td width="299"><input type="text" name="id" value="<?php echo $Empl_code; ?>" /></td>
    
  </tr>
  <tr>
    <td width="120"> EMPL ID:</td>
    <td width="299"><input type="text" name="ID_Card" value="<?php echo $id; ?>" /></td>
    
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
    <td>USERNAME:</td>
    <td><input type="text" name="username" value="<?php echo $username ;?>" /></td>
    </tr>
	<tr>
    <td>PASSWORD:</td>
    <td><input type="text" name="password" value="<?php echo $password ;?>" /></td>
    </tr>
	
   
 <tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="ok" value="Update"  /></td>
	</tr>
</table>
  </form><a href="admupdate.php"><center><img src="photo/BACK.gif" width="230" height="40" border="0" alt="" &nbsp;&nbsp;&nbsp;&nbsp; /></center></a>   </table> <table> </td>