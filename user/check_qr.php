<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    require './../DB_ce-app/User.php';
    if(isset($_GET['id_com'])){
        $palm = $_GET['id_com'];
    }
    // กรณีเข้ามากับ qr
    // echo$palm;
    if(isset($palm)){
        $id_com = "SELECT update_com.Status_com,update_com.Detail_com,update_com.Note_com,update_com.Price_com,update_com.Time_update,user.fname,user.lname,com.Serial_number,com.User_id
        FROM `update_com`,`com`,`user`
        WHERE update_com.ID_com = '$palm' AND com.ID_com=update_com.ID_com AND com.User_id = user.User_id";
        $result = mysqli_query($connect,$id_com);
        $result1 = mysqli_query($connect,$id_com);
        $row1 = mysqli_fetch_array($result);
// echo$palm;
    }else{
        // กรณีเข้าจากหน้าเว็บ
        // echo"5555555555555555555555555";
        $user_id = $_SESSION['User_id'];
        $serial = $_POST['em_Serial'];

        $p1 = "SELECT com.User_id,com.Serial_number,update_com.Status_com,update_com.Detail_com,update_com.Note_com,update_com.Price_com,update_com.Time_update,user.fname,user.lname
        FROM user,com,update_com
        WHERE com.User_id = $user_id AND com.Serial_number = $serial AND com.ID_com = update_com.ID_com AND com.User_id = user.User_id";
         $result = mysqli_query($connect,$p1);
         $result1 = mysqli_query($connect,$p1); 
          
        if($row1 = mysqli_fetch_array($result)){
            
        }else{
            // Header("Location:form_check_repair.php?alert=1");
            // exit();
        }
    }

    

//     $search_order = "SELECT status_order,order_user.date_order,order_user.order_price,order.id_order,order.id_product,price_rate.List,price_rate.Price
// FROM `order`,`order_user`,`price_rate`
// WHERE order.id_order = $id_order AND order.user_id = $palm AND order.id_product = price_rate.id_list AND order.id_order = order_user.id_order";
// $order = mysqli_query($connect,$search_order);
// $result1 = mysqli_query($connect,$search_order);

// $row = mysqli_fetch_array($result1);
        // $p = "SELECT * FROM update_com WHERE update_com.ID_com='$palm'";
       
    
    ?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My list</title>

    <!-- <style>/*style ของ Background*/
        body {
            background-color: darkslategray;
        }
    </style> -->

    <style type="text/css">
        html, body{
            padding:0px;
            margin:0px;
            height:100%;
        }
    </style>

    <style>
        #text1 {
            color: black;
        }
        #but1{       
            width: 200px;
            padding: 0px;
            margin: 20px;	
        }
    </style>

</head>


<body style="background-image: url(../BG/wh1.jpg);background-repeat: no-repeat;background-size:100%;">
    <?php   
   
    ?>


    <!-- ส่วนของตัวอักษรด้านบน -->
    <div id="text1" style="text-align:center"><br>
        <h1> ผลการค้นหา </h1><br>  
        <label>User Name : </label>
        <?php echo $row1['User_id']?>
        <label>Serial Number: </label>
        <?php echo $row1['Serial_number']?>
        <br>
        <label>ชื่อ : </label>
        <?php echo $row1['fname']?>
        <label>นามสกุล : </label>
        <?php echo $row1['lname']?>
    </div>

    <!-- ส่วนของตาราง -->
    <div class="container">    
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <table class="table-responsive-xl table table-sm table-dark" id="user_data"><br>
             
                    <tr style="text-align:center">
                        <th>Time stamp</th>
                        <th>ผลการซ่อม</th>
                        <th>รายละเอียดการซ่อม</th>
                        <th>ราคา</th>
                        <th>หมายเหตุ</th>
                    </tr>

                    <?php          
                        while($row2 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
                    ?>
                    <tr style="text-align:center">
                        <td> <?php echo $row2['Time_update']?></td>
                        <td> <?php echo $row2['Status_com']?></td>
                        <td><?php echo $row2['Detail_com']?></td>
                        <td><?php echo $row2['Price_com']?></td>
                        <td><?php echo $row2['Note_com']?></td>
                    </tr>
                    <?php }?>

                </table>
            </div>
        </div>
    </div><br>

    <div style="text-align:center;">
        <a id="but1" href="form_check_repair.php" class="btn btn-outline-dark" class="ml-3">กลับ</a>
    </div>

</body>
</html>