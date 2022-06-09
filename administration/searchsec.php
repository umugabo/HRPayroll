<style type="text/css">
body{
background-image:url(photos/background.jpg);
background-attachment: center;
}

</style>
<?php
mysql_connect("127.0.0.1","root","");
mysql_select_db("dbtest");
if (isset($_POST['search'])) {
$searchq=$_POST['search'];
$output='';
$searchq=preg_replace("#[^0-9a-z]#i", "", $searchq);
$query=mysql_query("SELECT * FROM  sectorquestion WHERE uid LIKE '%$searchq%'")or die("chould not search!"); 
$count=mysql_num_rows($query);
if ($count==0) {
	$output='<label>no result match to your search!</label>';
}
else
{
while ($row=mysql_fetch_array($query)) {
	$fn=$row['ufn'];
	$ln=$row['uln'];
	$sec=$row['usec'];
	$cell=$row['ucell'];
	$id=$row['uid'];
	$structure=$row['structure'];
	$conclusion=$row['conclusion'];
	$lfname=$row['lfname'];
	$llname=$row['llname'];
	$post=$row['post'];
	$depart=$row['depart'];
	$time=$row['time'];
	$nb=$row['nb'];
	$output .='<div class="result"styyle="width:1000px;height:800px;"><div style="background-color:#fff;height:500px;width:1100px;">
    <div style="float:left;width:100px;height:auto;padding-left:70px;padding-top:20px;font-size:20px;">
    '.strtolower($fn).'&nbsp;'.$ln.'<br>UMURENGE:'.strtolower($sec).'<br>AKAGARI:'.strtolower($cell).'<br>ID:'.$id.'</div>
    <div style="float:right;width:100px;height:auto;padding-right:180px;padding-top:20px;font-size:20px;">
   </div><div>
    <div style="font-size:18px;border:1px;float:left;margin-top:12%;padding-left:-148px;margin-left:-9%">
<B>STRUCTURE OF QUESTION</B><BR>
    <textarea cols="37"rows="12">'.$structure.'</textarea></div>
    <div style="font-size:15px;border:1px;float:left;margin-top:12%">
<B>CONCLUSION</B><BR>
    <textarea cols="37"rows="12">'.$conclusion.'</textarea> </div>
    <div style="font-size:15px;border:1px;float:left;margin-top:-0.3%">
<B>N.B</B><BR>
    <textarea name="reas"cols="37"rows="12">'.$nb.'</textarea></div></div>
    	
    ';?></div></div><?php
}
}
}
?>
</div><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>searching</title>
<style>
table
{
	margin-left: 76px;
}
</style>
<link rel="stylesheet" href="styles/search.css">
</head><body>
<form action="searchsec.php"method="post"class="form-wrapper cf">
<input type="text"name="search"autocomplete="on" placeholder="Search here..." required>
<button type="submit">Search</button>
</form><label>
<?php
print("$output");
?></label>
</body></html>