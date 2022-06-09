<?php 
ob_start();
include('dbconnect.php');
  if(isset($_POST['update']))
  {
  $ufn=$_POST['fname'];
  $uln=$_POST['lname'];
  $usec=$_POST['phone'];
  $ucell=$_POST['email'];
  $uid=$_POST['password'];
  $updated=mysql_query("UPDATE sector SET 
    first='$ufn', last='$uln', phone='$usec', email='$ucell', password='$uid' WHERE id='$id'")or die();
  if($updated)
  {
  header('Location:account.php');
  }
  else
  {
     header("location:account.php");    
  }
}
ob_end_flush();
?>