<?php  
require './../../../DB_ce-app/User.php';
session_start();
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../../../Login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>form_add_order</title>

    <style>
        #profile {
            color: white;
            padding-left: 300px;
            padding-right: 300px;
        }
        #choice{
            padding-left: 450px;
            padding-right: 450px;
        }
    </style>
</head>


<body style="background-image: url(../../../BG/wall3.jpg);background-repeat: no-repeat;background-size:100%;">
    <br><br>
    <div style="text-align:center" class="container h-100">
        <form action="add_order.php" method="post">


            <div id="profile" class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">ชื่อรายการ</span>
                </div>
                <input type="text" class="form-control" placeholder="ชื่อรายการ" name="list" required>
            </div>
            
            
            <div id="profile" class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">ราคา</span>
                </div>
                <input type="text" class="form-control" placeholder="ราคา" name="price" required>
                <div class="input-group-append">
                    <span class="input-group-text">บาท</span>
                </div>
            </div>


            <div id="profile" class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">ระยะเวลาซ่อม</label>
                </div>
                <div>
                    <select class="custom-select" id="inputGroupSelect01" type="text" class="form-control" name="time_hour" required>
                        <option selected>จำนวนชั่วโมง </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
                <div class="input-group-prepend">
                    <span class="input-group-text">ชั่วโมง</span>
                </div>
                <div>
                    <select class="custom-select" id="inputGroupSelect01" type="text" class="form-control" name="time_minute" required>
                        <option selected>จำนวนนาที</option>
                        <option value="00">00</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                        <option value="50">50</option>
                    </select>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">นาที</span>
                </div>
            </div>

            
            <input class="btn btn-success text-light" type="submit" value="ยืนยัน">
            <a href="../view_repair_list/view_repair_list.php" class="btn btn-outline-warning text-warning">กลับ</a>
        
        </form>
    </div>



    <script>       
	    function check(){
		    var elem = document.getElementById('test_txt').value;
		    if(elem < 60 && elem >0)
		    {
                $('#test_txt').css('border-color', '#00ff00');			
            }
            else if(elem == " ")
            {
                $('#test_txt').css('border-color', '');
            }
            else
            {
                alert("กรอกได้เฉพาะตัวเลข 1-59 คะ");
                $('#test_txt').css('border-color', '#cc0000');
            }
        }
    </script>

</body>
</html>