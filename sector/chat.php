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
    
        <div class="content">
<?php
//We list his messages in a table
//Two queries are executes, one for the unread messages and another for read messages
$req1 = mysql_query("select * from pm WHERE user2read='no' and username='$userRow[email]'order by id desc");
$req2 = mysql_query("select * from pm WHERE user2read='yes' and username='$userRow[email]'order by id desc");
?>
<h2>List of reported question:</h2>
<h3>reported question with no answer(<?php echo intval(mysql_num_rows($req1)); ?>):</h3>
<table>
    <tr>
        <th class="title_cell">Title</th>
        <th>Nb. Replies</th>
        <th>Participant</th>
        <th>Date of creation</th>
    </tr>
<?php
//We display the list of unread messages
while($dn1 = mysql_fetch_array($req1))
{
?>
    <tr>
        <td class="left"><a href="read_pm.php?id=<?php echo $dn1['id']; ?>"><?php echo htmlentities($dn1['title'], ENT_QUOTES, 'UTF-8'); ?></a></td>
        <td><?php echo $dn1['reps'] +1; ?></td>
        <td><?php echo htmlentities($dn1['me'], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php echo date($dn1['timestamp']); ?></td>
    </tr>
<?php
}
//If there is no unread message we notice it
if(intval(mysql_num_rows($req1))==0)
{
?>
    <tr>
        <td colspan="4" class="center">You have no unanswered question.</td>
    </tr>
<?php
}
?>
</table>
<br />
<h3>answered question(<?php echo intval(mysql_num_rows($req2)); ?>):</h3>
<table>
    <tr>
        <th class="title_cell">Title</th>
        <th>Nb. Replies</th>
        <th>Participant</th>
        <th>Date or creation</th>
    </tr>
<?php
//We display the list of read messages
while($dn2 = mysql_fetch_array($req2))
{
?>
    <tr>
        <td class="left"><a href="read_pm.php?id=<?php echo $dn2['id']; ?>"><?php echo htmlentities($dn2['title'], ENT_QUOTES, 'UTF-8'); ?></a></td>
        <td><?php echo $dn2['reps']+1; ?></td>
        <td><?php echo htmlentities($dn2['me'], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php echo date($dn2['timestamp']); ?></td>
    </tr>
<?php
}
//If there is no read message we notice it
if(intval(mysql_num_rows($req2))==0)
{
?>
    <tr>
        <td colspan="4" class="center">You have no answered question.</td>
    </tr>
<?php
}
?>
</table>

</div>
</div>
</div></body>


