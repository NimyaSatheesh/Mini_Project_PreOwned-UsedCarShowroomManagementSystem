<?php
// initializing variables
$errors = array(); 
session_start();
// connect to the database
$con = mysqli_connect("127.0.0.1","root","","car_showroom_db");
// $username=$_GET['username'];   
// REGISTER USER
if (isset($_POST['changepassword'])) {

  // receive all input values from the form
  $pswold = $_POST['currPassword'];
  $psw1 = $_POST['newPassword'];
  $psw2 = $_POST['confirmPassword'];
  $encryptpwd = md5($pswold);
  echo"<script Type='text/javascript'>alert($encryptpwd)</script>";
  $encryptnewpwd = md5($psw1);
  $username=$_SESSION['username'];
  $email=$_SESSION['email'];
  echo"<script Type='text/javascript'>alert($encryptpwd)</script>";
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email

  $user_check_query = "SELECT * FROM  users WHERE username='$username'";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_array($result);
  //echo"<script Type='text/javascript'>alert($pswold)</script>";


  if ($user) { // if user exists
             //echo"<script Type='text/javascript'>alert($user['password'])</script>";

      if ($user['password'] == $encryptpwd) {

      $query="UPDATE  users set password='$encryptnewpwd' where username='$username'";
      $query1="UPDATE  tbl_customer set password='$encryptnewpwd' where email='$email'";

      $res = mysqli_query($con,$query);
             mysqli_query($con,$query1);
      
      if($res){
        echo"<script Type='text/javascript'>alert('Password Updated')</script>";
      }
      else{
        echo"<script Type='text/javascript'>alert('Something went error...Please try again!')</script>";
      } 
    }
    else{
      array_push($errors, "Password error");
    }
  }
} 
?>


 <?php  if (count($errors) > 0) : ?>
   <div class="error" style="color:red">
     <?php foreach ($errors as $error) : ?>
       <p><?php echo"<script Type='text/javascript'>alert('$error')</script>"; ?></p>
     <?php endforeach ?>
   </div>
 <?php  endif ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Car Dealership">
        <meta name="keywords" content="HVAC, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CAR 73</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/cust_style.css" type="text/css">
       

        <!-- <script type="text/javascript">
            function preventBack() {
                window.history.forward(); 
            }
            
            setTimeout("preventBack()", 0);
            
            window.onunload = function () { null };
        </script> -->
    <style>
          /* Style the submit button with a specific background color etc */
        button[type=submit] {
            background-color: red;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        /* When moving the mouse over the submit button, add a darker green color */
        button[type=submit]:hover {
            background-color: green;
        }
    </style>
    </head>
    <body>
         <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

  

    <!-- Header Section Begin -->
    <header class="header">
     
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav">
                         <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="car.php">Cars</a></li>
                                <!-- <li><a href="service.html">service</a></li> -->
                                <li><a href="brand.php">Brands</a>
                                
                                </li>
                             <!--    <li><a href="./about.html">About</a></li> -->
                                <!-- <li><a href="contact.php">Contact</a></li> -->
                                <li >
                                    
                                    <ul class="dropdown">
                                        <li><a href="booking.php">My Booking</a></li>
                                        <!-- <li><a href="#">My Account</a></li> -->
                                        <li><a href="changepassword.php">Change Password</a></li>
                                        <li><a href="../logout.php">Logout</a></li>
                                        
                                        <!-- <li><a href="#">service Details</a></li> -->
                                    </ul> 

            
                                    <?php                                               
                                        if(isset($_SESSION['username']))
                                        {
                                            echo '<p class="dropdown-btn fa fa-user icons icon-a js-acc-btn" style="color:red ;font-size:19px;"> '.$_SESSION['username'].' </p>';                                                                                     
                                        }
                                    ?>
                                    
                                    
                                    <i class="fa fa-caret-down"></i>
                                </li>
                            </ul>
                        </nav>
                       
                    </div>
                </div>
            </div>
            <!-- <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div> -->
        </div>
    </header>
    <!-- Header Section End -->

        <!-- ==========Change Password=============== -->
        <div class="cta">
        <div class="container">
            <div class="row1">
                <form method="POST" name="password" style="border:white; border-width:5px; border-style:solid;  box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.15);padding: 20px;justify-content: center;color=black;">
                
                <div>
                    <center>
                    <h2>Change Password</h2>
                    
                    
                    <table style="margin-top: 5%;">
                    <tr>
                        <div class="row">
                        <div class="col-md-6">
                        <td><label for="email"><b>Current Password</b></label></td>
                        <label style="display: none;" id="currentPassword"></label>
                        <td><div class="password-container">
                            <input style ="width: 500px;" type="password" placeholder="Enter Current Password" id="currPassword" name="currPassword" required>
                        <i class="fa fa-eye" id="togglePasswordOld"></i>
                    </div>
                    </td>
                        </div> 
                    </tr>

                    <tr>
                        <div class="col-md-6">
                        <td><label for="psw"><b>New Password</b></label></td>
                        <label style="display: none;" id="newPassword"></label>
                        <td>
                            <div class="password-container">
                            <input style ="width: 500px;" type="password" placeholder="Enter New Password" id="newPwd" name="newPassword" required>
                            <i class="fa fa-eye" id="togglePasswordNew"></i>
                            </div>
                        </td>
                        </div>
                    </tr>     
                    </div>

                    <tr>
                    <td>
                        <div class="col-md-6">
                        <label for="psw"><b>Confirm Password</b></label>
                        <label style="display: none;" id="cPassword"></label>
                        <td>
                            <div class="password-container">
                            <input style ="width: 500px;" type="password" placeholder="Confirm New Password" id="confirmNewPassword" name="confirmPassword" required>
                            <i class="fa fa-eye" id="togglePasswordNewConfirm"></i>
                        </div>
                        </td>
                        </div>
                    </td>
                    </tr>

                    
                    </table>
                    </center>
                    <div class="finish"> 
                    <a href="http://localhost/usedcar_showroom_management/customer/index.php" style="margin: top 50px; margin-left: 30%;"> Back to home</a>

                <button type="submit" class="Submitbutton" name="changepassword" style="margin-right: 30%; width: 15%";>    Update</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>