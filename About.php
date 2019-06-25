<!DOCTYPE html>
<html lang="en">

<head>
    <!--script button-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>About</title>   

    <style>/*style ของ Background*/
        body {
            /* background-image: url("../BG/galaxy1.jpg"); */
        }
        h2 {
            color: black;
            text-align:center;            
        }
        h5 {
            color: black;
            text-align:center;
        }
        #but1{       
            width: 200px;
            padding: 0px;
            margin: 20px;	
        }
        #but2{       
            width: 200px;
            padding: 0px;
            margin: 35px;	
        }
        
    </style>

    <!-- <style type="text/css">/* เอาscrollup-down ออก */
        html, body { overflow:  hidden; }       
    </style> -->

</head>


<body style="background-image: url(BG/wh1.jpg);background-repeat: no-repeat;background-size:100%;">
    <div class="container"><br><br>

        <!--ส่วนของเนื้อหา ข้างใต้ Nav Bar-->
        <div style="padding:0 16px;">
            <h2 class="serif">OUR TEAM</h2><br>
            <h5 class="serif">Website Building Team (SSRU Computer Engineering)</h5>
        </div><br>
        
        <section id="content" class="ma" >
            <div class="row mb-3"> 
                <div class="col-3">
                    <!-- <div class="card" style="width:15rem;" style="background-color:transparent" >
                        <img src="profilepic/tong.jpg" class="card-img-top" alt="..." style=" height:230px; "> -->
                         <!-- <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p> -->
                             <!-- <a href="#" class="btn btn-primary">click to connect</a>
                         </div>
                    </div> -->
                </div>

                <div class="col-sm-3">
                    <div class="card border-0" style="width:15rem;" >
                        <img src="profilepic/palm.jpg" class="card-img-top" alt="..." style=" height:230px; ">
                        <div class="card-body">
                        <p class="card-title">นายวิศรุต วิทยา</p>
                        <p class="card-text">รหัส 60122519022</p>
                        <!-- <a href="Login.php" class="btn btn-primary">เลือก</a> -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card border-0" style="width:15rem;" >
                        <img src="profilepic/hngeng.jpg" class="card-img-top" alt="..." style=" height:230px; ">
                        <div class="card-body">
                            <p class="card-title">น.ส.ม่านไหม ฐิติยากูร</p>
                            <p class="card-text">รหัส 60122519016</p>
                            <!-- <a href="#" class="btn btn-primary">click to connect</a> -->
                        </div>
                    </div>
                </div>   
            </div> 
            
            <div style="text-align: center;">
                <!-- <a id="but1" href="../ce-app-0/Home.php" class="btn btn-outline-dark">หน้าหลัก</a> -->
                <a id="but2" href="user/user_page2.php" class="btn btn-outline-dark">กลับ</a>
            </div>  
        </section>       
    </div>
</body>
</html>