<?php 
require './../../../DB_ce-app/User.php';
session_start();
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../../../Login.php");
    exit();
}
$p = "SELECT * FROM price_rate";
$result = mysqli_query($connect,$p);
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

    <title>view_repair_list</title>

</head>


<body style="background-image: url(../../../BG/wall3.jpg);background-repeat: no-repeat;background-size:100%;">   
<br><br>
    <div class="container">
    <div class="table-responsive-xl text-dark">
        <table class="table table-sm text-nowrap mt-2 " id="user_data">
            <tr style="text-align:center" class="bg-dark text-light">
                <th>ID List</th>
                <th>List</th>
                <th>Price</th>
                <th>Time</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <?php
                $row_data = 1;
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $i = $row_data%2;
            ?>
                
            <tr style="text-align:center" class="pa">
                <td><?php echo $row['id_list']?></td>
                <td><?php echo $row['List']?></td>
                <td><?php echo $row['Price']?></td>
                <td><?php $num = $row['time'];
                    $hour = $num/60;
                    if($hour < 1)
                    {
                        $hour = 0;
                        echo" ";
                    }
                    else
                    {
                        echo(int)$hour." ชั่วโมง ";
                    }
                    $minute = $num%60;
                    echo $minute." นาที ";
                    ?>
                </td>
                <td><a href="../Edit/form_edit_list.php?edit_list=<?php echo $row['id_list']?>" class="btn btn-warning">Edit</a> </td>
                <td><a href="../delete/delete_repair_list.php?delete_list=<?php echo $row['id_list']?>" class="btn btn-danger"onclick="return confirm('คุณต้องการลบข้อมูลที่เลือก?')">Delete</a> </td>
            </tr>

                <?php 
            if($i == 1){
                echo"<script>
                $('#row-data$row_data').addClass('table-secondary');
                </script>";
            }else{
                echo"<script>
                $('#row-data$row_data').addClass('table-light');
                </script>";
            }
            
            $row_data += 1;
            
            }?>
                
        </table>
        </div>
        <a href="../add_order/form_add_order.php" class="btn btn-info text-light btn-sm">เพิ่มรายการซ่อม</a>
        <a href="../../admin_page.php" class="btn btn-warning text-danger btn-sm">กลับ</a>
    </div>

</body>
</html>