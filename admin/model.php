<?php
//including the database connection file
  include "../db_config.php";
  // include_once('dealer_upload.php');
   $query = "SELECT `mid`, `bid`, `model`, `status`, `date_created` FROM `tbl_model` WHERE STATUS=1";
   $result = mysqli_query($con,$query);

     
   if(isset($_GET["mid"]))
   {
   $mid=$_GET['mid'];
   // $sql=mysqli_query($con,"delete from dealer where id=$id");
   $result=mysqli_query($con,"UPDATE tbl_model SET status=0 where mid='$mid'");
   echo "<script>alert('Data deleted');</script>"; 
   echo "<script>window.location.href = 'model.php'</script>";   
   
   }
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/side_nav.css" type="text/css"/>
   	<link rel="stylesheet" href="css/brand_style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="js/sidenav.js"></script>
		<link rel="stylesheet" href="css/view.css" type="text/css"/>
	<title>Models</title>
</head>
<body>
	<div id="mySidenav" class="sidenav">
		<div class="logo">
			<img src="images/logo.png" alt="logo image" >
		</div>
		<a href="index.php" class="icon-a"><i class="fa fa-dashboard icons"></i>   Dashboard</a>
		<a href="customer_info.php"class="icon-a"><i class="fa fa-users icons"></i>   Customers</a>
		<a href="carlist.php"class="icon-a"><i class="fa fa-list icons"></i>   Car List</a>
		<a href="enquiries.php"class="icon-a"><i class="fa fa-shopping-bag icons"></i>   Enquiry</a>
		<a href="brand.php"class="icon-a"><i class=" fa fa-tasks icons"></i> Brands	</a>
		<a href="model.php"class="icon-a"><i class=" fa fa-tasks icons"></i> Models	</a>
		<!-- <button class="dropdown-btn fa fa-list-alt icons icon-a">  Service
		<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-container">
		<a href="#"> Add New Service</a>
		<a href="#"> View Service</a>
		</div> -->
		<!-- <a href="dealers_info.php"class="icon-a"><i class="fa fa-user icons"></i>   Dealers</a>
		<a href="dealers_info.php"class="icon-a"><i class="fa fa-user icons"></i>   Dealers</a> -->
		
		<button class="dropdown-btn fa fa-user icons icon-a"> Dealers
		<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-container">
			<a href="dealer_registration.php">Add New Dealer</a>
			<a href="dealers_info.php">View Dealer</a>
		</div>
		<a href="../logout.php">Logout</a>
	</div>

	<div class="head">
			<div class="col-div-6">
				<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >☰ Dashboard</span>
				<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >☰ Dashboard</span>
			</div>
		
			<div class="col-div-6">
				<div class="profile">

					<img src="images/user.png" class="pro-img" />
					<p>Admin <span>admin@gmail.com</span></p>
				</div>
			</div>
			<!-- <div class="clearfix"></div> -->
		</div>
	<div id="main">

		<!-- <div class="clearfix"></div> -->
		
		<div class="clar">
			
	
			<p>Available Models</p>
		</div>
					
					<!-- <div class="clearfix"></div> -->
				
			<center>

			<table border='1'> 
			<tr>
			<!-- <th>id</th> -->
			<th>Model Name/th>
			<th>Date</th>
			<!-- <th>Email</th>
			<th>Subject</th>
			<th>Date</th> -->

			
			<th style="width:15px">Action</th>
			<tr>

			<?php
			while($rows=mysqli_fetch_assoc($result))
			{
			?>
			<tr>
			<!-- <td><?php echo $rows['mid']; ?></td> -->
			<td><?php echo $rows['model']; ?></td>
			<td><?php echo $rows['date_created'] ; ?></td>
			<!-- <td><?php echo $rows['email']; ?></td>
			<td><?php echo $rows['subject']; ?></td>
			<td><?php echo $rows['date']; ?></td> -->
			<!-- echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";    -->
			<!-- <td>
					<a href="index.php?edit=<?php echo $rows['id']; ?>" class="edit_btn" >Edit</a>
				</td> -->
				<td>
					<a href="model.php?mid=<?php echo $rows['mid']; ?>" class="del_btn" onclick="return confirm('Do you really want to Delete ?');">Delete</a>
							
				</td>
			</tr>
			<?php
			}
			?>

			</table>
			</center>
					
				
	

		</div>
		<!-- <div class="cla_to">
			<p>Dealers List</p>
		</div>
		<center>

		<table border='1'> 
		<tr>
		<th>ID</th>
		<th>Brand</th>
		<th>Image</th>
		<th>Status</th>
		<th>Date</th>
		<th colspan="2">Action</th>

		<th style="width:15px">Action</th> -->
		<tr>
	
	</center>
	</table> 
		
		<!-- <div class="clearfix"></div> -->

		
	
	</div> 


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		var dropdown = document.getElementsByClassName("dropdown-btn");
			var i;

			for (i = 0; i < dropdown.length; i++) {
			dropdown[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var dropdownContent = this.nextElementSibling;
				if (dropdownContent.style.display === "block") {
				dropdownContent.style.display = "none";
				} else {
				dropdownContent.style.display = "block";
				}
			});
			}

	  $(".nav").click(function(){
	    $("#mySidenav").css('width','70px');
	    $("#main").css('margin-left','70px');
	    $(".logo").css('visibility', 'hidden');
	    $(".logo span").css('visibility', 'visible');
	     $(".logo span").css('margin-left', '-10px');
	     $(".icon-a").css('visibility', 'hidden');
	     $(".icons").css('visibility', 'visible');
	     $(".icons").css('margin-left', '-8px');
	      $(".nav").css('display','none');
	      $(".nav2").css('display','block');
	  });

	$(".nav2").click(function(){
	    $("#mySidenav").css('width','300px');
	    $("#main").css('margin-left','300px');
	    $(".logo").css('visibility', 'visible');
	     $(".icon-a").css('visibility', 'visible');
	     $(".icons").css('visibility', 'visible');
	     $(".nav").css('display','block');
	      $(".nav2").css('display','none');
	 });

	</script>
</body>
</html>