<?php
	ob_start();
	session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("dbtest");
	
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	$res=mysql_query("SELECT * FROM sector WHERE id='".$_SESSION['user']."'");
	$userRow=mysql_fetch_array($res);
?>
<head>
<link rel="stylesheet" href="styles/sty.css">
    <link rel="stylesheet" href="2.css">
    <title>submit report</title>
	<style>
.tbh{
width: 50px;
height: 10px;
}
</style>
</head>
<body><div style="height:auto;width:1350px;position:fixed">
	<div style="height:160px;width:1350px;position:fixed;background-image:url(../picprj/banner3.jpg);margin-top:0px">
	</div>

<div class="container"style="margin:0px;padding:2px;margin-top:163px;width:180px;position:fixed">
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
				<a href="generate_report.php" class="active">
					
					<strong>generate report</strong>
					
				</a>
			</li>
			<li>
				<a href="report_archive.php">
					
					<strong>report archive</strong>
					
				</a>
			</li>
			<li>
				<a href="chat.php">
					
					<strong>group discussion</strong>
					
				</a>
			</li>
			<li>
				<a href="account.php">
					
					<strong>account</strong>
					
				</a>
			</li>
			<li>
					<a href="logout.php?logout">
					<strong>logout</strong>
		<label><?php echo strtoupper($userRow['first']);?>&nbsp;<?php echo $userRow['last'];?></label>
								
				</a>
			</li>
	</nav>
</div><div style="border:2px solid blue;height:500px;width:1158px;margin-left:190px;margin-top:163px;background: #FFF;overflow:auto;border-radius:15px;">

<form action="add1.php" method="post" enctype="multipart/form-data" name="add">
<fieldset style="width:50px;"><legend><strong>leader address</strong></legend>Names:<br>
<input type="text" name="names" value="<?php echo strtoupper($userRow['first'])."&nbsp;".$userRow['last']; ?>" placeholder="receiver first name"class="ed" required /><br>
Sector:<br>
<input type="text" name="sector" value="<?php echo $userRow['sector']; ?>" placeholder="sector"class="ed" required /><br>
Date<input type="text"value="<?php echo date('Y/m/d'); ?>"class="ed"name="date"style="width:100px;float:right">
   </fieldset>
<fieldset style="width:290;align:center;"><legend><strong>question in summary</strong></legend>
<table border="1">
<tr><th>IBYAKIRIWE</th><th>IBYAKEMUWE</th><th>IBIGIKURIKIRANWA</th></tr>
<tr><td><input type="number" name="ibyakiriwe" class="new"></td><td><input type="number" name="ibyakemuwe" class="new"></td><td><input type="number" name="ibigikurikiranwa" class="new"></td></tr>
</table>  </fieldset>
<fieldset style="width:290;align:center;"><legend><strong>IKOMATANYA</strong></legend>
<table border="1">
<tr><th class="tbh"><b>COMMON CATEGORIES OF ISSUES</b></th><th><b>NATURA OF UNSOLVED ISSUES</b></th><th><b>INSTITUTION INCHARGE<BR>OF SOLVING UNSOLVED CASES</b></th><th><b>INNOVATION/CHALLENGES<br>/OBSERVATION</b></th><th><b>CATEGORIES OF INSTITUTIONS <br>PRESENTED</b></th></tr>
<tr><td><textarea class="ed" cols="30"rows="7" name="common"></textarea></td><td><textarea class="ed" name="nature" cols="30"rows="7"></textarea></td><td><textarea class="ed" name="institution" cols="30"rows="7"></textarea></td><td><textarea name="innovation" cols="30"rows="7" class="ed"></textarea></td><td><textarea name="presented" cols="30"rows="7" class="ed"></textarea></td></tr>
</table>  </fieldset>
  </td></tr>	
<button type="submit" name="add"id="button11">submit</button><button type="reset" name="btn-reset"id="button11">clear all</button>
 </form>


</div></div></body>

