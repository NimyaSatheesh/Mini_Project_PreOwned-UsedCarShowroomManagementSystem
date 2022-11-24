<?php

// $error="";
// if(array_key_exists("submit",$_POST)){
    $con = mysqli_connect("127.0.0.1","root","","car_showroom_db");
	$query = mysqli_query($con,"SELECT * FROM `tbl_brand`");
	$row = mysqli_query($con,"SELECT * FROM `tbl_model`");



    session_start();
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $errors = array();
    // REGISTER USER
    if(isset($_POST['submit'])){
		
          // receive all input values from the form
        $brandtype = $_POST['brandtype'];
        // echo "$brandtype";
        $vehiclemodel= $_POST['vehiclemodel'];
		// echo "$vehiclemodel";
		$brandquery = mysqli_query($con,"SELECT bname FROM tbl_brand WHERE bid='$brandtype'");
		// $brandselectionqueryresult = mysqli_query($con, $brandquery);
		$veh = mysqli_fetch_assoc($brandquery);
		$bname = $veh['bname'];
		// echo "$bname";
		$modelselectionquery = mysqli_query($con,"SELECT model FROM tbl_model WHERE mid='$vehiclemodel'");
		// $modelselectionqueryresult = mysqli_query($con, $modelselectionquery);
		$mod = mysqli_fetch_assoc($modelselectionquery);
		$model = $mod['model'];

		// $bname=$_POST['bname'];
		
		// $model=$_POST['model'];
		// echo "$model";
        $price = $_POST['price'];
		// echo "$price";
        $title = $_POST['title'];
		// echo "$title";
        $kilometer = $_POST['kilometer'];
		// echo "$kilometer";
        $year = $_POST['year'];
		// echo "$year";
        $fuel = $_POST['fuel'];
		// echo "$fuel";
        $engine = $_POST['engine'];
		// echo "$engine";
        $transmission = $_POST['transmission'];
		// echo "$transmission";
        $color = $_POST['color'];
		// echo "$color";
		$specifications = $_POST['specifications'];
		// echo "$specifications";
        $description = $_POST['description'];
		// echo "$description";
        $features =$_POST['features'];
		// echo "$features";
        $Owners = $_POST['Owners'];
		// echo "$Owners";
        // $image= $_FILES['image']['name'];
        // $target_dir = "vehicle/";
		// echo "$image";
        // move_uploaded_file($_FILES["image"]["tmp_name"],$target_dir.$image);
		// move_uploaded_file($_FILES["image"]["tmp_name"],$target_dir.$image);
        
		$image= $_FILES['image']['name'];
		$target_dir = "img/vehicle/";
		$target_file = $target_dir . basename($_FILES["image"]["name"]);

		move_uploaded_file($_FILES["image"]["tmp_name"],$target_dir.$image);
				// echo "hi";
				// $result=mysqli_query($con,"INSERT INTO `tbl_brand`( `bname`, `bimage_path`) VALUES('$bname','$image')");
                $result=mysqli_query($con,"INSERT INTO `tbl_car`( `bid`, `mid`, `bname`, `price`, `title`, `description`, `model`, `kilometer`, 
						`year`, `fuel`, `engine`, `transmission`, `color`, `specifications`, `features`, `Owners`, `image`)  
							VALUES ('$vehiclemodel','$brandtype','$bname','$price','$title','$description','$model','$kilometer',
							'$year','$fuel','$engine','$transmission','$color','$specifications','$features','$Owners','$image')");
				if($result)
				{ 
					$_SESSION['msg']="Updation successfully completed";
					// echo '<script>alert("New Data Inserted Successfully")</script>';
					header("Location:http://localhost/usedcar_showroom_management/dealer/vehicleAdd.php");
					die();
					// echo "window.location.href='http://localhost/usedcar_showroom_management/admin/dealers_info.php'";
			
				}
				else
				{  
					// $errorMsg = "You are not Registred..Please Try again";
					// $_SESSION['msg'] = "Brand uccessfully Uploaded";
					echo"<script Type='text/javascript'>alert('Something went to wrong...!!!!')</script>";
					header("Location:http://localhost/usedcar_showroom_management/dealer/vehicleAdd.php");
					//  header('Location: dealer_registration.php');
					// echo mysqli_error($con);
					// die();
				}
			}
	// 	}
	// }
?>