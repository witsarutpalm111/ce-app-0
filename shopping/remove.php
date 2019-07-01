<?php 
session_start();
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../Login.php");
    exit();
  }else{
      $p = ($_SESSION["User_id"]);
  }
 $palm = 0;
 if(isset($_GET['id'])){
     $palm = $_GET['id'];
 }
 require './../DB_ce-app/User.php';

 $pa = "DELETE FROM `order` WHERE order.id_product=$palm AND order.user_id = '$p'";
 $result = mysqli_query($connect,$pa);
 Header("Location:list_shopping.php");
?>