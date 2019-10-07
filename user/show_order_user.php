<?php
session_start();
if (!$_SESSION["User_id"]){  //check session
 
    Header("Location:../Login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
exit();
}else{
    $palm = $_SESSION["User_id"];
}
$id_order =$_POST['id_order'];
require './../DB_ce-app/User.php';
$search_order = "SELECT status_order,order_user.date_order,order_user.order_price,order.id_order,order.id_product,price_rate.List,price_rate.Price
FROM `order`,`order_user`,`price_rate`
WHERE order.id_order = $id_order AND order.user_id = '$palm' AND order.id_product = price_rate.id_list AND order.id_order = order_user.id_order";
$result = mysqli_query($connect,$search_order);
$result1 = mysqli_query($connect,$search_order);
$row = mysqli_fetch_array($result1);
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
     <title>ใบสั่งซ่อมของท่าน</title>

     <link rel="stylesheet" href="../scrollbar.css">
     <link rel="stylesheet" href="show_order_user.css">

 </head>


 <body>
 <div class="container"> <br><br>
    <h3>ID Order : <?php echo$row['id_order'] ?></h3>
    Time Order : <?php echo$row['date_order'] ?><br>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="table-responsive-xl text-dark">   
            <table class="table table-sm text-nowrap mt-2" id="user_data"><br>
             
                    <tr style="text-align:center" class="bg-dark text-light">
                        <th>ID Product</th>
                        <th>List</th>
                        <th>Price</th>
                    </tr>

                    <?php   
                    $row_data = 1;         
                        while($row2 = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            $i = $row_data%2;
                    ?>
                    <tr style="text-align:center" id="row-data<?php echo $row_data?>">
                        <td> <?php echo $row2['id_product']?></td>
                        <td> <?php echo $row2['List']?></td>
                        <td><?php echo $row2['Price']?></td>
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
                <h5>ราคารวม : <?php echo $row['order_price']?> บาท</h5><br>
                สถานะ :
                <!-- <button id="444">ยังไม่ได้รับการยืนยันค่ะ</button> -->
                <?php 
                if($row['status_order'] == ''){
                    echo"<button id=123 disabled>ยังไม่ได้รับการยืนยันค่ะ</button>";
                }else{
                    echo"<button id=123 disabled>ยืนยันการซ่อมเรียบร้อยค่ะ</button>";
                }
                ?><br><br>
                <a href="form_check_repair.php" id="111" class="btn btn-outline-dark" style="display: none">ตรวจสอบการซ่อม</a>
            </div>
        </div>
    </div>

    <div style="text-align:center;" >
        <a  href="check_order.php" id="but1" class="btn btn-outline-dark" class="ml-3">กลับ</a>
    </div>

    <script>
    $(document).ready(function () {        
        if($('#123').text() == 'ยังไม่ได้รับการยืนยันค่ะ')
        {
                   
        }

        else
        {
            $("#111").show("slow");
        }
    });
    </script>

 </body>
 </html>