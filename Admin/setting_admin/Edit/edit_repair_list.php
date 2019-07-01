<?php 
require './../../../DB_ce-app/User.php';
session_start();
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../../../Login.php");
    exit();
}

$id_list = $_POST['id'];
$List = $_POST['list'];
$price = $_POST['price'];
$time_hour = $_POST['time_hour'];
$time_minute = $_POST['time_minute'];

$time = ($time_hour*60)+$time_minute;

$p ="UPDATE `price_rate` SET `List`='$List', `Price`='$price', `time` = '$time' WHERE id_list= $id_list ";
if($result = mysqli_query($connect,$p)){
    Header("Location:../view_repair_list/view_repair_list.php");
}
?>