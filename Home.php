<?php
 session_start();
 session_destroy();
 ?>
<!DOCTYPE html>
<html lang="en">
    
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
img.d-block{
  height: 400px;
  width:100%;
}
section.ma{
  height:100%;
  margin-top: 20px;
  margin-bottom: 50px;
  margin-right: 25px;
  margin-left: 25px;
}
.footer {
   position:relative;
   left: 0;
   bottom:0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
   height:75;
}
</style>
</head>
<body>
  
  <div class="container">
    <section id="header" class="mb-3">
      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="img/cat.jpg" width="30" height="30" alt="">Computer Engineer
        </a>
        <a href="Login.php" class="btn btn-warning text-danger btn-sm" >Login</a>
      </nav>
    </section>
    <section id="banner">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Banner/สาขา.jpg" class="d-block"   alt="...">
          </div>
          <div class="carousel-item">
            <img src="Banner/palmm.jpg" class="d-block"  alt="...">
          </div>
          <div class="carousel-item">
            <img src="Banner/tree.jpg" class="d-block"  alt="...">
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
    <section id="comtent" class="ma" >
      <div class="row mb-3">
        
        <div class="col-sm-4">
          <div class="card" style="width:15rem;" >
            <img src="img/cat2.jpeg" class="card-img-top" alt="..." style=" height:200px; ">
            <div class="card-body">
              <h5 class="card-title">ลง Window</h5>
              <p class="card-text">ลบข้อมูลทั้งหมดในเครื่องและทำการลงโปรแกรมใหม่</p>
              <a href="Login.php" class="btn btn-primary">เลือก</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="width:15rem;" >
            <img src="img/cat.jpg" class="card-img-top" alt="..." style=" height:200px; ">
            <div class="card-body">
              <h5 class="card-title">Card</h5>
              <p class="card-text">example.</p>
              <a href="#" class="btn btn-primary">click to connect</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="width:15rem;" >
            <img src="img/ww.jpeg" class="card-img-top" alt="..." style=" height:200px; ">
            <div class="card-body">
              <h5 class="card-title">Card</h5>
              <p class="card-text">example.</p>
              <a href="#" class="btn btn-primary">click to connect</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="card" style="width:15rem;" >
            <img src="img/ww.jpeg" class="card-img-top" alt="..." style=" height:200px; ">
            <div class="card-body">
              <h5 class="card-title">Card</h5>
              <p class="card-text">example.</p>
              <a href="#" class="btn btn-primary">click to connect</a>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card" style="width:15rem;" >
            <img src="img/ww.jpeg" class="card-img-top" alt="..." style=" height:200px; ">
            <div class="card-body">
              <h5 class="card-title">Card</h5>
              <p class="card-text">example.</p>
              <a href="#" class="btn btn-primary">click to connect</a>
            </div>
          </div>
        </div>
      </div>
      
    </section>
</div>
<section>
 
  <div class="footer">
    <small> Footer</small>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>