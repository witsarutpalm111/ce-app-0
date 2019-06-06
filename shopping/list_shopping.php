<?php
 session_start();
 if (!isset($_SESSION["User_id"])){
 
    Header("Location:../Login.php");
    exit();
  }
$palm = 0;
if(isset($_GET['id_list'])){
    $palm = $_GET['id_list'];
}
require './../DB_ce-app/User.php';
$p = "SELECT * FROM price_rate WHERE price_rate.id_list=$palm ";
$p1 = "SELECT * FROM price_rate WHERE price_rate.id_list!=$palm LIMIT 5";
$result = mysqli_query($connect,$p); 
$result1 = mysqli_query($connect,$p1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <br><br>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">My List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">List All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                    aria-controls="pills-contact" aria-selected="false">Contact</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <table class="table table-dark">
                    <tr style="text-align:center">
                        <th>ID</th>
                        <th>Detail</th>
                        <th>Price</th>
                        <th>Remove</th>
                    </tr>
                    <?php   
                    
                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    ?>
                    <tr style="text-align:center" class="pa">
                        <td><?php echo $row['id_list']?></td>
                        <td><?php echo $row['List']?></td>
                        <td><?php echo $row['Price']?></td>
                        <td><button class="btn btn-outline-danger" id="remove">ลบรายการ</button></td>
                    </tr>
                    <?php }?>
                </table>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <!-- <form action="check_shopping.php" medhot="post" name="check_shop"> -->
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
                    <tr style="text-align:center">
                        <td><?php echo $row1['id_list']?></td>
                        <td><?php echo $row1['List']?></td>
                        <td><?php echo $row1['Price']?></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <?php }?>
                </table>
                <!-- </form> -->
                <button class="btn btn-success" id="ss" onclick="add()">add</button>
                <a href="../Home.php" class="btn btn-success" class="ml-3">กลับ</a>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
        </div>
        
        <!-- <a href="check_shopping.php" class="btn btn-outline-info" id="show" style="text-align:right;">เพิ่ม</a> -->
    </div>
    <script type="text/javascript">
        function add() {
            $.ajax({
                type: "POST",
                url: "add_to_cart.php",
             dataType: 'html',
             success: function (response) {
                alert(response);
            }
            });
        }
        function hhh(){
            $(document).ready(function () {
            alert("asfasg555");
        });
        }
       
    </script>
</body>

</html>