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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Form Login</title>



</head>

<body>
    <div  style="background-image: url(BG/wall3.jpg); background-repeat: no-repeat;background-size: 100%;">
        <div class="container h-90">
            <div style="background-image: url(BG/123.jpg); background-repeat: no-repeat; background-size: 100%;">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5">
                        <div class="card mb-3 mt-3" style="background-color:#66666688">
                            <form action="LoginForm.php" id="FormLogin" method="post" style="width:100%;">
                                <div style="min-height:93vh;">
                                    <div class="container h-100"><br><br><br>
                                        <legend id="p1" style="text-align:center; color:black;">Login </legend>
                                        <div class="input-group mb-3 ml-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Username</span>
                                            </div>
                                            <input type="text" class="form-control  mr-4" placeholder="Username"
                                                aria-label="Username" aria-describedby="basic-addon1" name="em_User">
                                        </div>
                                        <div class="input-group mb-3 ml-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Password</span>
                                            </div>
                                            <input type="password" class="form-control mr-4" placeholder="Password"
                                                aria-label="Username" aria-describedby="basic-addon1"
                                                name="em_Password">
                                        </div>
                                        <div style="text-align: center;">
                                            <input type="submit" class="btn btn-dark" name="submit" value="Sign in" />
                                            <a href="add_user/Forminsert_user.php" class="btn btn-dark">Sign up</a>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>