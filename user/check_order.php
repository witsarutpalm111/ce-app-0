<?php
session_start();
if (!$_SESSION["User_id"]){  //check session
 
    Header("Location:../Login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
exit();
}else{
    $palm = $_SESSION["User_id"];
}
require './../DB_ce-app/User.php';
$search_order = "SELECT order_user.date_order,order_user.order_price,order.id_order
FROM `order`,`order_user`
WHERE order.id_order = order_user.id_order AND order.user_id = $palm
GROUP BY id_order";
$result = mysqli_query($connect,$search_order);
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>check_order</title>
     
     <!-- <link rel="stylesheet" href="../scrollbar.css"> -->
     <!-- <link rel="stylesheet" href="check_order.css"> -->
    
 </head>


 <body>
 <div class="container"> <br>   
    
            <div class="table-responsive-xl">
                <table class="table table-sm table-dark text-nowrap" id="user_data"><br>
             
                    <tr>
                        <th>ID Order</th>
                        <th>Time Order</th>
                        <th>Price</th>
                        <th>View</th>
                    </tr>

                    <?php          
                        while($row2 = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    ?>

                    <tr>
                        <td> <?php echo $row2['id_order']?></td>
                        <td> <?php echo $row2['date_order']?></td>
                        <td><?php echo $row2['order_price']?></td>
                        <td> <form action="show_order_user.php" method="post">
                            <input type="hidden" name="id_order" value="<?php echo $row2['id_order']?>">
                            <input type="submit" class="btn btn-outline-light" value="View">
                        </form>
                    </td>
                    </tr>
                    
                    <?php }?>

                </table>
            </div>
        
    </div><br>

    <div style="text-align:center;">
        <a  href="user_page2.php" id="but1" class="btn btn-outline-dark" class="ml-3">กลับ</a>
    </div>
 </body>
 </html>