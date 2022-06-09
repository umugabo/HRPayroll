<?php ob_start();
	session_start();?><head>
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
</style>

<link rel="stylesheet" href="styles/sty.css">
    <link rel="stylesheet" href="2.css">
    <link rel="icon" type="image/jpg" href="../picprj/iconn.png" />
    <link rel="stylesheet" href="../styles/search.css">
    <title>bwira sector</title>
</head>
<?php
	$con=mysql_connect('localhost','root','');
mysql_select_db("dbtest",$con);
	
	if( !isset($_SESSION['user']) ) {
		header("Location: ../index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM admin WHERE id=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
<body>

	<div style="border:0px solid black;height:auto;width:1350px;position:absolute;margin-top:-3px;background-image:url(../photos/background.jpg);">
	<div style="border:0px solid black;height:160px;width:1350px;margin-top:0px;background-image:url(../photos/banner3.jpg);">
		
</div>

<div class="container"style="margin:0px;padding:2px;margin-top:-1px;width:180px;position:absolute;margin-left:-3px;">
<nav>
		<ul class="menu">
			<li>
				<a href="../view_question.php">
					
					<strong>view question</strong>
					
				</a>
			</li>
			<li>
				<a href="../add.php">
					
					<strong>add question</strong>
					
				</a>
			</li>
			<?php require_once 'dbconnect.php';
$req1 = mysql_query('select * from appointment WHERE host=""'); 
$result=intval(mysql_num_rows($req1)); ?>
			<li>
				<a href="pending.php" class="active">
					
					<strong>pending appointment&nbsp;(<?php echo $result;?>)</strong>
					
				</a>
			</li>
			<li>
				<a href="../answered.php" class="active">
					
					<strong>received appointment</strong>
					
				</a>
			</li>
			<li>
				<a href="../sector.php">
					
					<strong>sector view</strong>
					
				</a>
			</li>
			<li>
				<a href="../report.php">
					
					<strong>reports</strong>
					
				</a>
			</li>
			<li>
					<a href="../logout.php?logout">
					<strong>logout</strong>
				<br><?php echo strtoupper($userRow['first'])."&nbsp".$userRow['last']; ?>	
				</a>
			</li>
		</ul>
	</nav>
</div>
<div style="height:70px;width:35.75%;margin-left:180px;background-color:#2565a7;float:left;border-radius:1px;font-size:20px;margin-top:0px;padding-left:12px;">
<div style="padding-top:-93px;margin-top:-11px"><form action="../searchsec.php"method="post"class="form-wrapper cf">
<input type="text"name="search"autocomplete="on" placeholder="Search here..." required>
<button type="submit">Search</button>
</form></div>
</div>
<div style="height:70px;width:50%;background-color:#2565a7;float:right;border-radius:1px;font-size:20px;padding-left:0px;margin-top:0px">

<div ><a href="../account.php">
<?php
echo '<img src="data:image/jpeg;base64,'.base64_encode( $userRow['image'] ).'"style="width:20px;height:30px;border-radius:50%;margin-left:300px;height: 80px;margin-left: 290px;margin-top: -7px;width:80px;float:right;"/>';?></a></div>
	</div>
	<A HREF="download.php">
<img src="../photos/google.png"width="153"height="78"style="float:right;position:fixed;margin-top:20%;margin-left:39%"></A>
<div style="border:0px solid blue;height:auto;width:1162px;margin-left:185px;margin-top:0px;background: #FFF;border-radius:15px;padding-left:4px;">
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
$sql=mysql_query("select * from sectorquestion where usec='bwira' order by id DESC");
$i=1;
while (
$row=mysql_fetch_array($sql)){
  echo "<tr>
    <td height='109'>".$i."</td>
    <td style:'padding:3px;width:140px'font-size:16px>".strtoupper($row['ufn'])."&nbsp".$row['uln']."<br>SECTOR:".strtolower($row['usec'])."<br>CELL:".strtolower($row['ucell'])."<br>ID:".$row['uid']."</td>
    <td><textarea cols='27'rows='8'style='font-size:15px'>".$row['structure']."</textarea></td>
    <td><textarea cols='27'rows='8'style='font-size:15px'>".$row['conclusion']."</textarea></td>
    <td>".strtoupper($row['lfn'])."&nbsp".$row['lln']."<br>".$row['post']."<br>".$row['depart']."<br><b>on&nbsp&nbsp".$row['time']."</b></td>
    <td><textarea name='reas'cols='26'rows='7'style='font-size:15px'>".$row['nb']."</textarea><br></td>
  </tr>";
  $i++;
}

?>

</table>

</div></div></body> 
