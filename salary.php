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
<div style="border:1px solid green; width:1304px;height:auto;margin-left:10px;margin-top:-10px;">
<div style="border:0px solid black;color:black width:1300px;height:100px;margin:0px;" class="banner">
<img src="photo/log.jpg"height="174"width="1350"></div><body>
<div style="border:0px solid blue; width:1304px;height:60px;margin-top:77px;position:fixed;padding:0px">
 <nav><center>
<body background="#BCBCBC" id="body"><TABLE width='1198' bgcolor='#00CED1' align="center">
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
		<TD width='400' height='300'> 


  <?php 
include'dbcon.php';

$result = mysql_query("SELECT * FROM empl_table ");
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);

echo "<center><font color=''><h2>All Employee's Salary</h2></font></center>";
// printing table headers
echo '<center><table cellpadding="0" bgcolor="" cellspacing="0" id="resultTable" border="1"><font clor=" yellow"><thead><tr class="record"><th>Emp_Code</th><th>Names</th><th>Basic_salary</th><th>TOT_cash_allowance</th><th>TOT_Inkind</th><th>PAYE_Base</th><th>PAYE</th><th>RSSB_Base</th></<th><th>RSSB_Total</<th><th>Net_salary</th><th>Company_deduction</th><th>Net_payable</th><th>Print</th></tr></thead></font></center>';
$count=0;
// printing table rows
while($row = mysql_fetch_array($result))
{
	$count++;
	 //$status='waiting';
 ?>
  
                    <tr>
					<td align="center"><?php echo $row['Empl_code']?></td>
					<td align="center"><?php echo $row['fname']?></td>
					<td align="center"><?php echo $row['Basic_salary']?></td>
					<td align="center"><?php echo $row['TOT_cash_allowance']?></td>
					<td align="center"><?php echo $row['TOT_Inkind']?></td>
					<td align="center"><?php echo $row['PAYE_Base']?></td>
					<td align="center"><?php echo $row['PAYE']?></td>
					<td align="center"><?php echo $row['RSSB_Base']?></td>
					<td align="center"><?php echo $row['RSSB_Total']?></td>
					<td align="center"><?php echo $row['Net_salary']?></td>
					<td align="center"><?php echo $row['Company_deduction']?></td>
					<td align="center"><?php echo $row['Net_payable']?></td>
					<td align="center" width="20" color="blue"><a rel='facebox' href="print_salary.php?pass=<?php echo $row['pass']?>"   title="Click To Print"><IMG SRC="photo/print.png" WIDTH="50" HEIGHT="35" BORDER="0" ALT=""></a></td>
				
					
                    <?php  }
echo '</table>';
mysql_free_result($result);

?></TD></TD>
<a href="hr.php"><center><img src="photo/BACK.gif" width="230" height="40" border="0" alt="" &nbsp;&nbsp;&nbsp;&nbsp; /></center></a>   </table> <table> </td>
		
	</TR>
	</TABLE></TD>
  </form>
 </BODY>
</HTML>
