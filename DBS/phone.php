

<?php
$con=mysql_connect('localhost','root','');
mysql_select_db("dbtest",$con);
$query= mysql_query("select * from tata where phone_number==$_POST[PHONE]");
$count=mysql_fetch_row($query);
if($count==0)
{
include_once 'phone.php';
}
else
{
echo '
enter your password:<br>
<input type="password" name="pass" placeholder="Your Password" required />';
$pwd=mysql_query("select password from tata where phone_number==$_POST[PHONE]");
$count1=mysql_fetch_row($query);
if($count1)
{
echo '
<blink><h2>incorrect password please enter correct password and continue</h2></blink><br>
<input type="password" name="pass" placeholder="Your Password" required />';
}
else
{
include_once 'home.php';
}

}
?>