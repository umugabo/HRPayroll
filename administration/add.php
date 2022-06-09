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
    <link rel="stylesheet" href="2.css">
     <link rel="icon" type="image/jpg" href="../picprj/iconn.png" />
    <title>add new question</title>
<style type="text/css">

img{
	border-radius: 50%;
	width:70px;
	}</style>
</head>
<body><div style="border:0px solid black;height:auto;width:1355px;position:absolute;margin-left:-9px;margin-top:-9px;background-image:url(photos/background.jpg);">
	<div style="border:0px solid black;height:160px;width:1350px;position:absolute;background-image:url(photos/banner3.jpg);margin-top:0px">
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
<div style="height:70.7px;width:86%;background-color:#2565a7;float:right;border-radius:1px;font-size:20px;padding-left:0px;margin-top:11.9%">
<a href="account.php">
<?php
echo '<img alt="profile" title="profile" src="data:image/jpeg;base64,'.base64_encode( $userRow['image'] ).'"style="width:20px;height:30px;border-radius:50%;margin-left:300px;height: 80px;margin-left: 290px;margin-top: -1px;width:80px;float:right;"/>';?>
</a>
</div>
<div style="border:0px solid blue;height:500px;width:1158px;margin-left:190px;margin-top:233px;background: #FFF;border-radius:15px;">
<form action="add1.php" method="post" enctype="multipart/form-data" name="add1">

	<fieldset style="width:40%;"><legend><strong>citizen address</strong></legend>full names<br>
<input type="text" name="fname" placeholder="first name"class="ed" required />
	
	<input type="text" name="lname" placeholder="last Name"class="ed" required /><br>sector<br>

	<input type="phone" name="sec" placeholder="sector"class="ed" required /><br>cell<br>

	<input type="text" name="cell" placeholder="cell "class="ed" required /><br>identification number
	<br>

	<input type="text" name="id" placeholder="id "class="ed" required /><br>
	<input type="text"value="<?php echo date('Y/m/d'); ?>"class="ed"name="date">
   </fieldset>

<fieldset style="width:920px;align:center;"><legend><strong>structure of question</strong></legend>
<textarea wrap="virtual"cols="40"rows="10"placeholder="structure of question"class="textarea"name="structure"></textarea>

<textarea wrap="virtual"cols="40"rows="10"placeholder="conclusion"class="textarea"name="conclusion"></textarea>

<textarea wrap="virtual"cols="40"rows="10"placeholder="N.B"class="textarea"name="nb"></textarea>
   </fieldset>
</td></tr>	
<button type="submit" name="add"id="button11">add question</button><button type="reset" name="btn-reset"id="button11">clear all</button>
 </form>


</div></div></body>

