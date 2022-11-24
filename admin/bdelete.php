<?php
//including the database connection file
include "../db_config.php";
  //Code for deletion
  if(isset($_GET["bid"]))
  {
  $bid=$_GET['bid'];
  // $sql=mysqli_query($con,"delete from dealer where id=$id");
  $select="DELETE FROM tbl_brand where bid='$bid'";
  $result=mysqli_query($con,$select);
  echo "<script>alert('Data deleted');</script>"; 
  echo "<script>window.location.href = 'brand.php'</script>";   
  
  }
?>