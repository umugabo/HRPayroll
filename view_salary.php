
</style>
</head>
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


</head>
<title>ON & ASssociate Ltd</title>
<div style="border:1px solid green; width:1304px;height:auto;margin-left:20px;margin-top:-10px;">
<div style="border:0px solid black;color:black width:1300px;height:100px;margin:0px;" class="banner">
<img src="photo/log.jpg"height="174"width="1304"></div><body>
<div style="border:0px solid blue; width:1304px;height:60px;margin-top:77px;position:fixed;padding:0px">
 <nav><center>
<style type="text/css">
body { background:#ADD8E6;}
.style1 {font-weight: bold}
</style>
</head>


<body bgcolor="#99D5D3">
 <form name='view_salary.php' method='post' action='view_salary.php'/>
           <table style="font-style: italic;margin:auto;border:1px solid #000; width:800px; height:210px; border-radius:90px 90px 90px 90px ; color:red; background-color: green;   ">
                    
   <?php
include('dbcon.php');
$query1=mysql_query("select * from empl_table  order by fname");
 print ("<p><center><font color=black  font size=5face=Monotype Corsiva>Employee Salary Sheet<br>........................................</center>");
echo "<table bgcolor=white border=1><tr bgcolor=black><td >
<font size=4 color=blue>
FirstName</font></td><td><font size=4 color=blue>
Last Name</font></td><td><font size=4 color=blue>
phone</font></td><td><font size=4 color=blue>
gender</font></td><td><font size=4 color=blue>
age</font></td><td><font size=4 color=blue>
district</font></td>
<td><font size=4 color=blue>
sector</font></td><td><font size=4 color=blue>
Photo</font></td><td><font size=4 color=blue>
Post</font></td><td><font size=4 color=blue>
Insurance</font></td><td><font size=4 color=blue>
Gross Salary</font></td><td><font size=4 color=blue>
Tax</font></td><td><font size=4 color=blue>
Net Salary</font></td><td><font size=4 color=blue>
To be Paid</font></td><td><font size=4 color=blue>
Advance</font></td>";
while($query2=mysql_fetch_array($query1))
{

echo "<tr><td>".$query2['fname']."</td>";
echo "<td>".$query2['lname']."</td>"; 
echo "<td>".$query2['phone']."</td>";
echo "<td>".$query2['gender']."</td>";
echo "<td>".$query2['age']."</td>";
echo "<td>".$query2['district']."</td>"; 
echo "<td>".$query2['sector']."</td>";
echo "<td>".$query2['photo']."</td>";
echo "<td>".$query2['post']."</td>";
echo "<td>".$query2['Insurance']."</td>"; 
echo "<td>".$query2['gsalary']."</td>";
echo "<td>".$query2['tax']."</td>";
echo "<td>".$query2['net']."</td>";
echo "<td>".$query2['to be paid']."</td>"; 
echo "<td>".$query2['advance']."</td>";

}
?>
<?php
if(isset($_POST['submit']))
{
	$gsalary = $_POST['gsalary'];
	if($gsalary>300000)
	{
		$tax=$gsalary*18/100;
	}
	else if($gsalary>150000)
	{
		$tax=$gsalary*10/100;
	}
	else
	{
		
	}
}

?>
	</td></tr></table></form></tr>  <tr><td BGCOLOR="SKYBLUE">
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit"ONCLICK="window.print()"name="print"value="printout"class="log" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
	<a href="employee.php"><center><img src="photo/BACK.gif" width="230" height="40" border="0" alt="" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /></a></font></center></TD><TR>
</table></font></p>
  </center>

<tr><TD bgcolor=#FF8C00> 

<center><font size="5"face="High Tower Text"color> <br><br></td></tr>
  </body>
  </html>