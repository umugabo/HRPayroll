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
  ob_end_flush();
?>
  <?php
  $con=mysql_connect('localhost','root','');
mysql_select_db("dbtest",$con);
$sector=$userRow['sector'];
$sql=mysql_query("select * from sectorquestion WHERE usec='$sector' and date < DATE_ADD(NOW(), INTERVAL +1 MONTH) order by id DESC");
//date select string  date BETWEEN DATE_SUB(NOW(), INTERVAL 23 DAY) AND NOW()
//today >= CURDATE() - INTERVAL 30 DAY
$row1=mysql_fetch_array($sql);
	$id=$row['id'];?>
<h2><U><CENTER><FONT SIZE="4">IBIBAZO BY'ABATURAGE MUMURENGE WA <?php echo strtoupper($row1['usec']);?></FONT></CENTER><U/></h2>
		</div>
		<div>
		<table border="2" >

    <th width="50" height="32">NO</th>
    <th>CITIZEN ADDRESS</th>
    <th>SRUCTURE OF QUESTION</th>
    <th>CONCLUSION</th>
    
    <th>N.B</th>
<?php 
$i=1;
while (
$row=mysql_fetch_array($sql)){
  echo "<tr>
    <td height='109'>".$i."</td>
    <td style:'padding:3px;width:140px'font-size:16px>"
    .strtoupper($row['ufn'])."&nbsp;&nbsp;".$row['uln']."<br>".strtolower($row['usec'])."/".strtolower($row['ucell'])."<br>Kuwa&nbsp;".$row['date']."</td>
    <td>".$row['structure']."</td>
    <td>".$row['conclusion']."</td>
    
    <td>".$row['nb'];?>
</td>
  </tr>
  <?php
  $i++;
}

?>