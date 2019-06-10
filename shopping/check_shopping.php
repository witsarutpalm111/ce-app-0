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

if(!$checkbox){
    
echo("");
}else{
   
    $checkbox=$_POST['checkbox'];
    
    print_r($checkbox);
}

?>