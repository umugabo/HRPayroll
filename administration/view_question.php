<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM admin WHERE id='".$_SESSION['user']."'");
	$userRow=mysql_fetch_array($res);
?><head>
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
body{
background-image:url(photos/background.jpg);
background-attachment: center;
}
#img{
	border-radius: 50%;
	width:80px;
	height: 80px;
	margin-left: 290px;
	margin-top: -45px;
	}
}</style>

<link rel="stylesheet" href="styles/sty.css">
<link rel="stylesheet" href="styles/search.css">
    <link rel="stylesheet" href="2.css">
    <link rel="icon" type="image/jpg" href="../picprj/iconn.png" />
    <title>view question</title>

</head>
<body><div style="border:0px solid black;height:auto;width:1350px;margin:-8px;background-image:url(photos/background.jpg);">
	<div style="border:0px solid black;height:160px;width:1350px;;background-image:url(photos/banner3.jpg);margin-top:0px">
		<div style="width:165px;height:60px;border: 0px solid red;float:right;margin-top:90px;"> 

		</div>

</div>

<div class="container"style="border:0px solid black;margin:0px;padding:0px;margin-top:0px;width:220px;position:absolute;">
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
<?php require_once 'dbconnect.php';
$req1 = mysql_query('select * from appointment WHERE checka=""'); 
$result=intval(mysql_num_rows($req1)); ?>
			<li>
				<a href="pending.php" class="active">
					
					<strong>pending appointment&nbsp;(<?php echo $result;?>)</strong>
					
				</a>
			</li>
			<li>
				<a href="answered.php" class="active">
					
					<strong>received appointment</strong>
					
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
			<!--
			<li>
				<a href="search.php">
					
					<strong>search</strong>
					
				</a>
				
			</li>-->
			<li>
					<a href="logout.php?logout"name="logout">
					<strong>logout</strong><br><label><?php echo strtoupper($userRow['first'])."&nbsp".$userRow['last']; ?></label>
					
				</a>
			</li>
		</ul>
	</nav>
</div>
<div style="height:70px;width:30%;margin-left:13.8%;background-color:#2565a7;border-radius:7px;font-size:20px;padding-left:90px;margin-top:-1%">
	<div style="padding-top:-90px;margin-left:-25%"><form action="search.php"method="post"class="form-wrapper cf">
<input type="text"name="search"autocomplete="on" placeholder="Search here..." required>
<button type="submit">Search</button>
</form></div>
</div>
<div style="height:69.7px;width:50%;background-color:#2565a7;float:right;border-radius:1px;font-size:20px;padding-left:0px;margin-top:-5.09%">

<div ><a href="account.php">
<?php
echo '<img src="data:image/jpeg;base64,'.base64_encode( $userRow['image'] ).'"style="width:20px;height:30px;border-radius:50%;margin-left:300px;height: 80px;margin-left: 290px;margin-top: -7px;width:80px;float:right;"/>';?>
<a>
</div>
	</div>
<A HREF="download.php">
<img src="photos/google.png"width="153"height="78"style="float:right;position:fixed;margin-top:13%;margin-left:90%"></A>
<div style="border:0px solid blue;height:auto;width:1160px;margin-left:190px;margin-top:0px;background: #FFF;border-radius:7px;">
<table width="1160" height="209" border="1">
  <tr>
    <th width="36" height="32">NO</th>
    <th >NYIRIKIBAZO</th>
    <th  >IMITERERE Y'IKIBAZO</th>
    <th  >UMWANZURO</th>
    <th  >ICYITONDERWA</th>
  </tr>
  <?php
  $con=mysql_connect('localhost','root','');
mysql_select_db("dbtest",$con);
$sql=mysql_query("select * from question order by id DESC");
$i=1;
while (
$row=mysql_fetch_array($sql)){
	$id=$row['id'];
  echo "<tr>
    <td height='109'>".$i."</td>
    <td style:'padding:3px;width:140px'font-size:16px>".$row['ufn']."&nbsp;".$row['uln']."<br>".strtolower($row['usec'])."/".strtolower($row['ucell'])."<br>Kuwa&nbsp;:".$row['time']."</td>
    <td><textarea cols='33'rows='8'style='font-size:15px;border:0px'>".$row['structure']."</textarea></td>
    <td><textarea cols='33'rows='8'style='font-size:15px;border:0px'>".$row['conclusion']."</textarea></td>
    
    <td><textarea name='reas'cols='33'rows='7'style='font-size:15px;border:0px'>".$row['nb']."</textarea>";?>
    	<br> <a href="delete.php?id=<?php echo $id; ?>"
    onclick="return confirm('Are you sure you wish to delete this Record?');"> 
    	<img src="photos/de.jpg"style="height:32;"></a>
<a href="edit.php?id=<?php echo $id; ?>"><img src="photos/edit.png"style="height:32;"></a></td>
  </tr>
  <?php
  $i++;
}

?>

</table>

</div></div></body> 

