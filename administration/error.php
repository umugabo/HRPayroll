<head>

<link rel="stylesheet" href="styles/sty.css">
    <link rel="stylesheet" href="2.css">
    <title>!error</title>

</head>
<body><div style="border:2px solid black;height:auto;width:1350px;position:fixed">
	<div style="border:2px solid black;height:160px;width:1350px;position:fixed;background: #FFF;margin-top:0px">
		<div style="width:165px;height:60px;border:solid red;float:right;margin-top:95px;">logout</div>
<div style="width:145px;height:130px;border-radius:60%;border:solid #e67e22;"class="img"><?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "dbtest";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
$result = mysql_query("SELECT * FROM admin ");
while($row = mysql_fetch_array($result))
{

echo $row['img'].''; ?><?php
echo 'welcome'.'     '.$row['post'].'    '.$row['lname'].'  '.$row['fname'];
}
?>
</div></div>

<div class="container"style="border:2px solid black;margin:0px;padding:2px;margin-top:163px;width:180px;position:fixed">
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
				<a href="sector.html">
					
					<strong>sector view</strong>
					
				</a>
			</li>
			<li>
				<a href="">
					
					<strong>reports</strong>
					
				</a>
			</li>
			<li>
				<a href="">
					
					<strong>Blog</strong>
					
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
</div><div style="border:2px solid blue;height:370px;width:1158px;margin-left:190px;margin-top:163px;background: #FFF;overflow:auto;">

<h2><font color="red">data not inserted  <a href="add.php"style="text-decoration:none;">click here to go back</a> </font></h2>

</div></div></body>

