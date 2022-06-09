<?php session_start(); ?>
</style>
</head>
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
<div style="border:0px solid blue; width:1304px;height:60px;margin-top:77px;padding:0px">
 <nav><center>
        <ul>
           
            <li><a href="index.html">Home</a></li>
        </ul>
    </nav></center>
		<?php
// mysqli connection variables
// Server name 
$hostname = "localhost";
// Name of the mysqli database
$database = "payroll";
// Login mysqli user
$username = "root";
// Login mysqli password
$password = "";

// Connection String
$conn = mysqli_connect($hostname, $username, $password);
// mysqli select database
mysqli_select_db($conn, $database);

//registering a login session


?>




<body>
<form action="login.php" method="post" name="login" >

<center><table border="0" width="500" height="200" id="table1"><tr><td><center><table border="0" id="login" cellpadding="0" cellspacing="0" width="300" height="300">

<tr>
<td>

<?php 


//if the login form is submitted
if (isset($_POST['SubmitButton'])) { // if form has been submitted

//if (!get_magic_quotes_gpc()) {
//$_POST['email'] = addslashes($_POST['email']);
//}

$password = $_POST['password'];
$username = $_POST['username'];
//$UserType=$_POST['function'];
$check = mysqli_query($conn, "SELECT * FROM employee where username = '$username'and password='$password' and user_type=1")or die(mysqli_error());


while($row=mysqli_fetch_array( $check )){
	$_SESSION['user_id']=$row['empl_id'];
	$_SESSION['username']=$row['username'];
}

echo "<div class=error>";

//Gives error if user dosen't exist
$check2 = mysqli_num_rows($check);

if ($check2 == 0) 
{
 echo '<b><font color="red" size="100"You entered Wrong UserName or Password!</font></b><br><a href=login.php>Wrong UserName.</a><br>';
} 
else  if ($password != $password)
{
echo '<font color="red"><b> Incorrect password! <br><a href=login.php> Wrong Password.</a><br></b></font>';
}
else
{


echo "<META http-equiv=refresh content=1;URL=admin.php>";

}

echo "</div>";

}

?>

<?php 
?>
<style type="text/css">
body { background:#ADD8E6;}
.style1 {font-weight: bold}
</style>
</head>


<body bgcolor="#99D5D3">
 <form name='login' method='post' action='login.php'/>
           <table style="font-style: italic;margin:auto;border:1px solid #000; width:800px; height:200px; border-radius:90px 90px 90px 90px ; color:red; background-color: green;   ">
                 <tr>
                   <td height="21" colspan="2" align='center'><h3>Admin Pane</td>
                 </tr>
                <tr>

                <tr>
                   <td align="right"><em><b><font color="#000000">USERNAME</font></b></em></td>
                   <td><input title="username" type="text" accesskey="1" name="username" placeholder="Enter Username here" size="25"required/ style="color="RED"></td>
                </tr>
                <tr>
                   <td align="right"><strong><font color="#000000">PASSWORD</font></strong></td>
                   <td><input title="password"  type="password" accesskey="2" name="password" placeholder="Enter Password here"size="25"required/ style="color="RED"></td>
                </tr>
				
                <tr>
                   <td><td><input name="SubmitButton"id="login" type="submit" class="formButton" value="LOGIN" >
				   <input name="submitButton"id="clear" type="submit" class="formButton" value="CLEAR" ></td>
                </tr>
            </table>

        </form>
				




</td></tr></table>
</body></html> 
