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
   

    <link rel="stylesheet" href="2.css">
      <style>.img a:hover 
  {
  	width:150px;
  	height:135px;
  	cursor: pointer;
  
  }
  body{
background-image:url(photos/background.jpg);
background-attachment: center;
}
     </style>
    <title>appointments</title>

</head>
<?php
	$con=mysql_connect('localhost','root','');
mysql_select_db("dbtest",$con);
	
	if( !isset($_SESSION['user']) ) {
		header("Location: login.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM admin WHERE id=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
<link rel="icon" type="image/jpg" href="../picprj/iconn.png" />
<body><div style="border:0px solid black;height:auto;width:1367px;margin:-8px;background-image:url(photos/background.jpg);">
	<div style="border:0px solid black;height:160px;width:1369px;margin-top:0px;position:absolute;background-image:url(photos/banner3.jpg);">
<?php echo "<strong>Welcome</strong> &nbsp;".$userRow['email']; ?>
</div>
<div class="container"style="border:0px solid black;margin:0px;padding:2px;margin-top:158px;width:180px;position:absolute">
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
echo '<img alt="profile" title="profile" src="data:image/jpeg;base64,'.base64_encode( $userRow['image'] ).'"style="width:20px;height:30px;border-radius:50%;margin-left:300px;height: 80px;margin-left: 290px;margin-top: -1px;width:80px;float:right;"/>';?>
</a>
</div>
<div style="border:0px solid blue;height:370px;width:1158px;margin-left:188px;margin-top:233px;padding-top:60px;background: #FFF;padding-left:200px;position:absolute">
<div class="img">
  <a target="_blank" href="pending.php">
  <img src="photos/6.jpg" alt="pending" width="110" height="90" />
  </a>
  <div class="desc">pending</div>
</div>
<div class="img">
  <a target="_blank" href="answered.php">
  <img src="photos/index.jpg" alt="solved appointment" width="110" height="90" />
  </a>
  <div class="desc">answered</div>
</div>


</div></div></body>