<!DOCTYPE html>
<?php 
session_start();
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../Login.php");
    exit();
  }
require './../../../DB_ce-app/User.php';
$palm = 0;
if(isset($_GET['edit'])){
    $palm = $_GET['edit'];
}
$palm1 = 0;
if(isset($_GET['id'])){
    $palm1 = $_GET['id']; // user id
}
// echo$palm['id'];
// echo$palm['edit'];
$p =" SELECT Detail_com,price_com,Note_com,Time_update,com.User_id FROM com,update_com WHERE update_com.Time_update = '$palm' AND com.User_id = '$palm1'";
$result = mysqli_query($connect,$p); 
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    User name :<?php echo $row['User_id'] ?>
    <br><br>
    <form action="Edit_view_user.php?time=<?php echo$palm?>&id=<?php echo$palm1 ?>" method="post"> 
        <label>Detail : </label>
        <input type="text" name="detail" value="<?php echo $row['Detail_com'] ?>">
       <br>
        <label>Note_com : </label>
        <input type="text" name="note" value="<?php echo $row['Note_com'] ?>">
<br>
        <label>Price : </label>
        <input type="text" name="price" value="<?php echo $row['price_com'] ?>">
        <br>
<input type="submit" value="submit">
<a href="../view_detail_repair/view_user.php?id=<?php echo$row['User_id'] ?>">กลับ</a>



    </form>
</body>
</html>