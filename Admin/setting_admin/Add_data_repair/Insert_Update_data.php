<?php
include_once('../../../Rundiz-thai-date-db65595/Rundiz/Thaidate/Thaidate.php');
include_once('../../../Rundiz-thai-date-db65595/Rundiz/Thaidate/thaidate-functions.php');

session_start();
    require './../../../DB_ce-app/User.php';
    if (!isset($_SESSION["User_id"])){
        Header("Location:../../../Login.php");
        exit();
      }
      date_default_timezone_set("Asia/Bangkok");

     $palm = 0;
     if(isset($_GET['AAAA'])){
         $palm = $_GET['AAAA']; //user name
     }
   
           $pp = "SELECT com.ID_com FROM com WHERE com.User_id=$palm ORDER BY id DESC LIMIT 1";
           $result = mysqli_query($connect,$pp); 
           
           $row1 = mysqli_fetch_array($result);
      
       $RR = $row1['ID_com'];
       //echo $RR;
       $count ="SELECT update_com.count FROM update_com,com WHERE com.ID_com = update_com.ID_com AND com.User_id=$palm ORDER BY update_com.count DESC LIMIT 1";
      $resultcount = mysqli_query($connect,$count);
      $rowcount = mysqli_fetch_array($resultcount);
      $Nub = $rowcount['count'];
      if($rowcount){
        $Nub += 1;
      }
      else{
        $Nub = 1;
      }
   //   if($_POST['txt_box'] == 'อื่นๆ'){ //สองอันนี้ต้องเลือก 1 อัน
   //      $ddl = $_POST['txt_box'];   //มันลง Data bese เป็นคำว่าอื่นๆต้องแก้ไข
   //   }else{
   //      $ddl = $_POST['ddl'];
   //   }

     if($_POST['txt_box'] == 'อื่นๆ'){ //สองอันนี้ต้องเลือก 1 อัน
        $ddl = $_POST['txt_box'];   //มันลง Data bese เป็นคำว่าอื่นๆต้องแก้ไข
     }else{
        $ddl = $_POST['ddl'];
     }
                
    

    $Price = $_POST['Price'];
    $Date = thaidate('วันlที่ j F พ.ศ.Y เวลา H:i:s');
    $Note = $_POST['Note'];
    $Detail =$_POST['detail'];

    $sql = "Insert into update_com"
    . "(`ID_com`, `Status_com`, `Detail_com`, `Note_com`, `Price_com`, `Time_update`,`count`) value('$RR','$ddl','$Detail','$Note','$Price','$Date' ,'$Nub')";
    $result1 = mysqli_query($connect,$sql); 
    
    Header("Location:../view_detail_repair/view_user.php?id=$palm");
   
      ?>
