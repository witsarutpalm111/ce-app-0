<?php
require './../../../DB_ce-app/User.php';
session_start();
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../../../Login.php");
    exit();
}
$id = $_POST['id'];
$confirm = "UPDATE order_user SET `status_order` = 'confirm'
WHERE id_order = $id";

$search = "SELECT status_order FROM order_user WHERE id_order = $id";
$result = mysqli_query($connect,$search);
$row = mysqli_fetch_array($result);
echo$row['status_order'];

if($row['status_order'] == ''){
    $update = mysqli_query($connect,$confirm);
    echo"5555555";
    Header("Location:../view_user/view_order_user.php");
}else{
    echo"666666";

Header("Location:../view_user/view_order_user.php?alert=1");

}
?>