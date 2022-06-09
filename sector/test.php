	<?php
  $con=mysql_connect('localhost','root','');
mysql_select_db("dbtest",$con);
$id=$_REQUEST['id'];
$sql=mysql_query("select * from report where id='$id'");
$row=mysql_fetch_array($sql);

?>
<div>
<h3><b><u>RAPORO Y'IBIBAZO BY' ABATURAGE BYO KUWA <?php echo $row['date'];  ?> MUMURENGE WA <?php echo strtoupper($row['sector']);  ?></u></b></h3>
Names:<?php echo $row['names'];  ?><br>
Sector:<?php echo $row['sector'];  ?><br>
contents:<?php echo $row['content'];  ?><br>
</div> </div>
    <div id="fade" class="black_overlay"></div>