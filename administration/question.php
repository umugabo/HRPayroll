<p>
REPUBULIKA Y'URWANDA<br>
INTARA Y'IBURENGERAZUBA<br>
AKARERE KA NGORORERO<br>
B.P : 103 GITARAMA<br>
E_mail: <u>ngororerodistrict@ngororerodistrict.gov.rw</u><br>
Website: <u>www.ngororero.gov.rw</u><br>
</p>
<h2><U><CENTER><FONT SIZE="4">IBIBAZO BYACYIRIWE MU NTEKO Y'ABATURAGE MUKARERE KA NGORORERO</FONT></CENTER><U/></h2>
		</div>
		<div>
		<table border="2" >

    <th style="width:10px;">NO</th>
    <th>NYIRIKIBAZO</th>
    <th>IMITERERE Y'IKIBAZO</th>
    <th>UMWANZURO</th>
    <th>IKITONDERWA</th>
  <?php
  $con=mysql_connect('localhost','root','');
mysql_select_db("dbtest",$con);
$sql=mysql_query("select * from question order by id DESC");
$i=1;
while (
$row=mysql_fetch_array($sql)){
	$id=$row['id'];
  echo "<tr>
    <td height='109'>".$i."</td>
    <td style:'padding:3px;width:140px'font-size:16px>".strtoupper($row['ufn'])."&nbsp;&nbsp;".$row['uln']."<br>".strtolower($row['usec'])."/".strtolower($row['ucell'])."<br>Kuwa".$row['time']."</td>
    <td>".$row['structure']."</td>
    <td>".$row['conclusion']."</td>
    </td>
    <td>".$row['nb'];?>
</td>
  </tr>
  <?php
  $i++;
}

?>