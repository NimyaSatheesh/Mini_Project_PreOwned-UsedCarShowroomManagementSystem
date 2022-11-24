<?php
include "../db_config.php";
session_start();
$uuuu=$_SESSION['username'];
if(!isset($uuuu)){
    session_destroy();
    header('location:../Login.php');
}
$query=mysqli_query($con,"SELECT login_id, username FROM users");
$result=mysqli_query($con,"SELECT `image`,`login_id` FROM `dealer` where `email`='".$_SESSION['username']."'");
$image=$_SESSION['image'];  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sidenav.css">
    <script>
        function preventBack() {
				window.history.forward(); 
			}
			
			setTimeout("preventBack()", 0);
			
			window.onunload = function () { null };
    </script>
</head>
<body style="background-image:url('img/hero-bg.jpg')">
   
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
                        <button class="dropbtn" >Account<i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-content">
                        <!-- <li><a href="dealer/profile_update.php">My Account</a></li>
                        <li><a href="#">My Booking</a></li> -->
                        <li><a href="http://localhost/usedcar_showroom_management/dealer/change_password.php">Change Password</a></li>
                        <li><a href="../logout.php">Logout</a></li>
                        </div>
                    </div>
                <!-- <li >
                                    
                    <ul class="dropdown">
                        <li><a href="dealer/profile_update.php">My Account</a></li>
                        <li><a href="http://localhost/usedcar_showroom_management/dealer/change_password.php">Change Password</a></li>
                        <li><a href="./logout.php">Logout</a></li> -->
                        <!-- <li><a href="#">service Details</a></li> -->
                    <!-- </ul> 
                </li> -->
            </div>
             
        </div>
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
                    <a href="#" class="active">
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
                    <a href="vehicleAdd.php">
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
</body>
</html>