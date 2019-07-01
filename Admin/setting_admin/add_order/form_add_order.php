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
        .input-group {
                /* display: none; */
                position: relative;
                display: flex;
                flex-wrap: nowrap;
                min-width: 100%;
            }

        body,html {
            width: 100%;
            height: 100%;
        }

        .bg123 {
            background-image: url('../../../BG/wall3.jpg');
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
    <div style="text-align:center" class="container">
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
                <input type="number" class="form-control" placeholder="ราคา" name="price" required>
                <div class="input-group-append">
                    <span class="input-group-text">บาท</span>
                </div>
            </div>


            <div id="profile" class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect02">เวลา</label>
                </div>
                <div>
                    <input class="custom-select" id="inputGroupSelect02" type="number" class="form-control" name="time_hour" required>
                       
                </div>
                <div class="input-group-prepend">
                    <span class="input-group-text">ชั่วโมง</span>
                </div>
                <div>
                    <input class="custom-select" id="inputGroupSelect01" type="number" class="form-control" name="time_minute" onchange="check()" required>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">นาที</span>
                </div>
            </div>

            
            <input class="btn btn-success text-light" type="submit" value="ยืนยัน" onclick="check()">
            <a href="../view_repair_list/view_repair_list.php" class="btn btn-outline-warning text-warning">กลับ</a>
        
        </form>
    </div>

    </div>

    <script>       
	    function check(){
		    var elem = document.getElementById('inputGroupSelect01').value;
		    if(elem < 60 && elem >0)
		    {
                $('#inputGroupSelect01').css('border-color', '#00ff00');			
            }
            else if(elem == " ")
            {
                $('#inputGroupSelect01').css('border-color', '');
            }
            else
            {
               alert("กรอกได้เฉพาะตัวเลข 1-59 คะ");
                $('#inputGroupSelect01').css('border-color', '#cc0000');
                
            }
        }
    </script>

</body>
</html>