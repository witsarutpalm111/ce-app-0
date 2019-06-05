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
            background-attachment: fixed;
            background-size: 65%;
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

<body style = "text-align: left;">
    <div class = "container h-100" >
            <form action="LoginForm.php" id="FormLogin" method="post">
                <div style="min-height:100vh">
                <br><br><br>
                    <legend id = "p1">.            Login </legend>
                    <label id = "p2">User Name</label>
                    <input type="text" id="em_User" required name="em_User" placeholder="User_id">
                    <label id = "p3">Password </label>
                    <input type="password" id="em_Password" required name="em_Password" placeholder="Password">
                    <br><br>
                    <input type="submit" class="btn btn-warning text-danger btn-sm" name="submit" value="Submit" />
                    <a href="add_user/Forminsert_user.php" class="btn btn-warning text-danger btn-sm" >สมัครสมาชิก</a>
                   
                </div>
            </form>
    </div>
  
</body>

</html>