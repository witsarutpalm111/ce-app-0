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
    
echo("กรุณาเลือกรายการสั่งซ่อมค่ะ");
}else{
   
    $checkbox = implode( ',',$_POST['checkbox']);
    $p = "INSERT INTO `order`(`id_order`, `user_id`) VALUE('$checkbox','$user_id')";
    $result = mysqli_query($connect,$p);
    echo$user_id;
    echo(":");
    echo$checkbox;
}

?>