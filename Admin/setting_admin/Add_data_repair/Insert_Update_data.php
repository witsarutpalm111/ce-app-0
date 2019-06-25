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

      $user_id = $_POST['em_user'];
      $serial = $_POST['em_serial'];
 
   
      //      $pp = "SELECT com.ID_com FROM `update_com`,`com` WHERE com.ID_com = update_com.ID_com AND com.Serial_number = $serial GROUP BY com.ID_com";
      //      $result = mysqli_query($connect,$pp); 
           
      //      $row1 = mysqli_fetch_array($result);
      
      //  $RR = $row1['ID_com'];
       
       $count ="SELECT update_com.count,com.ID_com FROM `update_com`,`com` WHERE com.ID_com = update_com.ID_com AND com.Serial_number = $serial ORDER BY update_com.count DESC LIMIT 1";
      $resultcount = mysqli_query($connect,$count);
      $rowcount = mysqli_fetch_array($resultcount);
$ID_com = $rowcount['ID_com'];
      $Num = $rowcount['count'];
      if($Num != 0){
        $Num += 1;
      }
      else{
        $Num = 1;
      }
   

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
    . "(`ID_com`, `Status_com`, `Detail_com`, `Note_com`, `Price_com`, `Time_update`,`count`) value('$ID_com','$ddl','$Detail','$Note','$Price','$Date' ,'$Num')";
    if($result1 = mysqli_query($connect,$sql)){

      echo$user_id;
      // Header("Location:../view_detail_repair/view_user.php");
echo$serial;
    } 
    
    
   
      ?>
