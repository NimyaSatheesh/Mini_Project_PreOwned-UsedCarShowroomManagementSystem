<?php
include "../db_config.php";
session_start();
$query=mysqli_query($con,"SELECT login_id, username FROM users");
$result=mysqli_query($con,"SELECT `image`,`login_id` FROM `dealer` where `email`='".$_SESSION['username']."'");
$image=$_SESSION['image'];  
$errors = array();
?>


<!-- $con = mysqli_connect("127.0.0.1","root","","car_showroom_db");
$query=mysqli_query($con,"SELECT login_id, username FROM users");
$result=mysqli_query($con,"SELECT `image`,`login_id` FROM `dealer` where `email`='".$_SESSION['username']."'");
$image=$_SESSION['image'];  
$errors = array();  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sidenav.css">
    <!-- <link href="css/table.css" rel="stylesheet" media="all"> -->
    <link href="css/veh.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Car73</title>
    <style>
         

            input[type=submit] {
              width: 20%;
              background-color: red;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }

            input[type=submit]:hover {
              background-color: indianred;
            }

            .validate{
                color: red;
            }
        </style>
        <script>
            function vehicleValid(){
                var fuData = document.getElementById('image').value;
				if(fuData == "") 
					{
						alert("Please upload an image");
						document.getElementById('image').style.border="1px solid red";
						document.getElementById('image').focus();
						return false;
					} 
					else 
					{
						var Extension = fuData.slice((Math.max(0, fuData.lastIndexOf(".")) || Infinity) + 1);
						if (Extension == 'gif' || Extension == 'png' || Extension == 'bmp' || Extension == 'jpeg' || Extension == 'jpg') 
							{
								
								// alert("sucess");
								// return true;
								// To Display
								// if (fuData.files && fuData.files[0]) {
								//     var reader = new FileReader();

								//     reader.onload = function(e) {
								//         $('#blah').attr('src', e.target.result);
								//     }

								//     reader.readAsDataURL(fuData.files[0]);
								// }

							} 
							else 
							{
											// alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
								alert(Extension);
											// alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
								document.getElementById('image').style.border="1px solid red";
								document.getElementById('image').focus();
								return false;

							}
						}
            }
        </script>
</head>
<body background="/opt/lampp/htdocs/usedcar_showroom_management/dealer/img/hero-bg.jpg">
   
    <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                  
                </div>
                <div class="col-lg-2">
                <div class="header__logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
                </div>  
                <div class="dropdown">
                        <button class="dropbtn">Account<i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-content">
                        <!-- <li><a href="dealer/profile_update.php">My Account</a></li>
                        <li><a href="#">My Booking</a></li> -->
                        <li><a href="http://localhost/usedcar_showroom_management/dealer/change_password.php">Change Password</a></li>
                        <li><a href="../logout.php">Logout</a></li>
                    </div>
                </div>
            </div> 
        
                                                
            

        </div>
        <!-- side navbar start -->
        <div class="sidebar">
            <div class="profile">
                <!-- <img src="https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg" alt="profile_picture">
                <h3>Anamika Roy</h3>
                <p>Designer</p> -->
                <?php
                $query = "SELECT `image`FROM dealer WHERE `email`='".$_SESSION['username']."'";
                $resul = mysqli_query($con,$query);
            
                while($rows=mysqli_fetch_assoc($resul))
                {
                ?>
                <img src="../admin/dealers_photo/<?php echo $rows['image']; ?>">
                <?php
                    }
                    ?>
                <?php                                        
                    if(isset($_SESSION['username']))
                    {
                        echo '<h3> '.$_SESSION['username'].' </h3>';                                                                                     
                    }
                ?>
            </div>
            <ul>
            <li>
                    <a href="index.php" >
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="enquiry.php">
                        <span class="icon"><i class="fas fa-bell"></i></span>
                        <span class="item">Enquiry</span>
                    </a>
                </li>
                <li>
                    <a href="viewcustomers.php">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Users</span>
                    </a>
                </li>
                <li>
                    <a href="managevehicle.php">
                        <span class="icon"><i class="fas fa-car-alt"></i></span>
                        <span class="item">Car List</span>
                    </a>
                </li>
                <li>
                    <a href="vehicleAdd.php" class="active">
                        <span class="icon"><i class="fas fa-car"></i></span>
                        <span class="item">Sale Car</span>
                    </a>
                </li>
                <li>
                    <a href="brand.php">
                        <span class="icon"><i class="fab fa-buromobelexperte"></i></span>
                        <span class="item">Brands</span>
                        
                    </a>
                </li>
                <!-- <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">Reports</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Settings</span>
                    </a>
                </li> -->
            </ul>
        </div>
        <div class="main" data-setbg="/opt/lampp/htdocs/usedcar_showroom_management/dealer/img/hero-bg.jpg">
        <div class="form_container">
        <!-- <h3>Add New Car Entries Here...</h3> -->
        <div class="container">
        <div class="content">
        <form method="POST" action="vehicleupload.php" onsubmit="return vehicleValid()" name="form" enctype="multipart/form-data">
            <div class="heading">
            <h2>Add New Car Entries Here...</h2>
            </div>
            <center>
                    <table>    
                    <div class="row row-space">
                    <tr> 
                            <div class="col-2">
                                
                                                
                                  <label class="label">Vehicle Brand</label>
                                
                                        <select class="input--style-4" style="margin-left: 40px;" name="brandtype" id="brandtype" required>
                                        <option selected disabled>Choose a Brand</option>
                                        <?php 
                                            $getbrandquery = "select * from tbl_brand";
                                            $getbrandresult = mysqli_query($con,$getbrandquery);    
                                            while($getbrandrow = mysqli_fetch_array($getbrandresult)){?>
                                            <option value="<?php echo $getbrandrow['bid']; ?>"><?php echo $getbrandrow['bname']; ?></option>
                                            <?php }
                                        ?>
                                        </select>

                                    <label class="label" style="margin-left: 40px;" >Vehicle Model</label>
                               
                                        <select class="input--style-4" style="margin-left: 40px;" name="vehiclemodel" id="vehiclemodel" required>
                                            <option selected disabled>Choose a Model</option>
                                        </select>
                                  
                            </div>
                         </tr>  
                        </div>
                        
                    </table>
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Price</span>
                            <input type="number" name="price" id="price" placeholder="Enter Price" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Title</span>
                            <input type="text" name="title" id="title" placeholder="Enter Title" required>
                        </div>
                      
                        <div class="input-box">
                            <span class="details">Kilometer</span>
                            <input type="number" name="kilometer" id="kilometer" placeholder="Enter Kilometer" required>
                        </div>
                        <div class="input-box">
                            <span class="details">year</span>
                            <input type="year" name="year" id="year" placeholder="Enter year" required>
                        </div>
                        <div class="input-box">
                            <span class="details">fuel</span>
                            <!-- <input type="text" name="" id="" placeholder="Enter your password" required> -->
                            <select name="fuel" id="fuel">
                                <option value="Petrol">Petrol</option>
                                <option value="Diesel">Diesel</option>
                                <option value="CNG">LPG</option>
                                <option value="Electric">Electric</option>
                               
                            </select>
                        </div>
                        <div class="input-box">
                            <span class="details">engine</span>
                            <input type="text" name="engine" id="engine" placeholder="Enter Engine" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Transmission</span>
                            <input type="text" name="transmission" id="transmission" placeholder="Enter transmission Type" required>
                        </div>
                                                
                        <div class="input-box">
                            <span class="details">color</span>
                            <input type="text" name="color" id="color" placeholder="Enter Color" required>
                        </div>
                         <!-- Discription -->
                         <div class="form-group">
                        <label for="choose-file" class="Details">Description</label>
                        <textarea class="form-input" name="description" id="description" rows="4" cols="80" style="height:auto" placeholder="Enter Description"></textarea>
                        </div> 
                        <div class="form-group">
                            <!-- <span class="details">condition</span>
                            <input type="text" name="condition" id="condition" placeholder="Enter Vehicle Condition" required> -->
                            <label for="choose-file" class="Details">Specifications</label>
                            <textarea class="form-input" name="specifications" id="specifications" rows="4" cols="80" style="height:auto" placeholder="Enter Vehicle Condition" required></textarea>
                        
                        </div>
                  
                        <div class="form-group">
                            <!-- <span class="details">features</span>
                            <input type="text" name="features" id="features" placeholder="Enter Features" required> -->
                            <label for="choose-file" class="Details">Features</label>
                            <textarea class="form-input" name="features" id="features" rows="4" cols="80" style="height:auto" placeholder="Enter Features" required></textarea>
                        
                        </div>
                      
                        <div class="input-box">
                            <span class="details">Owners</span>
                            <input type="text" name="Owners" id="Owners" placeholder="Confirm your password" required>

                        </div>
                                   
                        <div class="input-box">
                            <label for="file" class="details">Select Image File:</label>
                            <input type="file" name="image" id="image" required>
                        </div> 
                
                    </div>
                   
                    <input type="submit" class="Submitbutton" name="submit" id="submit" value="Continue" onclick="return vehicleValid()">
                    </center>
                </form>
            </div>
            </div>
           </div>
        </div>
        </div>
   
                                       
                                       
  <script>
       var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>
  			<script>
        $(document).ready(function() {
            $('#brandtype').on('change', function() {
              var bid = this.value;
                $.ajax({
                    url: "get_modelsubcat.php",
                    type: "POST",
                    data: {
                        bid: bid
                    },
                    cache: false,
                    success: function(dataResult){ 
                        $("#vehiclemodel").html(dataResult);
                    }
                });
            
            
             });
            });
    </script>
</body>
</html>