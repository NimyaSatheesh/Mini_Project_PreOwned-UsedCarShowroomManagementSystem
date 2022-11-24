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
      $query1="UPDATE  dealer set password='$encryptnewpwd' where email='$email'";

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

    </head>
    <body>
        <!-- ==========Change Password=============== -->
<form method="POST" name="password">
  
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
    <a href="http://localhost/usedcar_showroom_management/dealer/index.php" style="margin: top 50px; margin-left: 35%;"> Back to home</a>

  <button type="submit" class="Submitbutton" name="changepassword" style="margin-right: 40%; width: 15%";>Update</button>
     </div>
  </div>
</form>
    </body>
</html>