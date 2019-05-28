<?php
include_once('Rundiz-thai-date-db65595/Rundiz/Thaidate/Thaidate.php');
include_once('Rundiz-thai-date-db65595/Rundiz/Thaidate/thaidate-functions.php');

session_start();
    require './User.php';
    if (!isset($_SESSION["User_id"])){
        Header("Location:Login.php");
        exit();
      }
      date_default_timezone_set("Asia/Bangkok");

     $palm = 0;
     if(isset($_GET['AAAA'])){
         $palm = $_GET['AAAA']; //user name
     }
   
        //   $pp = "SELECT com.Date_qr FROM user,com WHERE user.$palm=com.$palm ORDER BY Date_qr DESC";
        //   $result = mysqli_query($connect,$pp); 
           
        //   $row1 = mysqli_fetch_array($result);
        // echo $row1;

    $ddl = $_POST['ddl'];
    $text = $_POST['txt_box'];
    $Price = $_POST['Price'];
    $Date = thaidate('วันlที่ j F พ.ศ.Y เวลา H:i:s');
    $Note = $_POST['Note'];

    $sql = "Insert into user"
    . "(`User_id`, `fname`, `lname`, `phone_num`, `Role`, `E-mail`) value('$User','$fname','$lname','$Phone','$Role','$Mail')";
    $result1 = mysqli_query($connect,$sql); 
    
    Header("Location:admin_page.php?alert=1");
   
      ?>
