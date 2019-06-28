<?php  
session_start();
require './../../../DB_ce-app/User.php';
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../Login.php");
    exit();
}
$palm = 0;
if(isset($_GET['alert'])){
    $palm = $_GET['alert'];
}
if($palm == 1){
   echo "<script>alert('คุณยืนยัน order นี้ไปแล้วค่ะ');</script>";
}else if($palm == 2){
    echo "<script>alert('ใบสั่งซ่อมนี้มีเลข Serial อยู่แล้วคะ');</script>";

}
$p ="SELECT order.id_order,order.user_id,status_order FROM `order_user`,`order` WHERE order_user.id_order = order.id_order GROUP BY id_order";
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
    <title>view_order_user</title>

    <style>
         .table th{
             border-top-width: 0px;
         }
     </style>
</head>


<body style="background-image: url(../../../BG/wall3.jpg);background-repeat: no-repeat;background-size:100%;">
<div class="container">
<form action="order_user_list.php" method="post">
    
<div class="table-responsive-xl text-dark"></div>
<table class=" table table-sm text-nowrap mt-2 " id="user_data"  >
<br><br>
            <tr style="text-align:center" class="bg-dark text-light">
                <th>ID Order</th>
                <th>User ID</th>
                <th>Status</th>
                <th>view</th>
                <th>เพิ่มข้อมูลการซ่อม</th>


            </tr>
            <?php   
                  $row_data = 1;     
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    $i = $row_data%2;
            ?>
            
            <tr style="text-align:center" id="row-data<?php echo $row_data?>">
                <td><?php echo $row['id_order']?></td>
                <td><?php echo $row['user_id']?></td>
                    
                
            <td><?php 
                    if($row['status_order'] == 'confirm'){
                        echo("ยืนยันแล้ว");
                    }else{
                        echo("ยังไม่ได้ยืนยัน");
                    }
    
                ?>
            </td>
            <td>
                <form action="order_user_list.php" method="post">
                    <input class="btn btn-info text-light btn-sm" type="submit" value="View">
                    <input type="hidden" name="id" value="<?php echo $row['id_order']?>">
                </form>
            </td>
            <td><?php
                if($row['status_order'] == 'confirm'){?>

                    <a href="../Repair/add_data_repair.php?id_order=<?php echo $row['id_order']?>" class="btn btn-outline-dark  btn-sm">เพิ่มข้อมูลการซ่อม</a>
<?php
                }else{
                    echo"ยังไม่ได้รับการยืนยัน";
                }

                    ?>
            </td>
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
        </form>
        <a href="../../admin_page.php" class="btn btn-warning text-danger btn-sm">กลับ</a>

    </div>

</body>
</html>