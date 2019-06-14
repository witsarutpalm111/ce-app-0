<?php session_start();
    require './../DB_ce-app/User.php';
if (!$_SESSION["User_id"]){  //check session
 
	  Header("Location:../Login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
 
}else{
 $palm = 0;
    if(isset($_GET['alert'])){
        $palm = $_GET['alert'];
    }
    if($palm == 1){
       echo "<script>alert('เพิ่มข้อมูลเรียบร้อยแล้วค่ะ');</script>";
    }
    $p = "SELECT update_com.Status_com,update_com.Detail_com,update_com.Note_com,update_com.Time_update,com.User_id,MAX(update_com.count)
    FROM `com`,`update_com`,`user` 
    WHERE com.User_id = user.User_id and com.ID_com = update_com.ID_com
    GROUP BY User_id";
    $result = mysqli_query($connect,$p);   
    ?>

<!doctype html>
<html>

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
    <title>Admin page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        /*style ของ Background*/
        body {
            background-color: darkslategray;
        }
    </style>

</head>

<body>
    <div class="container">
        <table class="table table-dark" id="user_data">
            <tr style="text-align:center">
                <th>User id</th>
                <th>Time</th>
                <th>Status</th>
                <th>Detail</th>
                <th>Note</th>
                <th>View</th>

            </tr>
            <?php   
                    
                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    ?>
            <tr style="text-align:center" class="pa">
                <td><?php echo $row['User_id']?></td>
                <td><?php echo $row['Time_update']?></td>
                <td><?php echo $row['Status_com']?></td>
                <td><?php echo $row['Detail_com']?></td>
                <td><?php echo $row['Note_com']?></td>
                <td><a href="view/view_detail_repair/view_user.php?id=<?php echo $row['User_id']?>" class="btn btn-info" id="<?php echo $row['User_id']?>">View</a></td>

            </tr>
            <?php }?>
        </table>
    </div>


    <a href="../Login.php"><button type="button">Log out</button></a>

    <a href="add_Admin/Forminsert_admin.php" class="btn btn-warning text-danger btn-sm">เพิ่ม Admin</a>
    <a href="Repair/add_data_repair.php" class="btn btn-warning text-danger btn-sm">เพิ่มข้อมูลการซ่อม</a>
    <br><br>
    <!-- <a href="check_user_id.php" class="btn btn-warning text-danger btn-sm">เพิ่มรายละเอียดการซ่อม</a> -->

</body>

</html>
<?php }?>