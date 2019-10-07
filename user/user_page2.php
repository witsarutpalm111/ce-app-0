<?php 
 session_start();
require './../DB_ce-app/User.php';

if (!isset($_SESSION["User_id"])){  //check session
 
  Header("Location:../../../Login.php");
  exit();
}else{
    $palm = $_SESSION['User_id'];
}
// echo$palm;
$p = 0;
    if(isset($_GET['alert'])){
        $p = $_GET['alert'];
    }
    if($p == 1){
       echo "<script>alert('เพิ่มลงในรายการสั่งซ่อมเรียบร้อยแล้วค่ะ\\nรอทางเจ้าหน้าที่ยืนยันรายการที่สั่งซ่อมนะคะ');</script>";
    }
$sql ="SELECT * FROM user WHERE user.User_id = '$palm' ";
$result = mysqli_query($connect,$sql);
// print_r($result);
$row = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 

  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CESSRU Fix Club</title>

    
    <!-- <link rel="stylesheet" href="scrollbar.css"> -->
    <style>
      @media(max-width:720px){
        #b1{
           padding: .3rem .5rem;
           font-size: 16px;
           background: black;
           color: white;
       }
       #b2{
           padding: .3rem .5rem;
           font-size: 16px;
           background: black;
           color: white;

       }
      }
       #a {
          margin-left : 15px;
          margin-top : 10px;
       }
       #cepic {
          margin-right : 15px;
       }
      
       /* #btna{
         position: relative;
         flex-wrap: nowrap;         
       } */
    </style>

</head>


<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
<a class="navbar-brand">
          <img src="../img/pro0.png" id="cepic" width="60" height="60" alt="">
        </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <h2><a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a></h2>
      </li>
      <li id="a" class="nav-item">
        <h5><a class="nav-link" href="../shopping/list_shopping.php"> Shopping list </a></h5>
      </li>
      <li id="a" class="nav-item">
        <h5><a class="nav-link" href="../about.php"> About </a></h5>
      </li>
      <li id="a" class="nav-item">
        <h5><a class="nav-link" href="../contactus.php"> Contact us </a></h5>
      </li>
      <li id="a" class="nav-item">
        <h5><a class="nav-link" href="../Login.php"> Logout</a></h5>
      </li>
    </ul>
  </div>
  
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
        <div class="container" id="btna">
            <a href="form_check_repair.php" id="b1" class="btn btn-outline-dark" role="button"
                aria-pressed="true">ตรวจสอบการซ่อม</a>
            <a href="check_order.php" id="b2" class="btn btn-outline-dark" role="button"
                aria-pressed="true">ตรวจสอบใบสั่งซ่อม</a>
            <!-- <button type="button" class="btn btn-danger">สั่งซ่อม</button>   -->
        </div>
    </div>

    </div>

</body>
</html>


<!-- <script>
    function pass(){
        alert(row);
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
</script> -->