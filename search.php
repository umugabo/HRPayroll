<?php 
include'dbcon.php';
if(isset($_REQUEST['query'])){
	$query=$_REQUEST['query'];
	$result = mysqli_query($conn, "SELECT * FROM employee WHERE emp_code='$query'");
}
else{
	$result = mysqli_query($conn, "SELECT * FROM employee WHERE emp_code =''");
}



?>



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
<div style="border:0px solid blue; width:1304px;height:60px;margin-top:77px;padding:0px">
 <nav><center>
<body background="#BCBCBC" id="body"><TABLE width='1198' bgcolor='#EAEAEA' align="center">
<TR>
<?php
// mysqli connection variables
// Server name 
$hostname = "localhost";
// Name of the mysqli database
$database = "payroll";
// Login mysqli user
$username = "root";
// Login mysqli password
$password = "";

// Connection String
$conn = mysqli_connect($hostname, $username, $password);
// mysqli select database
mysqli_select_db($conn, $database);

//registering a login session


?>
	<TD align='center'><?php include'link/linkt.php';?></TD>
</TR>
<TR>
	<TD ><TABLE width='1195' border='0'>
	<TR>
		<TD width='400' height='400'> 
 <form action="search.php" method="POST">
           <table style="font-style: italic;margin:auto;border:1px solid #000; width:500px; height:200px; border-radius:180px 20px 220px 0px ; color:yellow; background-color: green;   ">
                 <tr>
                   <td height="21" colspan="2" align='center'><h4>Search for an Employee</td></h4>
                 </tr>
                <tr>

                <tr>
                   <td align="right"><em><b><font color="#000000">Search</font></b></em></td>
                   <td><input title="Id" type="text" accesskey="1" name="query" placeholder="Enter Employee's code here" size="25"required/ style="color="RED">&nbsp
                
                   <input type="submit" value="Search"></td></td>
                </tr>
            </table>

        </form>
 

  <?php 
  
  if(isset($_REQUEST['query'])){
	  
	  echo "<center><font color=''><h2>Employee</h2></font></center>";
// printing table headers
echo '<center><table cellpadding="0" bgcolor="" cellspacing="0" id="resultTable" border="1"><font clor=" yellow"><thead><tr class="record"><th>Empl Id</th><th>First Name</th><th>Last Name</th><th>Phone</th><th>Gender</th><th>User Name</th><th>Status</th><th>Action</th></tr></thead></font></center>';
$count=0;
// printing table rows
while($row = mysqli_fetch_array($result))
{
	$count++;
	 //$status='waiting';
 ?>
  
                    <tr>
					<td align="center"><?php echo $row['empl_id']?></td>
					<td align="center"><?php echo $row['f_name']?></td>
					<td align="center"><?php echo $row['l_name']?></td>
					<!--<td align="center"><?php //echo $row['email']?></td>-->
					<td align="center"><?php echo $row['phone']?></td>
					<td align="center"><?php echo $row['gender']?></td>
					<td align="center"><?php echo $row['username']?></td>
                    <!--<td align="center"><?php echo $row['password']?></td>-->
                    <td align="center"><?php echo $row['status']?></td>
				   <td align="center" width="20"><a rel='facebox'  href="admupdate.php?pass=<?php echo $row['empl_id']?>"   title="Click To Edit"><IMG SRC="photo/edit.png" WIDTH="50" HEIGHT="25" BORDER="0" ALT=""></a></td>
					
                    </tr>
                    <?php  }
echo '</table>';
mysqli_free_result($result);
//echo '<FONT SIZE="4" COLOR="white">Total Amount:&nbsp;<b>'. $yes.'&nbsp; Frws</b></font>';

  }
?>


		</TD></TD>
	</TR>
	</TABLE></TD>
  </form>
 </BODY>
</HTML>
