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
    <title>Document</title>
</head>
<body>
    <form action="add_order.php" method="post">
    <label>ชื่อรายการ</label>
    <input type="text" name="list" required><br>

    <label>ราคา</label>
    <input type="number" name="price" required><label>บาท</label><br>

    <label>ระยะเวลาซ่อม</label>
    <input type="number" name="time_hour" id="txt"  required><label>ชั่วโมง</label><input type="number" id="test_txt" name="time_minute" onchange="check()" required><label>นาที</label><br>

    <input type="submit" value="Submit">
    </form>
    <script>
        
	function check(){
		var elem = document.getElementById('test_txt').value;
		if(elem < 60 && elem >0)
		{
            $('#test_txt').css('border-color', '#00ff00');
			
		}else if(elem == " "){
            $('#test_txt').css('border-color', '');

        }else{
			 alert("กรอกได้เฉพาะตัวเลข 1-59 คะ");
            $('#test_txt').css('border-color', '#cc0000');
        }
	}
</script>
</body>
</html>