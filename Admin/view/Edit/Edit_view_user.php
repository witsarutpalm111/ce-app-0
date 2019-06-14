<?php
session_start();
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../Login.php");
    exit();
  }
  $palm =0;
  if(isset($_GET['time'])){
    $palm = $_GET['time'];
}
$palm1 = 0;
if(isset($_GET['id'])){
    $palm1 = $_GET['id'];
}
require './../../../DB_ce-app/User.php';
// $palm = 0;
// if(isset($_GET['id'])){
//     $palm = $_GET['id'];
//}
// $pp = "SELECT com.ID_com FROM com WHERE com.User_id=$palm ORDER BY id DESC LIMIT 1";
//            $result2 = mysqli_query($connect,$pp); 
           
//            $row1 = mysqli_fetch_array($result2);
      
//        $RR = $row1['ID_com'];



$detail = $_POST['detail'];
$note = $_POST['note'];
$Price = $_POST['price'];

$pp1 = "SELECT com.ID_com FROM com WHERE com.User_id=$palm1 ORDER BY id DESC LIMIT 1";
$result1 = mysqli_query($connect,$pp1); 
$row1 = mysqli_fetch_array($result1);
$RR = $row1['ID_com'];

$pp = "SELECT com.User_id
FROM `com`,`update_com` 
WHERE com.User_id = $palm1 AND com.ID_com = '$RR' AND com.ID_com=update_com.ID_com ";
$result2 = mysqli_query($connect,$pp); 
$row = mysqli_fetch_array($result2);



$p = "UPDATE `update_com` SET Detail_com='$detail',Note_com='$note',Price_com='$Price'  WHERE update_com.Time_update = '$palm'";
if($result = mysqli_query($connect,$p)){
    echo("update เรียบร้อยแล้วคะ");
}
// Header("Location:../view_user.php"); 
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
    <a href="../view_user.php?id=<?php echo$row['User_id'] ?>">ดูข้อมูล</a>
</body>
</html>