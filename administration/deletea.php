<?php
  ob_start();
  include("dbconnect.php");
  if(isset($_GET['id'])!="")
  {
  $delete=$_GET['id'];
  $delete=mysql_query("DELETE FROM appointment WHERE id='$delete'");
  if($delete)
  {
      header("Location:answered.php");
  }
  }
  ob_end_flush();
?>