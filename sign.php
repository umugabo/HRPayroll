<?php ob_start();?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SULFO RWANDA INDUSTRIES-SIGN</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body>
<div id="container">
  <header>
	<div class="width">
    <img src="images/bannersamp.jpg" width="934" height="111" />
       	</div>
    </header>
    <nav>
	<div class="width">
  		  <ul>
        		<li class="start"><a href="index.php">HOME</a></li>
         	   	<li><a href="products.php">PRODUCTS</a></li>
          	  	<li class="end selected"><a href="sign.php">BOOKING</a></li>
                <li><a href="about.php">ABOUT US</a></li>
          	 	<li><a href="contact.php">CONTACT US</a></li>
        	</ul>
	</div>
    </nav>
    <div id="body" class="width">
        <section id="content">
	    <article> 
            <h3><a href="register.php" class="button">CREATE AN ACCOUNT</a></h3>
            <fieldset legend>
                <legend>Sign in for Booking the products</legend>
                <form action="" method="post">
                    <p><label for="uname">UserName</label>
                    <input name="uname" id="uname" value="" type="text" placeholder="enter your username" required/></p>
                    <p><label for="passw">Password</label>
                    <input name="password" id="password" value="" type="password" placeholder="enter your password" required/></p>
                    <p><input name="sign up" style="margin-left: 150px;" class="formbutton" value="SIGN IN" type="submit" /></p>
                </form>
</fieldset>  
<?php
              $user=$_POST['uname'];
			  $pass=$_POST['password'];
	
	$con=mysql_connect("localhost","root","");
	 mysql_select_db(sulfo,$con);
	 
	if ( $user!='' && $pass!='')
	{
$q=mysql_query("select * from users where username='$user' AND password='$pass' ",$con);
$row=mysql_num_rows($q);
if ($row==1)
{
	header('location:request.php');
	}
	else
	{
		echo "invalid username or password, please try again later!!!";
		}
	}
?>  
      		</article>
        </section>
        <aside class="sidebar">
           <ul>	
              <li class="bg">
                    <h4>Follow us on:</h4>
                    <ul>
                        <div>
                        <a href="http://www.youtube.com"><img src="images/yout.JPG" width="66" height="44" ></a>
                        <a href="http://www.facebook.com"><img src="images/fc.JPG" width="66" height="44" ></a>
                        <a href="http://www.twitter.com"><img src="images/twi.JPG" width="66" height="44"></a></li>
                        </div>                   
                    </ul>
                </li>
                <li class="bg">
                    <h4>Group-Cosmetics</h4>
                    <ul>
                        <li class="text">
                        	<p style="margin: 0;"><img src="images/Sulfo Rwanda Industries - Activities_files/Group-Cosemetics.gif" height="37%" width="100%"/></p>
                        </li>
                    </ul>
                </li>
                    </ul>
                </li>
            </ul>
        </aside>
    	<div class="clear"></div>
    </div>
    <footer>
        <div class="footer-content width">
            <ul>
 <h4>Social Media</h4></li>
                <a href="http://www.youtube.com"><img src="images/yout.JPG" width="66" height="44" ></a>
                        <a href="http://www.facebook.com"><img src="images/fc.JPG" width="66" height="44" ></a>
                        <a href="http://www.twitter.com"><img src="images/twi.JPG" width="66" height="44"></a><h4>Address</h4></li>
                                <li><a href="#" >KN 3 ST, Kigali, Rwanda</a></li>            </ul>
            <ul>
            	<li>
            	  <h4>Support and Help</h4></li>
                <li><a href="#">
                  <p>If you need more info or our support please send an email to support@sulfo.com and we will get back to you.</p></a></li></ul>
            <ul class="endfooter">
            	<li><h4>CONTACT US</h4></li>
                <li><a href="#">P.O BOX::90 kigali-rwanda
</a></li>
                <li><a href="#"> Phonel:(250)252573804
</a></li>
                <li><a href="#"> Fax :(250)252574573
                  
                  </a></li>
                <li><a href="#">E-mail:info@sulfo.com </a></li>
                <li><a href="#"></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="footer-bottom">
            <p>&copy; SULFO RWANDA INDUSTRIES-copyright 2016 </p>
         </div>
    </footer>
</div>
</body>
</html>