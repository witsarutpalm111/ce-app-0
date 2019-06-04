<?php session_start();
    require './../DB_ce-app/User.php';
if (!$_SESSION["User_id"]){  //check session
 
	  Header("Location:../Login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
    
}else{
    $palm = $_POST['user_id']; //user_id num ไว้หา ID_com จาก Serial ตัวสุดท้ายที่อัพเดทเข้ามาของไอดีนั้นๆ
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>Update Data User</title>
</head>

<body>
    <br><br>
    <form action="Insert_Update_data.php?AAAA=<?php echo $palm ?>" id="Form_data" method="post">
    
    <label>ผลการซ่อม : </label>
    <select name="ddl" id="ddl" required>
        <option hidden selected> -- select an option -- </option>
        <option value="ตรวจหาจุดบกพร่อง">ตรวจหาจุดบกพร่อง</option>
        <option value="ทำความสะอาดตัวเครื่อง">ทำความสะอาดตัวเครื่อง</option>
        <option value="ติดตั้งอุปกรณ์ที่เสียหาย">ติดตั้งอุปกรณ์ที่เสียหาย</option>
        <option value="ตรวจเช็คความเรียบร้อย">ตรวจเช็คความเรียบร้อย</option>
        <option value="ทดสอบเครื่องคอมพิวเตอร์">ทดสอบเครื่องคอมพิวเตอร์</option>
        <option value="อื่นๆ">อื่นๆ</option>
    </select>

        <div id="box">
            <label>อื่นๆ : </label>
            <input type="text" name="txt_box" id="txt_box" />
        </div>
    <br>
    <label>รายละเอียด : </label>
    <textarea name="detail" id="" cols="100" rows="10"></textarea><br>

    <label>ราคารวม : </label>
    <input type="text" name="Price">
    
    <label>หมายเหตุ : </label>
    <input type="text" name="Note">
    <br>
    <button type="summit" class="btn btn-warning text-danger">summit</button>
    </form>


    <script type="text/javascript">
    $(document).ready(function(){
        $("#box").hide();
        $("#ddl").change(function(){
            var ddl = $("#ddl").val();
                if(ddl == 'อื่นๆ'){
                    $("#box").show();
                    $("#txt_box").val("").focus();
                }else{
                    $("#box").hide();
                    $("#txt_box").val("");
                }
        });
    });
    </script>

</body>
</html>
<?php } ?>