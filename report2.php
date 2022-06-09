<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Trial/bootstrap4/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="padding-top: 20px;">
        <div class="jumbotron">
<form method="post" action="reportview.php">
    <div class="form-group">
    <label for="raport">Report as at:</label>
    <input type="text" id="datepicker1" name="date1" class="form-control" placeholder="">

</div>
<div class="form-group">
    <label for="dep">Register Report per:</label>
    <select name="choice1" class="form-control" id="selection">
         <option value="1" selected>Organization</option>
         <option value="2">Department</option>
         <option value="3">Qualification</option>
         <option value="4">User Type</option>
         <option value="5">Active or Inactive</option>
		 
    </select>
</div>
<div class="form-group">
    <label for="position">Select position:</label>
    <select name="choice2" id="sub_selection" class="form-control">
        
    </select>
</div>

<div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="form-check">
            <input class="form-check-input" name="gender" type="checkbox" value="" id="gender">
            <label class="form-check-label" for="gender">Gender</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="mother_name" type="checkbox" value="" id="mother">
            <label class="form-check-label" for="mother">Mother Name</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="father_name" type="checkbox" value="" id="father">
            <label class="form-check-label" for="father">Father Name</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="bank_name">
            <label class="form-check-label" for="bank_name">Bank Name</label>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-check">
            <input class="form-check-input" name="bd" type="checkbox" value="" id="bdate">
            <label class="form-check-label" for="bdate">Birth Date</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="mstatus" value="" id="mstatus">
            <label class="form-check-label" for="mstatus">Marital Status</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="qualif" type="checkbox" value="" id="qual">
            <label class="form-check-label" for="qual">Qualification</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="bank_no">
            <label class="form-check-label" for="bank_no">Bank Number</label>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-check">
            <input class="form-check-input" name="phone" type="checkbox" value="" id="phone">
            <label class="form-check-label" for="phone">Phone Number</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="email" type="checkbox" value="" id="email">
            <label class="form-check-label" for="email">Email</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="nchild" type="checkbox" value="" id="n_child">
            <label class="form-check-label" for="n_child">No Children</label>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-check">
            <input class="form-check-input" name="nationality" type="checkbox" value="" id="nationality">
            <label class="form-check-label" for="nationality">Nationality</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="pbirth" type="checkbox" value="" id="p_birth">
            <label class="form-check-label" for="p_birth">Place of Birth</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="insurance" type="checkbox" value="" id="assurance">
            <label class="form-check-label" for="assurance">Assurance</label>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-check">
            <input class="form-check-input" name="presidance" type="checkbox" value="" id="p_residence">
            <label class="form-check-label" for="p_residence">Residence Place</label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  name="em_name" type="checkbox" value="" id="em_name">
            <label class="form-check-label" for="em_name">Emergence Name</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="em_number" type="checkbox" value="" id="em_no">
            <label class="form-check-label" for="em_no">Emergence Number</label>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-check">
            <input class="form-check-input" name="position" type="checkbox" value="" id="position">
            <label class="form-check-label" for="position">Position</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="startd" type="checkbox" value="" id="s_date">
            <label class="form-check-label" for="s_date">Starting Date</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="endd" type="checkbox" value="" id="e_date">
            <label class="form-check-label" for="e_date">Ending Date</label>
        </div>
      </div>
     
      
    </div>
    <input type="submit" name="gene" class="btn btn-primary" value="Generte Report">
  </div>

    </form>
</div>
</div>
</body>
  <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>


<script>
$(document).ready(function(){
    $('#sub_selection').hide();
  var $dp1 = $("#datepicker1");
  $dp1.datepicker({
    changeYear: true,
    changeMonth: true,
	maxDate:0,
    dateFormat: "yy-m-dd",
    yearRange: "-100:+20",
  });
  
 $('#selection').on('change', function(){
 if($('#selection').val()==2){
 $("#sub_selection").show();
 // console.log("asdfassa");
	$.ajax({
		url: 'reportselection.php',
        method: 'POST',
		data: {data1: 2},
        success: function(response){
          $("#sub_selection").html(response);
        }
	
	})
  }else if($('#selection').val()==3){
	   $("#sub_selection").show();
	 $.ajax({
		url: 'reportselection.php',
        method: 'POST',
		data: {data2: 2},
        success: function(response){
          $("#sub_selection").html(response);
        }
	
	}) 
  }
  else if($('#selection').val()==4){
	   $("#sub_selection").show();
	 $.ajax({
		url: 'reportselection.php',
        method: 'POST',
		data: {data3: 2},
        success: function(response){
          $("#sub_selection").html(response);
        }
	
	}) 
  }
  else if($('#selection').val()==5){
	   $("#sub_selection").show(); 
       $("#sub_selection").html("<option>------- SELECT POSITION-----------</option>"
	   +"<option value='Active'>Active</option><option value=''>Inactive</option>");
  }else{
	  $("#sub_selection").hide(); 
  }
  
  
  });

  
  
 })
  
</script>
</html>