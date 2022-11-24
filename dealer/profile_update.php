<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile Page</title>
    <link href="../realtor/css/main_profilex.css" rel="stylesheet" media="all">

    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">
    <!-- <script class="u-script" type="text/javascript" src="../form.js"  defer=""></script> -->


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
                    //     alert('Name contain only Alphabets');
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