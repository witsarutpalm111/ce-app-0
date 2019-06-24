<?php  
// require './../DB_ce-app/User.php';
$palm = 0;
    if(isset($_GET['alert'])){
        $palm = $_GET['alert'];
    }
    if($palm == 1){
       echo "<script>alert('คุณกรอกข้อมูลไม่ถูกต้องค่ะ');</script>";
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

     <style>
        #but1{       
            width: 150px;
            padding: 0px;
            margin: 15px;	
        }
        #but2{       
            width: 150px;
            padding: 0px;
            margin: 15px;	
        }
    </style>
 </head>


 <body style="background-image: url(../BG/wh1.jpg);background-repeat: no-repeat;background-size:100%;">
 <form action = "check_qr.php" id ="form_data" method = "post">
        <fieldset><br><br>
        <div class="container">
            <legend><h3>บันทึกข้อมูล</h3></legend><br><br>
            <div class="container h-100" style="min-height:93vh;">

                <div class="input-group mb-3 ml-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">User Name & Serial Number</span>
                    </div>
                    <input type="text" aria-label="User_Name" class="form-control" 
                    placeholder="User name" name="em_User" required >

                    <input type="text" aria-label="Serial_Number" class="form-control"
                    placeholder="Serial number" name = "em_Serial" required >
                </div>


                <!-- <label>User Name : </label>
                <input type="text" name = "em_User" size = "20" placeholder="User_name" required />
                        
                <label>Serial Number : </label>
                <input type="text" name = "em_Serial" size = "20" placeholder="Serial_number" required /> -->
            <br>

            <input type="submit" id="but1" class="btn btn-outline-dark" name="save" value="ตกลง"/>
            <a href="user_page2.php" id="but2" class="btn btn-outline-dark">กลับ</a>

        </div>
        </div>
        </fieldset>
    </form>
 </body>
 </html>