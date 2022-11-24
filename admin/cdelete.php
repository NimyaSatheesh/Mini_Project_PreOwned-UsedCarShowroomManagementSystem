
<?php
    // include "../db_config.php";
    $con = mysqli_connect("127.0.0.1","root","","car_showroom_db");
    //database connection  file
   
  	if(isset($_GET["login_id"]))
	{
	$login_id=$_GET['login_id'];
	// $sql=mysqli_query($con,"delete from dealer where id=$id");
	$result=mysqli_query($con,"UPDATE tbl_customer SET status=0 where login_id='$login_id'");
			mysqli_query ($con,"UPDATE users SET status=0 where login_id='$login_id'");
	echo "<script>alert('Data deleted');</script>"; 
	echo "<script>window.location.href = 'customer_info.php'</script>";   
	
	}
  
?>