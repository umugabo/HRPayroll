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
<link rel="stylesheet" href="styles/sty.css">
<link rel="icon" type="image/jpg" href="../picprj/iconn.png" />
    <link rel="stylesheet" href="2.css"><title>report from sector</title>
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
}
body{
background-image:url(photos/background.jpg);
}
</style>
</head>
<?php
	$con=mysql_connect('localhost','root','');
mysql_select_db("dbtest",$con);
	
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM admin WHERE id=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
<body><div style="border:0px solid black;height:auto;width:1365px;position:absolute;margin-left:-9px;margin-top:-9px;">
	<div style="border:0px solid black;height:160px;width:1363px;position:absolute;background-image:url(photos/banner3.jpg);margin-top:0px">

</div>

<div class="container"style="border:0px solid black;margin:0px;padding:3px;margin-top:158px;width:180px;position:absolute">
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
$req1 = mysql_query('select * from appointment WHERE host=""'); 
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
			</li><!--
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
<div style="height:76.7px;width:86%;background-color:#2565a7;float:right;border-radius:1px;font-size:20px;padding-left:3px;margin-top:11.6%">
<a href="account.php">
<?php
echo '<img alt="profile" title="profile" src="data:image/jpeg;base64,'.base64_encode( $userRow['image'] ).'"style="width:20px;height:30px;border-radius:50%;margin-left:300px;height: 80px;margin-top: -1px;width:80px;float:right;"/>';?>
</a>
</div>
<div style="border:2px solid #2565a7;height:auto;width:1171px;margin-left:190px;margin-top:163px;background: #FFF;overflow:auto;border-radius:15px;">
 <?php
 $con=mysql_connect("localhost","root","");
 $db=mysql_select_db("dbtest",$con);
 $query=mysql_query("select * from report order by time DESC");
 while($result=mysql_fetch_assoc($query)) { $id=$result['id']; ?>
  <a href = "view_report.php?id=<?php echo $id; ?>">
 <div style="margin:2px;border:2px solid #2565a7;height:200px;width:170px;float:left;padding-top:1px;max-height:200px;border-radius:7px;font-size:19px;color:#161515">
   Report on&nbsp;<?php echo $result['time'];?><br><strong>By 
</strong><?php echo $result['names'];?><div style="text-align:center"><br><U>SCTOR</U><br>
   <?php echo strtoupper($result['sector']);?></div>
   </div></a><?php }  ?>
</div>
</div></div></body>
