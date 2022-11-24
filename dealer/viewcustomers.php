<?php
include "../db_config.php";
session_start();
$query=mysqli_query($con,"SELECT login_id, username FROM users");
$result=mysqli_query($con,"SELECT `image`,`login_id` FROM `dealer` where `email`='".$_SESSION['username']."'");
$image=$_SESSION['image'];  
$querys = "SELECT `cid`, `username`, `email`, `phone`, `password`, `status`, `user_type`, `date`, `login_id` FROM `tbl_customer` WHERE  status=1";
$results = mysqli_query($con,$querys);

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
    <!-- <link href="css/veh.css" rel="stylesheet" media="all"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/view.css" type="text/css"/>


    <title>Car73</title>

</head>
<body >
   
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
                    <a href="viewcustomers.php"  class="active">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Users</span>
                    </a>
                </li>
                <li>
                    <a href="managevehicle.php"
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
                    <center>

                    <table> 
                    <tr >
                    <th> Name </th>
                    <th> Email </th>
                    <th> Phone </th>
                    <th> Status </th>
                    <th> Date </th>
                   
        
                    <!-- <th colspan="2">Action</th> -->
                    
                    <!-- <th style="width:15px">Action</th> -->
                    <tr>

                    <?php
                    while($rows=mysqli_fetch_assoc($results))
                    {
                    ?>
                    <tr>
                    
                    <td><?php echo $rows['username']; ?></td>
                    <td><?php echo $rows['email'] ; ?></td>
                    <td><?php echo $rows['phone']; ?></td>
                    <td><?php echo $rows['status']; ?></td>
                    <td><?php echo $rows['date']; ?></td>
                  
                    <!-- echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";    -->
                    <!-- <td>
                            <a href="d_edit.php?c_id=<?php echo $rows['c_id']; ?>" class="edit_btn" >Edit</a>
                        </td>
                        <td>
                            <a href="delete.php?c_id=<?php echo $rows['c_id']; ?>" class="del_btn" onclick="return confirm('Do you really want to Delete ?');">Delete</a>
                                    
                        </td> -->
                    </tr>
                    <?php
                    }
                    ?>

                    </table>
                    </center>
                            
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