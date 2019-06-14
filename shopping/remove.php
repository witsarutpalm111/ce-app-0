<?php 
 $palm = 0;
 if(isset($_GET['id'])){
     $palm = $_GET['id'];
 }
 require './../DB_ce-app/User.php';

 $p = "DELETE FROM `order` WHERE order.id_order=$palm";
 $result = mysqli_query($connect,$p);
 Header("Location:list_shopping.php");
?>