
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>user Registration</title>
<link rel="stylesheet" href="register.css" type="text/css" />

</head>
<body>
<div id="login-form"></div>
<form method="post">
<table width="30%" border="0"cellspacing="1">
<tr>
<td><input type="text" name="fname" placeholder="first name" required /></td>
</tr>
<tr>
<td><input type="text" name="lname" placeholder="last Name" required /></td>
</tr>
<tr>
<td><input type="phone" name="phone" placeholder="phone  number" required /></td>
</tr>
<tr>
<td><input type="date" name="date" placeholder="your date of birth"required /></td>
</tr>
<tr>
<td><input type="text" name="sector" placeholder="sector" required /></td>
</tr>
<tr>
<td><input type="text" name="cell" placeholder="cell" required /></td>
</tr>
<tr>
<td><input type="text" name="uname" placeholder="User Name" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><input type="file" name="picture" placeholder="browse your picture" /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
<tr>
<td></td>
</tr>
</table>
<a href="index.php"name="btn-login"><button type="submit" name="signup">Sign In Here</button></a>
</form>
</div>
</body>
</html>
<?php
//session_start();
$con=mysql_connect('localhost','root','');
mysql_select_db("dbtest",$con);
$query=mysql_query("INSERT INTO  tata (first_name, last_name, phone_number,date,sector,cell,username,email,password,picture) VALUES('$_POST[fname]','$_POST[lname]','$_POST[phone]','$_POST[date]','$_POST[sector]','$_POST[cell]','$_POST[uname]','$_POST[email]','$_POST[pass]','$_POST[picture]')");						
if($query)
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
        header("location:profile.php");
 }
 else
 
  ?>
        <script>alert('error while registering you...');</script>
        