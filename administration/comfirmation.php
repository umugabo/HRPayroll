
<?php 
ob_start();
include('dbconnect.php');
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['update']))
  {
  $time=$_POST['date'];
  $host=$_POST['host'];
  $place=$_POST['place'];
  $checka="yes";
  $updated=mysql_query("UPDATE appointment SET 
		time='$time', host='$host', place='$place', checka='$checka' WHERE id='$id'")or die();
  if($updated)
  {
$phone=$row['phone'];
  $message="your appointment have been accepted";
  $insert=mysql_query("INSERT INTO notification(message,phone)values('$message','$phone')");
  header('Location:pending.php');
  }
}
}
ob_end_flush();
?>

<link rel="stylesheet" href="styles/sty.css">
<link rel="icon" type="image/jpg" href="../picprj/iconn.png" />
    <link rel="stylesheet" href="2.css">
    <style type="text/css">
body{
background-image:url(photos/background.jpg);
background-attachment: center;
}
</style>
    <?php
  $con=mysql_connect('localhost','root','');
mysql_select_db("dbtest");
$sql=mysql_query("select * from appointment WHERE id='$id'");
$row=mysql_fetch_array($sql);
?><div style="border:2px solid red; margin-left:203px;width:50%;background-color:#9d9d9d;">
  <form method="post"action="">
  <table><tr>
	<td >first name:<?php echo strtoupper($row['userfname']); ?><br>
last name:<?php echo $row['userlname']; ?><br>
Sector:<?php echo $row['usersector'];?><br>
Cell:<?php echo $row['usercell'];?><br>
Phone number:<?php echo $row['phone'];?><br>
arrival time:<?php echo $row['arr_date'];?>
	</td></tr>
	<tr><td>REASON: <textarea name="reas"cols="30"rows="7"style="font-size:15px"><?php echo $row['reason']; ?> </textarea><br>
    </td></tr>
	<form action""method="post">
<tr><td> 
	<input type="text"value="<?php echo date('Y/m/d') ?>"class="ed"name="date"></td></tr><td>host name<br>
	<input type="text" name="host" class="ed" placeholder="host title or post" required  />  </td>
	<td> place<br>
	<input type="text" name="place" placeholder="place"class="ed" required /></td>
<tr><td>
<input type="submit" name="update"id="button1"value="comfirm"></form>
</td></tr>
</table></form></div>
