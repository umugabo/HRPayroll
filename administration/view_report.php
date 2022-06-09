<?php
  $con=mysql_connect('localhost','root','');
mysql_select_db("dbtest",$con);
$userfname=$_POST['userfname'];
$id=$_REQUEST['id'];
$sql=mysql_query("select * from report where id='$id' ");
$row=mysql_fetch_array($sql);
?>
<html><head><title>report from&nbsp;<?PHP echo $row['sector'];?> </title><link rel="stylesheet" href="styles/sty.css">
<link rel="stylesheet" href="styles/report.css"></head>
<style type="text/css">

</style>

<div id="example" style="margin-left:40px;margin-top:20px;width:1200px;height:auto;border: 1px solid #2565a7;padding-left:38px;font-size:16px;">
<h4>REPUBLIC OF RWANDA</h4>
<img src="../picprj/rw.gif">
<h4>INTARA Y IBURENGERAZUBA</h4>
<h4>AKARERE KA NGORORERO</h4>
<h4>UMURENGE WA <?PHP echo strtoupper($row['sector']); ?></h4><br>
<center><h4><b><u>RAPORO Y'IBIBAZO BY' ABATURAGE BYA KIRIWE M' UMURENGE WA <?php echo strtoupper($row['sector']);  ?></u></b></h4></center>
<table border="1" class="gridtable" >
<tr><b><td><b>IBIBAZO BYAKIRIWE</b></td><td><b>IBYAKEMUWE</b></td><td><b>IBIGIKURIKIRANWA</b></td><td><b>TOTAL</b></td></tr>
<?PHP $total=$row['ibyakiriwe']+$row['ibakemuwe']+$row['ibyananiranye'];
 ?>
<tr><td><?php echo $row['ibyakiriwe']; ?></td><td><?php echo $row['ibakemuwe']; ?></td><td><?php echo $row['ibyananiranye']; ?></td><td><?php echo $total; ?></td></tr>

</table >
<h3><center><u>IKOMATANYA</u></center></h3><br>
<table border="1" style="height:auto;margin-right:50px;" class="gridtable" >
<tr><b><th><b>COMMON CATEGORIES OF ISSUES</b></th><th><b>NATURA OF UNSOLVED ISSUES</b></th><th><b>INSTITUTION INCHARGE<BR>OF SOLVING UNSOLVED CASES</b></th><th><b>INNOVATION/CHALLENGES/<br>OBSERVATION</b></th><th><b>CATEGORIES OF INSTITUTIONS <br>PRESENTED</b></th></tr>
<tr><b><td><textarea class="ed"cols="20"rows="6"><?php echo $row['common']; ?></textarea></td><td><textarea rows="6" rows="6" class="ed"><?php echo $row['nature']; ?>
</textarea></td><td><textarea rows="6" class="ed"><?php echo $row['institution']; ?></textarea></td><td><textarea rows="6" rows="6" class="ed"><?php echo $row['innovation']; ?>
</textarea></td><td> <textarea rows="6" class="ed"><?php echo $row['presented']; ?></textarea></td></tr></table><br>
<h4>BIKOREWE <?PHP echo strtoupper($row['sector']);?>&nbsp; KUWA <?php echo $row['time'];?></h4>
<h4><?php echo $row['names'];?></h4>
<H3>Umukozi w' umurenge Ushinze imiyoborere myiza</H3>
</div>
<input type='button' value='Print This Only' onclick='printDiv(example);'/>