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
     <style>
body{
	background-image: url("photos/background.jpg");
}
     </style>
     <link rel="stylesheet" href="styles/sty.css">
    <link rel="stylesheet" href="2.css">
      <link rel="icon" type="image/jpg" href="../picprj/iconn.png" />
    <title>account</title>

</head>
<body><div style="border:0px solid black;height:auto;width:1350px;margin:-8px;background-image:url(photos/background.jpg);">
	<div style="border:0px solid black;height:160px;width:1360px;position:absolute;background-image:url(photos/banner3.jpg);margin-top:0px;margin-left:4px;">

</div>

<div class="container"style="border:0px solid black;margin:0px;padding:2px;margin-top:163px;width:180px;position:absolute">
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
			</li>
			<li>
				<a href="account.php">
					
					<strong>account</strong>
					
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
</div><div style="border:0px solid blue;height:420px;width:1158px;margin-left:190px;margin-top:163px;background: #FFF;position:absolute;padding:39px;">
<table width="30%" border="0"cellspacing="1"class="p">
<tr>
<td>
    first name:<?php echo strtoupper($userRow['first']); ?>
	</td>
</tr>
<tr>
<td>last name:<?php echo $userRow['last']; ?></td>
</tr>
<form action="" method="post" enctype="multipart/form-data" name="edit_account">
	
<tr>
<td>
phone number<br>
	<input type="tel" name="tel"value="<?php echo $userRow['tel']; ?>" placeholder="phone number"class="ed" required /></td>
</tr>
<tr>
<td>
department<br>
	<input type="text" name="depart"value="<?php echo $userRow['depart']; ?>" placeholder="Department "class="ed" required /></td>
</tr>
<tr>
<td>
post<br>
	<input type="text" name="title"value="<?php echo $userRow['title']; ?>" placeholder="your post"class="ed" required /></td>
</tr>
<tr>
<td>
	district email<br>
	<input type="email" name="email"value="<?php echo $userRow['email']; ?>" placeholder="district email"class="ed" required /></td>
</tr>


<tr>
<td>
	password<br>
	<input type="password" name="password"value="<?php echo $userRow['password']; ?>" placeholder="enter your password"class="ed" required /></td>
</tr>
<tr>
<td><button type="submit" name="edit" id="button1">update</button></td>
</tr>
<tr>
<td></td>
</tr>
</table>
 </form>
</div></div></body>
<?php 
ob_start();
include('db.php');
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['update']))
  {
  $tel=$_POST['tel'];
  $depart=$_POST['depart'];
  $title=$_POST['title'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $updated=mysql_query("UPDATE admin SET 
		tel='$tel', depart='$depart', title='$title', email='$email', password='$password' WHERE id='$id'")or die();
  if($updated)
  {
  $msg="Successfully Updated!!";
  header('Location:index.php');
  }
}
}
ob_end_flush();
?>