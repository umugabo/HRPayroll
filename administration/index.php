<?php
 ob_start();
 session_start();
 ?>
 <style type="text/css">

button{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#e67e22;
padding:5px;
margin-left: 2px;
cursor: pointer;
width: 98px;
font-size: 18px;
font-color:#017572;
background-color:#e67e22;
height: 34px;
margin-top: 4px;
}
body{
    background-image: url(photos/background.jpg);
    padding-tpo: 40px;
    padding-bottom: 40px;
    opacity: 19;
    height: 400px;
    opacity: 17;
}
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: auto;
    color: #e67e22;
}

.form-signin .form-control
{
    position: relative;
    height: auto;
    -wekit-box-sizing:border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 10px;
    font-size: 16px;
    width: 300px;
}
.form-signig .form-signin-header,.form-signin .checkbox{
border-color:#e67e22;
    margin-bottom: 10px;
}

h2{
    text-align: center;
    color:#FF0000;
}
label{
    font-size: 26px;
    color: green;
}
h3
{
    font-family: sans-serif;
    font-variant: small-caps;
    color: #0099FF;
    
}

</style>
<title>log in</title>
<?php
    ob_start();
    session_start();
    mysql_connect("localhost","root","");
    mysql_select_db("dbtest");
    
    // it will never let you open index(login) page if session is set
    if ( isset($_SESSION['user'])!="" ) {
        header("Location: view_question.php");
        exit;
    }
    
    if( isset($_POST['login']) ) {  
        
        $email = $_POST['email'];
        $upass = $_POST['password'];
        
        $email = strip_tags(trim($email));
        $upass = strip_tags(trim($upass));
        
        //$password = hash('sha256', $upass); // password hashing using SHA256
        
        $res=mysql_query("SELECT * FROM admin WHERE email='$email'");
        
        $row=mysql_fetch_array($res);
        
        $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
        
        if( $count == 1 && $row['Password']==$password ) {
            $_SESSION['user'] = $row['id'];
            header("Location: view_question.php");
        } else {
            $msg = "Wrong Credentials, Try again...";
        }
    }
?>
</div>
<div class="container"style="margin-top:130px;width:400px;border:2px solid red;margin-left:400px;background:#fff;">
<form class="form-signin"role="form"action=""METHOD="POST">
<h2 class="form-signin-header"><?php echo $msg; ?></h2>
<label>district email</label>
<input type="email"class="form-control"name="email"placeholder="enter your district email"required autofocus><br>
<label>password</label>
<input type="password"class="form-control"name="password"placeholder="enter password"required><br>
<button name="login"class="button1"value="log in">log in</button>
<h3>have no account?
<a href="regist.html"style="text-decolation:none;">Sign Up here</button></a></h3>
</form>
</div>
