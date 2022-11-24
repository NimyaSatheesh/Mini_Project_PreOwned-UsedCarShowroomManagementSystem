<?php
    // include "../db_config.php";
    $con = mysqli_connect("127.0.0.1","root","","car_showroom_db");
    //database connection  file
   
  
    //database conection  file
   
    //Code for deletion
    // if(isset($_GET['id']))
    // {
    //     $rid=intval($_GET['id']);
    //     $sql=mysqli_query($con,"delete from dealer where id=$rid");
            
    //     echo "<script>alert('Data deleted');</script>"; 
    //     echo "<script>window.location.href = 'dealers_info.php'</script>";     
    // } 
   
    //Code for deletion
    if(isset($_GET["login_id"]))
    {
        $login_id=$_GET['login_id'];
        // $sql=mysqli_query($con,"delete from dealer where id=$id");
        $result=mysqli_query($con,"UPDATE dealer SET status=0 where login_id='$login_id'");
                mysqli_query ($con,"UPDATE users SET status=0 where login_id='$login_id'");
        // $result=mysqli_query($con,$select);
        echo "<script>alert('Data deleted');</script>"; 
        echo "<script>window.location.href = 'dealers_info.php'</script>";   
    
    }
 
  
?>