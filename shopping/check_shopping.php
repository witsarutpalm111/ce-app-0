<?php

session_start();
if (!isset($_SESSION["User_id"])){

   Header("Location:../Login.php");
   exit();
 }
 $checkbox = 0;
    if(isset($_POST['checkbox'])){
        $checkbox = $_POST['checkbox'];
    }
 require './../DB_ce-app/User.php';

 $user_id = $_SESSION["User_id"];

 foreach($checkbox as $arr){
 $p1 = "SELECT id_order FROM `order` WHERE id_order = $arr";
        $result1 = mysqli_query($connect,$p1);
        $row = mysqli_fetch_array($result1);
    
        if($row){
            echo("รายการ $arr เคยเพิ่มเข้า My List ไปแล้วค่ะ");
            exit();
        }
    }
if(!$checkbox){
    
    echo("กรุณาเลือกรายการสั่งซ่อมค่ะ");
}else{
   
    $checkbox=$_POST['checkbox'];
    
   // print_r($checkbox);
    foreach($checkbox as $arr){
    // echo $arr;
      
            $p = "INSERT INTO `order`(`id_order`, `user_id`) VALUE('$arr','$user_id')";
            $result = mysqli_query($connect,$p);
            echo("เพิ่มรายการ $arr เรียบร้อยคะ");
    }
    
}

?>