<?PHP
include_once('../../../Rundiz-thai-date-db65595/Rundiz/Thaidate/Thaidate.php');
include_once('../../../Rundiz-thai-date-db65595/Rundiz/Thaidate/thaidate-functions.php');
require './../../../DB_ce-app/User.php';
session_start();
if (!isset($_SESSION["User_id"])){ 
 
    Header("Location:../../../Login.php");
    exit();
  }else{
    $user_id = $_SESSION["User_id"];
  }
  $price = $_POST['price'];
  $Date = thaidate('วันlที่ j F พ.ศ.Y เวลา H:i:s');
  
  $psert ="SELECT id_order FROM order_user ORDER BY id_order DESC";
  $result = mysqli_query($connect,$psert);
  $row = mysqli_fetch_array($result);
  $num = $row['id_order'];
  if($num){
    $num += 1;
  }else{
    $num = 190001;
  }
  $id_order = $num;

  $frist ="SELECT price_rate.List,price_rate.Price,price_rate.id_list,order.user_id,price_rate.time FROM `order`,`price_rate` WHERE order.user_id ='$user_id' and price_rate.id_list=order.id_product AND id_order = ''";

  $p = "INSERT INTO `order_user`(`date_order`, `id_order`, `order_price`) VALUE('$Date','$id_order','$price')";
  $search ="SELECT * FROM `order` WHERE order.user_id = '$user_id' AND order.id_order='' ";
  $pp ="UPDATE `order` SET id_order ='$num' WHERE order.User_id = '$user_id' AND order.id_order='' ";
  $dataf = mysqli_query($connect,$frist);
 if($dataff = mysqli_fetch_array($dataf)){
  
  if($search = mysqli_query($connect,$search)){
    if($insert = mysqli_query($connect,$p)){
      $updateorder = mysqli_query($connect,$pp);
    //   echo("เพิ่มลงในรายการสั่งซ่อมเรียบร้อย<br>");
    // echo("<a href=../../user_page2.php>กลับ</a>");
    Header("Location:../../user_page2.php?alert=1");
    }
  }
}else{
  //  echo("กรุณาเพิ่มรายการก่อนค่ะ");
  //  echo("<a href=../../../shopping/list_shopping.php>กลับ</a>");
   Header("Location:../../../shopping/list_shopping.php?alert=1");
 }
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>confirm_repair_user</title>


</head>


<body style="background-image: url(BG/wh1.jpg);background-repeat: no-repeat;background-size:100%;">
  
</body>
</html>