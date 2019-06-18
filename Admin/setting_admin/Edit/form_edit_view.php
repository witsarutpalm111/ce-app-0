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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        /*style ของ Background*/
        body {
            background-color: darkslategray;
        }
    </style>
</head>
<body>
<div><br><br>
<legend id="p1" style="text-align:center; color:white;">
    <h2>User name : <?php echo $row['User_id'] ?></h2><br>
    <h4>
    <form action="Edit_view_user.php?time=<?php echo$palm?>&id=<?php echo$palm1 ?>" method="post"> 

        <label>Detail : </label>
        <input type="text" name="detail" value="<?php echo $row['Detail_com'] ?>">
        <br><br>

        <label>Note_com : </label>
        <input type="text" name="note" value="<?php echo $row['Note_com'] ?>">
        <br><br>

        <label>Price : </label>
        <input type="text" name="price" value="<?php echo $row['price_com'] ?>">
        <br><br><br>

 
        <input type="submit" name="submit" value="submit" class="btn btn-dark">
        <a href="../view_detail_repair/view_user.php?id=<?php echo$row['User_id']?>" ><button class="btn btn-dark">กลับ</button></a>
    

    </form>
    </legend>
    </div>
    </h4>
</body>
</html>