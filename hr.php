<?php
session_start();
//$username=$_SESSION['username'];
//$pass=$_SESSION['password'];
//$session=$_SESSION['fname'];
//$session1=$_SESSION['lname'];
//$session2=$_SESSION['st_id'];
//include 'dbcon.php';
//$result = mysqli_query("SELECT * FROM hr_table where username= '$username'");
//while($row = mysqli_fetch_array($result))
 // {
  //$sessionfname=$row['fname'];
 //$sessionlname=$row['lname'];
 //}
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
	<TD align='center'><?php include'link/hrlink.php';?></TD>
</TR>
<TR>
<TD>
	<table width="1251" height="200" border='0' align="center" bgcolor="#666666" id="table" name="container">
	<tr>
		<td valign="top">
          <?php 
include'dbcon.php';

$result = mysqli_query($conn, "SELECT * FROM employee WHERE empl_id=".$_SESSION['user_id']);
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysqli_num_fields($result);

echo "<center><font color=''><h2>WELCOME TO HR PAGE</h2></font></center>";
// printing table headers
echo '<center><table cellpadding="0" bgcolor="" cellspacing="0" id="resultTable" border="0" width="150" height="150"><thead><tr class="record"><th> </th><th>  </th></center>';
$count=0;
// printing table rows
while($row = mysqli_fetch_array($result))
{
	$count++;
	 //$status='waiting';
 ?>
					<tr>
	
					
					<td align="center"><?php echo $row['f_name']?></td>
					
					 <td><?php
					echo"<img src = 'photo/".$row['photo']."' width='80' height='90'>";
					?>
                    
                    <?php  }
echo '</table>';
mysqli_free_result($result);

?>

 
		<h2 align="center" class="style6"><font color="blue">This System Allows an HR to control the payroll system.</h2>
		
		<h2 align="center" class="style3"><span class="style7"><font color="#000066"> We wish  all the best to ON & ASSOCIATES LTD 
		</font><font color="#000066"></font></span></h2></td>
 </font></TD>
	
	</TR>
	</TABLE>
	</td>
	
</TR>
</TABLE>

</center>

		<?php include"footer.php";?>
	</body>
	 
</html>