<?php  
session_start();
require './../../../DB_ce-app/User.php';
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../Login.php");
    exit();
}
$palm = $_POST['id'];
$p ="SELECT user_id,id_order,id_product,List FROM `order`,`price_rate` WHERE order.id_order=$palm AND order.id_product= price_rate.id_list ";
$result = mysqli_query($connect,$p);
$result1 = mysqli_query($connect,$p);
$row1 = mysqli_fetch_array($result1);
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
    <title>รายละเอียดของ Order</title>

    <style>
         .table th{
             border-top-width: 0px;
         }
     </style>
</head>


<body style="background-image: url(../../../BG/wall3.jpg);background-repeat: no-repeat;background-size:100%;"><br>
    <div class="container">
    <div class="table-responsive-xl text-dark">
    <table class=" table table-sm text-nowrap mt-2 " id="user_data">
            <tr style="text-align:center" class="bg-dark text-light">
                <th>User id</th>
                <th>ID Order</th>
                <th>User id</th>
                <th>Order</th>
            </tr>
            <?php   
                    $row_data = 1;
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    $i = $row_data%2;
            ?>
            
            <tr style="text-align:center" id="row-data<?php echo $row_data?>">
            <td><?php echo $row['user_id']?></td>

                <td><?php echo $row['id_order']?></td>
                <td><?php echo $row['id_product']?></td>
                <td><?php echo $row['List']?></td>
                

               
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
        <form action="../confirm/confirm_order.php" method="post">
        <a href="view_order_user.php" class="btn btn-warning text-danger btn-sm">กลับ</a>
        <input type="submit" value="ยืนยันคำสั่งซ่อม">
        <input type="hidden" name="id" value="<?php echo $row1['id_order']?>">
    </form>
        
        <!-- <a href="view_order_user.php">ยืนยันสำสั่งซ่อม</a> -->

    </div>

</body>
</html>