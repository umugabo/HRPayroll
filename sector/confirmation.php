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

<head>
<link rel="stylesheet" href="styles/sty.css">
    <link rel="stylesheet" href="2.css">
    <title>report archive</title>
<style>
    .black_overlay{
        display: none;
        position: absolute;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 700px;
        background-color: black;
        z-index:1001;
        -moz-opacity: 0.8;
        opacity:.80;
        filter: alpha(opacity=80);
    }
    .white_content {
        display: none;
        position: absolute;
        top: 30%;
        left: 15%;
        width: 70%;
        height: auto;
        padding: 4px;
        border-radius: 7px;
        border: 8px solid orange;
        background-color: white;
        z-index:1302;
        overflow: auto;
    }
</style>
</head>
<body><div style="height:auto;width:1350px;position:fixed">
  <div style="height:160px;width:1350px;position:fixed;background-image:url(../picprj/banner3.jpg);margin-top:0px">
    </div>

<div class="container"style="margin:0px;padding:2px;margin-top:163px;width:180px;position:fixed">
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
      <li>
        <a href="generate_report.php" class="active">
          
          <strong>generate report</strong>
          
        </a>
      </li>
      <li>
        <a href="report_archive.php">
          
          <strong>report archive</strong>
          
        </a>
      </li>
      <li>
        <a href="chat.php">
          
          <strong>group discussion</strong>
          
        </a>
      </li>
      <li>
        <a href="account.php">
          
          <strong>account</strong>
          
        </a>
      </li>
      
      <li>
          <a href="logout.php?logout">
          <strong>logout</strong>
      <label><?php echo strtoupper($userRow['first']);?>&nbsp;<?php echo $userRow['last'];?></label>
              
        </a>
      </li>
    </ul>
  </nav>
</div>
<div style="width:86%;margin-top:12%;border:1px solid black;float:right;border-radius:6px;height:auto;">
    <?php
  $con=mysql_connect('localhost','root','');
mysql_select_db("dbtest");
$sql=mysql_query("select * from messages WHERE id='$id'");
$row=mysql_fetch_array($sql);
?>
<div style="border:1px solid green;width:300px"><form method="post"action="1.php">
Names:<?php echo $result['from_user'];?><br>
 REPLAY: <br><textarea name="reas"cols="30"rows="7"style="font-size:15px" name="answer"> </textarea><br>
   </form></div>
</div>
</div></body>
