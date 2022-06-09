<head><style type="text/css">
.ed{
border-style:solid;
border-width:thin;
border-color:#006633;
padding:5px;
margin-bottom: 4px;
line-height: 23px;
font-size: 17px
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#e67e22;

margin-left: 150px;
cursor: pointer;
background-color:#006633;
height: 34px;
width:150px
}

.p{

font-style:bold;
font-size: 20px;

}</style>
<link rel="stylesheet" href="1.css">


<title>ON & ASssociate Ltd</title>
<link rel="icon" href="photo/log.jpg"width="" type="image/x-icon">
</head>
<div style="border:1px solid green; width:1304px;height:auto;margin-left:20px;margin-top:-10px;">
<div style="border:0px solid black;color:black width:1300px;height:100px;margin:0px;" class="banner">
<img src="photo/log.jpg"height="174"width="1304"></div><body>
<div style="border:0px solid blue; width:1304px;height:60px;margin-top:77px;position:fixed;padding:0px">
 <nav><center>
<body background="#BCBCBC" id="body"><TABLE width='1198' bgcolor='#EAEAEA' align="center">
<TR>
<?php
// MySQL connection variables
// Server name 
$hostname = "localhost";
// Name of the MySQL database
$database = "payroll";
// Login mysql user
$username = "root";
// Login mysql password
$password = "";

// Connection String
$conn = mysql_connect($hostname, $username, $password);
// MySQL select database
mysql_select_db($database, $conn);

//registering a login session


?>
	<TD align='center'><?php include'link/linkt.php';?></TD>
</TR>
<TR>
	<TD ><TABLE width='1195' border='0'>
	<TR>
		<TD width='400' height='400'> 
 <form action="search.php" method="POST">
           <table style="font-style: italic;margin:auto;border:1px solid #000; width:800px; height:10px; border-radius:90px 90px 90px 90px ; color:red; background-color: green;   ">
                 <tr>
                   <td height="21" colspan="2" align='center'>&nbsp;</td>
                 </tr>
                <tr>

                <tr>
                   <td align="right"><em><b><font color="#000000">Search</font></b></em></td>
                   <td><input title="Id" type="text" accesskey="1" name="query" placeholder="Enter Employee's ID here" size="25"required/ style="color="RED">
                
                   <input type="submit" value="Search"></td></td>
                </tr>
            </table>

        </form>
 

  <?php 
include'dbcon.php';

$result = mysql_query("SELECT * FROM empl_table");
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);

echo "<center><font color=''><h2>All Registered Employee</h2></font></center>";
// printing table headers
echo '<center><table cellpadding="0" bgcolor="" cellspacing="0" id="resultTable" border="1"><font clor=" yellow"><thead><tr class="record"><th>Empl Id</th><th>First Name</th><th>Last Name</th><th>Phone</th><th>Gender</th><th>Status</th><th>Info</th><th>Photo</th><th>Salary</th></tr></thead></font></center>';
$count=0;
// printing table rows
while($row = mysql_fetch_array($result))
{
	$count++;
	 //$status='waiting';
 ?>
  
                    <tr>
					<td align="center"><?php echo $row['ID_Card']?></td>
					<td align="center"><?php echo $row['fname']?></td>
					<td align="center"><?php echo $row['lname']?></td>
					
					<!--<td align="center"><?php //echo $row['email']?></td>-->
					<td align="center"><?php echo $row['phone']?></td>
					<td align="center"><?php echo $row['gender']?></td>
					<!--<td align="center"><?php echo $row['nationality']?></td>-->
                    <!--<td align="center"><?php echo $row['password']?></td>-->
                    <td align="center"><?php echo $row['status']?></td>
				   <td align="center" width="20"><a rel='facebox'  href="edit_employee.php? pass=<?php echo $row['pass']?>"   title="Click To Edit"><IMG SRC="photo/edit.png" WIDTH="50" HEIGHT="25" BORDER="0" ALT=""></a></td>
				   <td align="center" width="20"><a rel='facebox'  href="edit_photo.php? pass=<?php echo $row['pass']?>"   title="Click To Edit"><IMG SRC="photo/edit.png" WIDTH="50" HEIGHT="25" BORDER="0" ALT=""></a></td>
				   <td align="center" width="20"><a rel='facebox'  href="edit_salary.php? pass=<?php echo $row['pass']?>"   title="Click To Edit"><IMG SRC="photo/edit.png" WIDTH="50" HEIGHT="25" BORDER="0" ALT=""></a></td>
				   
					
                    </tr>
                    <?php  }
echo '</table>';
mysql_free_result($result);
//echo '<FONT SIZE="4" COLOR="white">Total Amount:&nbsp;<b>'. $yes.'&nbsp; Frws</b></font>';
?>

		</TD></TD>
	</TR>
	</TABLE></TD>
  </form>
 </BODY>
</HTML>
