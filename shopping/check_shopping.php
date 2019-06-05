<?php
 session_start();
 if (!isset($_SESSION["User_id"])){
 
    Header("Location:../Login.php?alert=1002");
    exit();
  }
require './../DB_ce-app/User.php';
 $palm = 0;
 if(isset($_GET['id_list'])){
     $palm = $_GET['id_list'];
 }
 
 $p = "SELECT * FROM price_rate WHERE price_rate.id_list=$palm";
 $result = mysqli_query($connect,$p);
 Header("Location:list_shopping.php?id_list=$palm");
?>