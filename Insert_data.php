
<?php
   session_start();
   require './User.php';
if (!$_SESSION["User_id"]){  //check session

     Header("Location:Login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{

    date_default_timezone_set("Asia/Bangkok");
    
    $User = $_POST['em_User'];
    $Serial = $_POST['em_Serial'];

    $salt = $Serial;
    $date = date("jnYHis");

    $hash = md5($date.$salt.'user');
    $has = md5($date.$salt.'Recieve');

    $p = "SELECT user.User_id FROM user WHERE User_id=$User";
    $result5 = mysqli_query($connect,$p);
    $row = mysqli_fetch_array($result5);
        if($row>0){
            $sql = "Insert into com"
            . "(`Serial_number`, `User_id`,`ID_com`, `Recieve_ID`, `Date_qr`) value('$Serial','$User','$hash','$has','$date')";
            
            $result = mysqli_query($connect,$sql);
            
            
            
            header("location:Show_data.php?alert=$hash");
            
        
        // ติดปัญหา

        }else{
            header("location:Login.php?alert=2");
            
    }
}
?>