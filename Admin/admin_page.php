<?php session_start();
    require './../DB_ce-app/User.php';
if (!$_SESSION["User_id"]){  //check session
 
	  Header("Location:../Login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
 
}
else{
 $palm = 0;
    if(isset($_GET['alert'])){
        $palm = $_GET['alert'];
    }
    if($palm == 1){
       echo "<script>alert('เพิ่มข้อมูลเรียบร้อยแล้วค่ะ');</script>";
    }
    $p = "SELECT update_com.Time_update,com.User_id,update_com.Status_com,com.Serial_number 
    FROM update_com,com
    WHERE update_com.ID_com=com.ID_com 
    AND update_com.Time_update IN (SELECT MAX(update_com.Time_update) 
    FROM update_com,com 
    WHERE update_com.ID_com=com.ID_com 
    GROUP BY com.User_id,com.Serial_number) 
    ORDER BY com.User_id ASC";
    $result = mysqli_query($connect,$p);   
    ?>


<!doctype html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>หน้าหลักแอดมิน</title>
     <style>
         .table th{
             border-top-width: 0px;
         }
         body,
        html {
            width: 100%;
            height: 100%;


        }

        .bg123 {
            background-image: url('../BG/wall3.jpg');
            background-position: center;
            background-repeat: repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
            min-height: 100%;
            width: 100%;
        }
     </style>

</head>

<body >
    <div class="bg123">

    
    <br><br>
    <div class="container">
    <div class="table-responsive-xl text-dark">
        <table class="table text-nowrap" id="user_data" width="100%">
            <tr style="text-align:center" class="bg-dark text-light">
                <th>User id</th>
                <th >Serial Num</th>
                <th >Time</th>
                <th >Status</th>
                <!-- <th>Detail</th> -->
                
                <th >View</th>

            </tr>
            <?php   
                   $row_data = 1;  
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    $i = $row_data%2;
           ?>
            
            <tr style="text-align:center" id="row-data<?php echo $row_data?>">
                <td><?php echo $row['User_id']?></td>
                <td ><?php echo $row['Serial_number']?></td>

                <td ><?php echo $row['Time_update']?></td>
                <td ><?php echo $row['Status_com']?></td>
                <!-- ปัญหา -->
                <!-- ทำเป็น form ส่งค่า serail ไปด้วย จะได้เช็ค 1 id หลายเครื่องได้-->
                <td >
                    <form action="setting_admin/view_detail_repair/view_user.php" method="post">
                        <input class="btn btn-info" value="View" type="submit">
                        <input type="hidden" name="em_serial" value="<?php echo $row['Serial_number']?>">
                        <input type="hidden" name="em_user" value="<?php echo $row['User_id']?>">


                    </form>
                </td>
                <!-- --------------------------------------------- -->
            </tr>
            <?php 
         if($i == 1){
            echo"<script>
            $('#row-data$row_data').addClass('table-secondary');
            </script>";
        }else{
            echo"<script>
            $('#row-data$row_data').addClass('table-light');
            </script>";
        }
        
        $row_data += 1;
        }?>
        </table></div>
        <a href="../Login.php"><button type="button" class="btn btn-info btn-sm">Log out</button></a>

    <!-- <a href="setting_admin/add_Admin/Forminsert_admin.php" class="btn btn-warning text-danger btn-sm">เพิ่ม Admin</a> -->
    <!-- <a href="setting_admin/Repair/add_data_repair.php" class="btn btn-warning text-danger btn-sm">เพิ่มข้อมูลการซ่อม</a> -->
    <a href="setting_admin/view_user/view_data_user.php" class="btn btn-warning text-danger btn-sm">ดูข้อมูล User</a>
    <a href="setting_admin/view_user/view_order_user.php" class="btn btn-warning text-danger btn-sm">ดูข้อมูล Order</a>
    <a href="setting_admin/view_repair_list/view_repair_list.php" class="btn btn-warning text-danger btn-sm">ดูรายการซ่อม</a>



    </div>


 
    <br><br>
    <!-- <a href="check_user_id.php" class="btn btn-warning text-danger btn-sm">เพิ่มรายละเอียดการซ่อม</a> -->
    </div>
</body>

</html>
<?php }?>