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
}</style>

<link rel="stylesheet" href="styles/sty.css">
<link rel="stylesheet" href="styles/search.css">
<link rel="stylesheet" href="../administration/styles/search.css">
    <link rel="stylesheet" href="2.css">
    
    <title>view question</title>

</head>
<body><div style="border:0px solid black;height:auto;width:1350px;">
	<div style="border:0px solid black;height:160px;position:fixed;width:1350px;background-image:url(../picprj/banner3.jpg);margin-top:-10px">
		
</div>

<div class="container"style="position:fixed;margin:0px;padding:2px;padding-top:170px;width:180px;position:absolute">
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
</div>
<div style="height:70px;width:70%;margin-left:13.8%;position:fixed;margin-top:150px;background-color:#2565a7;border-radius:7px;font-size:20px;padding-left:230px;">
	<div style="margin-left:-97%;margin-top:-15px;"><form action="search.php"method="post"class="form-wrapper cf">
<input type="text"name="search"autocomplete="on" placeholder="Search here..." required>
<button type="submit">Search</button>
</form></div>
</div><a href="download.php">
<img src="../picprj/google.png"width="153"height="78"style="position:fixed;margin-left:1200px;margin-top:400px;">
</a><div style="border:0px solid blue;height:auto;width:1158px;margin-left:190px;padding-top:220px;background: #FFF;border-radius:15px;">
<table width="1157" height="209" border="1">
  <tr>
    <th width="36" height="32">NO</th>
    <th >NYIRIKIBAZO NAHO ATUYE</th>
    <th  >IMITERERE Y'IKIBAZO</th>
    <th  >UMWANZURO</th>
    <th  >IKITONDERWA</th>
  </tr>
  <?php
  $con=mysql_connect('localhost','root','');
mysql_select_db("dbtest",$con);
$sector=$userRow['sector'];
$sql=mysql_query("select * from sectorquestion where usec='$sector' order by date DESC");
$i=1;
while (
$row=mysql_fetch_array($sql))
{$id=$row['id'];
  echo "<tr>
    <td height='109'>".$i."</td>
    <td style:'padding:3px;width:140px'font-size:16px>".strtoupper($row['ufn'])."&nbsp;".$row['uln']."<br>".strtolower($row['usec'])."/".strtolower($row['ucell'])."<br>kuwa:".$row['date']."</td>
    <td><textarea cols='32'rows='8'style='font-size:15px;border:0px'>".$row['structure']."</textarea></td>
    <td><textarea cols='32'rows='8'style='font-size:15px;border:0px'>".$row['conclusion']."</textarea></td>
    
    <td><textarea name='reas'cols='31'rows='7'style='font-size:15px;border:0px'>".$row['nb']."</textarea>";?>
    	<br><a href="delete.php?id=<?php echo $id; ?>"
    onclick="return confirm('Are you sure you wish to delete this Record?');"> 
    	<img src="../picprj/de.jpg"style="height:32;"></a>
<a href="edit.php?id=<?php echo $id; ?>"><img src="../picprj/edit.png"style="height:25;"></a></td>
  </tr><?php
  $i++;
}

?>

</table>

</div></div></body> 

