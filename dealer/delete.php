<?php
$con = mysqli_connect("127.0.0.1","root","","car_showroom_db");

if(isset($_GET["c_id"]))
{
    $c_id=$_GET['c_id'];
    // $sql=mysqli_query($con,"delete from dealer where id=$id");
    $result=mysqli_query($con,"UPDATE tbl_car SET status=0 where c_id='$c_id'");
            
    // $result=mysqli_query($con,$select);
    echo "<script>window.location.href = 'managevehicle.php'</script>";
    echo "<script>alert('Data deleted');</script>"; 
     

}
?>