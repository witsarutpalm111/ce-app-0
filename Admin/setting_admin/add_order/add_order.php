<?php 
require './../../../DB_ce-app/User.php';
session_start();
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../../../Login.php");
    exit();
}
$p = "SELECT id_list FROM price_rate ORDER BY id_list DESC LIMIT 1";
$id = mysqli_query($connect,$p);
$list = mysqli_fetch_array($id);
$checklist = $list['id_list'];
if($checklist){
    $checklist += 1;
}else{
    $checklist = 1001;
}
$list = $_POST['list'];
$price = $_POST['price'];
$time_hour = $_POST['time_hour'];
$time_minute = $_POST['time_minute'];
if($time_minute > 0 && $time_minute <= 60){
    

$time = ($time_hour*60)+$time_minute;
// echo $time;
if($id){
    $insert = "INSERT INTO price_rate(`Price`, `List`, `id_list`, `time`) VALUE('$price','$list','$checklist','$time')";
    if($result =mysqli_query($connect,$insert)){
        echo("เรียบร้อย");

    }
}


?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>
 <body>
     <a href="../view_repair_list/view_repair_list.php">ดูตารางรายการซ่อม</a>
 </body>
 </html>
<?php }else{ 
    echo"คุณกรอกนาทีไม่ถูกต้อง";
    ?>
    <a href="form_add_order.php">กลับ</a>
    <?php
} ?>