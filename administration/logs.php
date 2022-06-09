<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("Location: view_question.php");
  exit;
 }
 
 if( isset($_POST['login']) ) { 
  
  $demail = $_POST['demail'];
  $password = $_POST['password'];
  
  $demail = strip_tags(trim($demail));
  $password = strip_tags(trim($password));
  
  $password = hash('sha256', $password); // password hashing using SHA256
  
  $res=mysql_query("SELECT * FROM admin WHERE email='$demail'");
  
  $row=mysql_fetch_array($res);
  
  $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
  
  if( $count == 1 && $row['password']==$password ) {
   $_SESSION['user'] = $row['id'];
   header("Location:view_question.php");
  } else {
   $msg = "Wrong Credentials, Try again...";
  }
 }
?>