<!DOCTYPE html>
<?php 
session_start();
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../Login.php");
    exit();
  }
require './../../../DB_ce-app/User.php';
$palm = 0;
if(isset($_GET['edit_list'])){
    $palm = $_GET['edit_list'];
}
$palm1 = 0;
if(isset($_GET['id'])){
    $palm1 = $_GET['id']; // user id
}
// echo$palm['id'];
// echo$palm['edit'];
$p ="SELECT * FROM `price_rate`WHERE id_list=$palm";
$result = mysqli_query($connect,$p); 
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$num = $row['time'];
// echo$num;
   $hour = $num/60;
if($hour < 1){
    $hour = "";
    // echo" ";
 }else{

    $hours=$hour;
}
    $minute = $num%60;
    //  echo $minute;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        /*style ของ Background*/
        body {
            background-color: darkslategray;
        }
    </style>
</head>
<body>
<div><br><br>
<legend id="p1" style="text-align:center; color:white;">
    <h2>ID List: <?php echo $row['id_list'] ?></h2><br>
    <h4>
    <form action="edit_repair_list.php" method="post"> 
        <input type="hidden" name="id" value="<?php echo $row['id_list'] ?>">
        <label>ชื่อรายการ : </label>
        <input type="text" name="list" value="<?php echo $row['List'] ?>">
        <br><br>

        <label>ราคา: </label>
        <input type="number" name="price" value="<?php echo $row['Price'] ?>">
        <br><br>

        <label>ระยะเวลาซ่อม</label>
        <input type="number" name="time_hour" id="txt" value="<?php echo(int)$hours?>" placeholder="ไม่มีชั่วโมงให้ใส่ 0" required><label>ชั่วโมง</label><input type="number" id="test_txt" name="time_minute" onchange="check()" value="<?php echo$minute ?>" required><label>นาที</label><br>


        <br><br><br>

 
        <input type="submit" name="submit" value="submit" class="btn btn-dark">
        <a href="../view_repair_list/view_repair_list.php" class="btn btn-dark">กลับ</a>
    

    </form>
    </legend>
    </div>
    </h4>
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
	}</script>
</body>
</html>