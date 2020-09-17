<?php
 session_start();
 require './DB_ce-app/User.php';
 if (!isset($_SESSION["User_id"])){
  
}
else{
  // $fname =$_SESSION['fname'];
  // $lname = $_SESSION['lname'];
  $user_id = $_SESSION['User_id'];
  $sql = "SELECT fname,lname FROM user WHERE user.user_id = '$user_id'";
  $result = mysqli_query($connect,$sql);
  $row = mysqli_fetch_array($result);
  $fname =$row['fname'];
  $lname = $row['lname'];
}
 ?>
<!DOCTYPE html>
<html lang="en">
    

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CESSRU Fix Club</title>

    <style>
      img.d-block{
        height: 100%;
        width:100%;
      }
      section.ma{
        height:100%;
        margin-top: 30px;
        margin-bottom: 20px;
        margin-right: 25px;
        margin-left: 25px;
      }
      .footer {
        font-size : 20px;
        position:relative;
        left: 0;
        bottom:0;
        width: 100%;
        background-color: #FF3333;
        color: white;
        text-align: center;
        height:75;
      }
      #bb {
        width: 170px;
        padding: 0px;
        margin: 10px;
      }
      .carousel-item{
        width : 100%;
        height: 100%;
      }
    </style>

    <link rel="stylesheet" href="scrollbar.css">



    <script>
    function hello(){
        alert(row);
        Swal.getImage({
            title: 'Sweet!',
            text: 'Modal with a custom image.',
            imageUrl: 'img/pro0.png',
            imageWidth: 400,
            imageHeight: 400,
            imageAlt: 'Hello ^ ^',
            animation: false
        })
    }
</script>
</head>


<body style="background-color:white">

  <div class="container">
    <section id="header">
      <nav class="navbar navbar-light bg-light">      
        <a class="navbar-brand" href="#">
          <img src="img/pro0.png" width="40" height="40" alt=""> Computer Engineer
        </a>
        <?php 
        if (!isset($_SESSION["User_id"])){?>
          <a href="Login.php" class="btn btn-warning text-danger btn-sm" >Login</a>
        <?php }else{?>
          <a href="user/user_page2.php"><button class="btn btn-outline-white"><?php echo$fname." ".$lname ?></button></a>

       <?php }

        ?>       
      </nav>
    </section>
    <section id="banner">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Banner/b2.png" class="d-block" width="100%" height="100%" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Banner/b3.png" class="d-block" width="100%" height="100%"  alt="...">
          </div>
          <div class="carousel-item">
            <img src="Banner/b4.png" class="d-block" width="100%" height="100%"  alt="...">
          </div>
          <div class="carousel-item">
            <img src="Banner/b5.png" class="d-block" width="100%" height="100%"  alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <section id="content" class="ma" >
      <div class="row mb-3">       
        <div class="col-sm-4">
          <div class="card border-0" style="width:100%;" >
            <img src="img/pro1.png" class="card-img-top" alt="..." style=" height:250px; ">
            <div class="card-body">
              <h5 class="card-title">ลง Window</h5>
              <p class="card-text">แบ๊กคัพข้อมูล แล้วทำการลงวินโดว์ใหม่ พร้อมทั้งติดตั้งโปรแกรมพื้นฐาน</p>
              <a href="shopping/list_shopping.php" id="bb" class="btn btn-outline-danger">เลือก</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card border-0" style="width:100%;" >
            <img src="img/pro2.png" class="card-img-top" alt="..." style=" height:250px; ">
            <div class="card-body">
              <h5 class="card-title">ล้างเครื่อง</h5>
              <p class="card-text">ล้างข้อมูลภายในเครื่อง เช่น ไฟล์ขยะ แคช และอื่นๆ</p>
              <a href="shopping/list_shopping.php" id="bb" class="btn btn-outline-danger">เลือก</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card border-0" style="width:100%;" >
            <img src="img/pro3.png" class="card-img-top" alt="..." style=" height:250px; ">
            <div class="card-body">
              <h5 class="card-title">ทำความสะอาด</h5>
              <p class="card-text">ทำความสะอาดเครื่องคอมพิวเตอร์ ขจัดฝุ่นทั้งหมด</p>
              <a href="shopping/list_shopping.php" id="bb" class="btn btn-outline-danger">เลือก</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="card border-0" style="width:100%;" >
            <img src="img/pro4.png" class="card-img-top" alt="..." style=" height:250px; ">
            <div class="card-body">
              <h5 class="card-title">ตรวจสภาพเครื่อง</h5>
              <p class="card-text">ตรวจเช็คสภาพฮาร์ดแวร์และส่วนประกอบต่างๆอย่างละเอียด</p>
              <a href="shopping/list_shopping.php" id="bb" class="btn btn-outline-danger">เลือก</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card border-0" style="width:100%;" >
            <img src="img/pro5.png" class="card-img-top" alt="..." style=" height:250px; ">
            <div class="card-body">
              <h5 class="card-title">อาการจอฟ้า</h5>
              <p class="card-text">แก้ปัญหาหน้าอาการจอฟ้า(Blue screen) ให้คอมกลับสู่สภาวะปกติ</p>
              <a href="shopping/list_shopping.php" id="bb" class="btn btn-outline-danger">เลือก</a>
            </div>
          </div>
    </div>
        <div class="col-sm-4">
          <div class="card border-0" style="width:100%;" >
            <img src="img/pro6.png" class="card-img-top" alt="..." style=" height:250px; ">
            <div class="card-body">
              <h5 class="card-title">บริการให้คำปรึกษา</h5>
              <p class="card-text">หากมีข้อสงสัยหรือต้องการปรึกษาปัญหาคอม สามารถติดต่อสอบถามกันได้ค่ะ</p>
              <a href="shopping/list_shopping.php" id="bb" class="btn btn-outline-danger">เลือก</a>
            </div>
          </div>
        </div>
      </div>
      
    </section>
</div>
<section>
 
  <div class="footer">
    <small>ติดต่อสอบถามข้อมูลได้ที่ : 084-178-2616 หรือ อาคาร47 ห้อง4765 แขวงดุสิต เขตดุสิต กรุงเทพ 10300</small>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>