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
    if($palm == 2){
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

<body style = "text-align: center;">
    <div class = "p">
            <form action="LoginForm.php" id="FormLogin" method="post">
                <div class="border text-center">
                    <legend id = "p1">Login</legend>
                    <label id = "p2">User Name</label>
                    <input type="text" id="em_User" required name="em_User" placeholder="User_id">
                    <label id = "p3">Password </label>
                    <input type="password" id="em_Password" required name="em_Password" placeholder="Password">
                    <br><br>
                    <input type="submit" class="btn btn-warning text-danger btn-sm" name="submit" value="Login" />
                    <a href="add_user/Forminsert_user.php" class="btn btn-warning text-danger btn-sm" >สมัครสมาชิก</a>
                   
                    <br><br>
                </div>
            </form>
    </div>
    
    
  
</body>

</html>