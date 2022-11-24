<?php
    $con = mysqli_connect("127.0.0.1","root","","car_showroom_db");

    session_start();
    $uuuu=$_SESSION['username'];
    if(!isset($uuuu)){
        session_destroy();
        header('location:../Login.php');
    }
    $query=mysqli_query($con,"SELECT login_id, username FROM users");
    $customer=mysqli_query($con,"SELECT * FROM `tbl_customer` WHERE  STATUS = 1 AND `cid` = '".$_SESSION['customer_id']."'");
               
?>
<!DOCTYPE html>
<html lang="zxx">

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
    <link rel="stylesheet" href="css/enq.css" type="text/css">

    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
    <style>

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

     <!-- Cta Begin -->
    <div class="cta">
        <div class="container">
            <div class="row1">
            <form action="enquiry.php" method="POST" style="border:white; border-width:5px; border-style:solid;  box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.15);padding: 20px;justify-content: center;color=black;">
                <?php
            while($rows=mysqli_fetch_assoc($customer))
                {

			    ?>
                <center><h2 style="color=red;">Enquire Here</h2></center>
                <table>
                <label for="name">Name</label>
                <p class="userdetails" name="name"><?php echo $rows['username']; ?></p>
                <!-- <input type="text" id="fname" name="firstname" > -->

                <label for="phone">Phone </label>
                <p class="userdetails" name="phone"><?php echo $rows['phone']; ?></p>
                <!-- <input type="text" id="lname" name="lastname" > -->

                <label for="email">Email </label>
                <p class="userdetails" name="email"><?php echo $rows['email']; ?></p>
                <!-- <input type="text" id="lname" name="lastname" > -->
                </table>
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit" name="Submit" id="Submit">
                <?php
                }
                ?>
            </form>
      
            </div>
        </div>
    </div>
    <!-- Cta End -->
   <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <!-- <div class="footer__contact">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__title">
                            <h2>Contact Us Now!</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__option">
                            <div class="option__item"><i class="fa fa-phone"></i> (+12) 345 678 910</div>
                            <div class="option__item email"><i class="fa fa-envelope-o"></i> car73@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Any questions? Let us know in store at 625 Gloria Union, California, United Stated or call us
                            on (+1) 96 123 8888</p>
                        <div class="footer__social">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google"><i class="fa fa-google"></i></a>
                            <a href="#" class="skype"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3">
                    <div class="footer__widget">
                        <h5>We Offer</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Purchase</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Service</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Payment</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Enquery</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            
                <div class="col-lg-2 col-md-3">
                    <div class="footer__widget">
                        <h5>Infomation</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i> About</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Purchase</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Payment</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Service</a></li>
                             <li><a href="#"><i class="fa fa-angle-right"></i> Contact</a></li>
                           
                             <!--<<li><a href="#"><i class="fa fa-angle-right"></i> Crossover</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer__brand">
                        <h5>Top Brand</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Maruti</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Tata</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Hyundai</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Honda</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Audi</a></li>
                        </ul>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Toyota</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Kia</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Ford</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Renault</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Nissan</a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <div class="footer__copyright__text">
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i></p>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>