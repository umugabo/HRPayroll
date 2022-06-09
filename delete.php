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
 <font size="6">
   <body background="cc.jpg">
  <table width="750px"height="350" align="center"  border="1"class="login">
  
  <tr><td height="10"style="background-color:blue">
      	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<div id="horizontalmenu">
        <ul>
	
	

 </td></tr>
  <tr><TD bgcolor="#87CEFA">

<body background="images\bb.jpg">
<center>
<center>
<form action="deletep.php" method="POST">
 <div class="form">
  <b> Are you sure?
  <br> 
 <b> Fill in the Employee id you want to delete.:<br><br></b>
 <input type="text" name="id" size="16"required placeholder="Enter Emp ID Here"></div><br><br>
 <input type="submit" value="Delete"class="log"name="Delete">
 <input type="reset" value="Reset"class="log"name="Clear"><br><br>
<a href="hr.php"><center><img src="photo/BACK.gif" width="230" height="40" border="0" alt="" &nbsp;&nbsp;&nbsp;&nbsp; /></center></a>   </table> <table> </td>
  <?php
  $server="localhost";
  $database="payroll";
  $username="root";
  $password="";
  $connection=mysql_connect($server,$username,$password) or die ('server not found'.mysql_error( ));
mysql_select_db($database,$connection) or die('database not found'.mysql_error( ));
  if(@$_POST['delete'])
{
  $query="DELETE FROM empl_table WHERE id='$_POST[pass]'";
  if($query)
{
print ("<script>alert('Employee deleted sucessfull')</script>");

}
else
{
print ("<script>alert('Employees not deleted</script>");
}
  $answer=mysql_db_query($database,$query);
  }
 mysql_close ($connection);      // Close of the connection
   ?>

		</TD></TD>
	</TR>
	</TABLE></TD>
  </form>
 </BODY>
</HTML>
