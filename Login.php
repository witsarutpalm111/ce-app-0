<?php 
    session_start();
    session_destroy();
    $palm = 0;
    if(isset($_GET['alert'])){
        $palm = $_GET['alert'];
    }
    if($palm == 1){
       echo "<script>alert('เพิ่มข้อมูลเรียบร้อยแล้วค่ะ');</script>";
    }
    else if($palm == 2){
        echo "<script>alert('กรุณาสมัครสมาชิกก่อนใช้งานค่ะ');</script>";
     }
    
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <title>Form Login</title>
    
    <style>
       div.container{
            background-image: url("BG/wall2.jpg"); 
            background-repeat: no-repeat;
            background-position: center; 
            /*background-attachment: fixed;*/
            background-size: 75%;        
        }
        
        body {
            background-image: url("BG/wall3.jpg"); 
            /*background-color: #4d4d4d;*/
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: 100%;
        }

        #p1 {
            font-size: 50px ;
            /* word-spacing: 200px; */
            padding-left: 
        }

        fieldset{
            text-align: center;
        }
        a{ 
            color:#FFFF66;
            text-align: left;
        }
        P{
            text-align: right;
        }
        
        
        </style>

        
</head>

<body >
    <div class = "container h-100" >
        <div class="row">
            <div class=""></div>
            <div class="col-4">
                <form action="LoginForm.php" id="FormLogin" method="post">
                    <div style="min-height:100vh;text-align:left;">
                    <br><br><br>
                        <legend id = "p1" style="text-align:center; color:black;">Login </legend>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Username</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="em_User">
                            </div>
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Password</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name="em_Password">
                            </div>
                        <div>
                                <input type="submit" class="btn btn-outline-dark" name="submit" value="Submit"/>
                                <a href="add_user/Forminsert_user.php" class="btn btn-outline-dark">สมัครสมาชิก</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  
</body>

</html>