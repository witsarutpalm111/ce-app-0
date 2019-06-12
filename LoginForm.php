<?php 
session_start();
//if (!isset($_SESSION["user_id"])){  //check session
 
  //Header("Location:Login.php");
  //exit();
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <?php
        $em_User = $_POST['em_User'];
        $em_Password = $_POST['em_Password'];

        require './DB_ce-app/User.php';

        $sql = "SELECT user.User_id,user.Password,user.Role FROM user WHERE user.User_id ='$em_User' and user.Password='$em_Password'";
        $result = mysqli_query($connect,$sql);

        $Palm = mysqli_fetch_array($result);
        $num_row = mysqli_num_rows($result);

        if($num_row == 1){
          $_SESSION['User_id'] = $em_User;
          $_SESSION['Password'] = $em_Password;
          if($Palm['Role'] == "Admin"){
            header("location:Admin/admin_page.php");
          }
          else{
            header("location:user/user_page.php");
          }
        }else{
          echo"คุณใส่ข้อมูลไม่ถูกต้อง"."<br>";
        }

    
    echo"<br><br>";
    echo"<a href='Login.php'>กลับหน้าหลัก</a><br>";
    
    ?>
</body>
</html>