<head>
	<style type="text/css">
	table, td, th
{
border:1px solid #e67e22;
border-collapse:collapse;
padding-top: -34px;
padding: 2px;
text-indent:3px;
margin-top: -3px;
margin-left: -5px
}
td{
font-size:18px;
}
th
{
background-color:#FF9966;
color:white;
height: 32
}
table
{border-radius: 5px}
}</style>

<link rel="stylesheet" href="styles/sty.css">
    <link rel="stylesheet" href="2.css">
    <title>bwira sector</title>
</head>
<body>

	<div style="border:2px solid black;height:auto;width:1350px;">
	<div style="border:2px solid black;height:160px;width:1350px;;background: #FFF;margin-top:0px">
		<div style="width:165px;height:60px;border:solid red;float:right;margin-top:95px;"> 

<a href="logout.php"style="text-decoration:none;float:right;font-size:19px;margin-top:38px;">logout</a>
		</div>
<div style="width:145px;height:130px;border-radius:60%;border:solid #e67e22;"class="img"><?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "dbtest";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
$result = mysql_query("SELECT * FROM admin where $lfname=='$id'order by $id desc limit 1");
while($row = mysql_fetch_array($result))
{

echo $row['img'].''; ?><?php
echo 'welcome'.'     '.$row['post'].'    '.$row['lname'].'  '.$row['fname'];
}
?>
</div></div>

<div class="container"style="border:2px solid black;margin:0px;padding:2px;margin-top:0px;width:180px;position:absolute">
<nav>
		<ul class="menu">
			<li>
				<a href="view_question.php">
					
					<strong>view question</strong>
					
				</a>
			</li>
			<li>
				<a href="add.php">
					
					<strong>add question</strong>
					
				</a>
			</li>
			<li>
				<a href="appoint.php" class="active">
					
					<strong>appointment</strong>
					
				</a>
			</li>
			<li>
				<a href="sector.php">
					
					<strong>sector view</strong>
					
				</a>
			</li>
			<li>
				<a href="report.php">
					
					<strong>reports</strong>
					
				</a>
			</li>
			<li>
				<a href="account.php">
					
					<strong>account</strong>
					
				</a>
				
			</li>
			<li>
					<a href="">
					<strong>Contacts</strong>
					
				</a>
			</li><!--
			<li class="float">
				<a class="search">
					<input type="text" placeholder="search ...">
					<button><i class="fa fa-search"></i>search</button>
				</a>
				
			</li>-->
		</ul>
	</nav>
</div><div style="border:2px solid blue;height:auto;width:1158px;margin-left:190px;margin-top:0px;background: #FFF;border-radius:15px;">

<table width="1157" height="209" border="1">
  <tr>
    <th width="36" height="32">NO</th>
    <th >CITIZEN ADDRESS</th>
    <th  >SRUCTURE OF QUESTION</th>
    <th  >CONCLUSION</th>
    <th  >RECIEVER ADDRESS</th>
    <th  >N.B</th>
  </tr>
  <?php
  $con=mysql_connect('localhost','root','');
mysql_select_db("dbtest",$con);
$sql=mysql_query("select * from sectorquestion where usec='muhanda' order by id DESC");
$i=1;
while (
$row=mysql_fetch_array($sql)){
  echo "<tr>
    <td height='109'>".$i."</td>
    <td style:'padding:3px;width:140px'font-size:16px>".$row['ufn']."<br>".$row['uln']."<br>SECTOR:".strtolower($row['usec'])."<br>CELL:".strtolower($row['ucell'])."<br>ID:".$row['uid']."</td>
    <td><textarea cols='27'rows='8'style='font-size:15px'>".$row['structure']."</textarea></td>
    <td><textarea cols='27'rows='8'style='font-size:15px'>".$row['conclusion']."</textarea></td>
    <td>".$row['lfname']."<br>".$row['llname']."<br>".$row['post']."<br>".$row['depart']."<br><b>on&nbsp&nbsp".$row['time']."</b></td>
    <td><textarea name='reas'cols='26'rows='7'style='font-size:15px'>".$row['nb']."</textarea><br><a ref='view_question.php?epr=delete&id=".$row['id']."'><img src='photos/de.png'style='height:22;'></a>
<a href='#'><img src='photos/icon.png'style='margin-top:2px;height:23;'></a></td>
  </tr>";
  $i++;
}

?>

</table>

</div></div></body> 
