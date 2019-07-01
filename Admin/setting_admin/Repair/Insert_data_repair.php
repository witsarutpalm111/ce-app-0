
<?php
include_once('../../../Rundiz-thai-date-db65595/Rundiz/Thaidate/Thaidate.php');
include_once('../../../Rundiz-thai-date-db65595/Rundiz/Thaidate/thaidate-functions.php');

   session_start();
   require './../../../DB_ce-app/User.php';
if (!$_SESSION["User_id"]){  //check session

     Header("Location:../../../Login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{
    date_default_timezone_set("Asia/Bangkok");
    
    $User = $_POST['em_User'];
    $Serial = $_POST['em_Serial'];
    $id_order = $_POST['id_order'];

    $check_serial = "SELECT Serial_number FROM `order_user` WHERE id_order = '$id_order'";
    $check = mysqli_query($connect,$check_serial);
    $row_serial = mysqli_fetch_array($check);

    $salt = $Serial;
    $time = thaidate('วันlที่ j F พ.ศ.Y เวลา H:i:s');

    $date = date("jnYHis");
    $status = 'ยืนยันคำสั่งซ่อม';
    $hash = md5($date.$salt.'user');
    $has = md5($date.$salt.'Receive');

    $p = "SELECT user.User_id FROM user WHERE user.User_id = '$User' ";
    $result5 = mysqli_query($connect,$p);
    $row = mysqli_fetch_array($result5);
    if($row_serial['Serial_number'] == ""){

        if($row>0){
            $sql = "INSERT INTO com(`Serial_number`,`User_id`,`ID_com`, `Receive_ID`) VALUE('$Serial','$User','$hash','$has')";
            $result = mysqli_query($connect,$sql);

            $sql1 = "INSERT INTO update_com(`ID_com`,`Status_com`,`Time_update`) VALUE('$hash','$status','$time')";

            $result1 = mysqli_query($connect,$sql1);
            
                $update_serial = "UPDATE `order_user` SET `Serial_number`='$Serial' WHERE id_order='$id_order' ";
                $update = mysqli_query($connect,$update_serial);
           
            
            
            header("location:Show_data.php?alert=$hash");
            
        
        // ติดปัญหา

        }else{
            header("location:../../../Login.php?alert=2");
        }
    }else{
    header("location:../view_user/view_order_user.php?alert=2");
    }
}
?>