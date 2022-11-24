<?php
$con = mysqli_connect("127.0.0.1","root","","car_showroom_db");
$bid=$_POST["bid"];
		echo "<script>alert($bid)</script>";

	$result = mysqli_query($con,"SELECT * FROM tbl_model where bid=$bid");
?>
<option value="">Select Model</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
	<option value="<?php echo $row["mid"];?>"><?php echo $row["model"];?></option>
<?php
}
?>






	
 
