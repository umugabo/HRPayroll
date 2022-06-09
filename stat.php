<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox({
		loadingImage : 'src/loading.gif',
		closeImage   : 'src/closelabel.png'
	  })
	})
  </script>
<head><style type="text/css">
.ed{
border-style:solid;
border-width:thin;
border-color:#006633;
padding:5px;
margin-bottom: 4px;
line-height: 23px;
font-size: 17px
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#e67e22;

margin-left: 150px;
cursor: pointer;
background-color:#006633;
height: 34px;
width:150px
}

.p{

font-style:bold;
font-size: 20px;

}</style>
<link rel="stylesheet" href="1.css">


<title>ON & ASssociate Ltd</title>
<link rel="icon" href="photo/log.jpg"width="" type="image/x-icon">
</head>

<div style="border:1px solid green; width:1304px;height:auto;margin-left:20px;margin-top:-10px;">
<div style="border:0px solid black;color:black width:1300px;height:100px;margin:0px;" class="banner">
<img src="photo/log.jpg"height="174"width="1304"></div><body>
<div style="border:0px solid blue; width:1304px;height:60px;margin-top:77px;position:fixed;padding:0px">
 <nav><center>
 
<body background="#BCBCBC" id="body"><TABLE width='1198' bgcolor='#EAEAEA' align="center">
<TR>

<?php 
include'dbcon.php';

$result = mysql_query("SELECT * FROM empl_table  where gender='male' ");
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);

echo "<center><font color=''><h2>ALL MALE EMPLOYEES </h2></font></center>";
// printing table headers
//echo '<center><table cellpadding="0" bgcolor="" cellspacing="0" id="resultTable" border="1" width="900" height="300"><thead><tr class="record"><th> Empl ID</th><th> fname</th><th>lname</th><th>phone</th> <th>leave cathegory</th><th>days</th><th>S date</th><th>E date</th><th>Total</th><th>Left Day</th><th>Image</th><th>Status</th><th>Action</th></tr></thead></center>';
$count=0;
// printing table rows
while($row = mysql_fetch_array($result))
{
	$count++;
	 //$status='waiting';
 ?>
  
                    
                    <?php  }

mysql_free_result($result);

echo '<FONT SIZE="4" COLOR="red">Total :&nbsp;<b>'. $count.'&nbsp; Male</b></font>';
?>

<?php 
include'dbcon.php';

$result = mysql_query("SELECT * FROM empl_table  where gender='female' ");
if (!$result)
 {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);

echo "<center><font color=''><h2>ALL FEMALE EMPLOYEES </h2></font></center>";
// printing table headers
//echo '<center><table cellpadding="0" bgcolor="" cellspacing="0" id="resultTable" border="1" width="900" height="300"><thead><tr class="record"><th> Empl ID</th><th> fname</th><th>lname</th><th>phone</th> <th>leave cathegory</th><th>days</th><th>S date</th><th>E date</th><th>Total</th><th>Left Day</th><th>Image</th><th>Status</th><th>Action</th></tr></thead></center>';
$count=0;
// printing table rows
while($row = mysql_fetch_array($result))
{
	$count++;
	 //$status='waiting';
 ?>
  
                    
                    <?php  }

mysql_free_result($result);

echo '<FONT SIZE="4" COLOR="red">Total :&nbsp;<b>'. $count.'&nbsp; Female</b></font>';
?>

		</TD></TD>
	</TR>
	</TABLE></TD>
	
	
</TR>
</TABLE>

</center>
      
		 
	</body>
	 <a href="hr.php"><center><img src="photo/BACK.gif" width="230" height="40" border="0" alt="" &nbsp;&nbsp;&nbsp;&nbsp; /></center></a>	
</html>