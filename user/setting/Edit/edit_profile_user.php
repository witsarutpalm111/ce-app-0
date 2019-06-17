<?php 
require './../../../DB_ce-app/User.php';
session_start();
if (!isset($_SESSION["User_id"])){  //check session
 
    Header("Location:../../../Login.php");
    exit();
  }else{
      $palm = $_SESSION['User_id'];
  }
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
$p ="UPDATE `user` SET fname='$fname', lname='$lname', phone_num='$phone', Email='$email'";
$resalt = mysqli_query($connect,$p);
Header("Location:../view_profile/My_profile.php");
?>