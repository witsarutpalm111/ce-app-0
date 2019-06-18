<?php
 session_start();
 if (!isset($_SESSION["User_id"])){
 
    Header("Location:../Login.php");
    exit();
  }

require './../DB_ce-app/User.php';
$AA = $_SESSION["User_id"];
$p1 = "SELECT * FROM price_rate  LIMIT 5";
$result1 = mysqli_query($connect,$p1);

$p = "SELECT price_rate.List,price_rate.Price,price_rate.id_list,order.user_id,price_rate.time FROM `order`,`price_rate` WHERE user_id =$AA and price_rate.id_list=order.id_order";
$result = mysqli_query($connect,$p); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="../css.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My list</title>

    <style type="text/css">
        html, body{
            padding:0px;
            margin:0px;
            height:100%;
        }
    </style>
    
</head>

<body>
    <div class="container"><br><br>      
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist"> 

            <li class="nav-item" id="AAA">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">My List</a>
            </li>

            <li class="nav-item mr-5">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">List All</a>
            </li>
            
            <!-- <div id="bb" class="text-right ml-5" >
                <li class="right ml-5">
                    <a href="../Home.php" class="btn btn-success ml-5">กลับ</a>
                </li>
            </div> -->

                <a href="../user/user_page.php" class="btn btn-success" class="ml-3">กลับ</a>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <form medhod="post" name="insert_form" id="insert_form">
                <table class="table table-dark" id="user_data">
                    <tr style="text-align:center">
                        <th>ID</th>
                        <th>Detail</th>
                        <th>Price</th>
                        <th>Time</th>                        
                        <th>Remove</th>
                    </tr>
                    <?php   
                    
                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    ?>
                    <tr style="text-align:center" class="pa">
                        <td><?php echo $row['id_list']?></td>
                        <td><?php echo $row['List']?></td>
                        <td><?php echo $row['Price']?></td>
                        <td><?php 
                        $num = $row['time'];
                        if($num){
                            $hour = $num/60;
                            if($hour < 1){
                                $hour = 0;
                                echo(int)$hour." ชั่วโมง ";
                            }else{
                                echo(int)$hour." ชั่วโมง ";
                            }
                            
                        }
                        if($num){
                            $minute = $num%60;
                            echo $minute." นาที";
                        }
                        
                        ?></td>
                        <td><a href="remove.php?id=<?php echo $row['id_list']?>" class="btn btn-outline-danger" id="remove" onclick="return confirm('คุณต้องการลบข้อมูลที่เลือก?')">ลบรายการ</a></td>
                    </tr>
                    <?php }?>
                </table>
                        <label>ราคารวม</label>
                        
                </form>
                <!-- <a href="#" class="btn btn-success"name="save" id="save">Save</a> <br><br> -->
            </div>
            <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <form medhod="post" name="check_shop" id="check_shop">
                    <table class="table table-dark" style="width:100%">
                        <tr style="text-align:center">
                            <th>ID</th>
                            <th>Detail</th>
                            <th>Price</th>
                            <th>เพิ่มเข้า My List</th>

                        </tr>
                        <?php
                    while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
                ?>
                        <tr style="text-align:center" >
                            <td><?php echo $row1['id_list']?></td>
                            <td><?php echo $row1['List']?></td>
                            <td><?php echo $row1['Price']?></td>
                            <td class=" text-center">
                                <div class="container ml-5">

                                    <div class="input_wrapper ml-5">
                                        <input type="checkbox" class="switch_4" name="checkbox[]"
                                            id="checkbox_<?php echo $row1['id_list']?>"
                                            value="<?php echo $row1['id_list']?>">
                                        <svg class="is_checked" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 426.67 426.67">
                                            <path
                                                d="M153.504 366.84c-8.657 0-17.323-3.303-23.927-9.912L9.914 237.265c-13.218-13.218-13.218-34.645 0-47.863 13.218-13.218 34.645-13.218 47.863 0l95.727 95.727 215.39-215.387c13.218-13.214 34.65-13.218 47.86 0 13.22 13.218 13.22 34.65 0 47.863L177.435 356.928c-6.61 6.605-15.27 9.91-23.932 9.91z" />
                                        </svg>
                                        <svg class="is_unchecked" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 212.982 212.982">
                                            <path
                                                d="M131.804 106.49l75.936-75.935c6.99-6.99 6.99-18.323 0-25.312-6.99-6.99-18.322-6.99-25.312 0L106.49 81.18 30.555 5.242c-6.99-6.99-18.322-6.99-25.312 0-6.99 6.99-6.99 18.323 0 25.312L81.18 106.49 5.24 182.427c-6.99 6.99-6.99 18.323 0 25.312 6.99 6.99 18.322 6.99 25.312 0L106.49 131.8l75.938 75.937c6.99 6.99 18.322 6.99 25.312 0 6.99-6.99 6.99-18.323 0-25.313l-75.936-75.936z"
                                                fill-rule="evenodd" clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                </div>
                                <!-- <button class="btn btn-danger" id="<?php echo $row1['id_list']?>">addd</button> -->
                            </td>
                        </tr>
                        <?php }?>
                    </table>
                    
                </form>
                <button type="submit" class="btn btn-success " name="add" id="add">add</button>
           
            </div>
        </div>
        <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div> -->

    </div>
    </div>
    <script type="text/javascript">
         $(document).ready(function () {
            $("#AAA").click(function(){
                 window.location.reload();
            })

            $("#add").click(function () {
                $.ajax({
                    type: "POST",
                    url: "check_shopping.php",
                    data: $("#check_shop").serialize(),
                    success: function (response) {
                       alert(response);
                       
                         }

                    
                });
            });
        });
    </script>

</body>

</html>