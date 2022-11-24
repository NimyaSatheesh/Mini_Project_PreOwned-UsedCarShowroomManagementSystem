<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile Page</title>
    <link href="../realtor/css/main.css" rel="stylesheet" media="all">

    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">
    <script class="u-script" type="text/javascript" src="../form.js"  defer=""></script>


    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style>
      .form
      {
        width:60%;
        margin: 0 auto;
        margin-top: 10%;
        margin-bottom: 10%;
        /* border-style: solid;
  border-color: coral; */
      }
     
    </style>
</head>
<body> 
    
<div class="form">
            <!-- <h2>IDENTITY</h2> -->
                  <?php
                    while($row1 = mysqli_fetch_assoc($result1)) {
                  ?>
                      <form method="POST" onsubmit="return validation()" action="#">
                        <div class="input-group">
                            <label class="label">User name</label>
                            <label class="label" style="color:black;"><b><h1>
                            <?php                                               
                                                if(isset($_SESSION['username']))
                                                {
                                                    echo ($_SESSION['username']);                                                                                     
                                                }
                                            ?></h1></b></label>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name<b style="color:red;">*</b></label>
                                    <input class="input--style-4" type="text" name="firstname" id="firstname" placeholder="<?php echo $row1['firstname']; ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name<b style="color:red;">*</b></label>
                                    <input class="input--style-4" type="text" name="lastname" id="lastname" placeholder="<?php echo $row1['lastname']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of birth<b style="color:red;">*</b></label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="date" data-date-format="DD/MM/YYYY" name="age" id="age">
                                        <!-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender<b style="color:red;">*</b></label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" id="gender">
                                            <span class="checkmark"></span>
                                            
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" id="gender">
                                            <span class="checkmark"></span>
                                            
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email<b style="color:red;">*</b></label>
                                    <input class="input--style-4" type="text" name="email" id="email" placeholder="<?php echo $row1['email']; ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number<b style="color:red;">*</b></label>
                                    <input class="input--style-4" type="text" name="phone" id="phone" placeholder="<?php echo $row1['phonenumber']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">House name<b style="color:red;">*</b></label>
                            <input class="input--style-4" type="text" name="building_name" id="building_name" placeholder="<?php echo $row1['building_name']; ?>">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Street no<b style="color:red;">*</b></label>
                                    <input class="input--style-4" type="text" name="street_no" id="street_no" placeholder="<?php echo $row1['street_no']; ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Zip code<b style="color:red;">*</b></label>
                                    <input class="input--style-4" type="text" name="zip_code" id="zip_code" placeholder="<?php echo $row1['zip_code']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                                        <div class="col-2">
                                            <div class="form-group">
                                                    <label for="inputState"  class="label">State<b style="color:red;">*</b></label>
                                                    <select class="form-control input--style-4" style="width: 260px;" id="inputState" name="inputState">
                                                                        <option value="SelectState">Select State</option>
                                                                        <option value="Andra Pradesh">Andra Pradesh</option>
                                                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                                        <option value="Assam">Assam</option>
                                                                        <option value="Bihar">Bihar</option>
                                                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                                                        <option value="Goa">Goa</option>
                                                                        <option value="Gujarat">Gujarat</option>
                                                                        <option value="Haryana">Haryana</option>
                                                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                                        <option value="Jharkhand">Jharkhand</option>
                                                                        <option value="Karnataka">Karnataka</option>
                                                                        <option value="Kerala">Kerala</option>
                                                                        <option value="Madya Pradesh">Madya Pradesh</option>
                                                                        <option value="Maharashtra">Maharashtra</option>
                                                                        <option value="Manipur">Manipur</option>
                                                                        <option value="Meghalaya">Meghalaya</option>
                                                                        <option value="Mizoram">Mizoram</option>
                                                                        <option value="Nagaland">Nagaland</option>
                                                                        <option value="Orissa">Orissa</option>
                                                                        <option value="Punjab">Punjab</option>
                                                                        <option value="Rajasthan">Rajasthan</option>
                                                                        <option value="Sikkim">Sikkim</option>
                                                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                                                        <option value="Telangana">Telangana</option>
                                                                        <option value="Tripura">Tripura</option>
                                                                        <option value="Uttaranchal">Uttaranchal</option>
                                                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                                        <option value="West Bengal">West Bengal</option>
                                                                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                                                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                                        <option value="Chandigarh">Chandigarh</option>
                                                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                                        <option value="Daman and Diu">Daman and Diu</option>
                                                                        <option value="Delhi">Delhi</option>
                                                                        <option value="Lakshadeep">Lakshadeep</option>
                                                                        <option value="Pondicherry">Pondicherry</option>
                                                        </select>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                                <div class="form-group">
                                                    <label for="inputDistrict"  class="label">District<b style="color:red;">*</b></label>
                                                    <select class="form-control input--style-4"  style="width: 260px;" id="inputDistrict" name="district">
                                                        <option value="-- select one --">-- select one -- </option>
                                                    </select>
                                                </div>
                                        </div>

                                    

                                            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
                                            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
                        </div><br>
                        <div class="input-group">
                                    <label class="label">City</label>
                                    <input class="input--style-4" type="text" name="city" id="city"> 
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" id="submit" name="submit">Submit</button>
                        </div>
                    </form>
                  <?php 
                    }
                  ?>
                  
</div>
    <!-- End -->
    <script type="text/javascript">
    function validation()
    {
        var firstname=document.getElementById('firstname').value;
    var lastname=document.getElementById('lastname').value;
        var age=document.getElementById('age').value;
        var gender=document.getElementById('gender').value;
        var email=document.getElementById('email').value;
        var phone=document.getElementById('phone').value;
        var building_name=document.getElementById('building_name').value;
        var street_no=document.getElementById('street_no').value;
        var city=document.getElementById('city').value;
        var zip_code=document.getElementById('zip_code').value;
        var inputState=document.getElementById('inputState').value;
        var inputDistrict=document.getElementById('inputDistrict').value;        
        // var username=document.getElementById('username').value;
        // var password=document.getElementById('password').value;
        // var cpassword=document.getElementById('cpassword').value;
        var phoneno = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
        var regName = /^[a-zA-Z]+$/;
        // var datex =/^\d{2}\/\d{2}\/\d{4}$/;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        // var passw = /^[a-zA-Z0-9!@#$%^&*]{8,15}$/;
        

        // if(password!= "" && cpassword!= "")
        // {
        //     if(cpassword != password)
        //         {
        //           alert("Password are not Same");
        //           return false;
        //         }
        //       if(!passw.test(password) || !passw.test(cpassword))
        //       {
        //         alert("password must contain these \nA Uppercase letter \nA lowercase letter \nA numeric \nA special characater \n must contain 8 to 15 characters");
        //         return false;
        //       }
              
        // }
        // else
        // {
                    if(firstname == "")
                    {
                        document.getElementById('firstname').placeholder="** please fill the field";
                        document.getElementById('firstname').style.border="1px solid red";
                        // document.getElementById('firstname').style.color="red";
                        document.getElementById('firstname').focus();
                        return false;
                    }
                    if(!regName.test(firstname))
                    {
                        alert('Name contain only Alphabets');
                        document.getElementById('firstname').style.color="red";
                        document.getElementById('firstname').focus();
                        return false;
                    }
                    if(lastname == "")
                    {
                        document.getElementById('lastname').placeholder="** please fill the field";
                        document.getElementById('lastname').style.border="1px solid red";
                        document.getElementById('lastname').focus();
                        return false;
                    }
                    if(!regName.test(lastname))
                    {
                        alert('Name contain only Alphabets');
                        document.getElementById('lastname').style.border="1px solid red";
                        document.getElementById('lastname').focus();
                        return false;
                    }
                    if(age == "")
                    {
                        document.getElementById('age').placeholder="** please fill the field";
                        document.getElementById('age').style.border="1px solid red";
                        document.getElementById('age').focus();
                        return false;
                    } 
                    else if (!isDobValid(age)) 
                    {
                        alert("You must be 18 years old to register");
                        document.getElementById('age').style.border = "1px solid red";
                        document.getElementById("age").style.color = "red";
                        return false;
                    }    
                    if(email == "")
                    {
                      document.getElementById('email').placeholder="** please fill the field";
                      document.getElementById('email').style.border="1px solid red";
                      document.getElementById('email').focus();
                      return false;
                    }
                    if(!email.match(mailformat))
                    {
                      alert("Invalid email address!");
                      document.getElementById('email').style.border="1px solid red";
                      document.getElementById('email').focus();
                      return false;
                    }
                    if(phone == "")
                    {
                        document.getElementById('phone').placeholder="** please fill the field";
                        document.getElementById('phone').style.border="1px solid red";
                        document.getElementById('phone').focus();
                        return false;
                    }
                    else
                    {
                        
                        if(!phoneno.test(phone))
                        {
                            alert('Please enter your phone number in the requested format');
                            document.getElementById('phone').focus();
                            return false;
                        }
                    }
                    
                    
                    if(building_name == "")
                    {
                        document.getElementById('building_name').placeholder="** please fill the field";
                        document.getElementById('building_name').style.border="1px solid red";
                        document.getElementById('building_name').focus();
                        return false;
                    }
                    if(street_no == "")
                    {
                        document.getElementById('street_no').placeholder="** please fill the field";
                        document.getElementById('street_no').style.border="1px solid red";
                        document.getElementById('street_no').focus();
                        return false;
                    }
                    else if(isNaN(street_no))
                    {
                      alert('please enter a numeric value');
                      document.getElementById('street_no').style.border="1px solid red";
                      document.getElementById('street_no').focus();
                      return false;
                    }
                    if(zip_code == "")
                    {
                        document.getElementById('zip_code').placeholder="** please fill the field";
                        document.getElementById('zip_code').style.border="1px solid red";
                        document.getElementById('zip_code').focus();
                        return false;
                    }
                    else if(isNaN(zip_code))
                    {
                      alert('please enter a numeric value');
                      document.getElementById('zip_code').style.border="1px solid red";
                      document.getElementById('zip_code').focus();
                      return false;
                    }
                    
                    
                    if(inputState == "SelectState")
                    {
                        document.getElementById('inputState').style.border="1px solid red";
                        document.getElementById('inputDistrict').style.border="1px solid red";
                        alert('Please select an item');
                        document.getElementById('inputState').focus();
                        // document.getElementById('inputDistrict').focus();
                        return false;
                    }
                    if(city=="")
                    {
                        document.getElementById('city').placeholder="** please fill the field";
                        document.getElementById('city').style.border="1px solid red";
                        document.getElementById('city').focus();
                        return false;
                    }
                    else if(!regName.test(city))
                    {
                        alert('city name contain only Alphabets');
                        document.getElementById('city').placeholder="** please fill the field";
                        document.getElementById('city').focus();
                        return false;

                    }                   
                    // if(username == "")
                    // {
                    //     document.getElementById('username').placeholder="** please fill the field";
                    //     document.getElementById('username').style.border="1px solid red";
                    //     document.getElementById('username').focus();
                    //     return false;
                    // }
                    // if(!regName.test(username))
                    // {
                    //     alert('Name contai<?php
include "db_config.php";
session_start();
$query=mysqli_query($con,"SELECT login_id, username FROM users");
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
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <!-- <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__widget">
            <a href="#"><i class="fa fa-cart-plus"></i></a>
            <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
            <a href="#" class="primary-btn">Add Car</a>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget__add">
            <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li>
            <li><i class="fa fa-envelope-o"></i> Info.colorlib@gmail.com</li>
        </ul>
        <div class="offcanvas__phone__num">
            <i class="fa fa-phone"></i>
            <span>(+12) 345 678 910</span>
        </div>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div> -->
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <!-- <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li>
                            <li><i class="fa fa-envelope-o"></i> Info.colorlib@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__phone">
                                <i class="fa fa-phone"></i>
                                <span>(+12) 345 678 910</span>
                            </div>
                            <div class="header__top__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
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
                                <li class="active"><a href="./index.html">Home</a></li>
                                <li><a href="./car.php">Cars</a></li>
                                <li><a href="./service.html">service</a></li>
                                <li><a href="./brand.php">Brands</a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="./about.html">About Us</a></li>
                                        <li><a href="./car-details.html">Car Details</a></li>
                                        <li><a href="./service-details.html">service Details</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="./about.html">About</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                                <li >
                                    
                                    <ul class="dropdown">
                                        <li><a href="#">My Booking</a></li>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Change Password</a></li>
                                        <li><a href="./logout.php">Logout</a></li>
                                        
                                        <!-- <li><a href="#">service Details</a></li> -->
                                    </ul> 
            
                                    <?php                                               
                                        if(isset($_SESSION['username']))
                                        {
                                            echo '<p class="dropdown-btn fa fa-user icons icon-a js-acc-btn"> '.$_SESSION['username'].'</p>';                                                                                     
                                        }
                                    ?>
                                    
                                    
                                    <i class="fa fa-caret-down"></i>
                                </li>
                            </ul>
                        </nav>
                        <!-- <div class="header__nav__widget">
                            <div class="header__nav__widget__btn"> -->
                                <!-- <a href="#"><i class="fa fa-cart-plus"></i></a> -->
                                <!-- <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
                            </div>
                            <a href="./logout.php" class="primary-btn">Logout</a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero__text">
                        <div class="hero__text__title">
                            <span>FIND YOUR DREAM CAR</span>
                            <h2>BUY. SERVICE. TRUST.</h2>
                        </div>
                        <!-- <div class="hero__text__price">
                            <div class="car-model">Model 2019</div>
                            <h2>$399<span>/Month</span></h2>
                        </div>
                        <a href="#" class="primary-btn"><img src="img/wheel.png" alt=""> Test Drive</a>
                        <a href="#" class="primary-btn more-btn">Learn More</a> -->
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <!-- <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Car Rental</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-2" role="tab">Buy Car</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!-- <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="hero__tab__form">
                                    <h2>Find Your Dream Car</h2>
                                     <form>
                                        <div class="select-list">
                                            <div class="select-list-item">
                                                <p>Select Year</p>
                                                <select>
                                                    <option data-display=" ">Select Year</option>
                                                    <option value="">2020</option>
                                                    <option value="">2019</option>
                                                    <option value="">2018</option>
                                                    <option value="">2017</option>
                                                    <option value="">2016</option>
                                                    <option value="">2015</option>
                                                </select>
                                            </div>
                                            <div class="select-list-item">
                                                <p>Select Brand</p>
                                                <select>
                                                    <option data-display=" ">Select Brand</option>
                                                    <option value="">Acura</option>
                                                    <option value="">Audi</option>
                                                    <option value="">Bentley</option>
                                                    <option value="">BMW</option>
                                                    <option value="">Bugatti</option>
                                                </select>
                                            </div>
                                            <div class="select-list-item">
                                                <p>Select Model</p>
                                                <select>
                                                    <option data-display=" ">Select Model</option>
                                                    <option value="">Q3</option>
                                                    <option value="">A4 </option>
                                                    <option value="">AVENTADOR</option>
                                                </select>
                                            </div>
                                            <div class="select-list-item">
                                                <p>Select Mileage</p>
                                                <select>
                                                    <option data-display=" ">Select Mileage</option>
                                                    <option value="">27</option>
                                                    <option value="">25</option>
                                                    <option value="">15</option>
                                                    <option value="">10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="car-price">
                                            <p>Price Range:</p>
                                            <div class="price-range-wrap">
                                                <div class="price-range"></div>
                                                <div class="range-slider">
                                                    <div class="price-input">
                                                        <input type="text" id="amount">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="site-btn">Searching</button>
                                    </form>
                                </div>
                            </div> -->
                            <div class="tab-pane active" id="tabs-2" role="tabpanel">
                                <div class="hero__tab__form">
                                    <h2>Buy Your Dream Car</h2>
                                    <form>
                                        <div class="select-list">
                                            <div class="select-list-item">
                                                <p>Select Year</p>
                                                <select>
                                                    <option data-display=" ">Select Year</option>
                                                    <option value="">2020</option>
                                                    <option value="">2019</option>
                                                    <option value="">2018</option>
                                                    <option value="">2017</option>
                                                    <option value="">2016</option>
                                                    <option value="">2015</option>
                                                </select>
                                            </div>
                                            <div class="select-list-item">
                                                <p>Select Brand</p>
                                                <select>
                                                    <option data-display=" ">Select Brand</option>
                                                    <option value="">Acura</option>
                                                    <option value="">Audi</option>
                                                    <option value="">Bentley</option>
                                                    <option value="">BMW</option>
                                                    <option value="">Bugatti</option>
                                                </select>
                                            </div>
                                            <div class="select-list-item">
                                                <p>Select Model</p>
                                                <select>
                                                    <option data-display=" ">Select Model</option>
                                                    <option value="">Q3</option>
                                                    <option value="">A4 </option>
                                                    <option value="">AVENTADOR</option>
                                                </select>
                                            </div>
                                            <div class="select-list-item">
                                                <p>Select Mileage</p>
                                                <select>
                                                    <option data-display=" ">Select Mileage</option>
                                                    <option value="">27</option>
                                                    <option value="">25</option>
                                                    <option value="">15</option>
                                                    <option value="">10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="car-price">
                                            <!-- <p>Price Range:</p>
                                            <div class="price-range-wrap">
                                                <div class="price-range"></div>
                                                <div class="range-slider">
                                                    <div class="price-input">
                                                        <input type="text" id="amount">
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <button type="submit" class="site-btn">Searching</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Services</span>
                        <h2>What We Offers</h2>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-1.png" alt="">
                        <h5>Cars</h5>
                        <p>Quality Pre Owned Cars. The First Choice.</p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-2.png" alt="">
                        <h5>Buying A Cars</h5>
                        <p>The Trusted Destination To Buy.</p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-3.png" alt="">
                        <h5>Service Your Car</h5>
                        <p>Caring For Your Car, The Way You Would.</p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-4.png" alt="">
                        <h5>Support 24/7</h5>
                        <p>Connect With Us. The Trusted Partners.</p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Feature Section Begin -->
    <!-- <section class="feature spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature__text">
                        <div class="section-title">
                            <span>Our Feature</span>
                            <h2>We Are a Trusted Name In Auto</h2>
                        </div>
                        <div class="feature__text__desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel facilisis.</p>
                        </div>
                        <div class="feature__text__btn">
                            <a href="#" class="primary-btn">About Us</a>
                            <a href="#" class="primary-btn partner-btn">Our Partners</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="img/feature/feature-1.png" alt="">
                                </div>
                                <h6>Engine</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="img/feature/feature-2.png" alt="">
                                </div>
                                <h6>Turbo</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="img/feature/feature-3.png" alt="">
                                </div>
                                <h6>Colling</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="img/feature/feature-4.png" alt="">
                                </div>
                                <h6>Suspension</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="img/feature/feature-5.png" alt="">
                                </div>
                                <h6>Electrical</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="img/feature/feature-6.png" alt="">
                                </div>
                                <h6>Brakes</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Feature Section End -->

    <!-- Car Section Begin -->
    <section class="car spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Car</span>
                        <h2>Best Vehicle Offers</h2>
                    </div>
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Most Researched</li>
                        <li data-filter=".sale">Latest on sale</li>
                    </ul>
                </div>
            </div>
            <div class="row car-filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-1.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-6.jpg" alt="">
                            <img src="img/cars/car-3.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2016</div>
                                <h5><a href="#">Porsche cayenne turbo s</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Rent</span>
                                <h6>$218<span>/Month</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-2.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-6.jpg" alt="">
                            <img src="img/cars/car-4.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2020</div>
                                <h5><a href="#">Toyota camry asv50l-jeteku</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option sale">For Sale</span>
                                <h6>$73,900</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-3.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-6.jpg" alt="">
                            <img src="img/cars/car-5.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2017</div>
                                <h5><a href="#">Bmw s1000rr 2019 m</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Rent</span>
                                <h6>$299<span>/Month</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-4.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-2.jpg" alt="">
                            <img src="img/cars/car-1.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2019</div>
                                <h5><a href="#">Lamborghini huracan evo</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option sale">For Sale</span>
                                <h6>$120,000</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-5.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-7.jpg" alt="">
                            <img src="img/cars/car-2.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2018</div>
                                <h5><a href="#">Audi q8 2020</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Rent</span>
                                <h6>$319<span>/Month</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-6.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-3.jpg" alt="">
                            <img src="img/cars/car-1.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2016</div>
                                <h5><a href="#">Mustang shelby gt500</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option sale">For Sale</span>
                                <h6>$730,900</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-7.jpg" alt="">
                            <img src="img/cars/car-2.jpg" alt="">
                            <img src="img/cars/car-4.jpg" alt="">
                            <img src="img/cars/car-1.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2020</div>
                                <h5><a href="#">Lamborghini aventador A90</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Rent</span>
                                <h6>$422<span>/Month</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-3.jpg" alt="">
                            <img src="img/cars/car-5.jpg" alt="">
                            <img src="img/cars/car-2.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2017</div>
                                <h5><a href="#">Porsche cayenne turbo s</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Rent</span>
                                <h6>$322<span>/Month</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Car Section End -->

    <!-- Chooseus Section Begin -->
    <!-- <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="chooseus__text">
                        <div class="section-title">
                            <h2>Why People Choose Us</h2>
                            <p>Duis aute irure dolorin reprehenderits volupta velit dolore fugiat nulla pariatur
                                excepteur sint occaecat cupidatat.</p>
                        </div>
                        <ul>
                            <li><i class="fa fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</li>
                            <li><i class="fa fa-check-circle"></i> Integer et nisl et massa tempor ornare vel id orci.
                            </li>
                            <li><i class="fa fa-check-circle"></i> Nunc consectetur ligula vitae nisl placerat tempus.
                            </li>
                            <li><i class="fa fa-check-circle"></i> Curabitur quis ante vitae lacus varius pretium.</li>
                        </ul>
                        <a href="#" class="primary-btn">About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="chooseus__video set-bg">
            <img src="img/chooseus-video.png" alt="">
            <a href="https://www.youtube.com/watch?v=Xd0Ok-MkqoE"
                class="play-btn video-popup"><i class="fa fa-play"></i></a>
        </div>
    </section> -->
    <!-- Chooseus Section End -->

    <!-- Latest service Section Begin -->
    <!-- <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our service</span>
                        <h2>Latest News Updates</h2>
                        <p>Sign up for the latest Automobile Industry information and more. Duis aute<br /> irure
                            dolorin reprehenderits volupta velit dolore fugiat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest__service__item">
                        <div class="latest__service__item__pic set-bg" data-setbg="img/latest-service/lb-1.jpg">
                            <ul>
                                <li>By Polly Williams</li>
                                <li>Dec 19, 2018</li>
                                <li>Comment</li>
                            </ul>
                        </div>
                        <div class="latest__service__item__text">
                            <h5>Benjamin Franklin S Method Of Habit Formation</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan lacus vel
                                facilisis.</p>
                            <a href="#">View More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest__service__item">
                        <div class="latest__service__item__pic set-bg" data-setbg="img/latest-service/lb-2.jpg">
                            <ul>
                                <li>By Mattie Ramirez</li>
                                <li>Dec 19, 2018</li>
                                <li>Comment</li>
                            </ul>
                        </div>
                        <div class="latest__service__item__text">
                            <h5>How To Set Intentions That Energize You</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan lacus vel
                                facilisis.</p>
                            <a href="#">View More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest__service__item">
                        <div class="latest__service__item__pic set-bg" data-setbg="img/latest-service/lb-3.jpg">
                            <ul>
                                <li>By Nicholas Brewer</li>
                                <li>Dec 19, 2018</li>
                                <li>Comment</li>
                            </ul>
                        </div>
                        <div class="latest__service__item__text">
                            <h5>Burning Desire Golden Key Or Red Herring</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan lacus vel
                                facilisis.</p>
                            <a href="#">View More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Latest service Section End -->

    <!-- Cta Begin -->
    <div class="cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="cta__item set-bg" data-setbg="img/cta/cta-1.jpg">
                        <h4>Do You Want To Buy A Car</h4>
                        <p>THE TRUSTED DESTINATION TO BUY OR SELL</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="cta__item set-bg" data-setbg="img/cta/cta-2.jpg">
                        <h4>Do You Want To Service Your Car</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="footer__contact">
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
            </div>
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

</html>n only Alphabets');
                    //     document.getElementById('username').placeholder="** please fill the field";
                    //     document.getElementById('username').focus();
                    //     return false;
                    // }
                  
                    // if(password == "")
                    //         {
                    //           document.getElementById('password').placeholder="** please fill the field";
                    //           document.getElementById('password').style.border="1px solid red";
                    //           document.getElementById('password').focus();
                    //           return false;
                                
                    //         }
                    // if(cpassword == "")
                    //         {
                    //           document.getElementById('cpassword').placeholder="** please fill the field";
                    //           document.getElementById('cpassword').style.border="1px solid red";
                    //           document.getElementById('cpassword').focus();
                    //           return false;                                                           
                    //         }

      }
    // }
    const isDobValid = (age) => {
            // check age greater than 18
            var today = new Date();
            var birthDate = new Date(age);
            var agee = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                agee--;
            }
            if (agee < 18) {
                return false;
            } else {
                return true;
            }
        }
</script>
</body>
</html>