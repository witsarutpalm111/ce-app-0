<?php
session_start();
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../Login.php");
    exit();
  }
  $palm =0;
  if(isset($_GET['delete'])){
    $palm = $_GET['delete'];
}

require './../../../DB_ce-app/User.php';
 
$p = "DELETE FROM `user` WHERE user.User_id = '$palm'";
if($result = mysqli_query($connect,$p)){
    
}
Header("Location:../view_user/view_data_user.php"); 
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
    <!-- <a href="../view_user.php?id=<?php echo$row['User_id'] ?>">ดูข้อมูล</a> -->
</body>
</html>