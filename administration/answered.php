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
    
    <title>accepted appointment</title>

	<style type="text/css">
	table, td, th
{
border:0px solid #e67e22;
border-collapse:collapse;
padding-top: 0px;

}
td{

font-size:18px;
width: 250px;

}
th
{
background-color:#FF9966;
color:white;
}
body{
	background-image: url(photos/background.jpg);
}
}</style>

</head>
<body><div style="border:0px solid black;height:auto;width:1367px;background-image:url(photos/background.jpg);margin:-7px;">
	<div style="border:0px solid black;height:160px;width:1367px;position:absolute;background-image:url(photos/banner3.jpg);margin-top:0px">
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
					<strong>logout</strong><br><?php echo strtoupper($userRow['first'])."&nbsp".$userRow['last']; ?>
					
				</a>
			</li>
		</ul>
	</nav>
</div>
<div style="height:76.7px;width:87%;background-color:#2565a7;float:right;border-radius:1px;font-size:20px;padding-left:0px;margin-top:11.8%">
<a href="account.php">
<?php
echo '<img alt="profile" title="profile" src="data:image/jpeg;base64,'.base64_encode( $userRow['image'] ).'"style="width:20px;height:30px;border-radius:50%;margin-left:300px;height: 80px;margin-left: 290px;margin-top: -1px;width:80px;float:right;"/>';?>
</a>
</div>

<div style="border:0px solid blue;height:auto;width:1175px;margin-left:188px;margin-top:240px;background: #FFF;position:absolute;border-radius:12px;">
<?php
  $con=mysql_connect('localhost','root','');
mysql_select_db("dbtest",$con);
$i=1;
$sql=mysql_query("select * from appointment where host !='' order by id DESC ");
while ($row=mysql_fetch_array($sql))
  { 
  	$id= $id=$row['id'];
  	echo "<div style=' margin:2px;
  border:0px solid #0000ff;height:auto;width:auto;float:left; text-align:center;padding-top:8px;'>
  <form method='post'action=''>
  <table><tr>
	<td >".strtoupper($row['userfname'])."&nbsp;".$row['userlname']."</td></tr><tr><td>
    live in &nbsp;".$row['usersector']."&nbsp; sector; in &nbsp; ".$row['usercell']."&nbsp;cell </td></tr><tr>
    <td>with &nbsp;".$row['phone']."&nbsp; phone number.<br>on&nbsp;
    ".$row['arr_date']."</td></tr>
	<tr><td>REASON: <textarea name='reas'cols='30'rows='7'style='font-size:15px'>" . $row['reason'] . "</textarea><br>
    </td></tr>
	
<tr><td>with &nbsp;".strtoupper($row['host']).
	"&nbsp; at&nbsp;".$row['place']."&nbsp<br>on&nbsp;".$row['time'];?>	 <a href="deletea.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
    		<span class="delete" title="Delete"><img src="photos/de.jpg"style="height:32;"></a> 
    	</td></tr>
</table></form></div>
<?php 
 $i++;
  }
?>
</div></div></body> 


