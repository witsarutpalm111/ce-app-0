<?php 
 session_start();
require './../DB_ce-app/User.php';

if (!isset($_SESSION["User_id"])){  //check session
 
  Header("Location:../../../Login.php");
  exit();
}else{
    $palm = $_SESSION['User_id'];
}
$p ="SELECT * FROM user WHERE user.User_id = $palm";
$resalt = mysqli_query($connect,$p);
$row = mysqli_fetch_array($resalt);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--script normal-->
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
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"
        id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!--script button-->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->




    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <!-- <script src="./script.js"></script> -->

    <title>user_page</title>

    <style>
        /*style ของ Nav Bar*/
        body {
            margin: 0;
        }

        ul.topnav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        ul.topnav li {
            float: left;
        }

        ul.topnav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul.topnav li a:hover:not(.active) {
            background-color: #111;
        }

        ul.topnav li a.active {
            background-color: #4CAF50;
        }

        ul.topnav li.right {
            float: right;
        }

        @media screen and (max-width: 600px) {

            ul.topnav li.right,
            ul.topnav li {
                float: none;
            }
        }
    </style>

    <style>
        #profile {
            color: black;
        }
    </style>

    <link rel="stylesheet" href="scrollbar.css">
</head>


<body>

<!--ส่วนของ Nav Bar แถบด้านบน-->
        <ul class="topnav">
            <li><a class="active" href="../Home.php">Home</a></li>
            <div onclick="pass();">
                <li><a href="#">My Profile</a></li>
            </div>
            <!-- <li><a href="setting/view_profile/My_profile.php">My Profile</a></li> -->
            <li><a href="../shopping/list_shopping.php">My list</a></li>
            <li><a href="../about.php">About</a></li>
            <li><a href="../contactus.php">Contact us</a></li>
            <li class="right"><a href="../Login.php">Log out</a></li>
        </ul>

    <div class="container"><br>
        <!--ส่วนของเนื้อหา ข้างใต้ Nav Bar-->
        <br><br>
        <div id="profile" style="padding:0 16px;">
            <div class="container">
                User id : <?php echo$row['User_id'] ?><br>
                Name : <?php echo$row['fname'] ?><br>
                SerName : <?php echo$row['lname'] ?><br>
                Phone : <?php echo$row['phone_num'] ?><br>
                E-mail : <?php echo$row['Email'] ?><br><br>
            </div>
        </div>

        <!--ส่วนของ button-->
        <div class="container">
            <a href="form_check_repair.php" class="btn btn-success" role="button"
                aria-pressed="true">ตรวจสอบการซ่อม</a>
                <a href="check_order.php">ตรวจสอบใบสั่งซ่อม</a>
            <!-- <button type="button" class="btn btn-danger">สั่งซ่อม</button>   -->
        </div>
    </div>

    </div>

</body>

</html>

<script>
    function pass(){
        // alert(row);
        Swal.fire({
            title: 'Your Profile',
            html:   "User ID : <?php echo $row['User_id']; ?><br>" +
                    "Name : <?php echo $row['fname']; ?><br>" +
                    "Surname : <?php echo $row['lname']; ?><br>" +
                    "Phone : <?php echo $row['phone_num']; ?><br>" +
                    "E-mail : <?php echo $row['Email']; ?><br>",
            width: 600,
            padding: '3em',
            background: '#fff url(https://sweetalert2.github.io/#native_link#images/trees.png)',
            backdrop: `rgba(0,0,123,0.4) url("../img/nyan-cat.gif") center left no-repeat`
        });
    }
</script>

