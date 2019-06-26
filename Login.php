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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
    <link rel="stylesheet" href="filecss.css">
    <title>Form Login</title>

</head>


<body>
<div class="bg-img">
    <div class="forms-login">
        <form action="LoginForm.php" class="forms-body" method="post">
            <div class="row">
                <div class="col-md-12">
                    <label for="user">User Name</label>
                    <input type="text" class="form-control" placeholder="Username" name="em_User" id="user">
                </div>
                <div class="col-md-12">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control" placeholder="Password" id="pass" name="em_Password">
                </div>
            </div>

            <div class="form-btn">
                <input type="submit" id="but2" class="btn btn-outline-light" name="submit" value="Sign in" />
                <a href="user/add_user/Forminsert_user2.php" id="but2" class="btn btn-outline-light" >Sign up</a>
            </div>
        </form>
    </div>
</div>
    
</body>

</html>