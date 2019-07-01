<?php  
session_start();
 require './../DB_ce-app/User.php';
 if (!$_SESSION["User_id"]){  //check session
 
    Header("Location:../Login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
exit();
}else{
    $user_id = $_SESSION["User_id"];
}
$palm = 0;
    if(isset($_GET['alert'])){
        $palm = $_GET['alert'];
    }
    if($palm == 1){
       echo "<script>alert('คุณยังไม่ได้เลือก Serial Number ค่ะ');</script>";
    }
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form_check_repair</title>

    <link rel="stylesheet" href="../scrollbar.css">
    <link rel="stylesheet" href="form_check_repair.css">

    <!-- <style type="text/css">/* เอาscrollup-down ออก */
        html, body { overflow:  hidden; }       
    </style> -->
</head>


<body>
    <div class="form-body">
    <form action = "check_qr.php" id ="form_data" method = "post">
        
        <div class="container">
            <div class="head-h">
                <h3>บันทึกข้อมูล</h3>
            </div>
            <div class="container">

                <div class="input-group">
                    <div id="bt1" class="input-group-prepend">
                        <span class="input-group-text">Serial</span>
                    </div>

                    <select id="bt2" class="custom-select" id="inputGroupSelect01" name="em_Serial" required>
                        <option hidden selected>Choose Serial Number</option>
                        <?php
                        $serial = "SELECT Serial_number FROM com WHERE com.User_id = '$user_id' GROUP BY com.Serial_number";
                        $result = mysqli_query($connect,$serial);
                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        ?>
                        <option value="<?php echo$row['Serial_number'] ?>"><?php echo$row['Serial_number'] ?></option>
                        <?php } ?>

                    </select>
                    <br><br>                       
                </div>
                <p>ปล.serial number จะได้รับเมื่อนำคอมพิวเตอร์มาที่ร้านค่ะ</p>   
                <div>
                    <input type="submit" id="but1" class="btn btn-outline-dark" name="save" value="ตกลง"/>
                    <a href="user_page2.php" id="but2" class="btn btn-outline-dark">กลับ</a>
                </div> 
                
            </div>
        
        </div>
    
</form>
    </div>
   
</body>
</html>