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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user_page2</title>

    <style>
        #active{
            font-size : 40px;
        }
        #a {
            padding-left : 20px;
            padding-top : 20px;
            font-size : 20px;
        }
        #profile {
            font-size: 18px;
            color: black;
        }     
    </style>
    <link rel="stylesheet" href="scrollbar.css">
</head>


<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
    <li id="active" class="nav-item active">
      <a class="nav-link" href="../Home.php">Home</a>
    </li>
    <!-- <li id="a" class="nav-item">
      <div onclick="pass();">
        <a class="nav-link" href="#">My Profile</a>
      </div>
    </li> -->
    <li id="a" class="nav-item">
      <a class="nav-link" href="../shopping/list_shopping.php">My list</a>
    </li>
    <li id="a" class="nav-item">
      <a class="nav-link" href="../about.php">About</a>
    </li>
    <li id="a" class="nav-item">
      <a class="nav-link" href="../contactus.php">Contact us</a>
    </li>
    <li id="a" class="nav-item">
      <a class="nav-link" href="../Login.php">Log out</a>
    </li>
  </ul>
</nav>


<div class="container"><br>
        <!--ส่วนของเนื้อหา ข้างใต้ Nav Bar-->
        <br><br> 
            <div class="container">
                <h4 id="h3">My Profile</h4>
                <div id="profile" style="padding:0 16px;">
                    User id : <?php echo$row['User_id'] ?><br>
                    Name : <?php echo$row['fname'] ?><br>
                    SerName : <?php echo$row['lname'] ?><br>
                    Phone : <?php echo$row['phone_num'] ?><br>
                    E-mail : <?php echo$row['Email'] ?><br><br>
                </div>
            </div>
        <br>

        <!--ส่วนของ button-->
        <div class="container">
            <a href="form_check_repair.php" class="btn btn-outline-dark" role="button"
                aria-pressed="true">ตรวจสอบการซ่อม</a>
                <a href="check_order.php" class="btn btn-outline-dark" role="button"
                aria-pressed="true">ตรวจสอบใบสั่งซ่อม</a>
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