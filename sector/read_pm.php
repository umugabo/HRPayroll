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
include('config.php');
?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        </head>
    <body>
        
<?php
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['send']))
  {
  $message=$_POST['message'];
  $updated=mysql_query("UPDATE pm SET 
        user2read='yes', replays='$message'WHERE id='$id'")or die();

}
}
//We get the list of the messages
$req2 = mysql_query('select * from pm where id="'.$id.'" ');
//We check if the form has been sent

//We display the messages
?>
<div class="content">
<h1><?php echo $dn1['title']; ?></h1>
<table class="messages_table">
    <tr>
        <th class="author">User</th>
        <th>Message</th>
    </tr>
<?php
while($dn2 = mysql_fetch_array($req2))
{
?>
    <tr>
        <td class="author center">
        <br /><?php echo $dn2['me']; ?></td>
        <td class="left"><div class="date">Sent: <?php echo date($dn2['timestamp']); ?></div>
        <?php echo $dn2['message']; ?></td>
    </tr>
<?php
}
//We display the reply form
?>
</table><br />

<div class="center">
    <form action="read_pm.php?id=<?php echo $id; ?>" method="post">
        <label for="message" class="center"><h2>Reply</h2></label><br />
        <textarea cols="40" rows="5" name="message" id="message"></textarea><br />
        <input type="submit" value="Send" name="send" />
    </form>
</div>
</div>
</div></body>


