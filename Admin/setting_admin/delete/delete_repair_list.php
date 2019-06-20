<?php
session_start();
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../Login.php");
    exit();
  }
  $palm =0;
  if(isset($_GET['delete_list'])){
    $palm = $_GET['delete_list'];
}

require './../../../DB_ce-app/User.php';
 
$p = "DELETE FROM `price_rate` WHERE id_list = '$palm'";
if($result = mysqli_query($connect,$p)){
    Header("Location:../view_repair_list/view_repair_list.php"); 
}

?>
