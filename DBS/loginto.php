<?php
session_start();
$email=$_post['email'];
$password=$_post['password'];
if($email&&$password)
{
$conn=mysql_connect("localhost","root","")or die("coulden't connnect to database".mysql_error());
mysql_select_db("tata") or die("table not found");
$query=mysql_query("select * from tata where uname='$username'");
$numrows=mysql_num_rows($query);
if($numrows!==0)
{
while($row=mysql_fetch_assoc($query))
{
$email=$row['email'];
$password=$row['password'];
}
if($email==$emaile&&$password==$password)
{include ('home.php'); 
@$_session['email']=$email;
}
else
echo"your password is incorrect";
include('index.php');
}
else
die("the user doesn't exist!!!");
include('data.php');
}
else
die("plese enter correct username and password!");

?>