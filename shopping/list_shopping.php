<?php
 session_start();
 if (!isset($_SESSION["User_id"])){
 
    Header("Location:../Login.php");
    exit();
  }
  $palm = 0;
    if(isset($_GET['alert'])){
        $palm = $_GET['alert'];
    }
    if($palm == 1){
       echo "<script>alert('กรุณาเลือกรายการจากใน บริการที่ต้องการซื้อ \\nก่อนทำการกด confirm ค่ะ');</script>";
    }

require './../DB_ce-app/User.php';

$AA = $_SESSION["User_id"];
$p1 = "SELECT * FROM price_rate";
$result1 = mysqli_query($connect,$p1);

$p = "SELECT price_rate.List,price_rate.Price,price_rate.id_list,order.user_id,price_rate.time FROM `order`,`price_rate` WHERE user_id =$AA and price_rate.id_list=order.id_product AND id_order = ''";
$result = mysqli_query($connect,$p); 

$psum = "SELECT SUM(time)AS WWW FROM `order`,`price_rate` WHERE user_id =$AA and price_rate.id_list=order.id_product AND id_order = ''";
$resultsum = mysqli_query($connect,$psum); 
$sumtime = mysqli_fetch_array($resultsum);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="../test.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My list</title>

    <style type="text/css">
        @media(max-width:720px) {
            .input-group {
                /* display: none; */
                position: relative;
                display: flex;
                flex-wrap: nowrap;
                min-width: 100%;
            }

            .res {
                min-width: 100%;
            }

            #normal {
                display: none;
            }

            .nav-link {
                display: block;
                padding: .2rem .5rem;
                font-size: 18px;
            }
        }

        @media(min-width:720px) {
            .input-group {
                position: relative;
                display: flex;
                color: white;
                flex-wrap: nowrap;
                min-width: 100%;
            }

            .res {
                display: none;
            }


        }

        html,
        body {
            padding: 0px;
            margin: 0px;
            height: 100%;
            width: 100%;
        }

        .bg-123 {
            background-image: url('../BG/wh1.jpg');
            background-position: center;
            background-repeat: repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
            min-height: 100%;
            width: 100%;
        }

        tr {
            text-align: center;
        }
        .nav-pills .nav-link.active{
            background-color: #000000;
        }
        a{
            color: #000000
        }

    </style>

</head>

<body>
    <div class="bg-123">
        <div class="container"><br><br>
            <ul class="nav nav-pills" id="pills-tab" role="tablist">

                <li class="nav-item" id="AAA">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true">รายการของฉัน</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                        aria-controls="pills-profile" aria-selected="false">เลือกบริการที่ต้องการซื้อ</a>
                </li>

                <!-- <div id="bb" class="text-right ml-5" >
                <li class="right ml-5">
                    <a href="../Home.php" class="btn btn-success ml-5">กลับ</a>
                </li>
            </div> -->

            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="table-responsive-xl text-dark">
                        <table class=" table table-sm text-nowrap mt-2" id="user_data">
                            <tr style="text-align:center" class="bg-dark text-light">
                                <th>ID</th>
                                <th>Detail</th>
                                <th>Price</th>
                                <th>Time</th>
                                <th>Remove</th>
                            </tr>

                            <?php   
                    $sum=0;
                    $row_data = 1;
                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            $i = $row_data%2;
                    ?>
                            <tr id="row-data<?php echo $row_data?>">
                                <td><?php echo $row['id_list']?></td>
                                <td><?php echo $row['List'];
                        ?>
                                </td>
                                <td><?php echo $row['Price'];
                        $sum += $row['Price'];
                        ?></td>
                                <td><?php 
                        $num = $row['time'];
                            $hour = $num/60;
                            if($hour < 1){
                                $hour = 0;
                                echo" ";
                            }else{
                                echo(int)$hour." ชั่วโมง ";
                            }
                            $minute = $num%60;
                            echo $minute." นาที ";
                        ?></td>
                                <td><a href="remove.php?id=<?php echo $row['id_list']?>" class="btn btn-outline-danger"
                                        id="remove" onclick="return confirm('คุณต้องการลบข้อมูลที่เลือก?')">ลบรายการ</a>
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
                    <form action="../user/setting/confirm/confirm_repair_user.php" method="post" name="insert_form"
                        id="insert_form">
                        <!-- ส่วนของ ราคารวม -->
                        <!-- respon เกิน 720px -->
                        <div class="row" id="normal">
                            <div class="col-6">
                                <div id="profile" class="input-group mb-3 btn-sm" style="width:100%;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">ราคารวม</span>
                                        <input type="text" class="form-control text-center" value="<?php echo$sum?>"
                                            name="price" readonly>
                                    </div>

                                    <div class="input-group-append">
                                        <span class="input-group-text">บาทโดยประมาณ</span>
                                    </div>
                                </div>
                                <!-- ส่วนของ รวมเวลา -->
                                <div id="profile2" class="input-group mb-3 btn-sm">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">เวลารวม
                                        </label>
                                    </div>
                                    <div>
                                        <input type="text" class="form-control text-center" value=" <?php $time = $sumtime['WWW'];
                                $hour = $time/60;
                                if($hour < 1){
                                    $hour = 0;
                                    echo" ";
                                }else{
                                    echo(int)$hour;
                                }?>" name="time_hour" readonly>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">ชม.</span>
                                    </div>
                                    <div>
                                        <input type="text" class="form-control text-center" value="<?php
                                $time = $sumtime['WWW'];
                                $minute = $time%60;
                                echo $minute;
                            ?>" name="time_minute" readonly>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">น.</span>
                                    </div>
                                </div>



                                <!-- ปุ่ม confirm คือส่วนนี้ -->
                            </div>
                        </div>
                        <!-- respon ไม่เกิน 720px -->
                        <div class="res">


                            <div id="profile" class="input-group mb-3 btn-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">รวม</span>
                                    <input type="text" class="form-control text-center" value="<?php echo$sum?>"
                                        name="price" readonly>
                                </div>

                                <div class="input-group-append">
                                    <span class="input-group-text">บาท</span>
                                </div>
                            </div>
                            <!-- ส่วนของ รวมเวลา -->
                            <div id="profile2" class="input-group mb-3 btn-sm">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">รวม
                                    </label>
                                </div>
                                <div>
                                    <input type="text" class="form-control text-center" value=" <?php $time = $sumtime['WWW'];
                                $hour = $time/60;
                                if($hour < 1){
                                    $hour = 0;
                                    echo" ";
                                }else{
                                    echo(int)$hour;
                                }?>" name="time_hour" readonly>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text">ชม.</span>
                                </div>
                                <div>
                                    <input type="text" class="form-control text-center" value="<?php
                                $time = $sumtime['WWW'];
                                $minute = $time%60;
                                echo $minute;
                            ?>" name="time_minute" readonly>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">น.</span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success" value="Confirm">
                        <a href="../user/user_page2.php" class="btn btn-warning" class="mb-5">กลับ</a>
                        <br><br>
                    </form>
                </div>


                <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <form medhod="post" name="check_shop" id="check_shop">
                        <div class="table-responsive-xl text-dark">
                            <table class="table table-sm text-nowrap mt-2" width="100%">
                                <tr style="text-align:center" class="bg-dark text-light">
                                    <th width="25%">ID</th>
                                    <th width="25%">Detail</th>
                                    <th width="25%">Price</th>
                                    <th width="25%" style="text-align:left">เพิ่มเข้า My List</th>

                                </tr>
                                <?php
                         $row_data = 1;
                    while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
                        $i = $row_data%2;
                    ?>
                                <tr id="row-data1<?php echo $row_data?>">
                                    <td><?php echo $row1['id_list']?></td>
                                    <td><?php echo $row1['List']?></td>
                                    <td><?php echo $row1['Price']?></td>
                                    <td>
                                        <label class="switch ">
                                            <input type="checkbox" class="default" name="checkbox[]"
                                                    id="checkbox_<?php echo $row1['id_list']?>"
                                                    value="<?php echo $row1['id_list']?>">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <!-- <td style="justify-items: center;">
                                        <div class="container">

                                            <div class="input_wrapper">
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
                                         <button class="btn btn-danger" id="<?php echo $row1['id_list']?>">addd</button>
                                    </td> -->
                                </tr>
                                <?php 
                    if($i == 1){
                        echo"<script>
                        $('#row-data1$row_data').addClass('table-secondary');
                        </script>";
                    }else{
                        echo"<script>
                        $('#row-data1$row_data').addClass('table-light');
                        </script>";
                    }
                    
                    $row_data += 1;
                    }?>
                            </table>
                        </div>
                    </form>
                    <button type="submit" class="btn btn-success" name="add" id="add">เพิ่มเข้ารายการของฉัน</button>

                </div>
            </div>
            <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div> -->

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#AAA").click(function () {
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