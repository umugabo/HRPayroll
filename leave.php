



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
<body background="#BCBCBC" id="body">
<TABLE width='1198'  align="center"><TR><TD>
  <div style="border:1px solid green; width:1304px;height:auto;margin-left:20px;margin-top:-10px;">
<div style="border:0px solid black;color:black width:1300px;height:100px;margin:0px;" class="banner">
<img src="photo/log.jpg"height="174"width="1304"></div><body>
<div style="border:0px solid blue; width:1304px;height:60px;margin-top:77px;position:fixed;padding:0px">
 <nav></center>
<body background="#BCBCBC" id="body"><TABLE width='1198' bgcolor='#EAEAEA' align="center">
<TR>
	<TD align='center'><?php include'link/emplink.php';?></TD>
</TR>
<TR>
  <TD >
	<TABLE width='1151' border='0'>
	<tr>
		
	  <TD width="758">
	  <?php


	  // connections
		  require_once('dbcon.php');
		  if(isset($_REQUEST['submit']))
		  {
		$st="Active";
		  $query=("CREATE TABLE message(Empl_code,fname,oname,lname,Empl_Id,Email,phone,post,message");
		   $query="INSERT INTO message(Empl_code,fname,oname,lname,Empl_Id,Email,phone,post,message)VALUES ('$_POST[Empl_code]','$_POST[fname]','$_POST[oname]','$_POST[lname]','$_POST[Empl_Id]','$_POST[Email]','$_POST[phone]','$_POST[post]','$_POST[message]')";
		   $insert=mysql_query($query);
		   if(!$insert)
		   {
		   echo '<script>alert("Your Message has Not Sent! error occurs during insertion");
				window.location.href="leave.php"</script>';
		   }
		   else
		   {
		   echo '<script>alert("Your Message has been Received Successfully!!!!");
				window.location.href="employee.php"</script>';
		   }
		   }
?>


</script>



<form name='login' method='post' action='<?php echo $_SERVER['PHP_SELF'];?>'onsubmit="return validateForm()"/>

  <tr>
    <td class="style30"><table width="100" border="0.5" align="center">
	<tr>
        <td><span class="style31">EMPLOYEE CODE</span></td>
      <td><font size="4">
        <input type="code" name="Empl_code" required class='requiredx' required placeholder='Code' />
        </font></td>
    </tr>
	
      <tr><td width="357">
        <span class="style31">FIRST NAME</span></td>
      <td width="283">
        <input title="First Name" type="text" accesskey="1" name="fname" class='requiredx' required placeholder='FIRST NAME'/>
        </font></td>
    </tr>
      
	    <tr>
        <td><span class="style31">Other NAME</span></td>
      <td><font size="4">
        <input title="Last Name" type="text" accesskey="1" name="oname"  placeholder='Other NAME'/>
        </font></td>
    </tr>
	
      <tr>
        <td><span class="style31">LASTNAME</span></td>
      <td><font size="4">
        <input title="Last Name" type="text" accesskey="1" name="lname" class='requiredx' required placeholder='LAST NAME'/>
        </font></td>
    </tr>
      
	  <tr>
        <td><span class="style31">EMPL_ID</span></td>
      <td><font size="4">
        <input title="ID_Card" type="text" accesskey="10" name="Empl_Id" required  placeholder='ID_Card'/>
        </font></td>
    </tr>
	  
      <tr>
        <td><span class="style31">EMAIL</span></td>
      <td><font size="4">
        <input title="Email" type="text" accesskey="20" name="Email" required  placeholder='Email'/>
        </font></td>
    </tr>
	<tr>
        <td><span class="style31">Phone</span></td>
      <td><font size="4">
        <input title="phone" type="text" accesskey="10" name="phone" required  placeholder='Phone'/>
        </font></td>
    </tr>
			    <tr>
                <td height="27">Post:</span></td>
                  
                    <td height="33"><label>
                      <select name="post" id="fu">
					  <option>--------</option>
                        <option>HR</option>
						 <option>IT</option>
						 <option>Auditor</option>
						 
                    </select>
                    </label></td>
      </tr>
	
      <tr>
        <td><span class="style32">LEAVE YOUR FEEDBACK:</span></td>
      <td><font size="4">
        <textarea name='message' name="message" cols='30' rows='3'></textarea>
        </font></td>
    </tr>

      <tr>
        <td>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="submit" name="submit" value="SEND"/>
          <input type="reset" name="reset" value="Reset"/>
          </span></td>
  <tr><td><a  href="index.php"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 </tr>
  </table></tr>
            </table>
          </div>
	    </tr>
	    <div align="center">
	      </p>
        </div>
	    <p><FONT size='4' COLOR="">
  </form><tr>
  </font></p>
</body>
</html></TD>
	</TR>
	</TABLE></TD>
</TR>

</TABLE>

</center>
      
	</div>

	</body>
	 
</html>