<?php 
ob_start();
include('dbconnect.php');
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['update']))
  {
  $answer=$_POST['answer'];
  $updated=mysql_query("UPDATE messages SET 
    answer='$answer'WHERE id='$id'")or die();
  if($updated)
  {

  header('Location:chat.php');
  }
}
}
ob_end_flush();
?> 

