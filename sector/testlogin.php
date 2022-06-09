<?php session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("dbtest");
if(isset($_POST['signup']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$q = ("SELECT * FROM sector WHERE email = '$email' AND password = '$password'");
	$res=mysql_query($q);
	
		if($result=mysql_num_rows($res) > 0)
		{
			$_SESSION['email'] = $email;
			header("Location:question.php");
			exit;
		}
		else
		{
			echo'<script>alert("INVALID USERNAME OR PASSWORD");</script>';
			header("Location:login.html");
			

		}
	
}
?>