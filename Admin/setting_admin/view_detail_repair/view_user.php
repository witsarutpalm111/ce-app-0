<?php
session_start();
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../Login.php");
    exit();
  }

require './../../../DB_ce-app/User.php';
 // user id$
 $serial = $_POST['em_serial'];
 $user_id = $_POST['em_user'];

// เลือก id_com ล่าสุด
// $pp = "SELECT com.ID_com FROM com WHERE com.User_id=$palm ORDER BY id DESC LIMIT 1";
//            $result2 = mysqli_query($connect,$pp); 
           
//            $row1 = mysqli_fetch_array($result2);
      
//        $RR = $row1['ID_com'];
//เอา id_com มาใช้
$p = "SELECT update_com.Status_com,update_com.Detail_com,update_com.Note_com,update_com.Price_com,update_com.Time_update
FROM `update_com`,`com`
WHERE Serial_number = '$serial' AND com.User_id = $user_id AND com.ID_com=update_com.ID_com";
$result = mysqli_query($connect,$p);   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view_user</title>

    
</head>
<body>
    <br>
<div class="container">
    <div class="text-right mb-3">
    <button class="btn text-warning btn-secondary" disabled>User id : <?php echo$user_id ?></button>

    </div>
        <table class="table-responsive table table-dark text-nowrap" id="user_data">
            <tr style="text-align:center">
                <th>Time</th>
                <th>Status</th>
                <th>Detail</th>
                <th>Note</th>
                <th>Price</th>
                <th>View</th>
                <th>Delete</th>


            </tr>

            <?php                     
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            ?>

            <tr style="text-align:center" class="pa">
                <td><?php echo $row['Time_update']?></td>
                <td><?php echo $row['Status_com']?></td>
                <td><?php echo $row['Detail_com']?></td>
                <td><?php echo $row['Note_com']?></td>
                <td><?php echo $row['Price_com']?></td>
                <td><a href="../Edit/form_edit_view.php?edit=<?php echo $row['Time_update']?>&id=<?php echo $user_id ?>" class="btn btn-warning" >Edit</a></td>
                <td><a href="../delete/delete_view_user.php?delete=<?php echo $row['Time_update']?>&id=<?php echo $user_id ?>" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลที่เลือก?')">Delete</a></td>

            </tr>
            <?php }?>
        </table>
        <form action="../Add_data_repair/Update_data.php" method="post">
        <a href="../../admin_page.php" class="btn btn-success">กลับ</a>
        <input type="submit" value="เพิ่มข้อมูล" class="btn btn-success">
        <input type="hidden" name="em_user" value="<?php echo$user_id ?>">
        <input type="hidden" name="em_serial" value="<?php echo$serial ?>">

        </form>
        
    </div>
<br><br>
</body>
</html>