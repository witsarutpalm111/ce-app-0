<?php  
require './../../../DB_ce-app/User.php';
session_start();
if (!isset($_SESSION["User_id"])){  //check session
 
  Header("Location:../../../Login.php");
  exit();
}else{
    $palm = $_SESSION['User_id'];
}
$p ="SELECT * FROM user WHERE user.User_id = $palm";
$resalt = mysqli_query($connect,$p);
$row = mysqli_fetch_array($resalt);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action="edit_profile_user.php" method="post">
        
            <div class="text-right">
            <button class="btn text-warning btn-secondary mb-4 mt-5" disabled>User id : <?php echo$palm ?></button><br>
            </div>
     
       

        <label>Name</label>
        <input type="text" name="fname" value="<?php echo $row['fname']?>"><br> 

        <label>SerName</label>
        <input type="text" name="lname" value="<?php echo $row['lname']?>"><br>
        <label>Phone</label>
        <input type="text" name="phone" value="<?php echo $row['phone_num']?>"><br>
        <label>E-mail</label>
        <input type="text" name="email" value="<?php echo $row['Email']?>"><br>

        <input type="submit" value="Save" class="btn btn-success btn-sm mt-3" onclick="return confirm('คุณต้องการแก้ไขข้อมูล?')">
        <a href="form_edit_password_user.php" class="btn btn-danger btn-sm mt-3">แก้ไขรหัสผ่าน</a><br>
         <a href="../view_profile/My_profile.php" class="btn btn-success btn-sm mt-3">กลับ</a>
        <br>
    </form>
    </div>
    
</body>
</html>