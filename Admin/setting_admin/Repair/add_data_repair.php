<!DOCTYPE html>
<?php   
 session_start();
 require './../../../DB_ce-app/User.php';
 if (!isset($_SESSION["User_id"])){
 
    Header("../../../Location:Login.php");
    exit();
  }
  if(isset($_GET['id_order'])){
    $id_order = $_GET['id_order'];
    $sql = "SELECT user_id FROM `order` WHERE id_order = $id_order GROUP BY id_order";
    $user_id = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($user_id);
    // echo$row['user_id'];
  }
  else{
      
  }
?>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>บันทึกข้อมูล</title>
    
    <style type="text/css">
        html,
        body {
            overflow: hidden;  /* เอาscrollup-down ออก */
        }        
    </style>

    
</head>
<body style="background-image: url(../../../BG/wall3.jpg);background-repeat: no-repeat;background-size:100%;">
    <div style="text-align:center; color:white;">
    <br><br><br><br>
    <h1> เพิ่มข้อมูลการซ่อม</h1>
    <form action = "Insert_data_repair.php" id ="form_data" method = "post">
        <fieldset><br>
            <legend>บันทึกข้อมูล</legend>
            <div class="container h-100" style="min-height:93vh;">

                <div class="input-group mb-3 ml-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Serial_Number</span>
                    </div>
                    <input type="hidden" name="em_User" value="<?php echo $row['user_id'] ?>" required >

                    <input type="text" aria-label="Serial_Number" class="form-control"
                    placeholder="Serial_number" name = "em_Serial" required >
                </div>


                <!-- <label>User Name : </label>
                <input type="text" name = "em_User" size = "20" placeholder="User_name" required />
                        
                <label>Serial Number : </label>
                <input type="text" name = "em_Serial" size = "20" placeholder="Serial_number" required /> -->
            <br>
            <input type="hidden" name="id_order" value="<?php echo $id_order?>">
            <input type="submit" class="btn btn-success text-light" name="save" value="บันทึก"/>
            <a href="../view_user/view_order_user.php" class="btn btn-outline-warning text-warning">กลับ</a>
            

        </div>
        </fieldset>
    </form>
    </div>   
  
</body>
</html>