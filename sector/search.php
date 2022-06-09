<?php
    ob_start();
    session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("dbtest");
    
    if( !isset($_SESSION['user']) ) {
        header("Location: index.php");
        exit;
    }
    $res=mysql_query("SELECT * FROM sector WHERE id='".$_SESSION['user']."'");
    $userRow=mysql_fetch_array($res);
?>
<style type="text/css">
body{
background-image:url(photos/background.jpg);
background-attachment: center;
}
table, td, th
{
border:1px solid #e67e22;
border-collapse:collapse;
padding-top: -34px;
padding: 2px;
text-indent:3px;
margin-top: -3px;
margin-left: -5px
}
td{

font-size:18px;
}
th
{
background-color:#FF9966;
color:white;
height: 32
}
</style>
<?php
mysql_connect("127.0.0.1","root","");
mysql_select_db("dbtest");
if (isset($_POST['search'])) {
$searchq=$_POST['search'];
$output='';
$i=1;
$searchq=preg_replace("#[^0-9a-z]#i", "", $searchq);
$query=mysql_query("SELECT * FROM sectorquestion WHERE ufn LIKE '%$searchq%' and usec='$userRow[sector]'")or die("chould not search!"); 
$count=mysql_num_rows($query);
if ($count==0) {
	$output='<h4>no result match to your search!</h4>';
}
else
{?>
	<table width="1200" height="209" border="1" style="background-color:#fff;margin-left:8%">
  <tr>
    <th width="36" height="32">NO</th>
    <th >NYIRIKIBAZO</th>
    <th  >IMITERERE Y'IKIBAZO</th>
    <th  >UMWANZURO</th>
    <th  >ICYITONDERWA</th>
    <th  >EDIT</th>
    <th  >DELETE</th>
  </tr>
	<?php
while ($row=mysql_fetch_array($query)) {
	$fn=$row['ufn'];
	$ln=$row['uln'];
	$sec=$row['usec'];
	$cell=$row['ucell'];
	$id=$row['id'];
	$structure=$row['structure'];
	$conclusion=$row['conclusion'];
	$lfname=$row['lfname'];
	$llname=$row['llname'];
	$post=$row['post'];
	$depart=$row['depart'];
	$time=$row['time'];
	$nb=$row['nb'];
	$output .='<tr>
    <td height="109">'.$i.'</td>
    <td style:"padding:3px;width:140px"font-size:16px>'.strtoupper($fn).'&nbsp;'.$ln.'<br>'.strtolower($sec).'/'.strtolower($cell).'<br>Kuwa&nbsp;:'.$time.'</td>
    <td><textarea cols= "33"rows="8" style="font-size:15px;border:0px">'.$structure.'</textarea></td>
    <td><textarea cols="33" rows="8" style="font-size:15px;border:0px">'.$conclusion.'</textarea></td>    
    <td><textarea name="reas" cols="33" rows="7" style="font-size:15px;border:0px">'.$nb.'</textarea></TD><td><a href="edit.php?id='.$id.'">
    <img src="..administration/photos/edit.png"style="height:32;"></a></td><td>
<a href="delete.php?id='.$id.' "> 
        <img src="..administration/photos/de.jpg"style="height:32;"></a>
    </td></tr>';
    ?>
    </div>
    <?php
    $i++;
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
<form action="search.php" method="post" class="form-wrapper cf">
<input type="text"name="search"autocomplete="on" placeholder="Search here..." required>
<button type="submit">Search</button>
</form>
<div id="result">
<?php
print("$output");
?></div>
</body></html>