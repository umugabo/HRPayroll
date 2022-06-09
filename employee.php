<?php session_start(); ?>
<?php

require 'dbcon.php';

if(isset($_POST['send'])){
	$typeid=$_POST['typeid'];
	$emid=$_POST['emid'];
	$type=$_POST['type'];
	$startdate=$_POST['startdate'];
	$enddate=$_POST['enddate'];
	$reason=$_POST['reason'];
	$query=mysqli_query($conn,"INSERT INTO `emp_leave`(`em_id`, `typeid`, `leave_type`, `start_date`, `end_date`, `reason`) VALUES ('$emid', '$type', '$typeid', '$startdate', '$enddate', '$reason')");
	if($query==True){
		echo "<script>alert('application is done')</script>";
	}
}

?>

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="Trial/bootstrap4/css/bootstrap.min.css">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
<title>ON & ASssociate Ltd</title>
<link rel="icon" href="photo/log.jpg"width="" type="image/x-icon">
</head>
<body background="#BCBCBC" id="body">
<TABLE width='1198'  align="center"><TR><TD>
  <div style="border:1px solid green; width:1304px;height:auto;margin-left:20px;margin-top:-10px;">
<div style="border:0px solid black;color:black width:1300px;height:100px;margin:0px;" class="banner">
<img src="photo/log.jpg"height="174"width="1304"></div><body>
<div style="border:0px solid blue; width:1304px;height:60px;margin-top:77px;padding:0px">
 <nav></center>
<body background="#BCBCBC" id="body"><TABLE width='1198' bgcolor='#EAEAEA' align="center">
<TR>
	<TD align='center'><?php include'link/emplink.php';?></TD>
</TR>
<TR>
<TD>
	<table width="1251" height="200" border='0' align="center" bgcolor="#666666" id="table" name="container">
	<tr>
		<td valign="top">
		
		          <?php 
include'dbcon.php';

$result = mysqli_query($conn, "SELECT f_name, photo FROM employee WHERE empl_id=".$_SESSION['user_id']);
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysqli_num_fields($result);

echo "<center><font color=''><h2>WELCOME TO Employee PAGE</h2></font></center>";
// printing table headers
echo '<center><table cellpadding="0" bgcolor="" cellspacing="0" id="resultTable" border="0" width="150" height="150"><thead><tr class="record"><th> </th><th>  </th></center>';
$count=0;
// printing table rows
while($row = mysqli_fetch_array($result))
{
	$count++;
	 //$status='waiting';
 ?>
					<tr>
	
					<img src="photo/<?php echo $row['photo']?>"height="94"width="250">
					
					<td align="center"><?php echo $row['f_name']?></td>
					
					 
                    
                    <?php  }
echo '</table>';
mysqli_free_result($result);
//echo '<FONT SIZE="4" COLOR="white">Total Amount:&nbsp;<b>'. $lname.'&nbsp; Frws</b></font>';
?>
		
		
		
		
		<h2 align="center" class="style6"><font color="blue">This Page Allows an employee to request an Advance using this system.
		<br>And he view all Advances requested.</font></h3> 
		<h2 align="center" class="style3"><span class="style7"><font color="#000066"> We wish  all the best to ON & ASSOCIATES LTD 
		</font><font color="#000066"></font></span></h3></td>
 </font></TD>
	
	</TR>
	</TABLE>
	</td>
	
</TR>
</TABLE>

<div class="modal fade" id="appmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">Leave Application</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form method="post" id="leaveapply" enctype="multipart/form-data">
                        <div class="modal-body">
                            
                            <div class="form-group">
                                <label>Employee</label>
                                <select class=" form-control custom-select selectedEmployeeID"  tabindex="1" name="emid" required>
                                    <option value="<?php echo $_SESSION['user_id']; ?>"><?php echo $_SESSION['username']; ?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Leave Type</label>
                                <select class="form-control custom-select assignleave"  tabindex="1" name="typeid" id="leavetype" required>
                                    <option value="">Select Here..</option>
                                    <?php $query=mysqli_query($conn,"SELECT * FROM leave_types"); 
									while($row=mysqli_fetch_array($query)){
										echo '<option value="'.$row['type_id'].'">'.$row['name'].'</option>';
									}
									
									?>

                                    

                                    
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Leave Duration</label><br>
                                <input name="type" type="radio" id="radio_2" data-value="Full" class="type" value="Full Day">
                                <label for="radio_2">Full Day</label>
                                <input name="type" type="radio" class="with-gap duration" id="radio_3" data-value="More" value="More than One day">
                                <label for="radio_3">Above a Day</label>
                            </div>
                            <div class="form-group">
                                <label class="control-label" id="hourlyFix">Date</label>
                                <input type="date" name="startdate" class="form-control" id="recipient-name1" required>
                            </div>
                            <div class="form-group" id="enddate" style="display:none">
                                <label class="control-label">End Date</label>
                                <input type="date" name="enddate" class="form-control" id="recipient-name1">
                            </div>

                            
                            <div class="form-group">
                                <label class="control-label">Reason</label>
                                <textarea class="form-control" name="reason" id="message-text1" required minlength="10"></textarea>                                                
                            </div>
                            
                        </div>
                        
                        <div class="modal-footer">
                            <input type="hidden" name="id" class="form-control" id="recipient-name1" required>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="send" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</center
      
		<?php include"footer.php";?>
	</body>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	 <script>
                        $(document).ready(function () {
                            $('#leaveapply input').on('change', function(e) {
                                e.preventDefault(e);

                                // Get the record's ID via attribute  
                                var duration = $('input[name=type]:checked', '#leaveapply').attr('data-value');

                                if(duration =='Half'){
                                    $('#enddate').hide();
                                    $('#hourlyFix').text('Date');
                                    $('#hourAmount').show();
                                }
                                else if(duration =='Full'){
                                    $('#enddate').hide();  
                                    $('#hourAmount').hide();  
                                    $('#hourlyFix').text('Start date');  
                                }
                                else if(duration =='More'){
                                    $('#enddate').show();
                                    $('#hourAmount').hide();
                                }
                            });
                        }); 
                        </script>
</html>