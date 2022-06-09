<?php 
ob_start();
include('dbconnect.php');
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['edit']))
  {
  $ufn=$_POST['f_name'];
  $uln=$_POST['l_name'];
  $usec=$_POST['c_sector'];
  $ucell=$_POST['c_cell'];
  $uid=$_POST['c_identity'];
  $structure=$_POST['c_question'];
  $conclusion=$_POST['conclusion'];
  $nb=$_POST['nb'];
  $updated=mysql_query("UPDATE sectorquestion SET 
    ufn='$ufn', uln='$uln', usec='$usec', ucell='$ucell', uid='$uid', structure='$structure', conclusion='$conclusion', nb='$nb' WHERE id='$id'")or die();
  if($updated)
  {
  $msg="Successfully Updated!!";
  header('Location:view_question.php');
  }
  else
  {
     header("location:edit.php");    
  }
}
}
ob_end_flush();
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit form</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">
  <link rel="icon" type="image/jpg" href="../picprj/iconn.png" />
  <link rel="stylesheet" href="styles/sty.css">
<style type="text/css">
body{
background-image:url(photos/background.jpg);
background-attachment: center;
}
div
{
  color: #fff;
  font-size: 20px;
  margin-left: 200px;
  padding-left: 50px;
  background-color: #333;
  width: 1000px;
  height: 850px;
  }</style>
</head>

<body>
  <div>
<?php 
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $getselect=mysql_query("SELECT * FROM sectorquestion WHERE id='$id'");
  while($profile=mysql_fetch_array($getselect))
  {
  	?>
<form action="" method="post" enctype="multipart/form-data" name="edit">

	<fieldset style="width:50px;"><legend><strong>citizen address</strong></legend>first name<br>
<input type="text" name="f_name" placeholder="first name"class="ed"value="<?php echo $profile[ufn]; ?>" required /><br>last name<br>
	
	<input type="text" name="l_name" placeholder="last Name"class="ed"value="<?php echo $profile[uln]; ?>" required /><br>sector<br>

	<input type="phone" name="c_sector" placeholder="sector"class="ed"value="<?php echo $profile[usec]; ?>" required /><br>cell<br>

	<input type="text" name="c_cell" placeholder="cell "class="ed"value="<?php echo $profile[ucell]; ?>" required /><br>identification number
	<br>

	<input type="text" name="c_identity" placeholder="id "class="ed"value="<?php echo $profile[uid]; ?>" required /><br>
   </fieldset>

<fieldset style="width:920px;align:center;"><legend><strong>structure of question</strong></legend>
<textarea wrap="virtual"cols="40"rows="10"placeholder="structure of question"class="textarea"name="c_question"><?php echo $profile['structure']; ?></textarea>

<textarea wrap="virtual"cols="40"rows="10"placeholder="conclusion"class="textarea"name="conclusion"><?php echo $profile['conclusion']; ?></textarea>

<textarea wrap="virtual"cols="40"rows="10"placeholder="N.B"class="textarea"name="nb"><?php echo $profile['nb']; ?></textarea>
   </fieldset>
</td></tr>	
<button type="submit" name="edit"id="button11">up date</button><button type="reset" name="btn-reset"id="button11">clear all</button>
 </form>

<?php } } ?>
</div>
</body>
</html>