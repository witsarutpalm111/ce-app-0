
<?php
   session_start();
require './../../DB_ce-app/User.php';
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../../Login.php");
    exit();
  }
$fname = $_POST['em_fname'];
$lname = $_POST['em_lname'];
$User = $_POST['em_User'];
$Password = $_POST['em_Password'];
$Phone = $_POST['em_phone'];
$Role = 'Admin';
$Line = $_POST['em_line'];
$Mail = $_POST['em_mail'];

$p = "SELECT user.User_id FROM user WHERE User_id=$User";
$result5 = mysqli_query($connect,$p);
$row = mysqli_fetch_array($result5);
    if($row>0){

        echo "<script>alert('User_id นี้มีผู้ใช้ไปแล้วค่ะ');history.back();</script>";
      
    // ติดปัญหา

    }else{

        $sql = "Insert into `user` (`User_id`, `fname`, `lname`, `phone_num`, `Role`, `E-mail`, `More_contact`, `Password`) value('$User','$fname','$lname','$Phone','$Role','$Mail','$Line','$Password')";
        
        $result = mysqli_query($connect,$sql);
        
        header("location:../../Login.php?alert=1");
}
?>