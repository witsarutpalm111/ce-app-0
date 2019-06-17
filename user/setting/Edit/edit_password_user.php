<?php 
require './../../../DB_ce-app/User.php';
session_start();
if (!isset($_SESSION["User_id"])){  //check session
 
    Header("Location:../../../Login.php");
    exit();
  }else{
      $palm = $_SESSION['Password'];
  }
  
$p ="UPDATE `user` SET `Password`='$palm'";
$resalt = mysqli_query($connect,$p);
Header("Location:../view_profile/My_profile.php");
?>