<?php 
ob_start();
include('dbconnect.php');
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $time=date('Y/m/d');
  $check="no";
  $updated=mysql_query("UPDATE appointment SET 
    time='$time',  checka='$check' WHERE id='$id'")or die();
  if($updated)
  {
  header('Location:pending.php');
  }
}
ob_end_flush();
?>
