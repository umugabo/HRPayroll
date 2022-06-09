<?php
	ob_start();
	session_start();
mysql_connect("localhost","root","");
mysql_select_db("dbtest");
if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM sector WHERE id='".$_SESSION['user']."'");
	$userRow=mysql_fetch_array($res);
?><head>
     <style>.img a:hover 
  {
  	width:150px;
  	height:135px;
  	cursor: pointer;
  
  }
  
     </style>
     <link rel="stylesheet" href="styles/sty.css">
    <link rel="stylesheet" href="2.css">
    <title>account</title>

</head>
<body><div style="height:auto;width:1000px;margin:-10px;margin-left:-8px;background-image:url(../picprj/background.jpg);">
	<div style="height:160px;width:1350px;position:fixed;background: #FFF;margin-top:-153px;background-image:url(../picprj/banner3.jpg);">
		
</div>

<div class="container"style="margin:0px;padding:0px;margin-top:7px;width:180px;position:fixed">
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
					
					<strong>report</strong>
					
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
		</ul>
	</nav>
</div><div style="height:270px;width:1100px;margin-left:180px;margin-top:165px;background: #FFF;padding-left:27px;padding-top:30px;">
<form action="update_account.php" method="post" enctype="multipart/form-data" name="edit">

<table width="30%" border="0"cellspacing="1"class="p">
<tr>
<td>
    first name:<br><input type="text" name="fname"value="<?php echo strtoupper($userRow['first']); ?>"class="ed">
	</td>
</tr>
<tr>
<td>last name:&nbsp;<br><input type="text" name="lname"value="<?php echo $userRow['last']; ?>"class="ed"></td>
</tr>
	
<tr>
<td>
phone number<br>
	<input type="phone" name="phone"value="<?php echo $userRow['phone']; ?>" placeholder="phone number"class="ed" required /></td>
</tr>


<tr>
<td>
	E-mail<br>
	<input type="email" name="email"value="<?php echo $userRow['email']; ?>" placeholder="district email"class="ed" required /></td>
</tr>


<tr>
<td>
	password<br>
	<input type="password" name="password"value="<?php echo $userRow['password']; ?>" placeholder="enter your password"class="ed" required /></td>
</tr>
<tr>
<td>
post:&nbsp;<?php echo $userRow['post']; ?></td>
</tr>
<tr>
<td><button type="submit" name="update" id="button1">update</button></td>
</tr>
<tr>
<td></td>
</tr>
</table>
 </form>
</div></div></body>

