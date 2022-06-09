<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';
  
  if( !isset($_SESSION['user']) ) {
    header("Location: index.php");
    exit;
  }
  // select loggedin users detail
  $res=mysql_query("SELECT * FROM admin WHERE id='".$_SESSION['user']."'");
  $userRow=mysql_fetch_array($res);
?><head>
    <link rel="stylesheet" href="2.css">
    <link rel="icon" type="image/jpg" href="../picprj/iconn.png" />
    <title>sector view</title>
     <style>.img a:hover 
  {
  	width:150px;
  	height:135px;
  	cursor: pointer;
  
  }
  body{
background-image:url(photos/background.jpg);
background-attachment: center;
}
     </style>


</head>
<body><div style="border:0px solid black;height:auto;width:1355px;position:absolute;margin-left:-9px;margin-top:-9px;">
	<div style="border:0px solid black;height:160px;width:1369px;position:absolute;margin-top:0px;background-image:url(photos/banner3.jpg);">

</div>

<div class="container"style="border:0px solid black;margin:0px;padding:2px;margin-top:158px;width:190px;position:absolute">
<nav>
		<ul class="menu">
      <li>
        <a href="view_question.php">
          
          <strong>view question</strong>
          
        </a>
      </li>
      <li>
        <a href="add.php">
          
          <strong>add question</strong>
          
        </a>
      </li>
     <?php require_once 'dbconnect.php';
$req1 = mysql_query('select * from appointment WHERE host=""'); 
$result=intval(mysql_num_rows($req1)); ?>
      <li>
        <a href="pending.php" class="active">
          
          <strong>pending appointment&nbsp;(<?php echo $result;?>)</strong>
          
        </a>
      </li>
      <li>
        <a href="answered.php" class="active">
          
          <strong>received appointment</strong>
          
        </a>
      </li>
      <li>
        <a href="sector.php">
          
          <strong>sector view</strong>
          
        </a>
      </li>
      <li>
        <a href="report.php">
          
          <strong>reports</strong>
          
        </a>
      </li><!--
      <li>
        <a href="search.php">
          
          <strong>search</strong>
          
        </a>
        
      </li>-->
      <li>
          <a href="logout.php?logout"name="logout">
          <strong>logout</strong><br><label><?php echo strtoupper($userRow['first'])."&nbsp".$userRow['last']; ?></label>
          
        </a>
      </li>
    </ul>
	</nav>
</div>
<div style="height:76.7px;width:86%;background-color:#2565a7;float:right;border-radius:1px;font-size:20px;padding-left:3px;margin-top:11.6%">
<a href="account.php">
<?php
echo '<img alt="profile" title="profile" src="data:image/jpeg;base64,'.base64_encode( $userRow['image'] ).'"style="width:20px;height:30px;border-radius:50%;margin-left:300px;height: 80px;margin-top: -1px;width:80px;float:right;"/>';?>
</a>
</div>
<div style="border:0px solid blue;height:500px;width:1158px;margin-left:158px;margin-top:233px;background: #FFF;padding-left:140px;border-radius:7px;">
<div class="img">
  <a target="_blank" href="sectors/gatumba.php">
  <img src="photos/7.png" alt="gatumba" width="110" height="90" />
  </a>
  <div class="desc">gatumba sector</div>
</div>
<div class="img">
  <a target="_blank" href="sectors/bwira.php">
  <img src="photos/7.png" alt="bwira" width="110" height="90" />
  </a>
  <div class="desc">bwira sector</div>
</div>
<div class="img">
  <a target="_blank" href="sectors/nyange.php">
  <img src="photos/7.png" alt="nyange" width="110" height="90" />
  </a>
  <div class="desc">nyange sector</div>
</div>
<div class="img">
  <a target="_blank" href="sectors/ngororero.php">
  <img src="photos/7.png" alt="ngororero" width="110" height="90" />
  </a>
  <div class="desc">ngororero sector</div>
</div>
<div class="img">
  <a target="_blank" href="sectors/ndaro.php">
  <img src="photos/7.png" alt="ndaro" width="110" height="90" />
  </a>
  <div class="desc">ndaro sector</div>
</div><br><br><br><br><br><br><br><br><br>
<div class="img">
  <a target="_blank" href="sectors/muhororo.php">
  <img src="photos/7.png" alt="muhororo" width="110" height="90" />
  </a>
  <div class="desc">muhororo sector</div>
</div>
<div class="img">
  <a target="_blank" href="sectors/sovu.php">
  <img src="photos/7.png" alt="sovu" width="110" height="90" />
  </a>
  <div class="desc">sovu sector</div>
</div>
<div class="img">
  <a target="_blank" href="sectors/muhanda.php">
  <img src="photos/7.png" alt="muhanda" width="110" height="90" />
  </a>
  <div class="desc">muhanda sector</div>
</div>
<div class="img">
  <a target="_blank" href="sectors/kabaya.php">
  <img src="photos/7.png" alt="kabaya" width="110" height="90" />
  </a>
  <div class="desc">kabaya sector</div>
</div><br><br><br><br><br><br><br><br><br>
<div class="img">
  <a target="_blank" href="sectors/kageyo.php">
  <img src="photos/7.png" alt="kageyo" width="110" height="90" />
  </a>
  <div class="desc">kageyo sector</div>
</div>
<div class="img">
  <a target="_blank" href="sectors/matyazo.php">
  <img src="photos/7.png" alt="matyazo" width="110" height="90" />
  </a>
  <div class="desc">matyazo sector</div>
</div>
<div class="img">
  <a target="_blank" href="sectors/kavumu.php">
  <img src="photos/7.png" alt="kavumu" width="110" height="90" />
  </a>
  <div class="desc">kavumu sector</div>
</div>
<div class="img">
  <a target="_blank" href="sectors/hindiro.php">
  <img src="photos/7.png" alt="hindiro" width="110" height="90" />
  </a>
  <div class="desc">hindiro sector</div>
</div>

</div></div></body>