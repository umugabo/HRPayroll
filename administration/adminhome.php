<head>
     <style>.img a:hover 
  {
  	width:150px;
  	height:135px;
  	cursor: pointer;
  
  }
     </style>

    <link rel="stylesheet" href="2.css">
    <title>home</title>

</head>
<body><div style="border:2px solid black;height:auto;width:1330px;position:fixed">
	<div style="border:2px solid black;height:160px;width:1330px;position:fixed;background: #FFF;margin-top:0px">
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
				<a href="question.html">
					
					<strong>question</strong>
					
				</a>
			</li>
			<li>
				<a href="appoint.html" class="active">
					
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
</div><div style="border:2px solid blue;height:500px;width:1158px;margin-left:190px;margin-top:163px;background: #FFF;overflow:auto;">

<div class="img">
  <a target="_blank" href="gatumba.php">
  <img src="photos/7.png" alt="gatumba" width="110" height="90" />
  </a>
  <div class="desc">gatumba sector</div>
</div>
<div class="img">
  <a target="_blank" href="bwira.php">
  <img src="photos/7.png" alt="bwira" width="110" height="90" />
  </a>
  <div class="desc">bwira sector</div>
</div>
<div class="img">
  <a target="_blank" href="nyange.php">
  <img src="photos/7.png" alt="nyange" width="110" height="90" />
  </a>
  <div class="desc">nyange sector</div>
</div>
<div class="img">
  <a target="_blank" href="ngororero.php">
  <img src="photos/7.png" alt="ngororero" width="110" height="90" />
  </a>
  <div class="desc">ngororero sector</div>
</div>
<div class="img">
  <a target="_blank" href="gatumba.php">
  <img src="photos/7.png" alt="gatumba" width="110" height="90" />
  </a>
  <div class="desc">gatumba sector</div>
</div><br><br><br><br><br><br><br><br><br><br>
<div class="img">
  <a target="_blank" href="bwira.php">
  <img src="photos/7.png" alt="bwira" width="110" height="90" />
  </a>
  <div class="desc">bwira sector</div>
</div>
<div class="img">
  <a target="_blank" href="nyange.php">
  <img src="photos/7.png" alt="nyange" width="110" height="90" />
  </a>
  <div class="desc">nyange sector</div>
</div>
<div class="img">
  <a target="_blank" href="ngororero.php">
  <img src="photos/7.png" alt="ngororero" width="110" height="90" />
  </a>
  <div class="desc">ngororero sector</div>
</div>
<div class="img">
  <a target="_blank" href="gatumba.php">
  <img src="photos/7.png" alt="gatumba" width="110" height="90" />
  </a>
  <div class="desc">gatumba sector</div>
</div>
<div class="img">
  <a target="_blank" href="bwira.php">
  <img src="photos/7.png" alt="bwira" width="110" height="90" />
  </a>
  <div class="desc">bwira sector</div>
</div><br><br><br><br><br><br><br><br><br><br>
<div class="img">
  <a target="_blank" href="nyange.php">
  <img src="photos/7.png" alt="nyange" width="110" height="90" />
  </a>
  <div class="desc">nyange sector</div>
</div>
<div class="img">
  <a target="_blank" href="ngororero.php">
  <img src="photos/7.png" alt="ngororero" width="110" height="90" />
  </a>
  <div class="desc">ngororero sector</div>
</div>
<div class="img">
  <a target="_blank" href="ngororero.php">
  <img src="photos/7.png" alt="ngororero" width="110" height="90" />
  </a>
  <div class="desc">ngororero sector</div>
</div>

</div></div></body>