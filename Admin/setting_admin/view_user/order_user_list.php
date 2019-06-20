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
<body><br>
    <div class="container">
    <table class="table table-dark" id="user_data">
            <tr style="text-align:center">
                <th>User id</th>
                <th>ID Order</th>

                <th>ID Order</th>
                <th>Order</th>
            </tr>
            <?php   
                    
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            ?>
            
            <tr style="text-align:center">
            <td><?php echo $row['user_id']?></td>

                <td><?php echo $row['id_order']?></td>
                <td><?php echo $row['id_product']?></td>
                <td><?php echo $row['List']?></td>
               
            </tr>
            <?php }?>
        </table>
        <a href="view_order_user.php">กลับ</a>
        <!-- <a href="view_order_user.php">ยืนยันสำสั่งซ่อม</a> -->

    </div>

</body>
</html>