<?php
//including the database connection file
  include "../db_config.php";
 
  session_start();
   
  $querys = "SELECT `c_id`, `bid`, `mid`, `bname`, `price`, `title`, `description`, `model`, `kilometer`, `year`, `fuel`, `engine`, `transmission`, `color`,`Owners`, `image`, `date_created`, `date_updated` FROM `tbl_car` WHERE  status=1";
  $results = mysqli_query($con,$querys);
  
  $errors = array();


  
?>
<!Doctype HTML>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<link rel="stylesheet" href="css/side_nav.css" type="text/css"/>
    	<link rel="stylesheet" href="css/brand_style.css" type="text/css"/>
		<link rel="stylesheet" href="css/view.css" type="text/css"/>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="js/sidenav.js"></script>
		 <script type="text/javascript">
			// <!--function preventBack() {
			// 	window.history.forward(); 
			// }
			
			// setTimeout("preventBack()", 0);
			
			// window.onunload = function () { null };--
			function upload(){
				var bname = document.getElementById("bname").value;
				
				if(bname =='')
				{
					alert("please enter brand name.");
					return false;
				}
				var fuData = document.getElementById('bimage_path').value;
				if(fuData == "") 
					{
						alert("Please upload an image");
						document.getElementById('bimage_path').style.border="1px solid red";
						document.getElementById('bimage_path').focus();
						return false;
					} 
					else 
					{
						var Extension = fuData.slice((Math.max(0, fuData.lastIndexOf(".")) || Infinity) + 1);
						if (Extension == 'gif' || Extension == 'png' || Extension == 'bmp' || Extension == 'jpeg' || Extension == 'jpg') 
							{
								
							

							} 
							else 
							{
											// alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
								alert(Extension);
											// alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
								document.getElementById('bimage_path').style.border="1px solid red";
								document.getElementById('bimage_path').focus();
								return false;

							}
						}
				}
			


		</script> 
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
		
	
		<div class="cla_to">
			<p>Car List</p>
		</div>
        <div class="content">
                    <center>

                    <table border='2'> 
                    <tr>
                    <th> Title </th>
                    <th> Price </th>
                    <th> Bname </th>
                    <th> Model </th>
                    <th> Kilometer </th>
					<th> Fuel </th>
					<th> Engine </th>
					<th> Transmission </th>
					<th> Color </th>
					<th> Owners </th>
					<th> Date_created </th>
					<th> Date_updated </th>
                 
                    
                    <!-- <th style="width:15px">Action</th> -->
                    <tr>

                    <?php
                    while($rows=mysqli_fetch_assoc($results))
                    {
                    ?>
                    <tr>
                    
                    <td><?php echo $rows['title']; ?></td>
                    <td><?php echo $rows['price'] ; ?></td>
                    <td><?php echo $rows['bname']; ?></td>
                    <td><?php echo $rows['model']; ?></td>
                    <td><?php echo $rows['kilometer']; ?></td>
					<td><?php echo $rows['fuel']; ?></td>
					<td><?php echo $rows['engine']; ?></td>
					<td><?php echo $rows['transmission']; ?></td>
					<td><?php echo $rows['color']; ?></td>
					<td><?php echo $rows['Owners']; ?></td>
					<!-- <td><?php echo $rows['date']; ?></td> -->
					<td><?php echo $rows['date_created']; ?></td>
					<td><?php echo $rows['date_updated']; ?></td>
					

                  
                 
                    </tr>
                    <?php
                    }
                    ?>

                    </table>
                    </center>
                            
                    </div>
                </div>
		
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