<?PHP

require "dbcon.php";

if(isset($_POST['data1'])){
	$query=mysqli_query($conn, "SELECT * FROM positions");
	echo "<option>------- SELECT POSITION-----------</option>";
	while($row=mysqli_fetch_array($query)){
		echo "<option value='".$row['post_id']."'>".$row['post_name']."</option>";
	}
}

elseif(isset($_POST['data2'])){
	$query=mysqli_query($conn, "SELECT * FROM qualifications");
	echo "<option>------- SELECT POSITION-----------</option>";
	while($row=mysqli_fetch_array($query)){
		echo "<option value='".$row['qual_id']."'>".$row['qual_name']."</option>";
	}
}

elseif(isset($_POST['data3'])){
	$query=mysqli_query($conn, "SELECT * FROM user_types");
	echo "<option>------- SELECT POSITION-----------</option>";
	while($row=mysqli_fetch_array($query)){
		echo "<option value='".$row['user_id']."'>".$row['user_type']."</option>";
	}
}





?>