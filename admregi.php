<?php

include 'functions.php';

	  // connections
		  require_once('dbcon.php');
		  if(isset($_REQUEST['submit']))
		  {
		  $st="Active";




    $photo = $_FILES['photo']['name'];
    $cv = $_FILES['cvFile']['name'];
	
    $upload = move_uploaded_file($_FILES['photo']['tmp_name'], 'photo/'.$photo);	  
    $upload = move_uploaded_file($_FILES['cvFile']['tmp_name'], 'photo/'.$cv);	  
		
		
		  
		   $query="INSERT INTO `employee`(`emp_code`, `f_name`, `m_name`, `l_name`, `birth_date`, `gender`, `phone`, `email`, `qualification`, `starting_date`, `ending_date`, `nationality`, `id_card`, `place_residence`, `photo`, `cv`, `position`, `g_salary`, `status`, `father_name`, `mother_name`, `n_child`, `insurance`, `username`, `password`, `basic_salary`) VALUES ('".$_POST['emp_code']."','".$_POST['fname']."','".$_POST['oname']."','".$_POST['lname']."','".$_POST['Birth']."','".$_POST['gender']."','".$_POST['phone']."','".$_POST['Email']."','".$_POST['qualification']."','".$_POST['stat_date']."','".$_POST['end_date']."','".$_POST['nationality']."','".$_POST['ID_Card']."','".$_POST['residancePlace']."','".$photo."','".$cv."','".$_POST['post']."','".$_POST['gsalary']."','".$_POST['status']."','".$_POST['father']."','".$_POST['mother']."','".$_POST['chiledno']."','".$_POST['ansurance']."','".$_POST['username']."','".$_POST['password']."','".$_POST['bsalary']."')";
		   
		   $insert=mysqli_query($conn, $query);
		   if(!$insert)
		   {
		   echo '<script>alert("Employee Not Registered! error occurs during insertion");
				window.location.href="admregi.php"</script>';
		   }
		   else
		   {
		   echo '<script>alert("employee Registered!!!!");
				window.location.href="admupdate.php"</script>';
		   }
		   }
?>




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
  <script language="javascript" src="cal2.js"></script>
  <script language="javascript" src="cal_conf2.js"></script>
<title>ON & ASssociate Ltd</title>
<link rel="icon" href="photo/log.jpg"width="" type="image/x-icon">
</head>
<body background="#BCBCBC" id='body'><TABLE width='1198' bgcolor='#EAEAEA' align="center">
<TR>
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
text-align:;
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


</head>
<title>Register</title>
<div style="border:1px solid green; width:1304px;height:auto;margin-left:20px;margin-top:-10px;">
<div style="border:0px solid black;color:black width:1300px;height:100px;margin:0px;" class="banner">
<img src="photo/log.jpg"height="174"width="1304"></div><body>
<div style="border:0px solid blue; width:1304px;height:60px;margin-top:77px;position:fixed;padding:0px">
 <nav><center>
<body background="#BCBCBC" id="body"><TABLE width='1198' bgcolor='#EAEAEA' align="center">
</style>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine('attach');
		});
	</script>
<script>
$(function() {
$( "#selectable" ).selectable();
});

</script>
<script>
		jQuery(document).ready( function() {
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine('attach');
		});
	</script>
	
<?php
//end validation
?>	

</head>
<body>

<table class="ds_box"  cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table>
 
	 <style type="text/css">

.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	
	z-index: 32767;
}

.ds_tbl {
	background-color: #FFF;
}

.ds_head {
	background-color: #333;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	text-align: center;
	letter-spacing: 2px;
}

.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}

.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	padding: 5px;
	cursor: pointer;
}

.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */

</style>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine('attach');
		});
	</script>
<script>
$(function() {
$( "#selectable" ).selectable();
});

</script>
<script>
		jQuery(document).ready( function() {
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine('attach');
		});
	</script>
	
<?php
//end validation
?>	

</head>
<body>

<table class="ds_box"  cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table>

<script type="text/javascript">
// <!-- <![CDATA[

// Project: Dynamic Date Selector (DtTvB) - 2006-03-16
// Script featured on JavaScript Kit- http://www.javascriptkit.com
// Code begin...
// Set the initial date.
var ds_i_date = new Date();
ds_c_month = ds_i_date.getMonth() + 1;
ds_c_year = ds_i_date.getFullYear();

// Get Element By Id
function ds_getel(id) {
	return document.getElementById(id);
}

// Get the left and the top of the element.
function ds_getleft(el) {
	var tmp = el.offsetLeft;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetLeft;
		el = el.offsetParent;
	}
	return tmp;
}
function ds_gettop(el) {
	var tmp = el.offsetTop;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetTop;
		el = el.offsetParent;
	}
	return tmp;
}

// Output Element
var ds_oe = ds_getel('ds_calclass');
// Container
var ds_ce = ds_getel('ds_conclass');

// Output Buffering
var ds_ob = ''; 
function ds_ob_clean() {
	ds_ob = '';
}
function ds_ob_flush() {
	ds_oe.innerHTML = ds_ob;
	ds_ob_clean();
}
function ds_echo(t) {
	ds_ob += t;
}

var ds_element; // Text Element...

var ds_monthnames = [
'January', 'February', 'March', 'April', 'May', 'June',
'July', 'August', 'September', 'October', 'November', 'December'
]; // You can translate it for your language.

var ds_daynames = [
'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
]; // You can translate it for your language.

// Calendar template
function ds_template_main_above(t) {
	return '<table cellpadding="3" cellspacing="1" class="ds_tbl">'
	     + '<tr>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_py();">&lt;&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_pm();">&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_hi();" colspan="3">[Close]</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_nm();">&gt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_ny();">&gt;&gt;</td>'
		 + '</tr>'
	     + '<tr>'
		 + '<td colspan="7" class="ds_head">' + t + '</td>'
		 + '</tr>'
		 + '<tr>';
}

function ds_template_day_row(t) {
	return '<td class="ds_subhead">' + t + '</td>';
	// Define width in CSS, XHTML 1.0 Strict doesn't have width property for it.
}

function ds_template_new_week() {
	return '</tr><tr>';
}

function ds_template_blank_cell(colspan) {
	return '<td colspan="' + colspan + '"></td>'
}

function ds_template_day(d, m, y) {
	return '<td class="ds_cell" onclick="ds_onclick(' + d + ',' + m + ',' + y + ')">' + d + '</td>';
	// Define width the day row.
}

function ds_template_main_below() {
	return '</tr>'
	     + '</table>';
}

// This one draws calendar...
function ds_draw_calendar(m, y) {
	// First clean the output buffer.
	ds_ob_clean();
	// Here we go, do the header
	ds_echo (ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));
	for (i = 0; i < 7; i ++) {
		ds_echo (ds_template_day_row(ds_daynames[i]));
	}
	// Make a date object.
	/*var ds_dc_date = new Date();
var tomorrow = (new Date()).setDate(ds_dc_date.getDate()+1);
$('#disable-calendar').multiDatesPicker({
	disabled: true,
	addDates: [ds_dc_date, tomorrow]
});*/
	var ds_dc_date = new Date();
	ds_dc_date.setMonth(m - 1);
	ds_dc_date.setFullYear(y);
	ds_dc_date.setDate(1);
	if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
		days = 31;
	} else if (m == 4 || m == 6 || m == 9 || m == 11) {
		days = 30;
	} else {
		days = (y % 4 == 0) ? 29 : 28;
	}
	var first_day = ds_dc_date.getDay();
	var first_loop = 1;
	// Start the first week
	ds_echo (ds_template_new_week());
	// If sunday is not the first day of the month, make a blank cell...
	if (first_day != 0) {
		ds_echo (ds_template_blank_cell(first_day));
	}
	var j = first_day;
	for (i = 0; i < days; i ++) {
	
		// Today is sunday, make a new week.
		// If this sunday is the first day of the month,
		// we've made a new row for you already.
		if (j == 0 && !first_loop) {
			// New week!!
			ds_echo (ds_template_new_week());
		}
		// Make a row of that day!
		ds_echo (ds_template_day(i + 1, m, y));
		// This is not first loop anymore...
		first_loop = 0;
		// What is the next day?
		j ++;
		j %= 7;
	}
	// Do the footer
	ds_echo (ds_template_main_below());
	// And let's display..
	ds_ob_flush();
	// Scroll it into view.
	ds_ce.scrollIntoView();
}

// A function to show the calendar.
// When user click on the date, it will set the content of t.
function ds_sh(t) {
	// Set the element to set...
	ds_element = t;
	// Make a new date, and set the current month and year.
	var ds_sh_date = new Date();
	ds_c_month = ds_sh_date.getMonth() + 1;
	ds_c_year = ds_sh_date.getFullYear();
	// Draw the calendar
	ds_draw_calendar(ds_c_month, ds_c_year);
	// To change the position properly, we must show it first.
	ds_ce.style.display = '';
	// Move the calendar container!
	the_left = ds_getleft(t);
	the_top = ds_gettop(t) + t.offsetHeight;
	ds_ce.style.left = the_left + 'px';
	ds_ce.style.top = the_top + 'px';
	// Scroll it into view.
	ds_ce.scrollIntoView();
}

// Hide the calendar.
function ds_hi() {
	ds_ce.style.display = 'none';
}

// Moves to the next month...
function ds_nm() {
	// Increase the current month.
	ds_c_month ++;
	// We have passed December, let's go to the next year.
	// Increase the current year, and set the current month to January.
	if (ds_c_month > 12) {
		ds_c_month = 1; 
		ds_c_year++;
	}
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the previous month...
function ds_pm() {
	ds_c_month = ds_c_month - 1; // Can't use dash-dash here, it will make the page invalid.
	// We have passed January, let's go back to the previous year.
	// Decrease the current year, and set the current month to December.
	if (ds_c_month < 1) {
		ds_c_month = 12; 
		ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
	}
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the next year...
function ds_ny() {
	// Increase the current year.
	ds_c_year++;
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the previous year...
function ds_py() {
	// Decrease the current year.
	ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Format the date to output.
function ds_format_date(d, m, y) {
	// 2 digits month.
	m2 = '00' + m;
	m2 = m2.substr(m2.length - 2);
	// 2 digits day.
	d2 = '00' + d;
	d2 = d2.substr(d2.length - 2);
	// YYYY-MM-DD
	return y + '-' + m2 + '-' + d2;
}

// When the user clicks the day.
function ds_onclick(d, m, y) {
	// Hide the calendar.
	ds_hi();
	// Set the value of it, if we can.
	if (typeof(ds_element.value) != 'undefined') {
		ds_element.value = ds_format_date(d, m, y);
	// Maybe we want to set the HTML in it.
	} else if (typeof(ds_element.innerHTML) != 'undefined') {
		ds_element.innerHTML = ds_format_date(d, m, y);
	// I don't know how should we display it, just alert it to user.
	} else {
		alert (ds_format_date(d, m, y));
	}
}

// And here is the end.

// ]]> -->
</script>
</head>
<div style="border:1px solid green; width:1304px;height:auto;margin-left:20px;margin-top:-10px;">
<div style="border:0px solid black;color:black width:1300px;height:100px;margin:0px;" class="banner">

<div style="border:0px solid blue; width:1304px;height:60px;margin-top:77px;position:fixed;padding:0px">
 <nav><center>
<body background="#BCBCBC" id="body"><TABLE width='1198' bgcolor='#EAEAEA' align="center">
<TR>
	<TD align='center'></TD>
</TR>
<TR>
	<TD ><TABLE width='1195' border='0'>
	<TR>
		<TD width='400' height='400'>

<script type="text/javascript">

   //Created / Generates the captcha function    
    function DrawCaptcha()
    {
        var a = Math.ceil(Math.random() * 10)+ '';
        var b = Math.ceil(Math.random() * 10)+ '';       
        var c = Math.ceil(Math.random() * 15)+ '';  
        
       
       
        var code = a + b +  c;
        document.getElementById("txtCaptcha").value = code
    }

    
    </script>

</span> <fieldset legend>
                <legend>Personal Information</legend>
                <form action="admregi.php" method="post" enctype="multipart/form-data">
<form action='<?php echo $_SERVER['PHP_SELF'];?>' method='post' name='admregi' class="style2" enctype="multipart/form-data" />


<FONT size='3'  COLOR="blue">Registration of new Employee<BR>
<table border="0px" cellpadding="1" cellspacing="0" bgcolor='#B8860B' border='0'>
<tr><td>

<table>
 </span>
	  
	  
	  <tr>
        <td>Code:<div class="style16" id="Layer1"> 
          </td></div> 
		  <?php
		  $sql=mysqli_query($conn, "SELECT * FROM employee ORDER BY empl_id DESC LIMIT 1");
				   while($row=mysqli_fetch_array($sql)){
					   
					   $code=generetor($row['emp_code']);
					   echo '<td><input title="code" type="text" accesskey="1" value="'.$code.'" disabled  placeholder="Employee Code"/></td>';
				   }?>
				   <input type="hidden" name="emp_code" value="<?php echo $code?>">
				   
        </tr>
	  
	
				 <tr>
                   <td><span class="style2"><FONT size='3'  COLOR="">First Name</em></span></td>
                   <td><input title="Name" type="text" accesskey="1" name="fname"  class='requiredx' required placeholder='First Name'/></td>
                </tr>
<tr>
                   <td><span class="style2"><FONT size='3'  COLOR="">Other Name</em></span></td>
                   <td><input title="Name" type="text" accesskey="1" name="oname"   placeholder='Other Name'/></td>
                </tr>
				<tr>
                   <td><span class="style2"><FONT size='3'  COLOR="">Last Name</em></span></td>
                   <td><input title="Name" type="text" accesskey="1" name="lname"  class='requiredx' required placeholder='Last Name'/></td>
				   </tr>
       <tr>
                   <td><span class="style2"><FONT size='3'  COLOR="">Employee Id_card</em></span></td>
                   <td><input title="card" type="text" accesskey="1" name="ID_Card"  class='requiredx' size="16"required placeholder='ID Number' value=""/></td>
      </tr>
	  <tr>

                    <td height="27">Gender:</span></td>
                  
                    <td height="33"><label>
                      <select name="gender" id="fu">
					 
                        <option value="Male">Male</option>
						 <option value="Female">Female</option>
                    </select>
                    </label></td>
      </tr>
				 <tr>
                   <td><span class="style2"><FONT size='3'  COLOR="">Email</em></span></td>
                   <td><input title="Name" type="text" accesskey="1" name="Email"  class='requiredx' required placeholder='Email'/></td>
                </tr>
				 <tr>
                   <td><span class="style2"><FONT size='3'  COLOR="">Phone Number:</em></span></td>
                   <td><input title="Phone" type="int" accesskey="1"  name="phone" required  placeholder='Phone Number'/></td>
                </tr>
				 
				    <tr>
                <td height="27">Post:</span></td>
                  
                    <td height="33"><label>
                      <select name="post" id="fu">
					  <option>--------</option>
					  
					  <?php 
					  
					  $sql=mysqli_query($conn, "SELECT * FROM positions");
					  while($row=mysqli_fetch_array($sql)){
						  echo "<option value='".$row['post_id']."'>".$row['post_name']."</option>";
					  }
					  ?>
                        
						 
                    </select>
                    </label></td>
      </tr>
	  

<TR VALIGN="TOP">
<TD   onMouseOver="return dohelp('Enter in the format (YYYY-MON-DD) for example - 1988-SEP-2');" onMouseOut="nd(); return true;" ><B>Starting Date: </B></TD>
<TD ALIGN="LEFT">

<input type="text" onBlur="DateCheck(document.ds_conclass.value, document.ds_conclass)" onChange="forceUpper(this);" onclick="ds_sh(this);" name="stat_date" id="txtBirthDate" class="requiredx" required placeholder='Starting Date'required/>
<A HREF="#" onClick=" window.dateField=document.ds_conclass.value; calendar = window.open('w01pkg.call_cal','cal', 'WIDTH=250,HEIGHT=250'); return false"></A>

</TD></TR>
<TR VALIGN="TOP">
<TD   onMouseOver="return dohelp('Enter in the format (YYYY-MON-DD) for example - 1988-SEP-2');" onMouseOut="nd(); return true;" ><B>Ending Date: </B></TD>
<TD ALIGN="LEFT">

<input type="text" onBlur="DateCheck(document.ds_conclass.value, document.ds_conclass)" onChange="forceUpper(this);" onclick="ds_sh(this);" name="end_date" id="txtBirthDate" class="requiredx" placeholder='Ending Date'required/>
<A HREF="#" onClick=" window.dateField=document.ds_conclass.value; calendar = window.open('w01pkg.call_cal','cal', 'WIDTH=250,HEIGHT=250'); return false"></A>

</TD></TR>
<TR VALIGN="TOP">
<TD   onMouseOver="return dohelp('Enter in the format (YYYY-MON-DD) for example - 1988-SEP-2');" onMouseOut="nd(); return true;" ><B>Date of Birth: </B></TD>
<TD ALIGN="LEFT">

<input type="text" onBlur="DateCheck(document.ds_conclass.value, document.ds_conclass)" onChange="forceUpper(this);" onclick="ds_sh(this);" name="Birth" id="txtBirthDate" class="requiredx" required placeholder='Date of birth'required/>
<A HREF="#" onClick=" window.dateField=document.ds_conclass.value; calendar = window.open('w01pkg.call_cal','cal', 'WIDTH=250,HEIGHT=250'); return false"></A>

</TD></TR>	  

				
				
     
				 
				 
				 <tr>
                   <td><span class="style2"><FONT size='3'  COLOR="3"><font color="white">Create your </font>User name:</em></span></td>
                   <td><input title="" type="text" accesskey="1" name="username" required  placeholder='User Name'/></td>
                </tr>
			          <tr>
                   <td><span class="style2"><FONT size='3'  COLOR="3"><font color="white">Create your </font>Pass word:</em></span></td>
                   <td><input title="Name" type="text" accesskey="1" name="password"  class='requiredx' required placeholder='Password'/></td>
                </tr>
				
				
				
	  			
				
				
</table>	
				
</td><td style="padding-left: 150px;">
				
<table>
				
				
 </span>
	  
	  
	  <tr>
        <td>Qualification:<div class="style16" id="Layer1"> 
          </td></div> 
				   <td>
				   
				   <label>
                      <select name="qualification" id="fu">
					  <option>--------</option>
					  
					  <?php 
					  
					  $sql=mysqli_query($conn, "SELECT * FROM qualifications");
					  while($row=mysqli_fetch_array($sql)){
						  echo "<option value='".$row['qual_id']."'>".$row['qual_name']."</option>";
					  }
					  ?>
                        
						 
                    </select>
                    </label>
				   
        </tr>
	  
	
				 <tr>
                   <td><span class="style2"><FONT size='3'  COLOR="">Date of Recruitment</em></span></td>
                   <td><input title="Name" type="text" accesskey="1" name="recruitDate"  class='requiredx' required placeholder='Date of Recruitment'/></td>
                </tr>
<tr>
                   <td><span class="style2"><FONT size='3'  COLOR="">Nationality</em></span></td>
                   <td><input title="Name" type="text" accesskey="1" name="nationality"   placeholder='Nationality'/></td>
                </tr>
				<tr>
                   <td><span class="style2"><FONT size='3'  COLOR="">Place of residance</em></span></td>
                   <td><input title="Name" type="text" accesskey="1" name="residancePlace"  class='requiredx' required placeholder='Place of residance'/></td>
				   </tr>
       <tr>
                   <td><span class="style2"><FONT size='3'  COLOR="">Photo</em></span></td>
                   <td><input title="card" type="file" accesskey="1" name="photo"  class='requiredx' size="16"required placeholder='ID Number' value=""/></td>
      </tr>
	  <tr>

                    <td height="27">CV:</span></td>
                  
                    <td>
					<input title="card" type="file" accesskey="1" name="cvFile"  class='requiredx' size="16"required placeholder='ID Number' value=""/>
                      </td>
      </tr>
				
				 <tr>
                   <td><span class="style2"><FONT size='3'  COLOR="">Gross salary:</em></span></td>
                   <td><input title="Phone" type="int" accesskey="1"  name="gsalary" required  placeholder='Gross salary'/></td>
                </tr>
				 
				    <tr>
                <td height="27">Status: </span></td>
                  
                    <td height="33"><label>
                      <input type="text" value="" name="status" placeholder="Status">
                    </label></td>
      </tr>
	  
<TR VALIGN="TOP">
<TD ><B>Father's Name: </B></TD>
<TD ALIGN="LEFT">

<input type="text" name="father"  required placeholder="Father's name"/>

</TD>
</TR>
<TR VALIGN="TOP">
<TD ><B>Mother's Name: </B></TD>
<TD ALIGN="LEFT">

<input type="text" name="mother"  required placeholder="Mother's name"/>

</TD>
</TR>
<TR VALIGN="TOP">
<TD ><B>No of Children: </B></TD>
<TD ALIGN="LEFT">

<input type="text" name="chiledno"  required placeholder="No of children"/>

</TD>
</TR>  

<TR VALIGN="TOP">
<TD ><B>Ansurance: </B></TD>
<TD ALIGN="LEFT">

<input type="text" name="ansurance"  required placeholder="Ansurance" />

</TD>
</TR>

<TR VALIGN="TOP">
<TD ><B>Basic Salary : </B></TD>
<TD ALIGN="LEFT">

<input type="text" name="bsalary"  required placeholder="Basic salary"/>

</TD>
</TR>
				
                <tr>
                  <td><span class="style2"><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  
                  <input type="submit" name="submit" value="Register"/>
                  <input type="reset" name="reset" value="Reset"/></center>
                  </span></td></tr><tr>
				  
                </tr> 
				
	  			
				
</table>		
</td></tr>
				
		
            </table>

        </form>
       
  </TD>

		