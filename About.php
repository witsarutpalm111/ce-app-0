<!DOCTYPE html>
<html lang="en">

<head>
    <!--script normal-->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    
    
    <!--script button-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>About</title>

    <style>/*style ของ Nav Bar*/
        body {margin: 0;}
        ul.topnav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        ul.topnav li {float: left;}
        ul.topnav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        ul.topnav li a:hover:not(.active) {background-color: #111;}
        ul.topnav li a.active {background-color: #4CAF50;}
        ul.topnav li.right {float: right;}
        @media screen and (max-width: 600px) {
            ul.topnav li.right, 
            ul.topnav li {float: none;}
        }
    </style>
    

    <style>/*style ของ Background*/
        body {
            /* background-image: url("../BG/galaxy1.jpg"); */
        }
        h1.serif {
            font-family: "Times New Roman", Times, serif;
        }
        h4.serif {
            font-family: "Times New Roman", Times, serif;
        }
        h1 {
            color: whitesmoke;
            text-align:center;            
        }
        h4 {
            color: whitesmoke;
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


    <style type="text/css">/* เอาscrollup-down ออก */
        html, body { overflow:  hidden; }       
    </style>

</head>


<body style="background-image: url(BG/galaxy1.jpg);background-repeat: no-repeat;background-size:100%;">
    <div class="container"><br>

        <!--ส่วนของ Nav Bar แถบด้านบน-->
        <!-- <ul class="topnav">
            <li><a class="active" href="../Home.php">Home</a></li>
            <li><a href="#promotion">Promotion</a></li>
            <li><a href="../shopping/list_shopping.php">My list</a></li>
            <li><a href="../about.php">About</a></li>
            <li><a href="#contact">Contact us</a></li>
            <li class="right"><a href="#logout">Log out</a></li>      
        </!--> 
        <br>
        <!--ส่วนของเนื้อหา ข้างใต้ Nav Bar-->
        <div style="padding:0 16px;">
            <h1 class="serif">OUR TEAM</h1>
            <!-- <p style="color:White ; text-align:center">This example use media queries to stack the topnav vertically when the screen size is 600px or less.</p>
            <p style="color:White ; text-align:center">You will learn more about media queries and responsive web design later in our CSS Tutorial.</p> -->
            <h4 class="serif">Website Building Team (SSRU Computer Engineering)</h4>
        </div>
        
        <br><br>

        <section id="comtent" class="ma" >
            <div class="row mb-3"> 

                <div class="col-sm-3">
                    <div class="card" style="width:15rem;" >
                        <img src="profilepic/palm.jpg" class="card-img-top" alt="..." style=" height:230px; ">
                        <div class="card-body">
                        <h5 class="card-title">นายวิศรุต วิทยา</h5>
                        <p class="card-text">รหัส 60122519022</p>
                        <!-- <a href="Login.php" class="btn btn-primary">เลือก</a> -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card" style="width:15rem;" >
                        <img src="profilepic/tong.jpg" class="card-img-top" alt="..." style=" height:230px; ">
                        <div class="card-body">
                            <h5 class="card-title">นายญาณกร ผลเจริญ</h5>
                            <p class="card-text">รหัส 60122519008</p>
                            <!-- <a href="#" class="btn btn-primary">click to connect</a> -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card" style="width:15rem;" >
                        <img src="profilepic/kamin.jpg" class="card-img-top" alt="..." style=" height:230px; ">
                        <div class="card-body">
                            <h5 class="card-title">นายคามิน แสงศรี</h5>
                            <p class="card-text">รหัส 60122519036</p>
                            <!-- <a href="#" class="btn btn-primary">click to connect</a> -->
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card" style="width:15rem;" >
                        <img src="profilepic/hngeng.jpg" class="card-img-top" alt="..." style=" height:230px; ">
                        <div class="card-body">
                            <h5 class="card-title">น.ส.ม่านไหม ฐิติยากูร</h5>
                            <p class="card-text">รหัส 60122519016</p>
                            <!-- <a href="#" class="btn btn-primary">click to connect</a> -->
                        </div>
                    </div>
                </div>
            </div> 

            <div style="text-align: center;">
                <a id="but1" href="../ce-app-0/Home.php" class="btn btn-outline-info">Home</a>
                <a id="but2" href="user/user_page.php" class="btn btn-outline-info">Back</a>
            </div>  

        </section>       
    </div>
</body>
</html>