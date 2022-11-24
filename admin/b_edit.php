
<?php
// including the database connection file
include "../db_config.php";

if(isset($_POST['update']))
{   
    $bid = $_POST['bid'];
    
    $status=$_POST['status'];
	// $target_dir = $_POST["images/brand/"];
    // $age=$_POST['age'];
    // $email=$_POST['email'];     
        //updating the table
        $result = mysqli_query($con, "UPDATE tbl_brand SET bname='$bname',status='$status' WHERE bid=$bid");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: brand.php");
}
?>
<?php
//getting id from url
$bid = $_GET['bid'];

//selecting data associated with this particular id
$result = mysqli_query($con, "SELECT * FROM tbl_brand WHERE bid=$bid");

while($res = mysqli_fetch_array($result))
{
    $bname = $res['bname'];
    $status = $res['status'];
	// $target_dir=$res['bimage_path'];
    // $email = $res['email'];
}
?>
<html>
	<head>  
    <title>Edit Data</title>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<link rel="stylesheet" href="css/side_nav.css" type="text/css"/>
    	<!-- <link rel="stylesheet" href="css/brand_style.css" type="text/css"/> -->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="js/sidenav.js"></script>
		<style>
			td{
				color:rgb(43, 42, 54);
			}
		</style>
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
		<!-- <a href="index.php">Home</a> -->
		<br/><br/>
		
		<form name="form1" method="post" action="b_edit.php">
			<table border="1">
				<tr> 
					<td>Brand Name</td>
					<td><input type="text" name="bname" value="<?php echo $bname;?>"></td>
				</tr>
				<tr> 
					<td>status</td>
					<td><input type="text" name="status" value="<?php echo $status;?>"></td>
				</tr>
				<tr> 
					
						
						<!-- <input type="text" name="bimage_path" value="<?php echo $target_dir;?>"> -->
					
				</tr>
				<tr>
					<td><input type="hidden" name="bid" value=<?php echo $_GET['bid'];?>></td>
					<td><input type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>

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
</html