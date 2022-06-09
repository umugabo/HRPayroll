
<?php

?>
<style>
body{
	
	padding-tpo: 40px;
	padding-bottom: 40px;
	background-color: #ADABAB;
}
.form-signin
{
	max-width: 330px;
	padding: 15px;
	margin: auto;
	color: #017572;
}
.form-signig .form-signin-header,.form-signin .checkbox{

	margin-bottom: 10px;
}
.form-signin .checkbox
{
	font-weight: normal;
}
.form-signin .form-control
{
	position: relative;
	height: auto;
	-wekit-box-sizing:border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	padding: 10px;
	font-size: 16px;
	width: 300px
}
.form-signin input[type="email"]{
	margin-bottom: -1px;
	border-bottom-right-radius:0;
	border-top-left-radius: 0;
	border-color: #017572; 
}
h2{
	text-align: center;
	color: #017572;
}
</style>
</head>
<body>
	<h2>login page</h2>
	<div class="container form-signin">
<?php
ob_start();
session_start();
$_SESSION['use']=$id;
$msg='';
if (isset($_SESSION['user'])) {
		header("location:view_question.php");
	}
if (isset($_post['login'])) {
		$email=$_POST['email'];
		$password=$_POST['password'];
		if ($email=$_post['email'])&& $password=$_POST['password'] {
			$_SESSION['use']=$email;
			echo '<script type="text/javascript"> window.open ("view_question.php","_self");</script>';
		}
		else{
		$msg='wrong email or password';
	}
	}	
	

?>
	</div>
<div class="container">

<form class="form-signin"role="form"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"METHOD="POST">
<h4 class="form-signin-header"><?php echo $msg; ?></h4>
<input type="email"class="form-control"name="email"placeholder="enter your correct email"required autofocus><br>
<input type="password"class="form-control"name="password"placeholder="enter password"required>
<button name="login">log in</button>
</form>
</div>
<!-- home page --> 
<?php session_start(); ?>
<html>
<body>
<?php 
if (!isset($_SESSION['use'])) {
	header("location:login.php");
}
echo $_SESSION['use'];
echo "login secces";
?>

<!--logout code -->
<?php
session_start();
session_destroy();
echo '<script type="text/javascript"> window.open ("view_question.php","_self");</script>';
?>
</body></html>




