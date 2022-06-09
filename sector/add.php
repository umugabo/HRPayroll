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
    <title>add new question</title>

</head>
<body><div style="height:auto;width:1350px;position:fixed;margin-top:-10px">
	<div style="height:160px;width:1350px;position:fixed;background-image:url(../picprj/banner3.jpg);margin-top:0px">
		
<div class="container"style="margin:0px;padding:2px;padding-top:170px;width:180px;position:fixed">
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
			</li><!--
			<li class="float">
				<a class="search">
					<input type="text" placeholder="search ...">
					<button><i class="fa fa-search"></i>search</button>
				</a>
				
			</li>-->
		</ul>
	</nav>
</div><div style="height:500px;width:1170px;margin-left:180px;margin-top:159px;background: #FFF;overflow:auto;border-radius:15px;">

<form action="" method="post" enctype="multipart/form-data" name="add1">

	<fieldset style="width:460px;"><legend><h2>NYIRI IKIBAZO NAHO ABARIZWA</h2></legend>Full name<br>
<input type="text" name="fname" placeholder="first name"class="ed" required />
	
	<input type="text"  name="lname" placeholder="last Name"class="ed" required /><br>sector<br>

	<input type="text" value="<?php echo $userRow['sector']; ?>" name="sec" placeholder="sector"class="ed" required /><br>cell<br>

	<input type="text" name="cell" placeholder="cell "class="ed" required /><br>identification number
	<br>
	<input type="text" name="id" placeholder="id "class="ed" required /><input style="float:right;width:100px;" type="text"value="<?php echo date('Y/m/d'); ?>"class="ed"name="date"><br>
   </fieldset>

<fieldset style="width:920px;align:center;"><legend><h2>IMITERERE Y'IKIBAZO</h2></legend>
<textarea wrap="virtual"cols="40"rows="10"placeholder="imiterere y'ikibazo"class="textarea"name="structure"></textarea>

<textarea wrap="virtual"cols="40"rows="10"placeholder="umwanzuro"class="textarea"name="conclusion"></textarea>

<textarea wrap="virtual"cols="40"rows="10"placeholder="ikitonderwa"class="textarea"name="nb"></textarea>
   </fieldset>
</td></tr>	
<button type="submit" name="add"id="button11">add question</button><button type="reset" name="btn-reset"id="button11">clear all</button>
 </form>


</div></div></body>
<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "dbtest";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
if(isset($_POST['add'])){
			
			$save=mysql_query("INSERT INTO  sectorquestion (ufn, uln,usec,ucell,uid,structure,conclusion,nb,lfn,lln,post,date) 
				VALUES ('$_POST[fname]','$_POST[lname]','$_POST[sec]','$_POST[cell]','$_POST[id]','$_POST[structure]',
					'$_POST[conclusion]','$_POST[nb]','$_POST[rfname]','$_POST[rlname]','$_POST[post]','$_POST[date]')");
			if ($save) {
				header("location: add.php");
			exit();	
			}
			else{
				echo "<script>data not inserted</script>";
			exit();
			}

			 
        	
}
?>
