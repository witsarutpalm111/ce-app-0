<!DOCTYPE html>
<html>
<?php
session_start();
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../../../Login.php");
    exit();
  }
    require './../../../DB_ce-app/User.php';
    $palm = 0;
    if(isset($_GET['alert'])){
        $palm = $_GET['alert'];
    }
    
//     $em_Search = "";
//     if(isset($_POST['em_Search'])){
//         $em_Search = $_POST['em_Search'];
//     }
//    // $em_Search = $_POST['em_Search'];
//    // $pa = $_SESSION['user_id'];
//    if($em_Search == ""){
    $p = "SELECT * FROM user,com WHERE user.User_id=com.User_id and com.ID_com='$palm'";
  // }else{
   // $p = "SELECT * FROM User,file_user WHERE User.user_id=file_user.user_id AND (file_user.user_id = '$em_Search' or User.Name = '$em_Search') ";
   //}


    $result = mysqli_query($connect,$p);    
?>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src ="./../../../qr/qrcode.min.js" ></script>

<meta charset="UTF-8">
    <style>
    label{
        color:#FFFF66;
    }
        body{
        background-color:#800000;
        text-align: right;
        }
        h1{
            color:#66FF99;
            text-align: center;
        }
        tr{
            color:#FFFF66;
            text-align: center;
        }
        div{
            
            text-align: center;
        }
        
    </style>
  
</head>
<body>
    <h1> แสดงข้อมูล </h1>
    <!-- <form action = "ShowdataAdmin.php" id ="FormSearch" method = "post">
        
            <label>Search Data : </label>
            <input type="search"   id="em_Search" required name="em_Search" >
            <input type="submit" name="submit" value="Serach"/>

    </form> -->
    <table border="5" width = "100%">
        <tr>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>User Name</th>
            <th>ID_com</th>
            <th>Recieve</th>
                 
            
            
            
            
        </tr>
        <?php   
        
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        ?>
        <tr>
                <td><?php echo $row['fname']?></td>
                <td><?php echo $row['lname']?></td>
                <td><?php echo $row['User_id']?></td>
                <td> <a href="../../../user/check_qr.php?id_com=<?php echo $row['ID_com']?>"><div id ="<?php echo $row['ID_com']?>"></div></a></td>
                <td><div id ="<?php echo $row['Recieve_ID']?>"></td>
                
                
                
        </tr>
        <script type="text/javascript">

            new QRCode(document.getElementById("<?php echo $row['ID_com']?>"),"10.71.6.203/ce_app/user/check_qr.php?id_com=<?php echo $row['ID_com']?>");
            new QRCode(document.getElementById("<?php echo $row['Recieve_ID']?>"), "<?php echo $row['Recieve_ID']?>");

        </script>

            <?php }?>
            
             
    </table>
    <br><br>
    <a href="../../admin_page.php"><button type="button">back</button></a>
    <a href="../../../Login.php"><button type="button">Log out</button></a>
    
</body>

</html>